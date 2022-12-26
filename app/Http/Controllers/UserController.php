<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

//controller para os utilizadores

class UserController extends Controller
{
    //funcao para fazer login
    public function login(Request $request)
    {

        //verifica que nenhum dos campos esta vazio e que o email é valido
        $credentials = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ],
            [
                'email.required' => 'Tem de introduzir um email.',
                'email.email' => 'O email é inválido.',
                'password.required' => 'Tem de introduzir uma password.'
            ]
        );

        //tenta fazer login
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();

            if (!$user->hasVerifiedEmail()) {
                Auth::logout();
                $user->sendEmailVerificationNotification();
                return back()->withErrors([
                    'erro' => 'Nao verificou o email',
                ])->withInput();
            }

            if ($user->u_estado != 'ativo') {
                Auth::logout();
                return back()->withErrors([
                    'erro' => 'A sua conta nao esta ativa',
                ])->withInput();
            }

            Auth::login($user);
            $request->session()->regenerate();

            if ($user->u_tipo == 1) {
                return redirect('/administracao/utilizadores');
            } else if ($user->u_tipo == 2) {
                return redirect('/produtos/verprodutos');
            }
            return redirect('/');
        }

        Auth::logout();
        //se nao fizer login faz return dos erros
        return back()->withErrors([
            'erro' => 'Email ou password incorretos',
        ])->withInput();
    }

    public function verificaEmail(Request $request)
    {
        $user = User::where('u_id', $request->id)->first();
        if (hash_equals(sha1($user->getEmailForVerification()), $request->hash)) {
            $user->markEmailAsVerified();
            return redirect('/utilizador/login');
        }

        abort(404);
    }

    public function logout(Request $request)
    {
        //faz logout e muda a sessão
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        //redirect para a pagina inicial
        return redirect('/');
    }

    public function registo(Request $request)
    {
        //validacoes
        $data = $request->validate(
            [
                'nome' => ['required', "regex:/^[\p{L}]{2,}\s[\p{L}]{2,}\s?([\p{L}]{2,})?$/u"],
                'morada' => ['required'],
                'email' => ['required', 'email', 'unique:utilizadores'],
                'contribuinte' => ['required', 'numeric', 'digits:9'],
                'password' => ['required', 'min:8', 'confirmed'],
                'contacto' => ['required', 'numeric', 'digits:9'],
                'password_confirmation' => ['required'],
                'data_nascimento' => ['required', 'date', 'before:-18 years', 'after:-100 years']
            ],
            [
                'nome.required' => 'Tem de introduzir um nome.',
                'nome.regex' => 'O formato do nome está errado. (Nome proprio e apelido)',
                'morada.required' => 'Tem de introduzir uma morada',
                'email.required' => 'Tem de introduzir um email',
                'email.email' => 'O email é inválido',
                'email.unique' => 'Ja existe conta com esse email',
                'contribuinte.required' => 'Tem de introduzir um contribuinte',
                'contribuinte.numeric' => 'O contribuinte só pode ter numeros',
                'contribuinte.digits' => 'O contribuinte tem de ter 9 numeros',
                'password.required' => 'Tem de introduzir uma password',
                'password.min' => 'A password tem de ter pelo menos 8 caracteres',
                'password_confirmation.required' => 'Confirme a password',
                'password.confirmed' => 'As passwords não coincidem',
                'contacto.required' => 'Tem de introduzir um contacto',
                'contacto.numeric' => 'O contacto só pode ter numeros',
                'contribuinte.digits' => 'O contacto tem de ter 9 numeros',
                'data_nascimento.required' => 'Tem de introduzir uma data de nascimento',
                'data_nascimento.date' => 'Data de nascimento inválida',
                'data_nascimento.before' => 'Data de nascimento inválida',
                'data_nascimento.after' => 'Data de nascimento inválida'
            ]
        );

        //cria o novo utilizador
        $utilizador = new User();
        $utilizador->email = $data['email'];
        $utilizador->password = Hash::make($data['password']);
        $utilizador->u_tipo = 3;
        $utilizador->u_nome = $data['nome'];
        $utilizador->u_morada = $data['morada'];
        $utilizador->u_contribuinte = $data['contribuinte'];
        $utilizador->u_telefone = $data['contacto'];
        $utilizador->u_data_nascimento = $data['data_nascimento'];
        $utilizador->u_estado = 'ativo';

        $utilizador->save();

        //isto serve para enviar o email
        event(new Registered($utilizador));

        //faz return para indicar que tem de verificar o email
        return back()->with('sucesso', 'Registo concluido, verifique o email');
    }

    public function verPerfil(Request $request)
    {
        $user = Auth::user();
        return view('utilizadores/perfil')->with('user', $user);
    }

    public function editarPerfil(Request $request)
    {

        $user = Auth::user();
        if (isset($_POST['guardarDados'])) {
            if (isset($request['imgPerfil'])) {
                $fileName = time() . '.' . $request->imgPerfil->extension();
                $request->imgPerfil->move(public_path('img'), $fileName);
                $user->u_imagem = $fileName;
            }

            $user->u_nome = $_POST['nome'];
            $user->email = $_POST['email'];
            $user->u_morada = $_POST['morada'];
            $user->u_contribuinte = $_POST['nif'];
            $user->u_telefone = $_POST['telemovel'];
            $user->u_data_nascimento = $_POST['data_nascimento'];
            if (isset($_POST['password']) && trim($_POST['password']) != "") {
                $user->password = Hash::make($_POST['password']);
            }

            $user->save();
        }
        return redirect('/utilizador/perfil')->with("msg", "Dados alterados com sucesso");
    }

    public function apagarPerfil(Request $request)
    {
        $user = Auth::user();
        $user->delete();
        return redirect('/');
    }

    public function verUtilizadores(Request $request) {
        $search = $request->input('search');
        $tipo = $request->input('tipo');
        $estado = $request->input('estado');

        $users = User::sortable()->paginate(5);
        if(empty($search) && $tipo == '0' && $estado == '0') {
            $users = User::sortable()->paginate(5);
        }else{   
            if($tipo == '0' && $estado == '0') {
                $users = User::query()
                ->where('u_nome', 'LIKE', "%{$search}%")
                ->sortable()->paginate(5); 
            }elseif($tipo != '0' && $estado == '0') {
                $users = User::query()
                ->where('u_nome', 'LIKE', "%{$search}%")
                ->where('u_tipo', 'LIKE', "%{$tipo}%")
                ->sortable()->paginate(5); 
            }elseif($tipo == '0' && $estado != '0') {
                $users = User::query()
                ->where('u_nome', 'LIKE', "%{$search}%")
                ->where('u_estado', 'LIKE', "{$estado}")
                ->sortable()->paginate(5); 
            }else{
                $users = User::query()
                ->where('u_nome', 'LIKE', "%{$search}%")
                ->where('u_tipo', 'LIKE', "%{$tipo}%")
                ->where('u_estado', 'LIKE', "{$estado}")
                ->sortable()->paginate(5); 
            }        
           
        }
        return view('utilizadores/utilizadores')->with('users', $users);

    }

    public function utilizadores(Request $request) {
        $users = User::sortable()->paginate(5);
        
        return view('utilizadores/utilizadores')->with('users', $users);
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'dsafdsaf',
            'password.required' => 'A message is required',
        ];
    }
}

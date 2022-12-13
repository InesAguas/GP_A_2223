<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

//controller para os utilizadores

class UserController extends Controller
{
    //funcao para fazer login
    public function login(Request $request) {

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
        ]);

        //faltam as verificacoes para confirmar que a conta esta ativa
        //e para verificar que confirmou o email
        
        //tenta fazer login
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            Auth::login($user);
            $request->session()->regenerate();

            if($user->u_tipo == 1) {
                return redirect('produtos');
            }
            return redirect('login');
        }
        
        //se nao fizer login faz return...
        return back()->withInput();
        
    }

    public function logout(Request $request) {

        //faz logout e muda a sessão
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        //redirect para a pagina de login
        //MUDAR, deve dar redirect para a pagina inicial /
        return redirect('/login');
    }

    public function registo(Request $request) {
        //faltam algumas validacoes
        $data = $request->validate(
        [
            'nome' => ['required', 'string', "regex:/^[\p{L}]{2,}\s[\p{L}]{2,}\s?([\p{L}]{2,})?$/u"],
            'morada' => ['required'],
            'email' => ['required', 'email'],
            'contribuinte' => ['required', 'number'],
            'password' => ['required'],
            'contacto' => ['required', 'number'],
            'confirm_password' => ['required'],
            'data_nascimento' => ['required', 'date']
        ]);

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

        //meti logo a fazer login mas tenho de tirar pois é preciso o email de verificação
        Auth::login($utilizador);

        //redirect para / mas devia ser para uma pagina a indicar que tem de verificar o email

        return redirect("/");

    }

    public function verPerfil(Request $request) {
        
    }

    public function verUtilizadores(Request $request) {

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

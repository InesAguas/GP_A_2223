<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

//controller para os utilizadores

class UserController extends Controller
{
    //funcao para fazer login
    public function login(Request $request) {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            Auth::login($user);
            $request->session()->regenerate();

            if($user->u_tipo == 1) {
                return redirect('produtos');
            }
            return redirect('login');
        }
        
        return back()->withInput();
        
    }

    public function logout(Request $request) {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
 
        return redirect('/login');
    }

    public function registo(Request $request) {

        $data = $request->validate([
            'nome' => ['required'],
            'morada' => ['required'],
            'email' => ['required'],
            'contribuinte' => ['required'],
            'password' => ['required'],
            'contacto' => ['required'],
            'confirm_password' => ['required'],
            'data_nascimento' => ['required']
        ]);

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

        Auth::login($utilizador);

        return redirect("/");

    }

    public function verPerfil(Request $request) {
        
    }

    public function verUtilizadores(Request $request) {
        $users = User::all();
        return view('utilizadores')->with('users', $users);
    }

}

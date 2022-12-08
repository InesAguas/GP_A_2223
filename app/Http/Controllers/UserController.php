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

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('welcome');
        }
    }

    public function registo(Request $request) {

    }

    public function verPerfil(Request $request) {
        
    }

    public function verUtilizadores(Request $request) {

    }

}

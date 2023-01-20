<?php

namespace App\Http\Controllers;

use App\Models\Desejo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesejoController extends Controller
{
    public function adicionarDesejos(Request $request, $id)
    {
        $user = Auth::user();

        $desejo = new Desejo();
        $desejo->p_id = $id;
        $desejo->u_id = $user->u_id;
        $desejo->save();


        return back()->with('sucesso', 'Produto adicionado à lista de desejos!');
      
       
    }
   
    public function verDesejos(Request $request, $id)
    {

    }
}

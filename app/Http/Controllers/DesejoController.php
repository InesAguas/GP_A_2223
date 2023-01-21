<?php

namespace App\Http\Controllers;

use App\Models\Desejo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DesejoController extends Controller
{
    public function adicionarDesejo(Request $request)
    {
        $id = Desejo::find($request->id);

        if($id){
            Session::flash('alert2', 'Esse produto já existe na lista de desejos!');
            return back();
        }else{
            $user = Auth::user();
            $id = $request->id;
    
            $desejo = new Desejo();
            $desejo->p_id = $id;
            $desejo->u_id = $user->u_id;
            $desejo->save();
            Session::flash('success2', 'Produto adicionado com sucesso à lista dos desejos!');
            return back();
        }
        
      
       
    }

    function getDesejos() {
        if (Auth::check()) {
            $id = Auth::user()->u_id;
            if ($id != null) {
                $desejos = Desejo::join('produtos', 'produtos.p_id', '=', 'produtos_desejos.p_id')
                ->select('produtos_desejos.p_id', 'produtos.p_nome', 'produtos.p_preco', 'produtos.p_descricao')
                ->where('produtos_desejos.u_id', '=', $id)
                ->get();
                return $desejos;
            }  
        }
    }
}

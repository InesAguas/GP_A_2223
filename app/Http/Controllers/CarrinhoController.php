<?php

namespace App\Http\Controllers;

use App\Models\Desejo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CarrinhoController extends Controller
{
    public function adicionarAoCarrinho(Request $request)
    {
        $id = Desejo::find($request->id);

        if($id){
            Session::flash('alert1', 'Esse produto já existe no carrinho de compras!');
            return back();
        }else{
            $user = Auth::user();
            $id = $request->id;
    
            $desejo = new Desejo();
            $desejo->p_id = $id;
            $desejo->u_id = $user->u_id;
            //falta adicionar a quantidade
            $desejo->save();
            Session::flash('success1', 'Produto adicionado com sucesso ao carrinho de compras!');
            return back();
        }
      
       
    }
   
    public function verProdutosCarrinho(Request $request)
    {

    }
}

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
        $id = Desejo::where([
            ['p_id', '=', $request->id],
            ['u_id', '=', Auth::user()->u_id],
        ])->first();
        

        if($id && Auth::check()){
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

    public function apagarDesejo(Request $request){

        $desejo = Desejo::where([
            ['p_id', '=', $request->id],
            ['u_id', '=', Auth::user()->u_id],
        ])->delete();

        if($desejo > 0){
            return redirect()->back()->with("success", "Produto removido da lista!");
        }else{
            return redirect()->back()->with("error", "Produto não encontrado na lista!");
        }

        
    }
}

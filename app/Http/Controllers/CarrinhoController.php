<?php

namespace App\Http\Controllers;

use App\Models\CarrinhoCompras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CarrinhoController extends Controller
{
    public function adicionarAoCarrinho(Request $request)
    {
        $id = CarrinhoCompras::find($request->id);

        if($id){
            Session::flash('alert1', 'Esse produto já existe no carrinho de compras!');
            return back();
        }else{
            $user = Auth::user();
            $id = $request->id;
    
            $desejo = new CarrinhoCompras();
            $desejo->p_id = $id;
            $desejo->u_id = $user->u_id;
            $desejo->c_quantidade = 1;
            $desejo->save();
            Session::flash('success1', 'Produto adicionado com sucesso ao carrinho de compras!');
            return back();
        }
      
       
    }
   
    public function getProdutosCarrinho()
    {
        if (Auth::check()) {
            $id = Auth::user()->u_id;
            if ($id != null) {
                $produtosCarrinho = CarrinhoCompras::join('produtos', 'produtos.p_id', '=', 'produtos_carrinho.p_id')
                ->select('produtos_carrinho.p_id', 'produtos.p_nome', 'produtos.p_preco', 'produtos.p_descricao', 'produtos_carrinho.c_quantidade')
                ->where('produtos_carrinho.u_id', '=', $id)
                ->get();
                return $produtosCarrinho;
            }  
        }
    }

    public function apagarProdutoCarrinho(Request $request){
        $produto = CarrinhoCompras::where([
            ['p_id', '=', $request->id],
            ['u_id', '=', Auth::user()->u_id],
        ])->delete();

        if($produto > 0){
            return redirect()->back()->with("success", "Produto removido da lista!");
        }else{
            return redirect()->back()->with("error", "Produto não encontrado na lista!");
        }  
    }

    public function getValue (Request $request)
    {
        $inputValue = $request->inputValue;
        // Do something with the input value
        return redirect()->back()->with("inputValue", $inputValue);
    }

    public function atualizarQuantidade(Request $request, $id) {
        $quantidade = (int) $request->input('inputValue');
        //validate the input value

        if ($quantidade != NULL) {
            CarrinhoCompras::where('p_id', $id)->where('u_id', Auth::user()->u_id)->update(['c_quantidade' => $quantidade]);
            return redirect()->back();
        }
        
    }


}

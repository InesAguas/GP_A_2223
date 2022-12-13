<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Imagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{
    //

    public function verProdutos() {

        $user = Auth::user();

        if($user->u_tipo == 1) {
            $produtos = Produto::all();
        } else {
            $produtos = Produto::where('u_id', $user->u_id);
        }

        return view('produtossocios')
                ->with('produtos', $produtos);
    }

    public function criarProduto(Request $request) {

        $data = $request->validate([
            'nome' => 'required',
            'categoria' => 'required',
            'preco' => 'required',
            'stock' => 'required',
            'descricao' => 'required',
            'imagens' => 'required'
        ]);

        $produto = new Produto();
        
        $produto->u_id = Auth::user()->u_id;
        $produto->p_nome = $data['nome'];
        $produto->p_categoria = $data['categoria'];
        $produto->p_preco = $data['preco'];
        $produto->p_descricao = $data['descricao'];
        $produto->p_stock = $data['stock'];

        $produto->save();

        $i = 0;

        foreach($data['imagens'] as $image) {
            $imagename = $produto->p_id . '_' . ++$i . '.' . $image->extension();
            $image->move(public_path('img/produtos'), $imagename);
            $imagem = new Imagem();
            $imagem->i_nome = $imagename;
            $imagem->p_id = $produto->p_id;
            $imagem->save();
        }

        return redirect('/produtos');
        //ja esta a guardar mas falta as imagens e o return correto.
    }

}

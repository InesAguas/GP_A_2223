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
            $produtos = Produto::where('u_id', $user->u_id)->get();
        }

        foreach($produtos as $produto) {
            $produto->p_imagem = Imagem::where('p_id', '=', $produto->p_id)->first()->i_nome;
        }

        return view('produtos/produtossocios')
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

        return redirect('/produtos/verprodutos');
        //ja esta a guardar mas falta as imagens e o return correto.
    }

    public function paginaInicial(Request $request) {

        if($request->pagina == null) {
            $request->pagina = 1;
        }
        
        $pagina = $request->pagina;

        $produtos = Produto::all();

        foreach($produtos as $produto) {
            $produto->p_imagem = Imagem::where('p_id', '=', $produto->p_id)->first()->i_nome;
        }

        return view('utilizadores/paginainicioclientes')->with('produtos', $produtos);

    }

    public function detalhesProduto(Request $request) {
        $user = Auth::user();

        $produto = Produto::where('p_id', $request->id)->first();

        //retornar tambem as reviews do produto
        //retornar tambem as imagens do produto

        return view('produtos/detalhesproduto')
                ->with('produto', $produto);
    }

}

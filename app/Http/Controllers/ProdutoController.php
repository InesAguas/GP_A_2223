<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Imagem;
use App\Models\Review;
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
        ],
        [
            'nome.required' => 'Tem de introduzir um nome.',
            'categoria.required' => 'Tem de introduzir uma categoria',
            'preco.required' => 'Tem de introduzir um preço',
            'stock.required' => 'Tem de introduzir o stock',
            'descricao.required' => 'Tem de introduzir uma descrição',
            'imagens.required' => 'Tem de selecionar pelo menos uma imagem'
        ]);

        if($request->preco < 0.5 || $request->preco > 1000) {
            return back()
            ->withInput()
            ->withErrors(['preco' => 'O preço tem de ser entre 0.5 e 1000']);
        }

        if($request->stock <= 0 || $request->stock > 9999) {
            return back()
            ->withInput()
            ->withErrors(['stock' => 'O stock tem de ser entre 1 e 9999']);
        }

        if(count($request->imagens) > 7) {
            return back()
            ->withInput()
            ->withErrors(['imagens' => 'Nao pode inserir mais que 7 imagens']);
        }

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

        return redirect('/produtos/verprodutos')->with('sucesso', 'Produto criado com sucesso.');
    }

    public function editarProdutoView(Request $request) {
        $produto = Produto::where('p_id', '=', $request->id)->where('u_id', '=', Auth::user()->u_id)->first();
        if($produto == null) {
            return abort(404);
        }

        return view('produtos/editarproduto')->with('produto', $produto);
        
    }

    public function paginaInicial(Request $request) {

        if($request->pagina == null) {
            $request->pagina = 1;
        }

        if($request->produtospagina == null) {
            $request->produtospagina = 9;
        }
        

        $pagina = $request->pagina;   
        $produtospagina = $request->produtospagina;   

        $totalpaginas = Produto::all();
        $totalpaginas = ceil(count($totalpaginas) / $produtospagina);

        $min = ($pagina-1)*$produtospagina;

        if($request->ordem == 1) {
            $ordem = $request->ordem;
            $produtos = Produto::all()->sortByDesc('p_preco')->skip($min)->take($produtospagina);
        } else if($request->ordem == 2) {
            $ordem = $request->ordem;
            $produtos = Produto::all()->sortBy('p_preco')->skip($min)->take($produtospagina);
        } else {
            $ordem = 0;
            $produtos = Produto::all()->skip($min)->take($produtospagina);
        }
        foreach($produtos as $produto) {
            $produto->p_imagem = Imagem::where('p_id', '=', $produto->p_id)->first()->i_nome;
            $produto->p_review = round(Review::where('p_id', '=', $produto->p_id)->avg('r_avaliacao'), 2);
            if($produto->p_review == null) {
                $produto->p_review = 0;
            }
        }

        return view('utilizadores/paginainicioclientes')
            ->with('produtos', $produtos)
            ->with('totalpaginas', $totalpaginas)
            ->with('pagina', $pagina)
            ->with('produtospagina', $produtospagina)
            ->with('ordem', $ordem);

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encomenda;
use App\Models\Imagem;
use App\Models\Produto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class EncomendaController extends Controller
{
    //
    public function adminEncomendas(Request $request) {

        if($request->pagina == null) {
            $request->pagina = 1;
        }

        if($request->produtospagina == null) {
            $request->produtospagina = 10;
        }

        $pagina = $request->pagina;   
        $produtospagina = $request->produtospagina;   

        $totalpaginas = Encomenda::all();
        $totalpaginas = ceil(count($totalpaginas) / $produtospagina);

        $min = ($pagina-1)*$produtospagina;

        if($request->ordem == 1) {
            $encomendas = Encomenda::join('utilizadores', 'utilizadores.u_id', '=', 'encomendas.u_id')
            ->join('produtos_encomendas', 'produtos_encomendas.e_id', '=', 'encomendas.e_id')
            ->join('produtos', 'produtos.p_id', '=', 'produtos_encomendas.p_id')
            ->where('produtos_encomendas.p_id', '=', function($query) {
                $query->select(DB::raw("MIN(p_id)
                FROM produtos_encomendas
                WHERE e_id = encomendas.e_id"));    
            })
            ->select('encomendas.*', 'utilizadores.u_nome', 'produtos.p_nome')->orderBy('e_data_criada', 'ASC')->skip($min)->take($produtospagina)->get();
        }else if($request->ordem == 2) {
            $encomendas = Encomenda::join('utilizadores', 'utilizadores.u_id', '=', 'encomendas.u_id')
            ->join('produtos_encomendas', 'produtos_encomendas.e_id', '=', 'encomendas.e_id')
            ->join('produtos', 'produtos.p_id', '=', 'produtos_encomendas.p_id')
            ->where('produtos_encomendas.p_id', '=', function($query) {
                $query->select(DB::raw("MIN(p_id)
                FROM produtos_encomendas
                WHERE e_id = encomendas.e_id"));    
            })
            ->select('encomendas.*', 'utilizadores.u_nome', 'produtos.p_nome')->orderBy('e_data_criada', 'DESC')->skip($min)->take($produtospagina)->get();
        }else {
            $request->ordem = 0;
            $encomendas = Encomenda::join('utilizadores', 'utilizadores.u_id', '=', 'encomendas.u_id')
            ->join('produtos_encomendas', 'produtos_encomendas.e_id', '=', 'encomendas.e_id')
            ->join('produtos', 'produtos.p_id', '=', 'produtos_encomendas.p_id')
            ->where('produtos_encomendas.p_id', '=', function($query) {
                $query->select(DB::raw("MIN(p_id)
                FROM produtos_encomendas
                WHERE e_id = encomendas.e_id"));    
            })
            ->select('encomendas.*', 'utilizadores.u_nome', 'produtos.p_nome')->skip($min)->take($produtospagina)->get();
        }

        if($request->filter == 1) {
            $encomendas = $encomendas->whereNotNull('e_data_entrega');
        } else if ($request->filter == 2) {
            $encomendas = $encomendas->whereNull('e_data_confirmada');
        }else if ($request->filter == 3) {
            $encomendas = $encomendas->where('e_estado', '=', 'cancelada');
        }else if ($request->filter == 4) {
            $encomendas = $encomendas->whereNotNull('e_data_confirmada');
        } else {
            $request->filter = 0;
        }

        foreach($encomendas as $encomenda) {
            $encomenda->total_produtos = DB::table('produtos_encomendas')->where('e_id', '=', $encomenda->e_id)->count();
            $encomenda->imagens = Imagem::whereIn('p_id', function($query) use(&$encomenda) {
                $query->select(DB::raw("p_id FROM produtos_encomendas WHERE e_id = $encomenda->e_id AND i_nome LIKE '%_1%'"));    
            })->select('i_nome')->get();
        }

        return view('encomendas/adminencomendas')
                ->with('encomendas', $encomendas)
                ->with('pagina', $pagina)
                ->with('totalpaginas', $totalpaginas)
                ->with('produtospagina', $produtospagina)
                ->with('ordem', $request->ordem )
                ->with('filter', $request->filter);
    }  
    
    public function verEncomendas(Request $request) {
        if($request->pagina == null) {
            $request->pagina = 1;
        }

        if($request->produtospagina == null) {
            $request->produtospagina = 10;
        }

        $pagina = $request->pagina;   
        $produtospagina = $request->produtospagina;   

        $totalpaginas = Encomenda::all();
        $totalpaginas = ceil(count($totalpaginas) / $produtospagina);

        $min = ($pagina-1)*$produtospagina;

        if($request->ordem == 1) {
            $encomendas = Encomenda::join('utilizadores', 'utilizadores.u_id', '=', 'encomendas.u_id')
            ->join('produtos_encomendas', 'produtos_encomendas.e_id', '=', 'encomendas.e_id')
            ->join('produtos', 'produtos.p_id', '=', 'produtos_encomendas.p_id')
            ->where('produtos_encomendas.p_id', '=', function($query) {
                $query->select(DB::raw("MIN(p_id)
                FROM produtos_encomendas
                WHERE e_id = encomendas.e_id"));    
            })
            ->select('encomendas.*', 'utilizadores.u_nome', 'produtos.p_nome')->orderBy('e_data_criada', 'ASC')->skip($min)->take($produtospagina)->get();
        }else if($request->ordem == 2) {
            $encomendas = Encomenda::join('utilizadores', 'utilizadores.u_id', '=', 'encomendas.u_id')
            ->join('produtos_encomendas', 'produtos_encomendas.e_id', '=', 'encomendas.e_id')
            ->join('produtos', 'produtos.p_id', '=', 'produtos_encomendas.p_id')
            ->where('produtos_encomendas.p_id', '=', function($query) {
                $query->select(DB::raw("MIN(p_id)
                FROM produtos_encomendas
                WHERE e_id = encomendas.e_id"));    
            })
            ->select('encomendas.*', 'utilizadores.u_nome', 'produtos.p_nome')->orderBy('e_data_criada', 'DESC')->skip($min)->take($produtospagina)->get();
        }else {
            $request->ordem = 0;
            $encomendas = Encomenda::join('utilizadores', 'utilizadores.u_id', '=', 'encomendas.u_id')
            ->join('produtos_encomendas', 'produtos_encomendas.e_id', '=', 'encomendas.e_id')
            ->join('produtos', 'produtos.p_id', '=', 'produtos_encomendas.p_id')
            ->where('produtos_encomendas.p_id', '=', function($query) {
                $query->select(DB::raw("MIN(p_id)
                FROM produtos_encomendas
                WHERE e_id = encomendas.e_id"));    
            })
            ->select('encomendas.*', 'utilizadores.u_nome', 'produtos.p_nome')->skip($min)->take($produtospagina)->get();
        }

        if($request->filter == 1) {
            $encomendas = $encomendas->whereNotNull('e_data_entrega');
        } else if ($request->filter == 2) {
            $encomendas = $encomendas->whereNull('e_data_confirmada');
        }else if ($request->filter == 3) {
            $encomendas = $encomendas->where('e_estado', '=', 'cancelada');
        }else if ($request->filter == 4) {
            $encomendas = $encomendas->whereNotNull('e_data_confirmada');
        } else {
            $request->filter = 0;
        }

        foreach($encomendas as $encomenda) {
            $encomenda->total_produtos = DB::table('produtos_encomendas')->where('e_id', '=', $encomenda->e_id)->count();
            $encomenda->imagens = Imagem::whereIn('p_id', function($query) use(&$encomenda) {
                $query->select(DB::raw("p_id FROM produtos_encomendas WHERE e_id = $encomenda->e_id AND i_nome LIKE '%_1%'"));    
            })->select('i_nome')->get();
        }

        return view('encomendas/encomendascliente')
                ->with('encomendas', $encomendas)
                ->with('pagina', $pagina)
                ->with('totalpaginas', $totalpaginas)
                ->with('produtospagina', $produtospagina)
                ->with('ordem', $request->ordem )
                ->with('filter', $request->filter);
    }


    public function cancelarEncomenda(Request $request) {
        $encomenda = Encomenda::where('e_id', '=', $request->id)->first();
        if($encomenda == null) {
            return abort(404);
        }

        if($encomenda->e_data_confirmada == null) {
            $encomenda->e_estado = "cancelada";
            $encomenda->e_comentario = $request->descricao;
            $encomenda->save();
            return back()->with('sucesso', 'Encomenda cancelada.');
        }else {
            return abort(404);
        }
    }

    public function confirmarEncomenda(Request $request) {
        $encomenda = Encomenda::where('e_id', '=', $request->id)->first();
        if($encomenda == null) {
            return abort(404);
        }

        if($encomenda->e_data_confirmada == null) {
            $encomenda->e_data_confirmada = date('Y-m-d');;
            $encomenda->e_estado = "em desenvolvimento";
            $encomenda->save();
            return back()->with('sucesso', 'Encomenda confirmada.');
        }else {
            return abort(404);
        }
    }

    public function entregarEncomenda(Request $request) {
        $encomenda = Encomenda::where('e_id', '=', $request->id)->first();
        if($encomenda == null) {
            return abort(404);
        }

        if($encomenda->e_data_confirmada != null) {
            $encomenda->e_data_entrega = date('Y-m-d');;
            $encomenda->e_estado = "concluida";
            $encomenda->save();
            return back()->with('sucesso', 'Encomenda entregue.');
        }else {
            return abort(404);
        }
    }

    public function verCheckout(Request $request) {
        $produtos = Produto::join('produtos_carrinho', 'produtos_carrinho.p_id','=', 'produtos.p_id')
            ->where('produtos_carrinho.u_id', '=', Auth::user()->u_id)->get();
            if(count($produtos) == 0) {
                return back();
            }
            $total = 0;
            foreach($produtos as $produto) {
                $total += $produto->p_preco * $produto->c_quantidade;
                $produto->p_imagem = Imagem::where('p_id', '=', $produto->p_id)->first()->i_nome;
            }
        return view('/encomendas/checkout')
            ->with('produtos', $produtos)
            ->with('total', $total);
    }

    public function finalizarCheckout(Request $request) {
        if($request->shipping == null) {
            return back()->withErrors([
                'erro' => 'Selecione um método de entrega',
            ])->withInput();
        }

        if($request->shipping == 'home') {
            $dados = $request->validate(
                [
                    'nome' => ['required'],
                    'morada' => ['required'],
                    'codigoPostal' => ['required'],
                    'telemovel' => ['required'],
                    'nif' => ['required'],
                ],
                [
                    'nome.required' => 'Tem de introduzir um nome.',
                    'morada.required' => 'Tem de introduzir uma morada.',
                    'codigoPostal.required' => 'Tem de introduzir um codigo postal.',
                    'telemovel.required' => 'Tem de introduzir um numero de telemovel.',
                    'nif.required' => 'Tem de introduzir um NIF.'
                ]
            );
        }

        $encomenda = new Encomenda();
        $encomenda->u_id = Auth::user()->u_id;
        $encomenda->e_data_criada = date('Y-m-d');
        $encomenda->e_estado = 'criada';
        $encomenda->e_total = $request->total;
        
        $encomenda->save();

        $produtos = DB::table('produtos_carrinho')->select('p_id', 'c_quantidade')->where('u_id', '=', Auth::user()->u_id)->get();
        foreach($produtos as $produto) {
            DB::table('produtos_encomendas')->insert(['e_id' => $encomenda->e_id, 'p_id' => $produto->p_id, 'e_quantidade' => $produto->c_quantidade]);
        }

        DB::table('produtos_carrinho')->where('u_id', '=', Auth::user()->u_id)->delete();


        //enviar email a empresa com a encomenda...
    }
}

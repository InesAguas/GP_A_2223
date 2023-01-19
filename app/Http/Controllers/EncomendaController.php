<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encomenda;
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
        
        $encomendas = $encomendas->where('u_id', '=', Auth::user()->u_id);
        return view('encomendas/adminencomendas')
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
}

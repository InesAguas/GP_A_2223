<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encomenda;
use Illuminate\Support\Facades\DB;


class EncomendaController extends Controller
{
    //
    public function adminEncomendas(Request $request) {


        $encomendas = Encomenda::join('utilizadores', 'utilizadores.u_id', '=', 'encomendas.u_id')
            ->join('produtos_encomendas', 'produtos_encomendas.e_id', '=', 'encomendas.e_id')
            ->join('produtos', 'produtos.p_id', '=', 'produtos_encomendas.p_id')
            ->where('produtos_encomendas.p_id', '=', function($query) {
                $query->select(DB::raw("MIN(p_id)
                FROM produtos_encomendas
                WHERE e_id = encomendas.e_id"));    
            })
            ->select('encomendas.*', 'utilizadores.u_nome', 'produtos.p_nome')->get();
        return view('encomendas/adminencomendas')->with('encomendas', $encomendas);
    }   
}

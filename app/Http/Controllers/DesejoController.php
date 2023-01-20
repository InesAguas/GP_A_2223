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
   
    public function verDesejos(Request $request)
    {
        $desejos = Desejo::with('p_id')->get();
        return view('desejos')->with('desejos', $desejos);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\CompartilharLista;
use Illuminate\Http\Request;

class CompartilharController extends Controller
{
    public function compartilhar(Request $request){

        if($request->id_send_usuario == $request->id_receiver_usuario){
            return response()->json([
                'message' =>'não é possivel compartilhar a lista com você mesmmo'
            ],400);
        }

        $compartilhar = new CompartilharLista();
        $compartilhar->fk_send_usuario = $request->id_send_usuario;
        $compartilhar->fk_receiver_usuario = $request->id_receiver_usuario;
        $compartilhar->fk_lista = $request->id_lista;


        $compartilhar->save();

        return response()->json([
            'Lista compartilhada!'
        ],200);
        
    }
}

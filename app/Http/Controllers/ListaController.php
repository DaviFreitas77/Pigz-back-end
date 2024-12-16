<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use App\Models\Tarefas;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function criar(Request $request)
    {

        $validated = $request->validate([
            'nome_lista' => 'required|string|max:100',
         
        ],[
            'nome_lista.required' => 'de um nome a lista'
        ]);

      

        $lista = new Lista;
        $lista->fk_usuario = $request->fk_usuario;
        $lista->nome_lista = $request->nome_lista;

        $lista->save();

        return response()->json([
            'message' => 'lista criada com sucesso'
        ], 200);
    }

    public function deletar(Request $request)
    
    {

    
        $idLista = $request->route('id_lista');

        $lista = Lista::find($idLista);

        if ($lista) {
            $tarefa = Tarefas::where('fk_lista', $lista->id_lista)->first(); 
            
        if ($tarefa) {
           
            return response()->json([
                'message' => 'existe tarefas associadas a lista.'
            ], 400);
        }

            $lista->delete();

            return response()->json(['message' => "Lista deletada"]);
        }

        return response()->json([
            'message' => 'Lista não encontrada!'
        ], 404);
    }


    public function vizualizarLista(Request $request){

        $idUsuario = $request->id_usuario;
        
        

        $lista = Lista::where('fk_usuario',$idUsuario)->get();

        if ($lista->isEmpty()) {
            return response()->json([
                'message' => 'Nenhuma lista encontrada para este usuário.'
            ], 404);
        }
        

        return response()->json($lista);
    }
}

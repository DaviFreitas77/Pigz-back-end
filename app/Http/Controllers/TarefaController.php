<?php

namespace App\Http\Controllers;

use App\Models\Tarefas;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function criarTarefa(Request $request){

        $validated = $request->validate([
            'nome_tarefa' =>'required|string'
        ],[
            'nome_tarefa' => 'de um nome a tarefa'
        ]);

        $tarefa = new Tarefas;
        $tarefa->fk_lista = $request->id_lista;
        $tarefa->nome_tarefa = $request->nome_tarefa;


        $tarefa->save();

        return response()->json([
            'message' => 'Tarefa criada'
        ],200);
    }

    public function deletarTarefa(Request $request){
        $idTarefa = $request->route('id_tarefa');

        $tarefa = Tarefas::find($idTarefa);

        if($tarefa){
            $tarefa->delete();

            return response()->json([
                'tarefa deletada'
            ],200);
        }

    
    }

    public function concluirTarefa($id){
        $tarefa = Tarefas::find($id);

        if($tarefa->status === 1){
            return response()->json([
                'message' => 'Tarefa ja esta concluida'
            ],400);
        }

        $tarefa->status = 1;
        $tarefa->save();

        return response()->json([
            'message' => 'Tarefa Concluida com sucesso!'
        ],400);
        
    }
}

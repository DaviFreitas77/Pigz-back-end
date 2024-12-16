<?php

use App\Http\Controllers\CompartilharController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('/criar',[ListaController::class,('criar')]);
Route::post('/criarTarefa',[TarefaController::class,('criarTarefa')]);
Route::post('/login',[UsuarioController::class,('login')]);
Route::post('/criarUsuario',[UsuarioController::class,('cadastrarUsuario')]);
Route::post('/compartilhar',[CompartilharController::class,('compartilhar')]);

Route::patch('concluir/{id_tarefa}',[TarefaController::class,('concluirTarefa')]);


Route::delete('deletar/{id_lista}',[ListaController::class,('deletar')]);
Route::delete('deletarTarefa/{id_tarefa}',[TarefaController::class,('deletarTarefa')]);



Route::get('verLista/{id_usuario}',[ListaController::class,('vizualizarLista')]);




<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function cadastrarUsuario(Request $request)
    {

        $validated = $request->validate([
            'nome_usuario' => 'required|string|max:255',
            'senha_usuario' => 'required|min:8',
            'cargo'=>'required|string'
        ], [
            'nome_usuario.required' => 'Por favor, informe o nome de usuário.',
            'senha_usuario.required' => 'A senha é obrigatória.',
            'senha_usuario.min' => 'A senha deve ter pelo menos 8 caracteres.',
            'cargo.required' =>'Defina um cargo',
        ]);

        $usuario = new Usuario;
        $usuario->nome_usuario = $request->nome_usuario;
        $usuario->senha_usuario = password_hash($request->senha_usuario, PASSWORD_BCRYPT);
        $usuario->cargo = $request->cargo;

        $usuarioExistente = Usuario::where('nome_usuario', $request->nome_usuario)->first();

        if ($usuarioExistente) {
            return response()->json([
                'message' => 'Nome existente,escolha outro!',

            ], 400);
        }

        $usuario->save();

        return response()->json([
            'message' => 'Usuário criado com sucesso!',
            'usuario' => $usuario
        ], 200);
    }


    public function login(Request $request)
    {
        $usuario = Usuario::where('nome_usuario', $request->nome_usuario)->first();

        if ($usuario && $request->senha_usuario === $usuario->senha_usuario) {
            return response()->json([
                'message' => 'Login bem-sucedido.',
                $usuario
            ], 200);
        }

        return response()->json([
            'message' => 'Credenciais inválidas.'
        ], 400);
    }
}

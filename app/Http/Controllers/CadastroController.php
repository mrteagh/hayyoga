<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function salvar(Request $request)
    {
        // Validação correta: sem espaços e nomes iguais aos inputs
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Criar usuário no banco
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/cadastro')->with('sucesso', 'Cadastro realizado com sucesso!');
    }
}

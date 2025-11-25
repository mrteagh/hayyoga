<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function salvar(Request $request) {
        $request->validate([
            'name' => 'required|min:3',
            'email'=> 'required|email|unique:users, email',
            'password'=>'required|min:6',
        ]);

        User::create([
            'name' => $request->nome,
            'email'=> $request->email,
            'password'=> bcrypt($request->senha),
        ]);
        return redirect('/cadastro')->with('sucesso', 'Cadastro realizado com sucesso!');
    }
}

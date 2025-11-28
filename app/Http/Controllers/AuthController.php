<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // ================================
    // LOGIN
    // ================================

    public function formLogin()
    {
        return view('index')->with('showLoginModal', true);;
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return view('index')
                ->with([
                    'loginError' => 'Credenciais inválidas'
                ])
                ->with('loginModal', true); // flag para abrir o modal   
        }

        return view('yoga')->with(['message' => 'Login bem-sucedido']);
    }

    public function logout()
    {
        Auth::logout();
        return view('index');
    }


    // ================================
    // CADASTRO
    // ================================

    public function formCadastro()
    {
        return view('cadastro');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return view('cadastro')->with(['Cadastrado com sucesso'], 201);
    }
}

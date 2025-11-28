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
        return view('index')->with('showLoginModal', true);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
<<<<<<< HEAD
            return redirect()->back()
                ->withErrors(['email' => 'Credenciais inválidas'])
                ->with('showLoginModal', true);
=======
            return back()
                ->withErrors([
                    'loginError' => 'Credenciais inválidas'
                ])
                ->with('showLoginModal', true); // flag para abrir o modal   
>>>>>>> a36fcf7a6a867cec40647fa49e16ea77c5a0174b
        }

        return redirect('/yoga');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }


    // ================================
    // CADASTRO
    // ================================

    public function formCadastro()
    {
        return view('auth.register'); // CORREÇÃO AQUI
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // Login automático após cadastrar
        Auth::login($user);

        // Redirecionar para a página inicial (ou outra)
        return redirect('/yoga')->with('success', 'Cadastro realizado com sucesso!');
    }
}


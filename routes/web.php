<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;

// ================================
// Rotas públicas das páginas
// ================================
Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/yoga', [MainController::class, 'yoga'])->name('yoga');
Route::get('/reiki', [MainController::class, 'reiki'])->name('reiki');

// ================================
// Rotas de autenticação (login/logout)
// ================================
Route::get('/login', [AuthController::class, 'formLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.enviar');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ================================
// Rotas de cadastro
// ================================
Route::get('/cadastro', [AuthController::class, 'formCadastro'])->name('register');          // GET exibe o formulário
Route::post('/cadastro', [AuthController::class, 'register'])->name('register.enviar');     // POST envia o formulário




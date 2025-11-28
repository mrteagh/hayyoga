<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
<<<<<<< HEAD
use App\Http\Controllers\CadastroController;

Route::get('/', function () {
    $aulas = [
        [
            'title' => 'Quem pode participar',
            'text' => 'Uma introdução suave ao yoga, perfeita para quem está começando.',
        ],
        [
            'title' => 'Yoga Avançado',
            'text' => 'Desafie seu corpo e mente com posturas avançadas e técnicas de respiração.',
        ],
        [
            'title' => 'Meditação e Relaxamento',
            'text' => 'Aprenda técnicas de meditação para reduzir o estresse e aumentar o foco.',
        ],
        [
            'title' => 'Teste 12',
            'text' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ],
    ];
    return view('index', ['aulas' => $aulas]);
});


Route::get('/reiki', function () {
    return view('reiki');
});

Route::get('/',function(){
    return view('index');
});


Route::get('/yoga', function(){
    return view('yoga');
});

Route::get('/', [MainController::class, 'home']);
Route::get('/cadastro', [MainController::class, 'cadastro']);
Route::get('/reiki', [MainController::class, 'reiki']);
Route::get('/yoga', [MainController::class, 'yoga']);

Route::post('/cadastro/salvar', [CadastroController::class, 'salvar'])->name('cadastro.salvar');
=======
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



>>>>>>> eab2ac936aaf74bb979374edf2363efc9a74d23f

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
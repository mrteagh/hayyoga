<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\MainController;

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
    return view('index', ['aulas'=> $aulas]);
});
<<<<<<< HEAD

Route::get('/reiki', function () {
    return view('reiki');
});
=======
Route::get('/',function(){
    return view('index');
});
>>>>>>> 8cc3436216132cc877d012c955c55470a8d85c67

Route::get('/yoga', function(){
    return view('yoga');
});

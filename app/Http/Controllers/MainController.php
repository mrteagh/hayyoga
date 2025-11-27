<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function home() {
        $aulas = [
            ['title' => 'Quem pode participar', 'text' => 'Descrição...'],
            ['title' => 'Yoga Avançado', 'text' => 'Descrição...'],
        ];
        return view('index', compact('aulas'));
    }
    public function cadastro() {
        return view('cadastro');
    }
    public function reiki() {
        return view('reiki');
    }
    public function yoga() {
        return view('yoga');
    }
}

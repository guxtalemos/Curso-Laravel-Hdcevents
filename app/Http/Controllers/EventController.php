<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index() {

        $nome = "Gustavo";
        $idade = 22;

        $arr = [10, 20, 30, 40, 50];

        $nomes = ["Gustavo", "Maria", "João", "Ana", "Pedro"];

        return view('welcome',
            [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => 'Suporte Técnico',
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create() {
        return view('events.create');
    }

}

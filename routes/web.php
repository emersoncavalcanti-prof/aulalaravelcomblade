<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', 
    [
    'titulo' => 'Home Page', 
    'nome' => 'John Doe'
]);
});

Route::get('/alunos', function () {
    return view('alunos',[
        'titulo' => 'Lista de Alunos',
        'alunos' => 
        [
            'Ana Silva',
            'Bruno Souza',
            'Carla Pereira',
            'Daniel Costa',
            'Eduardo Lima',
            'Fernanda Gomes',
            'Gabriela Rocha',
            'Hugo Fernandes',
            'Isabela Martins',
            'João Carvalho' 
        ],
    ]);
});

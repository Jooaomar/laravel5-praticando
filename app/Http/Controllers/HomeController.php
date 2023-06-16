<?php 
// Path: app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // criar uma lista simples para enviar a view home
        $lista = [
            'nome1' => 'João',
            'nome2' => 'Maria',
            'nome3' => 'José',
            'nome4' => 'Ana',
            'nome5' => 'Pedro',
            'nome6' => 'Paula',
            'nome7' => 'Carlos',
            'nome8' => 'Mariana',
            'nome9' => 'Marcos',
            'nome10' => 'Fernanda',
        ];
        
        // enviar a lista para a view home
        return view('home', compact('lista'));
    }
}
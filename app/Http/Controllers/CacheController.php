<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CacheController extends Controller
{
    public function index()
    {
        // Lógica para mostrar la lista de caches
        return view('caches.index');
    }

    public function create()
    {
        // Lógica para mostrar el formulario de creación
        return view('caches.create');
    }

}

<?php

namespace App\Http\Controllers;
use App\Models\Cache;
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
    public function store(Request $request)
    {
        $cache = Cache::create([
            'id' => $request->id,
            'cliente' => $request->cliente,
            'descripcion' => $request->descripcion,
        ]);
    
        return redirect()->route('cache.index')->with('success', 'Registro guardado en cache');    
    
        // Crear un nuevo registro en la base de datos
        Cache::create([
            'cliente' => $validated['cliente'],
            'descripcion' => $validated['descripcion'],
            'key' => uniqid(),
            'value' => 'default_value',  // Asegúrate de asignar un valor aquí
        ]);
        
    
        // Redirigir con un mensaje de éxito
        return redirect()->route('cache.create')->with('success', 'Cache creado correctamente.');
    }
    
    
    
}

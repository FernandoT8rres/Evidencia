<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status; // Asegúrate de importar el modelo

class StatusController extends Controller
{
    public function index()
    {
        $statuses = Status::all(); // Obtén todos los registros de la tabla status
        return view('status.index', compact('statuses'));
    }

    public function create()
    {
        return view('status.create'); // Asegúrate de tener esta vista
    }
    public function store(Request $request)
{
    // Validar los datos
    $request->validate([
        'cliente' => 'required|string|max:255',
        'descripcion' => 'required|string',
    ]);

    // Guardar en la base de datos
    Status::create([
        'cliente' => $request->cliente,
        'descripcion' => $request->descripcion,
    ]);

    // Redireccionar a la lista de status con un mensaje
    return redirect()->route('status.index')->with('success', 'Status creado exitosamente.');
}

}

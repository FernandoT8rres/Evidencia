<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all(); // Obtiene todos los trabajos
        return view('jobs.index', compact('jobs')); // Asegúrate de que esta vista existe
    }
    public function create()
{
    return view('jobs.create'); // Asegúrate de que esta vista existe
}
public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'cliente' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ]);

        // Crear un nuevo trabajo (Job) con los datos del formulario
        $job = new Job();
        $job->cliente = $request->input('cliente');
        $job->descripcion = $request->input('descripcion');
        $job->save();

        // Redirigir al usuario con un mensaje de éxito
        return redirect()->route('jobs.index')->with('success', 'Trabajo creado con éxito!');
    }
}


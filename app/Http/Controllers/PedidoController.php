<?php
namespace App\Http\Controllers; // ← Asegura que esta línea está presente

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // ← IMPORTA LA CLASE CORRECTAMENTE

class PedidoController extends Controller
{
    // Muestra el formulario para crear un nuevo pedido
    public function create()
    {
        return view('pedidos.create'); // Asegúrate de que 'pedidos.create' existe
    }

    // Guarda el pedido en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'cliente' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        Pedido::create($request->all());

        return redirect()->route('pedidos.index')->with('success', 'Pedido creado con éxito.');
    }
    public function showAll()
    {
        $pedidos = Pedido::all(); // Obtener todos los pedidos de la BD
        return view('pedidos.index', compact('pedidos')); // Pasar datos a la vista
    }
    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id); // Buscar el pedido por ID
        return view('pedidos.edit', compact('pedido')); // Pasar el pedido a la vista de edición
    }
    public function update(Request $request, Pedido $pedido)
{
    // Validar los datos del formulario
    $request->validate([
        'cliente' => 'required|string|max:255',
        'descripcion' => 'required|string',
    ]);

    // Actualizar los datos del pedido
    $pedido->update([
        'cliente' => $request->input('cliente'),
        'descripcion' => $request->input('descripcion'),
    ]);

    // Redirigir con mensaje de éxito
    return redirect()->route('pedidos.index')->with('success', 'Pedido actualizado correctamente.');
}

    public function destroy($id)
    {
        // Buscar el pedido por ID
        $pedido = Pedido::findOrFail($id);

        // Eliminar el pedido
        $pedido->delete();

        // Redirigir al listado de pedidos con un mensaje de éxito
        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado correctamente');
    }
    
}
  

   


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Log;


class CustomerController extends Controller
{
    public function index()
    {
        // Obtener todos los clientes
        $costumers = Customer::all();
        
        // Pasar la variable a la vista
        return view('customers.show', compact('costumers'));
    }
    public function show($id)
    {
        // Buscar el cliente por el ID
        $customer = Customer::find($id);
        
        // Si no se encuentra el cliente, retornar un error 404
        if (!$customer) {
            abort(404, 'Customer not found');
        }
    
        // Pasar el cliente a la vista
        return view('customers.show', compact('customer'));
    }
        
    
    

    public function destroy($id)
    {
        // Buscar el cliente por su id
        $customer = Customer::findOrFail($id);

        // Eliminar el cliente
        $customer->delete();

        // Redirigir a la página de lista de clientes con un mensaje de éxito
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully');
    }    
    
public function edit($id)
{
    // Obtener el cliente con el ID
    $customer = Customer::findOrFail($id);

    // Pasar la variable correctamente a la vista
    return view('customers.edit', compact('customer'));
}


    // Método para actualizar el cliente
    public function update(Request $request, $id)
    {
        $request->validate([
            'cliente' => 'required',
            'descripcion' => 'required',
        ]);

        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully');
    }
    public function create()
    {
        return view('customers.create');  // Asegúrate de tener esta vista
    }
    // app/Http/Controllers/CustomerController.php
    public function store(Request $request)
    {
        // Validar los datos
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'cliente' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'number' => 'nullable|string|max:20',
        ]);
    
        // Verificar los datos validados
        dd($validated); // Esto te ayudará a ver los datos validados
    
        // Crear el nuevo cliente
        $customer = Customer::create([
            'name' => $validated['name'],
            'cliente' => $validated['cliente'],
            'descripcion' => $validated['descripcion'],
            'number' => $validated['number'],
        ]);
    
        dd($customer); // Verifica si el cliente se ha creado correctamente
    
        // Redirigir o mostrar respuesta
        return redirect()->route('customers.index')->with('success', 'Cliente creado exitosamente.');
    }


    
}

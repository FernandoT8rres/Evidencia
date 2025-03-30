<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
            return view('products.index'); // Asegúrate de que este archivo exista en resources/views/users
        
    }
    
    
    public function create()
    {
        // Lógica para mostrar el formulario de creación de producto
        return view('products.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'cliente' => 'required|string|max:255',
        'descripcion' => 'required|string|max:255',
        'Name' => 'required|string|max:255',
        'Price' => 'required|numeric',  // Si tienes este campo
    ]);

    // Crear un nuevo producto
    $product = new Product();
    $product->cliente = $validated['cliente'];
    $product->descripcion = $validated['descripcion'];
    $product->Name = $validated['Name'];
    $product->Price = $validated['Price'];  // Si estás usando este campo
    $product->save();

    // Verificar si se guarda correctamente
    dd($product);  // Aquí verás si el producto se guarda

    // Redirigir a la lista de productos con un mensaje de éxito
    return redirect()->route('product.index')->with('success', 'Product created successfully');
}

public function show($id)
{
    $product = Product::find($id);

    if (!$product) {
        return redirect()->route('products.index')->with('error', 'Producto no encontrado.');
    }

    return view('products.show', compact('product'));
}


    // Agrega otros métodos necesarios, como create, store, etc.
}


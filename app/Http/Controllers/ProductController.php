<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Obtener todos los productos
        $products = Product::all();
    
        // Verificar si hay productos
        dd($products);  // Aquí deberías ver todos los productos
    
        // Pasar los productos a la vista
        return view('product.index', compact('products'));
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

    

    // Agrega otros métodos necesarios, como create, store, etc.
}


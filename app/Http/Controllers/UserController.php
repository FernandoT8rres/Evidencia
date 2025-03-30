<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }
    public function store(Request $request)
{
    // Validar los datos
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ]);

    // Crear el usuario
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // Redireccionar a la lista de usuarios con un mensaje
    return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente.');
}
public function create()
{
    return view('users.create'); // Asegúrate de que este archivo exista en resources/views/users
}


}

<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all(); // Obtén todos los roles
        return view('roles.index', compact('roles'));
    }
    public function create()
{
    return view('roles.create'); // Asegúrate de tener esta vista en resources/views/roles/create.blade.php
}

}

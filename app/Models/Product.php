<?php
// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Define la tabla explícitamente si el nombre no sigue la convención
    protected $table = 'products'; // Asegúrate de que el nombre de la tabla sea el correcto

    // Define los campos que se pueden asignar masivamente
    protected $fillable = [
        'cliente', 'descripcion', 'Name', 'Price'
    ];

    // Si el nombre de la columna primaria no es "id", también necesitas definirla
    protected $primaryKey = 'idProduct'; // Si el campo clave primaria no es "id"
}

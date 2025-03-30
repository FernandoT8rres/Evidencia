<?php
// app/Models/Customer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Agrega los campos que quieres permitir en la asignación masiva
    protected $fillable = [
        'name', 
        'cliente', 
        'descripcion', 
        'number',
    ];
    public $timestamps = true;  
}


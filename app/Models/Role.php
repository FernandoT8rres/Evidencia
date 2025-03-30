<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles'; // Asegura que la tabla es correcta

    protected $fillable = ['nombre']; // Define los campos que puedes asignar masivamente
}

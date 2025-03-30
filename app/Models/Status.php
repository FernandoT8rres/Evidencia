<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'statuses'; // Nombre exacto de la tabla en la BD
    protected $fillable = ['cliente', 'descripcion'];

}




<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cache extends Model
{
    use HasFactory;

    // Asegúrate de que 'cliente', 'descripcion', y 'key' estén en el array 'fillable'
    protected $fillable = ['id', 'cliente', 'descripcion', 'number'];

    protected $table = 'cache';

    public $timestamps = false; 


}

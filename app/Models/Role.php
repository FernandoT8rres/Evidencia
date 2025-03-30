<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['role_name'];
    public $timestamps = true; // Opcional, Laravel gestionará automáticamente las fechas
}

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos'; // Asegúrate de que coincide con el nombre real

    protected $fillable = ['cliente', 'descripcion', 'monto'];


    
}

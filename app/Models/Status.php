<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';
    protected $primaryKey = 'id_status';
    public $timestamps = true;

    protected $fillable = [
        'status_name',
    ];

    // Relación con Order (Un estado puede tener muchas órdenes)
    public function orders()
    {
        return $this->hasMany(Order::class, 'status_id', 'id_status');
    }
}



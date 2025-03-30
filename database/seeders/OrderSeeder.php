<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar un pedido manualmente
        Order::create([
            'date' => Carbon::now()->toDateString(),
            'address' => '123 Main St, Puebla, Mexico',
            'customer_id' => 1, 
            'status_id' => 1,   
            'deliverphoto' => 'path/to/photo1.jpg', 
        ]);

        // Insertar otro pedido
        Order::create([
            'date' => Carbon::now()->toDateString(),
            'address' => '456 Elm St, Toluca, Mexico',
            'customer_id' => 2, 
            'status_id' => 2,   
            'deliverphoto' => 'path/to/photo2.jpg', 
        ]);

        // Insertar un tercer pedido
        Order::create([
            'date' => Carbon::now()->toDateString(),
            'address' => '789 Oak St, Morelia, Mexico',
            'customer_id' => 3,
            'status_id' => 3,  
            'deliverphoto' => 'path/to/photo3.jpg', 
        ]);
        // Insertar un cuarto pedido
        Order::create([
            'date' => Carbon::now()->toDateString(),
            'address' => '787 Rob St, Monterrey, Mexico',
            'customer_id' => 4,
            'status_id' => 4, 
            'deliverphoto' => 'path/to/photo3.jpg', 
                ]);
    }
}

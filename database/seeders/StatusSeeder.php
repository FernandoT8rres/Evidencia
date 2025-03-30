<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;
use Carbon\Carbon;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::insert([
            ['status_name' => 'Ordered','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            ['status_name' => 'In Process','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            ['status_name' => 'In Route', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            ['status_name' => 'Delivered', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            ['status_name' => 'Cancelled','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}

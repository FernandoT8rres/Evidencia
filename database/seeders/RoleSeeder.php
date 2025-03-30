<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::insert([
            ['role_name' => 'Admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['role_name' => 'Manager', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['role_name' => 'Customer', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['role_name' => 'Sales', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}



<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{

    protected $model = Customer::class;
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'number' => $this->faker->randomNumber(5),
            'fiscaldata' => $this->faker->text(20),
        ];
    }
}

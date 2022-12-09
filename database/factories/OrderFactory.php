<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-2 day' );
        return [
            'order_number' => Hash::make("order"),
            'total_price' => rand(1,5) * 100,
            'shipped_at' => $this->faker->dateTimeBetween('-1 day'),
            'created_at' =>$date,
            'updated_at' =>$date,
        ];
    }
}

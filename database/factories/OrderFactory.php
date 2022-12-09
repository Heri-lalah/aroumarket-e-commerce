<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'order_number' => $this->faker->numberBetween(1,10),
            'total_price' => rand(1,5) * 100,
            'shipped_at' => $this->faker->dateTimeBetween('-1 day'),
            'created_at' =>$date,
            'updated_at' =>$date,
        ];
    }
}
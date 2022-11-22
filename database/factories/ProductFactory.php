<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->sentence(rand(1,3), true),
            'prix_ht' => rand(1,10)*10,
            'description' => $this->faker->sentence(15,true),
            'photo_principal' =>substr($this->faker->imageUrl(), 0, strpos($this->faker->imageUrl(),"=")). "=Arou",
            'category_id' => rand(1,3),
            'is_online' => $this->faker->boolean(90)
        ];
    }
}

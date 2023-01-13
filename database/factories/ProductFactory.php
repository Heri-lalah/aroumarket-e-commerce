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
        $products = ['asus-core-i7-1165g7-156-ddr4-8g-x515ep-i78512g1r', 'midea-refrigerateur-dc-tmf-2d-207l-argente-hshd-273f', 'olive-table-basse', 'tcl-led-tv-43-dvb-t2-smart-android-fhd-43s6500', 'tcl-tv-55-uhd-4k-55p725', 'trust-2-feux-induction-tic-bivi62as', 'trust-refrigerateur-une-porte-noir-trfs-90bdc', 'trust-rice-cooker-25l-blanc-gris'];
        $product = rand(0, count($products)-1);
        $productName = $products[$product];

        return [
            'name'=> $productName,
            'prix_ht' => rand(1,10)*10,
            'description' => $this->faker->sentence(15,true),
            'photo_principal' =>$productName .'.jpg',
            'category_id' => rand(1,3),
            'is_online' => $this->faker->boolean(90),
            'reduction' =>\rand(5,15),
            'promo'=>$this->faker->boolean(20)  
        ];
    }
}

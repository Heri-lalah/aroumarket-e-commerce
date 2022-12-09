<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(5)->has(Product::factory(10))->create();
        User::factory(5)
            ->has(Order::factory(3)
                ->hasAttached(Product::factory(5),['quantity' => \rand(1,5)]))
            ->create();
    }
}

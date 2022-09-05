<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(ProductSeeder::class);

        //Ajout catégories
        $category=new Category();
        $category->name='Electro-ménager';
        $category->is_online=true;
        $category->save();

        $category2=new Category();
        $category2->name='Meuble et Décoration';
        $category2->is_online=true;
        $category2->save();

        $category3=new Category();
        $category3->name='Téléphonie';
        $category3->is_online=true;
        $category3->save();
    }
}

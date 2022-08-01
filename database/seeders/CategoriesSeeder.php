<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $category=new Category();
        // $category->name='électro-ménager';
        // $category->is_online=true;
        // $category->save();

        $category2=new Category();
        $category2->name='Deuble et Décoration';
        $category2->is_online=true;
        $category2->save();
    }
}

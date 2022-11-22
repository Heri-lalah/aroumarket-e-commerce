<?php

namespace App\Http\Controllers;

use App\Models\Product;

class MainController extends Controller
{

    public function about()
    {

        return view('home');

    }

	//Affiche tous les produits
    public function products()
    {

        $products = Product::inRandomOrder()->Online()->get();


        return view('shop.products', compact('products'));

    }

	//Affiche produit par catégorie
    public function viewproductbycategory($id){

        $products=Product::where('category_id', $id)->Online()->get();

        return view('shop.products', compact('products'));

    }
}

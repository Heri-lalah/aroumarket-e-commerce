<?php

namespace App\Http\Controllers;

use App\Models\Product;

class MainController extends Controller
{

    public function about()
    {

        return view('home');

    }

    public function products()
    {

        $products = Product::OrderByName()->Online()->get();


        return view('shop.products', compact('products'));

    }

    public function viewproductbycategory($id){

        $products=Product::where('category_id', $id)->Online()->get();

        return view('shop.products', compact('products'));

    }
}

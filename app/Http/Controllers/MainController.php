<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function products()
    {
        $products=Product::all();
        $categorys=Category::where('is_online',true)->get();
        return view('Pagination.products.products', compact('products','categorys'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('Pagination.ServicesAroMarket.services');
    }

    public function showproduct($id)
    {
        $product=Product::findOrFail($id);
        $categorys=Category::where('is_online',true)->get();
        return view('Pagination.products.product', compact('product','categorys'));
    }

    public function viewproductbycategory($id){
        $categorys=Category::where('is_online',true)->get();
        $products=Product::where('category_id', $id)->get();
        return view('Pagination.products.category', compact('products','categorys'));
    }
}

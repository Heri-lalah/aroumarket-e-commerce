<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        $products=Product::all();
        return view('Pagination.products.products', compact('products'));
    }

    public function services()
    {
        return view('Pagination.ServicesAroMarket.services');
    }

    public function showproduct($id)
    {
        $product=Product::findOrFail($id);
        return view('Pagination.products.product', compact('product'));
    }
}

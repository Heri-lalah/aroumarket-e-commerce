<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Cart;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function products()
    {
        $products=Product::Orderby('name')->get();
        $categorys=Category::where('is_online',true)->get();
        $infoCarts=Cart::GetContent()->count();
        return view('Pagination.products.products', compact('products','categorys','infoCarts'));
    }

    public function about()
    {
        $infoCarts=Cart::GetContent()->count();
        $Listpromotion=Product::all()->Where('Promo', 1);
        return view('about',compact('infoCarts','Listpromotion'));
    }

    public function services()
    {
        $infoCarts=Cart::GetContent()->count();
        return view('Pagination.ServicesAroMarket.services',compact('infoCarts'));
    }

    public function showproduct($id, $category_id)
    {
        $product=Product::findOrFail($id);
        $productsbycategory=Product::where('category_id',$category_id)->where('id','<>',$id)->get();
        $categorys=Category::where('is_online',true)->get();
        $infoCarts=Cart::GetContent()->count();
        return view('Pagination.products.product', compact('product','categorys','productsbycategory','infoCarts'));
    }

    public function viewproductbycategory($id){
        $categorys=Category::where('is_online',true)->get();
        $products=Product::where('category_id', $id)->get();
        $infoCarts=Cart::GetContent()->count();
        return view('Pagination.products.category', compact('products','categorys','infoCarts'));
    }
}

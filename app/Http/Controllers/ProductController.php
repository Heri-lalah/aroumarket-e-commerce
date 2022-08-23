<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
	//Affiche produit en particulier
    public function showProduct(Product $product)
    {

        return view('admin.products.form.product',['product' => $product]);

    }

	//Vers formulare nouveau produit
    public function toNewProduct()
    {

        return view('admin.products.form.newProduct');

    }

	//Ajout nouveau produit dans BDD
    public function addNewProduct(Request $request)
    {

        Product::NewProduct($request);

         return redirect(route('toNewProduct'));

    }

	//Mis à jour produit en particulier
    public function updateProduct(Product $product, Request $request)
    {

        if($request->file('photo')!=null){
            $request->file('photo')->storeAs('public/assets/products',$request->name.'.jpg');
        }

        $product->name = $request->name;
        $product->description= $request->description;
        $product->photo_principal= $request->name.'.jpg';
        $product->prix_ht= $request->prix_ht;
        $product->is_online= $request->boolean('is_online');
        $product->quantityStock= $request->quantityStock;
        $product->category_id= $request->category;
        $product->promo= $request->boolean('promo');
        $product->reduction= $request->reduction;
        $product->save();

        return redirect(route('showproductinadmin',['product' => $product]));

    }

	//vers formulaire suppression produit
    public function toDeleteProduct()
    {

        return view('admin.products.products',['products' => Product::all()]);

    }

	//Enregistrer la suppression d'un produit
    public function deleteProduct(Product $product)
    {

        $product->delete();

        return redirect(route('toDeleteProduct',['products' => Product::all()]));

    }
}

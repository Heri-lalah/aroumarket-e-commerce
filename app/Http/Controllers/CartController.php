<?php

namespace App\Http\Controllers;

use Cart;

use App\Models\Product;
//use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function add(Request $request)
    {
        $request->validate([
            'quantity'=>['required']
        ]);
        $product=Product::findOrFail($request->id);
        Cart::add(array(
            'id' =>$product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->prix_ht,
            'quantity' => $request->quantity,
            'attributes' => array('photo'=>$product->photo_principal)
        ));
        return redirect(route('cart_index'));
    }

    public function index()
    {
        $content = Cart::getContent();
        $totalHT=Cart::getTotal();
        return view('pagination.carts.carts', compact('content','totalHT'));
    }
    public function storeAllCommands(Request $request)
    {
        //return redirect('pagination.cards.cards', compact('content','totalHT'));
    }
}

<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Command;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CartController extends Controller
{

    //Ajout dans le panier

    public function add(Request $request)
    {

        if(Gate::allows('admin')){
            abort(401);
        }

        $request->validate(['quantity' => ['required','numeric','not_in:0','gt:1']]);

        $product=Product::findOrFail($request->id);

        Cart::add([
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->prix_ht * 1.2,
            'quantity' => $request->quantity,
            'attributes' =>['id' => $product->id,'photo' => $product->photo_principal]
        ]);


        $products = Product::OrderByName()->get();//->where('category_id',$product->category_id)

        return redirect()->back();

    }


    //Affichage

    public function index()
    {

        return view('cart.carts');

    }


    //Mettre à jour une commande dans le panier

    public function cart_update(Request $request, $id)
    {

        $request->validate(['quantity'=>['required']]);

        Cart::update($id,[
                'quantity' => ['relative' => false,'value' => $request->quantity]
        ]);



        return view('cart.carts');

    }


    //Enregistrement la commande et suppression de la cookie

    public function storeAllCommands()
    {

        Command::Store();

        return redirect(route('cart_index'));

    }



    //Affichage suivi commande

    public function cart_command()
    {

        $command = Command::where('user_id', Auth::user()->id)->orderByDesc('created_at') ->get();

        return view('cart.commandList', compact('command'));

    }

    public function clearCommand(){

        Cart::clear();

        return view('cart.carts');

    }
}

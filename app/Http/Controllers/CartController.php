<?php

namespace App\Http\Controllers;

use App\Repositories\CartRepositories;
use Cart;
use App\Models\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CartController extends Controller
{

    //Ajout dans le panier

    public function add(Request $request)
    {

        (new CartRepositories)->add($request);

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

        (new CartRepositories)->update($request, $id);

        return redirect()->back();

    }

    //diminuer le quantité
    public function decrease($id)
    {

        (new CartRepositories)->decrease($id);

        return redirect()->back();

    }

    //augmenter le quantité
    public function increase($id)
    {

        (new CartRepositories)->increase($id);

        return redirect()->back();

    }

    public function delete($id)
    {
        (new CartRepositories)->delete($id);

        return redirect()->back();
    }



    public function clearCommand(){

        Cart::clear();

        return redirect()->back();

    }
}

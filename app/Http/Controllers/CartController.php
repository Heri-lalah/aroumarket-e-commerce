<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Command;

use App\Models\Product;
//use Cart;
use App\Models\Category;
use App\Models\CommandList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Foreach_;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //Ajout commande
    public function add(Request $request)
    {
        $request->validate([
            'quantity'=>['required']
        ]);
        $product=Product::findOrFail($request->id);
        Cart::add(array(
            'id' =>$product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->prix_ht * 1.2,
            'quantity' => $request->quantity,
            'attributes' => array('id'=>$product->id,'photo'=>$product->photo_principal)
        ));


        $product=Product::findOrFail($request->id);
        $productsbycategory=Product::where('category_id', $product->category_id)->where('id','<>',$request->id)->get();
        $categorys=Category::where('is_online',true)->get();
        $quantity=$request->quantity;

        $infoCarts=Cart::GetContent()->count();
        return view('Pagination.products.product', compact('product','categorys','productsbycategory','quantity','infoCarts'));

    }

    //Affichage commande en cours
    public function index()
    {
        $content = Cart::getContent();
        $totalTTC=Cart::getTotal();
        $info=Command::where('user_id', Auth::user()->id)->count();
        $infoCarts=Cart::GetContent()->count();
        return view('pagination.carts.carts', compact('content','totalTTC','info','infoCarts'));
    }


    public function cart_command()
    {
        $command=Command::all();
        $info=Command::where('payement', false)->count();
        $infoCarts=Cart::GetContent()->count();
        return view('Pagination.carts.commandList', compact('command','info','infoCarts'));
    }


    //Enregistrement commande en cours
    public function storeAllCommands()
    {
        $totalTTC = Cart::getTotal();

        //Enregistrer la commande
        $Command=Command::firstOrCreate([
            'user_id'=>Auth::user()->id,
            'user_name'=>Auth::user()->name,
            'prix_TTC_Total'=>$totalTTC
        ]);

        //Enregistrer la liste de la commande
        $commandList=Cart::getContent();

        foreach($commandList as $command){
            $store=CommandList::firstOrCreate([
                'command_id'=>$Command->id,
                'user_id'=>Auth::user()->id,
                'produit_id'=>$command->id,
                'quantity'=>$command->quantity
            ]);
        }

        //Supprimer le cookie
        Cart::clear();

        $products=Product::Orderby('name')->get();
        $categorys=Category::where('is_online',true)->get();
        //return view('Pagination.products.products', compact('products','categorys'));
        return redirect(route('cart_index'));
    }

    //Mettre à jour une commande
    public function cart_update(Request $request, $id)
    {
        //$cart=Cart::getContent();
        $request->validate(['quantity'=>['required']]);
        $update=Cart::update($id,[
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ),
        ]);

        $info=Command::where('payement', false)->count();
        $content = Cart::getContent();
        $infoCarts=Cart::GetContent()->count();
        $totalTTC=Cart::getTotal();
        return view('pagination.carts.carts', compact('content','totalTTC', 'info','infoCarts'));
    }
}

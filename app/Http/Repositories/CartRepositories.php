<?php
namespace App\Http\Repositories;

use App\Models\Product;
use Illuminate\Support\Facades\Gate;
class CartRepositories
{
    //Add to cart
    public function add($request)
    {

        if(Gate::allows('admin')){
            abort(401);
        }

        $request->validate(['quantity' => ['required','numeric','not_in:0','gt:0']]);

        $product=Product::findOrFail($request->id);

        \Cart::add([
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->prix_ht,
            'quantity' => $request->quantity,
            'attributes' =>['id' => $product->id,'photo' => $product->photo_principal]
        ]);

    }

    //update
    public function update($request, $id)
    {

        $request->validate(['quantity'=>['required','numeric']]);

        if($request->quantity <=0) {

            \Cart::remove($id);

        }else{

            \Cart::update($id,[
                'quantity' => ['relative' => false,'value' => $request->quantity]
            ]);

        }

    }

    //GetTotalQuantity

    public static function getCount()
    {

        return \Cart::getTotalQuantity();

    }

    //Get Content
    public function getContent()
    {
        return \Cart::getContent();
    }

    //Get Total
    public function total()
    {
        return \Cart::getTotal();
    }

    public function totalTTC()
    {
        return $this->total() * 1.2;
    }

}

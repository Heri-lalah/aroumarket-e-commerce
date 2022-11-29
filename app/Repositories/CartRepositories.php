<?php
namespace App\Repositories;

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
            'attributes' =>[
                'id' => $product->id,
                'description' => $product->description,
                'photo' => $product->photo_principal
                ]
        ]);

    }

    //update
    public function update($request, $id)
    {

        $request->validate(['quantity'=>['required','numeric']]);

        if($request->quantity <=0) {

            $this->delete($id);

        }else{

            \Cart::update($id,[
                'quantity' => ['relative' => false,'value' => $request->quantity]
            ]);

        }

    }


    //delete
    public function delete($id)
    {

        return \Cart::remove($id);

    }

    //increase
    public function increase($id){

        $oldQuantity = \Cart::get($id)->quantity;
        $newQuantity = $oldQuantity + 1;

        return \Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $newQuantity
            ),
          ));

    }


    //decrease
    public function decrease($id){

        $oldQuantity = \Cart::get($id)->quantity;
        $newQuantity = $oldQuantity - 1;


        if((int)$newQuantity === 0){
            return $this->delete($id);
        }

        return \Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $newQuantity
            ),
          ));

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

    public function tva()
    {
        return $this->total() * 20/100;
    }

    public function totalTTC()
    {
        return $this->total() * 1.2;
    }

    public function clear()
    {
        return \Cart::clear();
    }
}

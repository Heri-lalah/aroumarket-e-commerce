<?php

namespace App\Models;

use App\Repositories\CartRepositories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsToMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products():BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }


    /*
     * Enregistrement commande
     */
    public function  scopeStore()
    {

        $cartRepositories = new CartRepositories;

        $all = $cartRepositories->getContent();
        $order_number = Auth::user()->id . now();
        $order = Order::firstOrCreate([
            'order_number' => Hash::make($order_number),
            'total_price' => $cartRepositories->totalTTC(),
            'user_id' => Auth::user()->id,
        ]);

        $all->each(function ($item) use ($order){
            $order->products()->attach([$item->id],['quantity' => $item->quantity]);
        });
    }

}

<?php

namespace App\Models;

use App\Repositories\CartRepositories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsToMany;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products():BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }


    public function  scopeStore()
    {
        $cartRepositories = new CartRepositories;
        $all = $cartRepositories->getContent();
        Order::firstOrCreate([
            'order_number' => 5,
            'total_price' => $cartRepositories->totalTTC(),
            'user_id' => Auth::user()->id,
        ]);

        $all->each(function ($item, $key){
            var_dump($item);
        });
        dd($all);
    }
}

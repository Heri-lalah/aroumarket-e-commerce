<?php

namespace App\Models;

use Cart;
use App\Models\CommandList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Command extends Model
{

    use HasFactory;

    protected $fillable=['user_id','user_name','prix_TTC_Total'];


    public function commandLists()
    {
        return $this->hasMany(CommandList::class);
    }

    public function scopeStore($query)
    {

        $totalTTC = Cart::getTotal();
        $commandList = Cart::getContent();


        $command=$query->firstOrCreate([

            'user_id'=>Auth::user()->id,
            'user_name'=>Auth::user()->name,
            'prix_TTC_Total'=>$totalTTC

        ]);

        foreach($commandList as $item){

            CommandList::create([
                'command_id'=>$command->id,
                'user_id'=>Auth::user()->id,
                'product_id'=>$item->id,
                'quantity'=>$item->quantity
            ]);
        }

    }

    public function scopeNotPaiedCount($query)
    {

        return $query->where('user_id', Auth::user()->id)->where('payement', false);

    }
}

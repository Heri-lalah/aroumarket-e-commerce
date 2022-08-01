<?php

namespace App\Models;
use Cart;
use App\Models\Command;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommandList extends Model
{
    use HasFactory;

    protected $fillable=['command_id','user_id','product_id','quantity'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}

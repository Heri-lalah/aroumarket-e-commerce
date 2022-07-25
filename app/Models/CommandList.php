<?php

namespace App\Models;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommandList extends Model
{
    use HasFactory;
    protected $fillable=['command_id','produit_id','quantity'];
    protected $commandList;
    protected $command;
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

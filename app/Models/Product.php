<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['name','prix_ht','description','photo_principal'];
    public function category()
    {
        return $this->hasOne(Category::class);
    }
}

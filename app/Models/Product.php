<?php

namespace App\Models;

use App\Models\Command;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Relations\belongsToMany;

class Product extends Model
{
    use HasFactory;

    private static $facteur_tva=1.2;

    protected $fillable=['name', 'prix_ht', 'description', 'photo_principal', 'category_id', 'promo', 'reduction', 'is_online', 'quantityStock'];


    public function orders():BelongsToMany
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }

    public function category()
    {

        return $this->belongsTo(Category::class);

    }

    public function prixTTC()
    {

        $prix_ttc=$this->prix_ht * self::$facteur_tva;

        return number_format($prix_ttc,2);

    }


    public function scopeNewProduct($query, $request)
    {

        $request->validate([
            "name" => ['required', 'min:4', 'max:15','unique:products,name'],
            "description" => ['required','min:5', 'max:50'],
            "prix_ht" => ['required','min:4'],
            "quantityStock" => ['required'],
            "category" => ['required'],
        ]);

        $request->photo->storeAs('public/assets/products',$request->name.'.jpg');

        $query->firstOrCreate([
            'name' => $request->name,
            'description' => $request->description,
            'prix_ht' => $request->prix_ht,
            'photo_principal' => $request->name.'.jpg',
            'category_id' => $request->category,
            'quantityStock' => $request->quantityStock,
            "is_online" => $request->boolean('is_online'),
            'promo' => $request->boolean('promo'),
            'reduction' => $request->reduction
        ]);
    }

    public function scopeOrderByName($query)
    {

        $query->Orderby('name');

    }

    public function scopeOnline($query)
    {

        return $query->where('is_online',true);

    }


    public function scopeOffline($query)
    {

        return $query->where('is_online',false);

    }

    public function scopeShowinAdmin($query, $online = Product::class)
    {
        if($online=='en_ligne'){
            return $query->where('is_online',true)->get();
        }elseif($online=='offline'){
            return $query->where('is_online',false)->get();
        }else{
            return $query->get();
        }
    }

    public function scopebyCategory($query, $product)
    {
        return $query->where('category_id', $product);
    }
}

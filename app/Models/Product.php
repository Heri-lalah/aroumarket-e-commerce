<?php

namespace App\Models;

use App\Models\Command;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    private static $facteur_tva=1.2;

    protected $fillable=['name','prix_ht','description','photo_principal'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function prixTTC()
    {
        $prix_ttc=$this->prix_ht * self::$facteur_tva;
        return number_format($prix_ttc,2);
    }
    public function commands()
    {
        return $this->hasMany(Command::class);
    }
}

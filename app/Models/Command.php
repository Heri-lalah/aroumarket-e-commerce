<?php

namespace App\Models;

use Cart;
use App\Models\User;
use App\Models\Payement;
use App\Models\CommandList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Command extends Model
{

    use HasFactory;

    protected $fillable=['user_id','user_name','prix_TTC_Total','admin_respo'];

    //Relation
    public function commandLists()
    {
        return $this -> hasMany(CommandList::class);
    }

    public function user()
    {
        return $this -> belongsTo(User::class);
    }

    public function payements()
    {
      return $this->hasMany(Payement::class);
    }

    //Enregistrer la commande et ses listes produits dans BDD.
    public function scopeStore($query)
    {


        $totalTTC = Cart::getTotal();

        $commandList = Cart::getContent();

        if(Gate::allows('admin')){
            abort(401);
        }

        $command=$query -> firstOrCreate([

            'user_id' => Auth::user() -> id,
            'user_name' => Auth::user() -> name,
            'prix_TTC_Total' => $totalTTC


        ]);

        foreach($commandList as $item){

            CommandList::create([
                'command_id' => $command -> id,
                'user_id' => Auth::user() -> id,
                'product_id' => $item -> id,
                'quantity' => $item -> quantity
            ]);
        }

        Cart::clear();

    }

    //Compter les commmandes non payés de l'user connecté
    public function scopeNotPaiedCount($query)
    {

        return $query -> where('user_id', Auth::user() -> id) -> where(['paied' => false]);

    }

    //Compter les divers types de commande et les affichers dans admin

    public function scopeShowinadmin($query, $status)
    {
        switch ($status) {
            //livré
            case 0 :

                return $query -> where(['paied' => true, 'delivred' => true, 'status'  => 'valid']);

                break;

            //en attente livraison
            case 1 :

                return $query -> where(['paied' => true, 'delivred' => false, 'status'  => 'valid']);

                break;

            //en attente validation
            case 2 :

                return $query -> where(['paied' => true, 'delivred' => false, 'status'  => 'standby']);

                break;

            //en attente payement
            case 3 :

                return $query -> where(['paied' => false, 'delivred' => false, 'status'  => 'standby']);

                break;

            default :

                return $query->orderByDesc('created_at');

                break;

        }

    }

    //Afficher la liste de livraison en cours de l'user admin connécté
    public function scopeMyLivraisons($query, $user)
    {

        return $query->where('admin_respo', $user)->where('statusLivraison', 'reserved')->get();

    }

    //Pour finaliser un commande reservé par l'user admin
    public function scopefinalisationLivraison ($query, $command)
    {

        $command = $query->findOrFail($command);

        $command->delivred = true;
        $command->statusLivraison = null;
        $command->livraisonDateTime = NOW();
        $command->save();

    }

}

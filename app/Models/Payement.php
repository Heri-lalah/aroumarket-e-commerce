<?php

namespace App\Models;

use App\Models\Command;
use Faker\Core\Number;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payement extends Model
{
    use HasFactory;

    protected $fillable=[
        'command_id',
        'paymentMode',
        'refPayement',
        'datePayement',
        'Montant',
        'user_payement'
    ];

    public function command()
    {
        return $this->belongsTo(Command::class);
    }

    public function scopeStore($query, $request, $command)
    {

        $request->validate([
            'paymentMode' =>'required',
            'refPayement' => 'required',
            'datePayement' => 'required',
            'montantpaied' => 'required',
        ]);

        $query -> firstOrCreate([
            'command_id' => $command,
            'paymentMode' => $request->paymentMode,
            'refPayement' => $request->refPayement,
            'datePayement' => $request->datePayement,
            'Montant' => $request->montantpaied,
            'user_payement' => Auth::user()->id
        ]);

        $thiscommand = Command::find($command);

        $prix_TTC_Total = intval($thiscommand->prix_TTC_Total);

        $montantpaied =intval($request->montantpaied);

        if($prix_TTC_Total <= $montantpaied){

            $thiscommand -> paied = true;

            $thiscommand -> status = 'valid';

            $thiscommand->save();

        }else{

            $thiscommand -> paied = true;

            $thiscommand -> status = 'standby';

            $thiscommand->save();

        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Command;
use App\Models\Payement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandController extends Controller
{

    public function view(Command $command)
    {

        return view('admin.commands.command',['command' => $command]);

    }

    public function topayement($command){

        return view('admin.commands.form.payment',['command' => $command]);

    }

    public function postpayement(Request $request, $command)
    {

        Payement::store($request, $command);

        return redirect(route('command_view',['command' => $command]));
    }

    public function reservation($command)
    {

        $command = Command::findOrFail($command);

        $command -> statusLivraison ='reserved';
        $command -> admin_respo = Auth::user()->id;
        $command -> save();

        return redirect(route('command_view',['command' => $command]));

    }

    public function MyLivraison($user)
    {
        $myLivraisons = Command::MyLivraisons($user);

        return view('admin.commands.form.livraison', compact('myLivraisons'));

    }

    public function postfinalisationLivraison($command)
    {

        Command::finalisationLivraison($command);

        return redirect(route('MyLivraison', ['user' => Auth::user()]));

    }
}

<?php
namespace App\Http\ViewComposers;

use App\Models\Command;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class AdminComposer{

    public function compose(View $view)
    {
        $view->with('commands_0', Command::Showinadmin(0)->count());
        $view->with('commands_1', Command::Showinadmin(1)->count());
        $view->with('commands_2', Command::Showinadmin(2)->count());
        $view->with('commands_3', Command::Showinadmin(3)->count());

        $view->with('mylivraisonreserved', Command::where('admin_respo', Auth::user()->id)->where('statusLivraison', 'reserved')->count());
    }
}

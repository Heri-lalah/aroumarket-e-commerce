<?php
namespace App\Http\ViewComposers;

use App\Models\Command;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class HeaderComposer{

    public function compose(View $view){

        $view->with('categories', Category::Online()->get());

        $view->with('commandnotpaied',Auth::user() ? Command::NotPaiedCount()->count() : 0);

    }

}

<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Cart;

class CartComposer {

    public function compose(View $view){

        $view -> with('content', Cart::getContent());

        $view->with('infoCarts', Cart::GetContent()->count());

        $view->with('totalTTC',Cart::getTotal());

    }

}

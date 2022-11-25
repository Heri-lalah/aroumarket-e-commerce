<?php

namespace App\Http\Controllers;

use App\View\Components\checkout\stripe;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    /**
     * @return view payement
     */

    public function create()
    {

        return (new stripe)->render();

    }

}

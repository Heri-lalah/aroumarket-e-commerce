<?php

namespace App\Http\Controllers;

use App\Repositories\CartRepositories;
use App\View\Components\checkout\stripe;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    /**
     * @return view payement
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {

        return view('payement.create');

    }

    public function purchase(Request $request)
    {

        $totalamount = (new CartRepositories)->totalTTC() * 100;

        $stripeCharge = $request->user()->charge(
            $totalamount, $request->paymentMethodId
        );

        return redirect()->back()->with(['message' => 'payment avec succès']);

    }

}

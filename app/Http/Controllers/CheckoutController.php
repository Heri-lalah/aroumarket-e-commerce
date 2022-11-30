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

        $user = auth()->user();
        $paymentMethodId = $request->paymentMethodId;
        $totalamount = (new CartRepositories)->totalTTC() * 100;

        try {

            $user->createOrGetStripeCustomer();
            $user->updateDefaultPaymentMethod($paymentMethodId);
            $user->charge($totalamount, $paymentMethodId);

        } catch (\Throwable $th) {
            return redirect()->back()->with('message','erreur payement, réessayez');

        }

        (new CartRepositories)->clear();

        return redirect()->back()->with('message', 'payment avec succès');

    }

}

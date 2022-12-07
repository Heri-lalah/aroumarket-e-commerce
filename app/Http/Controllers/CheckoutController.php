<?php

namespace App\Http\Controllers;

use App\Models\Order;
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

        Order::store();

        try {

            $user->createOrGetStripeCustomer();
            $user->updateDefaultPaymentMethod($paymentMethodId);
            $user->charge($totalamount, $paymentMethodId);

        } catch (\Throwable $th) {
            session()->flash('error', "Erreur payement, réessayez");
            return redirect()->back();
        }

        (new CartRepositories)->clear();

        session()->flash('success', "Payment avec succès");
        return redirect()->back();

    }

}

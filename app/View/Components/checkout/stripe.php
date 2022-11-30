<?php

namespace App\View\Components\checkout;

use App\Repositories\CartRepositories;
use Illuminate\View\Component;

class stripe extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $amount;
    public $intent;
    public $message;

    public function __construct($message = null)
    {
        $this->amount = (new CartRepositories)->totalTTC();
        $this->intent = auth()->user()->createSetupIntent();
        //$this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.checkout.stripe');
    }
}

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

    public function __construct()
    {
        $this->amount = (new CartRepositories)->totalTTC();
        $this->text = 'test';

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

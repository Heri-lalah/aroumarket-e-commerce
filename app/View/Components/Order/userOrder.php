<?php

namespace App\View\Components\Order;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class userOrder extends Component
{

    public $orders;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->orders = Auth::user()->orders()->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.order.user-order');
    }
}

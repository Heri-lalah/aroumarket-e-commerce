<?php

namespace App\View\Components\layouts;

use App\Http\Repositories\CartRepositories;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $infoCarts;

    public function __construct()
    {
        $this->infoCarts = (new CartRepositories)->getCount();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.navbar');
    }
}

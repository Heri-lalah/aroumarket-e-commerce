<?php

namespace App\View\Components\carts;

use App\Repositories\CartRepositories;
use Illuminate\View\Component;

class index extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $content;
    public $total;
    public $totalTTC;
    public $tva;

    public function __construct()
    {

        $this->content = (new CartRepositories)->getContent();
        $this->tva=(new CartRepositories)->tva();
        $this->total = (new CartRepositories)->total();
        $this->totalTTC = (new CartRepositories)->totalTTC();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.carts.index');
    }
}

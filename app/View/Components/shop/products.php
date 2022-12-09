<?php

namespace App\View\Components\shop;

use App\Models\Product;
use Illuminate\View\Component;

class products extends Component
{
    public $products;
    public $productsPromo;
    public $test;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->products = Product::all()->take(5);
        $this->productsPromo =Product::all()->take(1);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shop.products');
    }
}

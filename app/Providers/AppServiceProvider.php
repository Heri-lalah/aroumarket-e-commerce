<?php

namespace App\Providers;

//use Illuminate\View\View;

use App\Http\ViewComposers\AdminComposer;
use App\Http\ViewComposers\CartComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\HeaderComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer(['shop.products','cart.carts','cart.commandList','home','admin.products.form.product','admin.products.form.newProduct'],HeaderComposer::class);

        View::composer(['shop.products','cart.carts'], CartComposer::class);

        view()->composer(['admin.admin'], AdminComposer::class);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    
    public function home()
    {
        return view('welcome');
    }

    public function products()
    {
        return view('Pagination.products.products');
    }
}

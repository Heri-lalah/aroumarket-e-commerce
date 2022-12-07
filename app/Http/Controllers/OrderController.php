<?php

namespace App\Http\Controllers;

use App\Repositories\CartRepositories;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public  function store()
    {
        $all = (new CartRepositories())->getContent();
        dd($all);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Command;
use App\Models\CommandList;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(!Gate::allows('admin')){
            abort('401');
        }

        $admincount = User::Admin()->count();

        $userscount = User::Guest()->count();

        $onlineProductscount = Product::Online()->count();

        $offlineProductscount = Product::Offline()->count();

        return view('admin.admin', compact('admincount','userscount','onlineProductscount','offlineProductscount'));
    }
}

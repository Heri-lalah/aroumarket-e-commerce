<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Command;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{

    public function products($online)
    {

        $products = Product::ShowinAdmin($online);

        return view('admin.products.products', compact('products'));

    }


    public function users()
    {

        $users = User::ShowUser(false)->get();

        return view('admin.users.users',compact('users'));

    }

    public function usersAdmin()
    {
        $users = User::ShowUser(true)->get();

        return view('admin.users.users',compact('users'));
    }

    public function showcommands($status)
    {

        $commands = Command::Showinadmin($status)->get();

        $commandsCount = Command::Showinadmin($status)->count();

        return view('admin.commands.commands', compact('commands','commandsCount'));

    }
}

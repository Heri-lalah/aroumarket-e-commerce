<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('aroumarketinfo', [MainController::class,'about'])->name('about');
Route::get('', [MainController::class,'products'])->name('products');
Route::get('aroumarket_pt_{id}{category_id}', [MainController::class,'showproduct'])->name('showproduct');

Route::get('Services',[MainController::class,'services'])->name('services');

Route::get('aroumarket_ct_{id}',[MainController::class,'viewproductbycategory'])->name('viewproductbycategory');

Route::prefix('cart')->group(function () {
    Route::post('add/{id}',[CartController::class, 'add'])->name('cart_add');
    Route::get('list',[CartController::class, 'index'])->name('cart_index');
    Route::get('update/{id}',[CartController::class, 'cart_update'])->name('cart_update');
    Route::post('storeAll',[CartController::class,'storeAllCommands'])->name('storeAllCommands'); 
});

Route::get('CommandList',[CartController::class, 'cart_command'])->name('cart_command');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

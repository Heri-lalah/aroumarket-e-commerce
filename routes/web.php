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

Route::get('A-propos', [MainController::class,'about'])->name('about');
Route::get('', [MainController::class,'products'])->name('products');


Route::get('Produits/Catégorie/{id}',[MainController::class,'viewproductbycategory'])->name('viewproductbycategory');

Route::prefix('Panier')->group(function () {
    Route::post('ajout/{id}',[CartController::class, 'add'])->name('cart_add');
    Route::get('Listes',[CartController::class, 'index'])->name('cart_index');
    Route::get('Lists',[CartController::class, 'clearCommand'])->name('carts_clear');
    Route::get('update/{id}',[CartController::class, 'cart_update'])->name('cart_update');
    Route::post('EnvoieDeLaCommande',[CartController::class,'storeAllCommands'])->name('storeAllCommands')->middleware('auth');
});

Route::get('Commande/Listes',[CartController::class, 'cart_command'])->name('cart_command')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

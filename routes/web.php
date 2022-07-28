<?php

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
Route::get('Produit_{id}{category_id}', [MainController::class,'showproduct'])->name('showproduct');


Route::get('Services',[MainController::class,'services'])->name('services');

Route::get('Produits/Categorie:{id}',[MainController::class,'viewproductbycategory'])->name('viewproductbycategory');

Route::post('panier/add/{id}',[CartController::class, 'add'])->name('cart_add');
Route::get('MonPanier',[CartController::class, 'index'])->name('cart_index');
Route::get('SuiviCommandes',[CartController::class, 'cart_command'])->name('cart_command');
Route::post('',[CartController::class,'storeAllCommands'])->name('storeAllCommands');

Route::get('panier/update/{id}',[CartController::class, 'cart_update'])->name('cart_update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

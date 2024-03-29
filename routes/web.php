<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;

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

Auth::routes();

Route::get('A-propos', [MainController::class,'about'])->name('about');
Route::get('/', [MainController::class,'products'])->name('products');
Route::get('contact', [MainController::class,'contact'])->name('layout.contact');
Route::get('dashboard', [MainController::class, 'dashboard'])->name('layout.dashboard')->middleware('auth');
Route::post('contact-us', [MailController::class, 'contactMessage'])->name('contact.us.store')->middleware('auth');

//Routes produits
route::prefix('produits')->group(function(){
    Route::get('Catégorie/{id}',[MainController::class,'viewproductbycategory'])->name('viewproductbycategory');
    Route::get('{product}', [ShopController::class, 'show'])->name('product.show');
});

//Routes gestion Panier
Route::prefix('panier')->group(function () {
    Route::post('ajout/{id}',[CartController::class, 'add'])->name('cart_add');
    Route::get('listes',[CartController::class, 'index'])->name('cart_index');
    Route::get('Lists',[CartController::class, 'clearCommand'])->name('carts_clear');
    Route::get('update/increase/{id}',[CartController::class, 'increase'])->name('cart.increase');
    Route::get('update/decrease/{id}',[CartController::class, 'decrease'])->name('cart.decrease');
    Route::get('update/delete/{id}',[CartController::class, 'delete'])->name('cart.delete');
});

//Routes Commande
Route::prefix('commande')->group(function(){
    Route::post('store', [OrderController::class, 'store'])->name('order.store');
});


//Routes payement
Route::prefix('payement')->group(function(){
    route::get('', [CheckoutController::class, 'create'])->name("payement.index");
    route::post('/purchase', [CheckoutController::class, 'purchase'])->name("purchase");
});

Route::get('Commande/Listes',[CartController::class, 'cart_command'])->name('cart_command')->middleware('auth');



//Route::get('Administration',[AdminController::class,'index']);

Route::prefix('Admin')->middleware('auth')->group(function(){
    Route::get('', [HomeController::class, 'index'])->name('admin');
    Route::get('Gestion/Utilisateurs', [AdminController::class, 'users'])->name('users');
    Route::get('Gestion/Utilisateurs/Admin', [AdminController::class, 'usersAdmin'])->name('usersadmin');



    //Produits
    Route::get('produits/{online}',[AdminController::class,'products'])->name('admin_products');
    Route::get('produit/Nouveau',[ProductController::class, 'toNewProduct'])->name('toNewProduct');
    Route::post('produit/Nouveau',[ProductController::class, 'addNewProduct'])->name('addNewProduct');
    Route::get('produit/suppression',[ProductController::class, 'toDeleteProduct'])->name('toDeleteProduct');
    Route::put('produit/suppression/{product}',[ProductController::class, 'deleteProduct'])->name('deleteProduct');
    Route::get('produits/{product}/edit', [ProductController::class, 'showProduct'])->name('showproductinadmin');
    Route::post('produits/{product}/edit', [ProductController::class, 'updateProduct'])->name('editproductinadmin');
});

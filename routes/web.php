<?php

use Illuminate\Support\Facades\Route;
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

Route::get('a-propos', [MainController::class,'about'])->name('about');
Route::get('', [MainController::class,'products'])->name('products');
Route::get('products/{id}', [MainController::class,'showproduct'])->name('showproduct');


Route::get('services',[MainController::class,'services'])->name('services');

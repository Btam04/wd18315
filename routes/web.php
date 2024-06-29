<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    echo 'Trang chủ';

});

Route::get('list-products', [ProductController::class, 'showProduct']);
Route::get('get-product/{id}/{name?}', [ProductController::class, 'getProduct']);
//http://127.0.0.1:8000/update-product?id=2&name=iphone
Route::post('update-product', [ProductController::class, 'updateProduct']);
<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function() {
    return view('article');
});

Route::post('/product', [productController::class, 'store'] );

Route::view('/Page_article', [productController::class, 'afficher']);
<?php

use App\Http\Controllers\ProductController;
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
    return '<h1>Hello World</h1>';
});

Route::get('products', [ProductController::class, 'index']);

Route::get('products/{id}', [ProductController::class, 'show']);

Route::get('customers/{id?}', function ($id = 1) {
    return "Customer $id";
});

Route::get('customers/{id}/sales/{idSales?}', function ($id, $idSales = null) {
    if ($idSales === null) {
        return "The Customer $id has no sales";
    }
    return "The Customer $id had the sale $idSales";
});

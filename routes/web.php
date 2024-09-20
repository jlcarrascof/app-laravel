<?php

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

Route::get('products', function () {
    return 'Products Catalog';
});

Route::get('products/{id}', function ($id) {
    return "Details of the Product $id";
});

Route::get('customers/{id?}', function ($id = 1) {
    return "Customer $id";
});

Route::get('customers/{id}/sales/{idSales}', function ($id, $idSales) {
    return "The Customer $id had the sale $idSales";
});

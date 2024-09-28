<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function index()
    {
        return view('products.index');
    }

    public function show($name)
    {
        return view('products.show', ['product' => $name]);
    }

    public function create()
    {
        return view('products.create');
    }

}

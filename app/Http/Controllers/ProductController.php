<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        print_r($request->all());
    }

}

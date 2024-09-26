<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function index()
    {
        return "Controller Product Catalog";
    }

    public function show($name)
    {
        return "Controller Details of the Product $name";
    }

}

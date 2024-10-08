<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('products.index', ['id' => 5]);
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
        echo "<pre>";
        echo $request->input('name')."\n";
        echo $request->input('price');
        echo "</pre>";
    }

    public function edit($id)
    {
        return view('products.edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        echo "<pre>";
        echo $id."\n";
        echo $request->input('name')."\n";
        echo $request->input('price');
        echo "</pre>";
    }

    public function destroy($id)
    {
        echo "<pre>";
        echo "Record ".$id." deleted";
        echo "</pre>";
    }

}

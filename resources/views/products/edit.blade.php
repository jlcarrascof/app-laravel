@extends('layout/template')

@section('title', 'Edit Product')

@section('content')

<h2>Edit Product</h2>

<form action="{{ url('/products/'.$id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection

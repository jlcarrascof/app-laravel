@extends('layout/template')

@section('title', 'New Product')

@section('content')

<form action="{{ url('/products') }}" method="POST">
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

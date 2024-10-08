<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Catalog</title>
</head>
<body>
    <h1>Products Catalog</h1>

    <form action="{{ url('/products/'.$id) }}" method="POST">
        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn-danger">Delete</button>

    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>Products Catalog</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($myList as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->code }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->exist }}</td>
                    <td></td>
                    <td></td>
                </tr>
           @endforeach
        </tbody>
    </table>


    <!--
    <form action="" method="POST">
        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn-danger">Delete</button>

    </form>-->
</body>
</html>

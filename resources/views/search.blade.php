{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous">
    </script>
    <title>ProductsSearchs</title>


</head>

<body>
    <h2 style="color: greenyellow"> products of name {{ $name }} </h2>

    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>ID</th>
                <th style="color: blue">Name</th>
                <th>Price</th>
                <th style="color: blue">Category</th>
                <th>Created At</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th>{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->created_at }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
 <a href="{{ route('products.index') }}"> back to products</a>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Search</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <!-- Header & Back Button -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-dark">Products of name: <span class="text-primary">{{ $name }}</span></h2>
            <a href="{{ route('products.index') }}" class="btn btn-secondary fw-bold">Back to Products</a>
        </div>

        <!-- Products Table Card -->
        <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <th>{{ $product->id }}</th>
                                    <td class="fw-semibold text-primary">{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->category }}</td>
                                    <td>{{ $product->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

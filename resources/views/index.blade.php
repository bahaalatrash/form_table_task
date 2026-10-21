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
    <title>ProductsDashboard</title>

</head>

<body>
    <h2 style="color: greenyellow"> products </h2>

    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>ID</th>
                <th style="color: blue">Name</th>
                <th>Price</th>
                <th style="color: blue">Category</th>
                <th>Created At</th>
                <th> actions </th>

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
                    <td>
                        <a href=" {{ route('product.edit',$product->id) }}"> edit </a>
                        <form action="{{ route('product.destroy',$product->id) }}" method="Post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="color:darkred">delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>


    <div>
        {{ $products->links() }}
    </div>


    <a href="{{ route('products.create') }}">create new product </a><br>

</body>

<form action="{{ route('products.search') }}" method="get">
    @csrf
    <label for="search">search by name :</label>
    <input type="text" id="search" name="search">
    <button type="submit" , style="color: blue">search</button>
</form>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <!-- Header & Create Button -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-dark">Products Dashboard</h2>
            <a href="{{ route('products.create') }}" class="btn btn-success fw-bold">Create New Product</a>
        </div>

        <!-- Search Bar Card -->
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body">
                <form action="{{ route('products.search') }}" method="GET" class="row g-3 align-items-center">
                    @csrf
                    <div class="col-auto">
                        <label for="search" class="col-form-label fw-semibold">Search by name:</label>
                    </div>
                    <div class="col-auto flex-grow-1">
                        <input type="text" id="search" name="search" class="form-control" placeholder="Enter product name...">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary fw-bold">Search</button>
                    </div>
                </form>
            </div>
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
                                <th class="text-center">Actions</th>
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
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-warning fw-bold">Edit</a>
                                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="m-0">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger fw-bold">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center mt-4">
            {{ $products->links() }}
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

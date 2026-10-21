{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $product->name}}">
        <label for="price">Price:</label>
        <input type="number" name="price" value="{{ $product->price }}">
        <label for="category">Category:</label>
        <input type="text" name="category" value="{{ $product->category }}">
        <label for="description">Description:</label>
        <input type="text" name="description" value="{{ $product->description }}">


        <button type="submit" style="color: rgb(207, 241, 13)">update</button>
    </form>

</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h4 class="mb-0 fw-bold">Edit Product</h4>
                    </div>
                    <div class="card-body p-4">

                        <form action="{{ route('product.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label fw-semibold">Price:</label>
                                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label fw-semibold">Category:</label>
                                <input type="text" class="form-control" id="category" name="category" value="{{ $product->category }}">
                            </div>

                            <div class="mb-4">
                                <label for="description" class="form-label fw-semibold">Description:</label>
                                <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-warning text-dark fw-bold py-2">Update Product</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

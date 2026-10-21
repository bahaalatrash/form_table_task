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
    <title>ProdcutCreate</title>
</head>

<body>
    <h4 style="color: greenyellow"> enter your product details down below , description optional</h4>

    <form action="{{ route('products.store') }}" method="Post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price"><br><br>
        <label for="category" >Category:</label>
        <input type="text" id="category" name="category" placeholder="e.g., electronics, clothing, food"><br><br>
        <label for="description">Description:</label>
        <input type="text" id="description" name="description" placeholder="optional"><br><br>


        <button type="submit" , style="color: blue">submit</button>

    </form>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Create</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-header bg-success text-white text-center py-3">
                        <h4 class="mb-0 fw-bold">Add New Product</h4>
                    </div>
                    <div class="card-body p-4">

                        <p class="text-muted text-center mb-4">Enter your product details down below, description optional</p>

                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Name:</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label fw-semibold">Price:</label>
                                <input type="number" class="form-control" id="price" name="price">
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label fw-semibold">Category:</label>
                                <input type="text" class="form-control" id="category" name="category" placeholder="e.g., electronics, clothing, accessories">
                            </div>

                            <div class="mb-4">
                                <label for="description" class="form-label fw-semibold">Description:</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="optional">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-bold py-2">Submit</button>
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

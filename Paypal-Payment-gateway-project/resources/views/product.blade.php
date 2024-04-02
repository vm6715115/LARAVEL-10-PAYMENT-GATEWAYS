<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Items</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h2 class="my-4">Shop Items</h2>
        <div class="row">
            <!-- Item 1 -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('uploads/1.jpg') }}" class="card-img-top" alt="Item 1">
                    <div class="card-body">
                        <h5 class="card-title">Item 1</h5>
                        <p class="card-text">Description of Item 1.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">

                                <form action="{{ route('paypal.payment') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="10" name="price">
                                    <button type="submit" class="btn btn-sm btn-outline-secondary">Buy</button>
                                </form>

                            </div>
                            <small class="text-muted">$10</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('uploads/2.jpg') }}" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <h5 class="card-title">Item 2</h5>
                        <p class="card-text">Description of Item 2.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Buy</button>
                            </div>
                            <small class="text-muted">$15</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('uploads/3.jpg') }}" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <h5 class="card-title">Item 3</h5>
                        <p class="card-text">Description of Item 3.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Buy</button>
                            </div>
                            <small class="text-muted">$25</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more items here -->
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <title>Search</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 m-auto">
                <h3 class="text-center mb-3">
                    <i class="fas fa-flag-usa"></i> Enter Product Search
                </h3>

                <div class="form-group">
                    <input type="text" name="" id="" class="form-control form-control-lg" placeholder="Enter Product Name">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-sm btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

        <div class="container">
          
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/products/graphic-designer.jpg') }}" width="200px;" height="200px;">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>

                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/products/laptop.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/products/laptop.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Product One</p>
                        </div>
                      </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://placeholder.com/150" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    <script src="main.js"></script>
</body>
</html>
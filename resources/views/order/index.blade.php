<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bkash Integration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>

<body class="" style="background-color: #eee;">



<section>
  <div class="container py-5">
    <h2 class="text-center p-5">List of Products</h2>
    <div class="row">

      @foreach($products as $product)
      <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
        <div class="card">
          <div class="card-body">

            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0">{{ $product->name }}</h5>
              <h5 class="text-dark mb-0">$ {{ $product->price }}</h5>
            </div>


            <a href="{{ url('checkout', ['productID' => $product->id]) }}" class="btn btn-success">
              Checkout 
            </a>
          </div>
        </div>
      </div>
      @endforeach

      
      
    </div>
  </div>
</section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

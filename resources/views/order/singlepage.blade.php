<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bkash Integration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>

<body>



    <div class="container">
        <div class="row p-5">
            <h3 class="p-3">Single product</h3>
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{$order->product_name}}</h5>
                    <p class="card-text mb-1">{{$order->amount}} tk.</p>
                    <p class="card-text mb-1">{{$order->invoice}}</p>

                    <form action="{{route('bkash-create-payment')}}" method="post">
                        @csrf
                        <button type="submit" name="bkash-payment">Pay Now</button>
                    </form>

                </div>

            </div>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
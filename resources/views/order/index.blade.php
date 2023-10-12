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
        <h2 class="text-center p-5">List of orders</h2>
           <table class="table table-striped table-warning">
             <thead>
               <tr>
                 <th scope="col">#</th>
                 <th scope="col">Product Name</th>
                 <th scope="col">Currency</th>
                 <th scope="col">Amount</th>
                 <th scope="col">Invoice</th>
                 <th scope="col">TrxID</th>
                 <th scope="col">Status</th>
                 <th scope="col">Action</th>
               </tr>
             </thead>
             <tbody>
             @foreach($orders as $index=>$order)
               <tr>
                 <td>{{ $index++ }}</td>
                 <td>{{ $order->product_name }}</td>
                 <td>{{ $order->currency }}</td>
                 <td>{{ $order->amount }}</td>
                 <td>{{ $order->invoice }}</td>
                 <td>{{ $order->trxID }}</td>
                 <td>{{ $order->status }}</td>
                 <td>
                    <a href="{{ route('orders.show', $order->id) }}">
                    <i class="bi bi-eye"></i>
                    </a>
                 </td>
               </tr>
               @endforeach
             </tbody>
           </table>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <title>Laravel Shopping Cart Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
    integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-3">Laravel Add To Shopping Cart Example</h2>

    <div class="col-12">
        <div class="dropdown" >
            <a class="btn btn-outline-dark" href="{{ route('shopping.cart') }}">
               <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge text-bg-danger">{{ count((array) session('cart')) }}</span>
            </a>
        </div>
    </div>
</div>

<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
    @endif
    @yield('content')
</div>

@yield('scripts')
</body>
</html>

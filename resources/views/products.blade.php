@extends('shop')

@section('content')

<div class="row">
    @foreach($meats as $meat)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <img src="{{ url('img/' . $meat->image) }}" alt="{{ $meat->name }}" class="card-img-top" height="100px" width="100px">
                <div class="card-body">
                    <h4 class="card-title">{{ $meat->name }}</h4>
                    <p>{{ $meat->bio }}</p>
                    <p class="card-text"><strong>Price: </strong> ${{ $meat->price }}</p>
                    <p class="btn-holder"><a href="{{ route('addmeat.to.cart', $meat->id) }}" class="btn btn-outline-danger">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection

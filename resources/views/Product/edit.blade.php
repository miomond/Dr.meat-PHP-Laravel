@extends('Product.app')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Trip</div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $product->id }}" />
                <label>name</label>
                <input type="text" name="name" id="name" value="{{ $product->name }}" class="form-control">
                <label>bio</label>
                <input type="text" name="bio" id="bio" value="{{ $product->bio }}" class="form-control">
                <label>price</label>
                <input type="text" name="price" id="price" value="{{ $product->price }}" class="form-control">
                <label>Image</label>
                <input type="file" name="image" id="image" value="{{ $product->image }}" class="form-control">
                <input type="submit" value="Update" class="btn btn-success">
            </form>

        </div>
    </div>

@endsection

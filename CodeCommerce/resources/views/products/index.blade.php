@extends('app')

@section('content')
    <div class="container">
        <h1>Products</h1>

        <a href="{{ route('products.create') }}" class="btn btn-default">New Products</a>
        <br>
        <br>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>

            @foreach($products as $Products)
                <tr>
                    <th>{{ $Products->id }}</th>
                    <th>{{ $Products->name }}</th>
                    <th>{{ $Products->Description }}</th>
                    <th>{{ $Products->price }}</th>
                    <th>
                        <a href="{{ route('products.edit', ['id'=>$Products->id]) }}">Edit</a> |
                        <a href="{{ route('products.destroy', ['id'=>$Products->id]) }}">Delete</a>
                    </th>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
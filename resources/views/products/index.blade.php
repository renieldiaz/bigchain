@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Products</h5>
        <a href="/products/create">Create Product</a>
        <ol>
            @foreach ($products as $product)
            <li> <a target="_blank" href="/products/{{$product->id}}">{{ $product -> name }} {{ $product ->  image }}</a>
            </li>
            @endforeach
        </ol>
    </div>
</div>
@endsection
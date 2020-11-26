@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Stores</h5>
        <a href="/stores/create">Create Store</a>
        <ol>
            @foreach ($stores as $store)
            <li> <a target="_blank" href="/stores/{{$store->id}}">{{ $store -> store_name }} {{ $store ->  store_address }}</a>
            </li>
            @endforeach
        </ol>
    </div>
</div>
@endsection
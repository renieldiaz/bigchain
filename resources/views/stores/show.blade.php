@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card pink darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">{{ $store -> store_name }} {{ $store -> address }}</span>
                        <h6 style="margin-left: 1em">Store:</h6>
                        <p style="margin-left: 2em">{{ $store ->  store_name }}</p>
                        <h6 style="margin-left: 1em">Address:</h6>
                        <p style="margin-left: 2em">{{ $store -> address }}</p>
            
                    </div>
                    <div class="card-action pink darken-3">
                        <a class="pink-text text-lighten-5" href="/stores/{{$store->id}}/edit">Edit</a>
                        <a class="pink-text text-lighten-5" href="/stores/{{$store->id}}/delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
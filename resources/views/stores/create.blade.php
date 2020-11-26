@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Store</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/stores" method="POST">
                @csrf
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Placeholder" id="store_name" type="text" class="validate" name="store_name">
                        <label for="store_name">Store Name</label>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="address" type="address" class="validate" name="address">
                            <label for="address">Store Address</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select id="products" name="product_id">
                            @foreach ($products as $product)
                            <option value="{{$product->id}}">{{$product->name}}: {{$product->image}}</option>
                            @endforeach
                        </select>
                       
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <button class="btn waves-effect waves-light pink darken-3" type="submit" name="action">Create
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
@endsection
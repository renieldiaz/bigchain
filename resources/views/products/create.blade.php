@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Product</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/products" method="POST">
                @csrf
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Placeholder" id="name" type="text" class="validate" name="name">
                        <label for="name">Product Name</label>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="image" type="image" class="validate" name="image">
                            <label for="image">Image</label>
                        </div>
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
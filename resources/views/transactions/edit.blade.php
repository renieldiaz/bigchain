@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Product</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/transactions" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Placeholder" id="status" type="text" class="validate" name="status">
                        <label for="status">Transaction status</label>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="quantity" type="text" class="validate" name="quantity">
                            <label for="quantity">Quantity</label>
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
@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Transactions</h5>
        <a href="/transactions/create">Create Transaction</a>
        <ol>
            @foreach ($transactions as $transaction)
            <li> <a target="_blank" href="/transaction/{{$transaction->id}}">{{ $transaction -> status }} {{ $transaction ->  quantity }}</a>
            </li>
            @endforeach
        </ol>
    </div>
</div>
@endsection
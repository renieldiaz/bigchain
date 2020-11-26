@extends('layouts.master')

@section('content')
<div class="container">
	<div class="section">
		<divc class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-image">
						<img src="{{ $product ->image }}" width="150px">
						<span class="card-title">{{ $product -> name }}</span>
					</div>
					<div class="card-content">
						<h6>Transactions:</h6>
						<table>
							<thead>
								<tr>
									<tr class="center-align">ID</tr>
									<tr class="center-align">Date</tr>
									<tr class="center-align">Status</tr>
									<tr class="center-align">Quantity</tr>
									<tr class="center-align">Do</tr>
								</tr>
							</thead>
							<tbody>
								<tr>
									@foreach ($product->transactions as $transaction)
									<tr class="center-align">{{$transaction->id}}</tr>
									<tr class="center-align"><a href="/transactions/{{$transaction->id}}">{{$transaction->status}}</a></tr>
									<tr class="center-align">{{$transaction->quantity}}</tr>
									<tr class="center-align">{{$transaction->updated_at}}</tr>
									<tr class="center-align"><a href="/transactions/{{$transaction->id}}/edit">Edit</a></tr>
									<tr class="center-align"><a href="/transactions/{{$transaction->id}}/delete">Delete</a></tr>
								</td>
								@endforeach
								</tr>
							</tbody>
						</table>
					</div>
					<div class="card-action teal darken-3">
						<a class="teal-text text-lighten-5" href="/products/{{$product->id}}/edit">Edit</a></tr>
						<a class="teal-text text-lighten-5" href="/products/{{$product->id}}/delete">Delete</a></tr>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	

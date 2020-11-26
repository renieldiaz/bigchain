<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Store;
use App\Product;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
      public function index()
    {
    	$transactions = Transaction::all();
    	return view('transactions.index' , compact('transactions'));
    }
    public function create(){
        $products = Product::all();
    	return view('transactions.create' , compact('products'));
    }

    
    public function show($transactionId){
        $transaction = Transaction::find($transactionId);
    	return view('transactions.show' , compact('transaction'));
    }

    
    public function edit($transactionId){
        $products = Product::all();
        $transaction = Transaction::find($transactionId);
    	return view('transactions.edit' , compact('products'));
    }

    
    public function store(){

        // Create a new Product
        $validate_fields = request()->validate([
            'name' => 'required',
            'image' => 'required',
            'store_id' => 'required'
        ]);

        $transaction = Transaction::create($validate_fields);
        return redirect('/transactions');
    }

    public function update(Transaction $transaction){


          $validate_fields = request()->validate([
            'name' => 'required',
            'image' => 'required',
            'store_id' => 'required'
        ]);

        $transaction->update($validate_fields);
        return redirect('/transactions/' .$transaction->id);
    }

    public function delete($transactionId){
        $transaction = Transaction::find($transactionId);
        return view('transactions.delete', compact('transaction'));
    }

    public function destroy(Transaction $transaction){
        $transaction->delete();
        return redirect('/transactions');
    }
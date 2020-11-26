<?php

namespace App\Http\Controllers;

use App\Product;
use App\Transaction;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
      public function index()
    {
    	$products = Product::all();
    	return view('products.index' , compact('products'));
    }
    public function create(){
        $stores = Store::all();
    	return view('products.create' , compact('stores'));
    }

    
    public function show($productId){
        $products = Product::find($productId);
    	return view('products.show' , compact('product'));
    }

    
    public function edit($productId){
        $products = Product::find($productId);
        $stores = Store::all();
    	return view('products.edit' , compact('stores'));
    }

    
    public function store(){

        // Create a new Product
        $validate_fields = request()->validate([
            'name' => 'required',
            'image' => 'required',
            'store_id' => 'required'
        ]);

        $product = Product::create($validate_fields);
        return redirect('/products');
    }

    public function update(Product $product){


          $validate_fields = request()->validate([
            'name' => 'required',
            'image' => 'required',
            'store_id' => 'required'
        ]);

        $product->update($validate_fields);
        return redirect('/products/' .$product->id);
    }

    public function delete($productId){
        $product = Product::find($productId);
        return view('products.delete', compact('product'));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect('/products');
    }
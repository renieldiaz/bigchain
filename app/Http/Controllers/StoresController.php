<?php

namespace App\Http\Controllers;

use App\Store;
use App\Product;
use Illuminate\Http\Request;

class StoresController extends Controller
{
      public function index()
    {
    	$stores = Store::all();
    	return view('stores.index' , compact('stores'));
    }
    public function create(){
        return view('stores.create');
    }

    
    public function show($storeId){
        $store = Store::find($storeId);
        return view('stores.show', compact('store'));
    }

    
    public function edit($storeId){
        $store = Store::find($storeId);
        return view('stores.edit');
    }

    
    public function store(){

        // Create a new Post
        $validate_fields = request()->validate([
            'store_name' => 'required',
            'address' => 'required'
        ]);

        $store = Store::create($validate_fields);
        return redirect('/stores');
    }

    public function update(Store $store){


          $validate_fields = request()->validate([
            'store_name' => 'required',
            'address' => 'required'
        ]);

        $store->update($validate_fields);
        return redirect('/stores/' .$store->id);
    }

    public function delete($storeId){
        $store = Store::find($storeId);
        return view('stores.delete', compact('store'));
    }

    public function destroy(Store $store){
        $store->delete();
        return redirect('/stores');
    }
}
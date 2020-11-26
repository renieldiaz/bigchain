<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function transaction()
    {
       return $this->hasMany(Transaction::class);
    }
    public function store()
    {
    	return $this->belogsTo(Store::class);
    }
}

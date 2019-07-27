<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getRecentAddProducts(){
        $getProducts = Product::orderBy('id', 'desc')->take(3)->get();
        return $getProducts;
    }
}

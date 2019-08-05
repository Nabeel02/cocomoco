<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getRecentAddCategory(){
        $getCategories = Category::orderBy('id', 'desc')->take(8)->get();
        return $getCategories;
    }


    public function relatedProducts(){
        return $this->hasMany('App\Product','category_id');
    }
}

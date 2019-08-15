<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');   
    }

    public function store(Request $request)
    {
        // if($request != null){
        //     return $request;
        // }
        return view('pages.cart');
    }
}

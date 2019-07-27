<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Product;
use \App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        // This snippet is for retrieving last 5 products
        // $data = array();
        $product = new Product();
        $recentPro = $product->getRecentAddProducts();
        // if(!null){
        //     $data = $recentPro;
        // }

        $category = new Category();
        $recentCategory = $category->getRecentAddCategory();

        // foreach($recentCategory as $category){
        //     echo $category->category_image;
        // }

        if(Auth::check()){
            $users =  Auth::user();
        }
        $data = [
            'recentPro' => $recentPro,
            '$users' => $users,
            'recentCategory'=> $recentCategory,
        ];
        return view('pages.index')->with($data);
    }
}

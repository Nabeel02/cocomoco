<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use App\Product;
// 
use Cart;
// use Gloudemans\Shoppingcart\Cart;
use Intervention\Image\ImageManagerStatic as Image;
use App\ShoppingCart;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $product = new Product();
        $data =[
            'product' =>  $product->all(),
        ];
        return view('pages.products')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->exists('name') && $request->exists('product_description') && $request->exists('product_image')){
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'price' => 'required',
                'discountedPrice' => 'required',
                'product_description' => 'required',
                'product_image' => 'required',
            ]);
            if($validatedData){
                if($file = $request->file('product_image')){
                    $image = $request->file('product_image');
                    $img = time().'.'.$image->getClientOriginalExtension();
                    // $imageName = $image->getClientOriginalName();
                    $watermark = Image::make($file->getRealPath());
                    $destinationPath = public_path('/images/product');
                    Image::make($image->getRealPath())->resize(300, 300, function ($constraint) {
                        $constraint->aspectRatio();
                    })->insert($watermark, 'center')->save($destinationPath.'/'.$img);
                    
                    $product = new Product();
                    $product->name = $request->name;
                    $product->price = $request->price;
                    $product->discountedPrice = $request->discountedPrice;
                    $product->product_image = $img;
                    $product->product_description = $request->product_description;

                    $product->save();

                    return 'Content added';
                }
            }
        }
        return view('admin.product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        
        if(count($request->all()) > 0){
            $validatedData = $request->validate([
                'quantity' => 'required',
            ]);
            // return $request->all();
            if($validatedData){
                // return $request->ProductPrice;
                // return $request->all();
                // dd($request);
                // $reuiredData = [];
                // return Cart::instance(Auth::user()->email)->content();
                Cart::instance(Auth::user()->email)->add($request->userId, $request->productName, $request->quantity, $request->ProductPrice);
                // foreach(Cart::instance(Auth::user()->email)->content() as $cart){
                //     echo $cart->name.'</br>';
                // }
                // dd(Cart::instance(Auth::user()->email)->content());
                $cart = new ShoppingCart();
                $cart->userid = $request->userId;
                $cart->Instance = Auth::user()->email;
                $cart->productname = $request->productName;
                // $cart->option = "['size'=>3]";
                // $cart->rowId = 
                $cart->quantity = $request->quantity;
                $cart->price = $request->ProductPrice;

                $cart->save();

                return redirect()->route('showCart')->with('success','The item haas been added');
            }
        }
        $product = new Product();
        $data = [];
        $fetchedPro = $product->where('id',$id)->get();

        $data = [
            'fetchedPro' => $fetchedPro,
        ];
        if(count($product->where('id',$id)->get()) > 0){
            return view('pages.singleproduct')->with($data);
        }

    }

    public function cart(Request $request){
        
        return view('pages.cart');
        return $request->all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

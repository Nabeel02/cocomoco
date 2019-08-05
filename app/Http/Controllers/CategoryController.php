<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $categories = new Category();
        $data = [
            'categories' => $categories->all(),
        ];
        return view('pages.categories')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->exists('name') && $request->exists('category_description') && $request->exists('category_image')){
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'category_description' => 'required',
                'category_image' => 'required',
            ]);
            if($validatedData){
                if($file = $request->file('category_image')){
                    $image = $request->file('category_image');
                    $img = time().'.'.$image->getClientOriginalExtension();
                    // $imageName = $image->getClientOriginalName();
                    $watermark = Image::make($file->getRealPath());
                    $destinationPath = public_path('/images/category');
                    Image::make($image->getRealPath())->resize(300, 300, function ($constraint) {
                        $constraint->aspectRatio();
                    })->insert($watermark, 'center')->save($destinationPath.'/'.$img);
                    
                    $category = new Category();
                    $category->name = $request->name;
                    $category->product_image = $img;
                    $category->product_description = $request->product_description;

                    $category->save();

                    return 'Content added';
                    // return $request->name.'</br>'.$request->product_description.'</br>'.$request->product_image.$request->exists('name');
                }
            }
        }
        return view('admin.category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return $id;
        $data = [];
        $categories = new Category();
        $data = [
            'categories' => $categories->all(),
        ];
        return view('pages.categories')->with($data);
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

    public function singleCategory($id){
        $categories = new Category();
        $relatedProducts = $categories->find($id)->relatedProducts;
        
        foreach ($relatedProducts as $product) {
            return $product;
        }
    }
}

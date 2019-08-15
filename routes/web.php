<?php
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', MainController@index);



Auth::routes();
// This portion is for home controller
Route::get('/', 'HomeController@index')->name('home');
// this is the end of home controller

// this portion is for product controller
Route::get('/product/{product_name}', 'ProductController@show')->name('showProduct');
Route::post('/product/{product_name}', 'ProductController@show')->name('showProductForm');

Route::get('product', 'ProductController@index')->name('showAllProducts');
// this is the end of product controller

// This portion is for category controller
Route::get('/category', 'CategoryController@index')->name('showCategory');

Route::get('category/{category_id}', 'CategoryController@singleCategory')->name('singleCategory');
// This is the end of category controller

// This portion is for single product

// Route::get('/singleproduct/{id}', 'ProductController@show')->name('singleProduct');

// This is the end of single product 

// This portion is for admin 

Route::get('/admin', 'AdminController@index')->name('admnView');

Route::post('/productstore', 'ProductController@store')->name('productstore');
Route::get('/productstore', 'ProductController@store')->name('productForm');

Route::post('categorystore', 'CategoryController@store')->name('categorystore');
Route::get('categorystore', 'CategoryController@store')->name('categoryForm');

// This is the end of admin

// This is the start of cart
Route::get('/cart', 'CartController@store')->name('showCart');

Route::get('/destroy', function(){
    Cart::instance(Auth::user()->email)->destroy();
    return Cart::instance(Auth::user()->email)->content()->count();
});

// Route::post('/cart','CartController@store')->name('addCart');
// This is the end of cart

// This portion is for logout

Route::get('/logout', function(){
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

// This is the end of logout
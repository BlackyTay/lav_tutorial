<?php

use App\Product;
use Illuminate\Support\Facades\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products','ProductController');

Route::any('/search',function(){
    $search = Request::get ( 'search' );
    $product = Product::where('name','LIKE','%'.$search.'%')->orWhere('detail','LIKE','%'.$search.'%')->get();
    if(count($product) > 0)
        return view('products.search')->with('products', $product)->withQuery ( $search )->with('i', '0');
    else return view ('products.search')->withMessage('No product found. Try to search with different keyword !');
});

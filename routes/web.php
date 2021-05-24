<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Test;
use App\Models\products;

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
    $products=products::all();

    return view('products',['products' =>$products]);
});

Route::get('/product/{prod}', function (products $prod) {
    //$product = products::find($id);
    return view('product',['product'=> $prod] );
});


// //Inserting items in Products table
//  Route::get('/create_product',function(){
//      products::create([
//         'product_name'=> 'Smart TV',
//         'product_desc'=> 'This is very nice Tv',
//         'price'=>'100000',
//         'image'=>''
//      ]);
//  });

// // //Getting items from product table
// // Route::get('/get_product',function(){
// //         $products = products::get();
// //         return $products;
// // });

Route::get('/home',function(){
    
    $products = products::all();
    return view('home', ['products' => $products]);
});


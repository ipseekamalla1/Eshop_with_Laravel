<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Test;
use App\Models\products;
use App\Models\Category;

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
    
    $products = products::latest()->get();
    //select = from product order by created_at DESC
    return view('home', ['products' => $products]);
});

Route::get('/categories/{category}',function(Category $category){
    
    //$products = products::whereCategoryId($category->id)->get();
    $products = $category->products;
    return view('category', ['products' => $products, 'category'  => $category]);
});


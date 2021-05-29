<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Test;
use App\Models\products;
use App\Models\Category;
use App\Http\Controllers\ProductsController;
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

Route::get('/home',[ProductsController::class,'index']);


Route::get('/categories/{category}',function(Category $category){
    
    //$products = products::whereCategoryId($category->id)->get();
    $products = $category->products;

    return view('category', ['products' => $products, 'category'  => $category]);
});

//admin routing

Route::get('/admin/products', [App\Http\Controllers\Admin\ProductsController::class, 'index'])->name('product_list');

Route::get('/admin/products/create', [App\Http\Controllers\Admin\ProductsController::class, 'create'])->name('create_product');

Route::post('/admin/products/store', [App\Http\Controllers\Admin\ProductsController::class, 'store']);


Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

Route::get('/admin/products/edit/{product}', [App\Http\Controllers\Admin\ProductsController::class, 'edit']);

Route::post('/admin/products/update/{product}',[App\Http\Controllers\Admin\ProductsController::class,'update']);
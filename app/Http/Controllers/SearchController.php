<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class SearchController extends Controller
{
    public function search(){
        //return request(['search', 'category']);
        $products = products::latest();
        if( request('search') != ' '){
            $products->where('product_name','like','%'.request('search').'%')
            ->orWhere('product_desc','like','%'.request('search').'%');
        }
        return view('products', ['products' => $products->get() ]);
    }
}

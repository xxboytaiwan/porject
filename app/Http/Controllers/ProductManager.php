<?php

namespace App\Http\Controllers;


use App\Product;
use App\ProductTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductManager extends Controller
{
    public function index(){
        $news = DB::table('newstest')->get();
        $products = Product::with('ProductTypes')->get();
        // dd($products[0]->ProductTypes->type_name);
        return view('/product_manager/index',compact('products','news'));
    }
    public function create(){
        return view('/product_manager/create');
    }

}

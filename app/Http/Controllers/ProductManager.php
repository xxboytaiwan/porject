<?php

namespace App\Http\Controllers;


use App\Product;
use App\ProductTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductManager extends Controller
{
    public function index(){

        $products = Product::with('ProductTypes')->get();

        return view('/product_manager/index',compact('products'));
    }
    public function create(){
        return view('/product_manager/create');
    }

}

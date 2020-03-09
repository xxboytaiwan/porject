<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('ProductTypes')->get();
        // dd($products->ProductTypes->type_name);
        return view('/product_manager/products/index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_types = DB::table('product_types')->get();
        return view('/product_manager/products/create',compact('product_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request_data = $request->all();
        // dd($request_data);
        if ($request->hasfile('img')) {
            $path = $request->file('img') ->store('','public');
            $request_data['img'] = $path;
        }
        
        Product::create($request_data);
        return redirect('/product_manager/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $products = DB::table('products')->find($id);
        
        $product_types = DB::table('product_types')->get();

        $product_typename = ProductTypes::with('Products')->where('id',$products->type_id)->get();
        
        return view('/product_manager/products/edit',compact('products','product_types','product_typename'));
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
        $request_data = $request ->all();
        if ($request->hasfile('img')) {
            $old_img = Product::find($id)->img;
           
            Storage::disk('public')->delete($old_img);
            $path = $request->file('img') ->store('','public');
            $request_data['img'] = $path;
        }
        Product::find($id) ->update($request_data);
        return redirect('/product_manager/products/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        Storage::disk('public')->delete($product->img);
        $product->delete();
        return redirect('/product_manager/products/');
    }
}

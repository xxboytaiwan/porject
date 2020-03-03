<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('content/home');
    }
    public function news(){
        $news = DB::table('newstest')->get();
        return view('content/card',compact('news'));
    }
    public function hollow(){
        return view('content/hollow');
    }
    public function pic(){
        return view('content/pics');
    }
}

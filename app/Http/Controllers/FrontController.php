<?php

namespace App\Http\Controllers;
use DB;

use App\Contact;
use App\Product;

use App\Session;
use App\Mail\ContactMail;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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
    public function contact(){
        return view('content/contact');
    }
    public function contactcreate(Request $request){

        $request->validate([
            'g-recaptcha-response' => 'recaptcha',
            // OR since v4.0.0
            recaptchaFieldName() => recaptchaRuleName()
        ]);
        $request_data = $request->all();
        Contact::create($request_data);
        Mail::to('xxboytaiwan@hotmail.com')->send(new OrderShipped($request_data));
        return redirect('/contact');
    }

    public function shopping(){
        $products = Product::get();

        return view('/shopping/index',compact('products'));
    }
    public function shopping_cart(Request $request){

        $request_data = $request->all();
        Session::create($request_data);
    }
}

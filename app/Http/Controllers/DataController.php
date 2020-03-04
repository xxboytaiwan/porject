<?php

namespace App\Http\Controllers;

use App\News;
use App\Update;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = DB::table('newstest')->get();
        return view('auth/data/index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth/data/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news_data = $request ->all();
        $file_name = $request->file('img')->store('','public');
        
        $news_data['img']=$file_name;

        News::create($news_data) -> save();
        // dd($file_name);
        return redirect('/card');
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
        $news = DB::table('newstest')->find($id);
       
        return view('auth/data/update',compact('news'));
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
        // $news = News::find($id);
        // $news->img = $request->img;
        // $news->context = $request->context;
        // $news->save();
        // $old_img = $request->file('img');
        $item = News::find($id);
        $old_img = $item->img;
        // dd($old_img);
        

        $news_data = $request ->all();
        
        if ($request->hasFile('img')) {
            Storage::disk('public')->delete($old_img);
            $file_name = $request->file('img')->store('','public');
            $news_data['img']=$file_name;
        }
        else {
            $news_data['img'] = $old_img;
        }
        
        // dd($file_name);
        
        // dd($news_data['img']);
        News::find($id) ->update($news_data);

        return redirect('/data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = News::find($id);
        $old_img = $item->img;
        Storage::disk('public')->delete($old_img);
        DB::table('newstest')->delete($id);

       return redirect('/data');
    }
}

<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsImgs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RelationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = DB::table('newstest')->get();
        return view('/Relation/index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/Relation/create');
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

        //單筆
        $img = $request->file('img');
        $img_id = $request->id;

        $name_img  = $request->file('img')->store('','public');
        $request_data['img'] = $name_img;
        News::create($request_data);

        //多筆
        $img_group = $request->file('img_group');
        // dd($img_group);
        if($request->hasFile('img_group'))
        {

            foreach ($img_group as $file) {
                $path = $file->store('','public');

                $NewsImgs = new NewsImgs;
                $NewsImgs->NewsID = $img_id;
                $NewsImgs->img = $path;
                $NewsImgs->save();
            }
        }

    //    dd($img_group);

        return redirect('/relation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $news = News::with('NewsImgs')->find($id);


        return view('/relation/show',compact('news'));
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
        $news_img = DB::table('newstestimgs')->where('NewsID',$id)->get();

        return view('/relation/edit',compact('news','news_img'));
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
        $item = News::find($id);
        $old_img = $item->img;
        $img_id = $item->id;

        $news_data = $request ->all();

        if ($request->hasFile('img')) {
            Storage::disk('public')->delete($old_img);
            $file_name = $request->file('img')->store('','public');
            $news_data['img']=$file_name;
        }
        else {
            $news_data['img'] = $old_img;
        }

        News::find($id) ->update($news_data);

        $img_group = $request->file('img_group');
        if($request->hasFile('img_group'))
        {

            foreach ($img_group as $file) {
                $path = $file->store('','public');
                $NewsImgs = new NewsImgs;
                $NewsImgs->NewsID = $img_id;
                $NewsImgs->img = $path;
                $NewsImgs->save();
            }
        }


        return redirect('/relation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //刪除主圖
        $item_main = News::find($id);
        Storage::disk('public')->delete($item_main->img);
        $item_main->delete();

        //刪除附圖
        $item_sub = NewsImgs::where('NewsID',$id)->get();
        foreach ($item_sub as $item) {
            Storage::disk('public')->delete($item->img);
            $item->delete();
        }
        return redirect('/relation');
    }
    public function attachdelete(Request $request)
    {
        Storage::disk('public')->delete($request->file);
        NewsImgs::where('img',$request->file)->delete();
    }
    public function ajax_upload(Request $request){
        $allow = array('png','jpg','zip','gif');
        dd($request);
    }
}

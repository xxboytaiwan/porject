@extends('layouts.app')
@section('css')

<link rel="stylesheet" href="{{asset('assets/frame/css/relation.css')}}">
@endsection

@section('content')
<div class="container">
    <form method="POST" action="/relation/{{$news->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id">ID：{{$news->id}}</label>
        </div>
        <div class="form-group">
            <label for="img">現有圖片</label>
            <img src="{{asset('/storage/'.$news->img)}}" alt="" style="width:30%">
        </div>
        <div class="form-group">
            <label for="img">更換主圖</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>
        <div class="form-group">
            <label for="img">現有附圖</label>
            <div class="picsview">
                @foreach ($news_img as $item)
                <div class="picbody" newsimgs_id={{$item->id}} newsimgs_img={{$item->img}}>
                    <img src="{{asset('/storage/'.$item->img)}}" class="picss">
                    <input type="text" class="picss" name="sort" id="sort" value="{{$item->sort}}">
                    <div class="dele
                    te"></div>

                </div>
                @endforeach
            </div>

        </div>
        <div class="form-group">
            <label for="img">增加附圖</label>
            <input type="file" class="form-control" id="img_group" name="img_group[]" multiple>
        </div>
        <div class="form-group">
            <label for="context">Context</label>
            <input type="text" class="form-control" id="context" name="context" value="{{$news->context}}">
        </div>
        <div class="form-group">
            <label for="context">Sort</label>
            <input type="text" class="form-control" id="context" name="sort" value="{{$news->sort}}">
        </div>

        <button type="submit" class="btn btn-primary">修改</button>
    </form>

</div>



@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


    $('.delete').click(function() {
        var news_imgs_img = $(this).parent().attr("newsimgs_img");
        $(this).parent().hide();
        $.delete(news_imgs_img);

            })
    $.delete = function(file){
        console.log(file);

        $.ajax({
                method: 'POST',
                url: '/relation/delete/',
                data: {file:file},
            });
    }
</script>
@endsection

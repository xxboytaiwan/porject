@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/data/{{$news->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="id">ID：{{$news->id}}</label>
        </div>
        <div class="form-group">
            <label for="img">現有圖片</label>
            <img src="{{asset('/storage/'.$news->img)}}" alt="">
          </div>
        <div class="form-group">
          <label for="img">IMG</label>
            <input type="file" class="form-control" id="img" name="img" value="{{$news->img}}">
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

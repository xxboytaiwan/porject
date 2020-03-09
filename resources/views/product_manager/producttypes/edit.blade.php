@extends('layouts.app')
@section('css')

<link rel="stylesheet" href="{{asset('assets/frame/css/relation.css')}}">
@endsection

@section('content')
<div class="container">
    <form method="POST" action="/product_manager/producttypes/{{$product_types->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id">Type Name：</label>
            <input type="text" class="form-control" id="type_name" name="type_name" value="{{$product_types->type_name}}">
        </div>
        <div class="form-group">
            <label for="context">Context</label>
            <input type="text" class="form-control" id="context" name="context" value="{{$product_types->context}}">
        </div>
        <div class="form-group">
            <label for="context">Sort</label>
            <input type="text" class="form-control" id="context" name="sort" value="{{$product_types->sort}}">
        </div>

        <button type="submit" class="btn btn-primary">修改</button>
    </form>

</div>



@endsection

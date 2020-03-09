@extends('layouts.app')
@section('css')

<link rel="stylesheet" href="{{asset('assets/frame/css/relation.css')}}">
@endsection

@section('content')
<div class="container">
    <form method="POST" action="/product_manager/products/{{$products->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="type_id">Type Name</label>
            <select name="type_id" id="type_id" require>
                <option selected value="{{$product_typename[0]->id}}">{{$product_typename[0]->type_name}}</option>
                @foreach ($product_types as $item)
            <option value="{{$item->id}}">{{$item->type_name}}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
          <label for="product_name">Product Name</label>
          <input type="text" class="form-control" id="product_name"  name="product_name" value="{{$products->product_name}}">
        </div>
        <div class="form-group">
          <label for="img">現有圖片</label>
          <img src = "{{asset('/storage/'.$products->img)}}" alt ="">
        </div>
        <div class="form-group">
          <label for="img">IMG</label>
          <input type="file" class="form-control" id="img" name="img" >
        </div>
        <div class="form-group">
            <label for="product_content">Product Content</label>
            <input type="text" class="form-control" id="product_content" name="product_content" value="{{$products->product_content}}">
        </div>
        <div class="form-group">
            <label for="product_sort">Sort</label>
            <input type="text" class="form-control" id="product_sort" name="product_sort" value="{{$products->product_sort}}">
        </div>

        <button type="submit" class="btn btn-primary">修改</button>
    </form>

</div>



@endsection

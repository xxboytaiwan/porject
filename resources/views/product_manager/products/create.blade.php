@extends('layouts\app')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <form method="POST" action="/product_manager/products" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="type_id">Type Name</label>
            <select name="type_id" id="type_id">
                <option selected>Open this select menu</option>
                @foreach ($product_types as $item)
            <option value="{{$item->id}}">{{$item->type_name}}</option>
                @endforeach
            </select>

        </div>


        <div class="form-group">
          <label for="product_name">Product Name</label>
          <input type="text" class="form-control" id="product_name"  name="product_name">
        </div>
        <div class="form-group">
          <label for="img">IMG</label>
          <input type="file" class="form-control" id="img" name="img">
        </div>
        <div class="form-group">
            <label for="product_content">Product Content</label>
            <input type="text" class="form-control" id="product_content" name="product_content">
        </div>
        <div class="form-group">
            <label for="product_sort">Sort</label>
            <input type="text" class="form-control" id="product_sort" name="product_sort">
        </div>


        <button type="submit" class="btn btn-primary">新增</button>

      </form>

</div>

@endsection


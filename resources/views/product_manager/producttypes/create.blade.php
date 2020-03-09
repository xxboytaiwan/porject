@extends('layouts\app')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <form method="POST" action="/product_manager/producttypes">
        @csrf
        <div class="form-group">
          <label for="id">Name</label>
          <input type="text" class="form-control" id="type_name"  name="type_name">
        </div>

        <div class="form-group">
            <label for="context">Context</label>
            <input type="text" class="form-control" id="context" name="context">
        </div>
        <div class="form-group">
            <label for="id">Sort</label>
            <input type="text" class="form-control" id="sort"  name="sort">
        </div>

        <button type="submit" class="btn btn-primary">新增</button>

      </form>

</div>

@endsection

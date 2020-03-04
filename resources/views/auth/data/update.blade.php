@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/data/{{$news->id}}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="id">ID：{{$news->id}}</label>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="img">IMG</label>
        <input type="text" class="form-control" id="img" name="img" value="{{$news->img}}">
        </div>
        <div class="form-group">
            <label for="context">Context</label>
            <input type="text" class="form-control" id="context" name="context" value="{{$news->context}}">
          </div>

        <button type="submit" class="btn btn-primary">修改</button>
      </form>

</div>

@endsection

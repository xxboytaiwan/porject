@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/newscontroll/store">
        @csrf
        <div class="form-group">
          <label for="id">ID</label>
          <input type="text" class="form-control" id="id" aria-describedby="emailHelp" name="id">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="img">IMG</label>
          <input type="text" class="form-control" id="img" name="img">
        </div>
        <div class="form-group">
            <label for="context">Context</label>
            <input type="text" class="form-control" id="context" name="context">
          </div>

        <button type="submit" class="btn btn-primary">新增</button>
        <button type="button" class="btn">刪除</button>
      </form>

</div>

@endsection

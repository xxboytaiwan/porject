@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/relation" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="id">ID</label>
          <input type="text" class="form-control" id="id"  name="id">
        </div>
        <div class="form-group">
          <label for="img">IMG</label>
          <input type="file" class="form-control" id="img" name="img" required>
        </div>
        <div class="form-group">
            <label for="img_group">IMG</label>
            <input type="file" class="form-control" id="img_group" name="img_group[]" multiple>
          </div>
        <div class="form-group">
            <label for="context">Context</label>
            <input type="text" class="form-control" id="context" name="context">
          </div>

        <button type="submit" class="btn btn-primary">新增</button>

      </form>

</div>

@endsection

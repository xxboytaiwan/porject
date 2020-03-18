@extends('layouts.app')
@section('css')

<link rel="stylesheet" href="{{asset('assets/frame/css/relation.css')}}">
@endsection

@section('content')
<div class="container">
    <form method="POST" action="/contact_manager/{{$contact->id}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id"  name="id" value="{{$contact->id}}">
          </div>

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name"  name="name" value="{{$contact->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email"  name="email" value="{{$contact->email}}">
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone"  name="phone" value="{{$contact->phone}}">
          </div>

        <div class="form-group">
            <label for="message">Message</label>
            <input type="text" class="form-control" id="message" name="message" value="{{$contact->message}}">
        </div>

        <button type="submit" class="btn btn-primary">修改</button>
    </form>

</div>



@endsection

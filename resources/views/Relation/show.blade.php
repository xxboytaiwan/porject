@extends('frame/frame')

@section('card')

    @foreach ($news->NewsImgs as $item)
    <img src="{{asset('/storage/'.$item->img)}}" alt="">
        {{-- {{$item->img}} --}}
    @endforeach
<div></div>

@endsection

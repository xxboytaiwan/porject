@extends('frame/frame')
@section('card')
<div class="col-sm-4 d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <img src="{{asset('/storage/'.$news->img)}}" class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-text">{{$news->context}}</p>
        </div>

    </div>

</div>
@endsection

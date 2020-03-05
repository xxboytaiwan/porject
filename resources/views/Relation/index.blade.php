@extends('frame/frame')

@section('card')
<div class="container">
    <a href="/relation/create" class="btn btn-success">新增</a>
    <div class="row">
        @foreach ($news as $item)
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('/storage/'.$item->img)}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text">{{$item->context}}</p>
                    </div>
                    <a href="/relation/{{$item->id}}" class="btn btn-success">Learn More</a>

                </div>

            </div>
        @endforeach

</div>
</div>
@endsection

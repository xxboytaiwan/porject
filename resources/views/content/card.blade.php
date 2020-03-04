@extends('frame/frame')

@section('card')
<section id="S3">
    <div class="container">
        <div class="row">
            @foreach ($news as $item)
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('/storage/'.$item->img)}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text">{{$item->context}}</p>
                    </div>
                </div>
            </div>
            {{-- <div class="col-sm d-flex justify-content-center"> --}}
            @endforeach


                {{-- <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/img/Planent_2.png')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm d-flex justify-content-center">

                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/img/Planent_3.png')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>


</section>

@endsection

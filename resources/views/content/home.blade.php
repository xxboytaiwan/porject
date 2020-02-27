@extends('frame/frame')

@section('home')


<section id="S1" class="d-flex align-items-center mb-5">
    <div class="Inro mx-auto">
        <div class="container">
            <div class="row d-flex flex-md-row-reverse justify-content-md-around  mb-2 bg-info text-white text-center
             mb-2 bg-info text-white text-center RowPic">
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                    <div class="Text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facere tempora aliquid voluptas perspiciatis quidem deleniti error consequatur distinctio, maxime, sit voluptatibus nulla nisi nostrum accusamus odio at facilis necessitatibus.
                    </div>

                </div>
                <div class="col-12 col-md-6 p-3">
                    <img class="Pic" src="{{asset('assets/img/Planents.jpg')}}" width="100%" height="100%">
                </div>




            </div>
        </div>
    </div>
</section>
@endsection

@extends('frame/frame')

@section('css')
<style>
    .bcard{
        position: relative;
    }

    .shopping_card{
        position: absolute;
    }
</style>
@endsection

@section('card')
<div class="container">
    <div class="row">
        @foreach ($products as $item)
        <div class="col-sm-4 d-flex justify-content-center bcard">
            <div class="card" style="width: 18rem;">

                <img src="{{asset('/storage/'.$item->img)}}" class="card-img-top" alt="">
                <div class="card-body">
                    <p class="card-text">{{$item->product_content}}</p>
                </div>


            </div>

            <form action="/shopping/cart" method="post">
                @csrf
                <div class="shopping_card" id ="q{{$item->id}}">
                    <a href="#" class="minus">-</a>
                <input type="text" name="quantity" class="quantity" style="width:50px" value="0"  min="0">
                    <a href="#" class="plus">+</a>
                <input type="text" name = 'type_id' value="{{$item->type_id}}" style="display:none">
                <input type="text" name = 'product_name' value="{{$item->product_name}}" style="display:none">
                </div>
                <button type="submit">Add to Cart</button>
            </form>
        </div>


        @endforeach

    </div>

</div>

@endsection

@section('js')
<script>
    // $('.quantity').focusout(function(){

    //     console.log($(this).html());

    // })
    $('.shopping_card .minus').click(function(){
        var tt = $(this).parent().attr('id');
        var ss = parseInt($(`#${tt} .quantity`).attr('value'));
        var as = $(`#${tt} .quantity`);
        ss--;
        if (ss < 0)
        {
            ss = 0;
        }
        parseInt($(`#${tt} .quantity`).attr('value', ss))


    })

    $('.shopping_card .plus').click(function(){
        var tt = $(this).parent().attr('id');
        var ss = parseInt($(`#${tt} .quantity`).attr('value'));
        var as = $(`#${tt} .quantity`);
        ss++;
        parseInt($(`#${tt} .quantity`).attr('value', ss))


    })
</script>
@endsection

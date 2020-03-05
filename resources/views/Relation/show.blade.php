@extends('frame/frame')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/frame/css/relation.css')}}">
@endsection
@section('card')
    <div class="All">
        <div class="btns">
            <a href="/relation/{{$news->id}}/edit" class="btn btn-success">
                修改
            </a>
                <button type="submit" class="btn btn-danger" onclick="show_confirm({{$news->id}})">刪除</button>
                <form action="/relation/{{$news->id}}" method="POST" id="de{{$news->id}}" style="display:none">
                    @csrf
                    @method('DELETE')
                </form>
        </div>
        <div class="mainPic">
            <img src="{{asset('/storage/'.$news->img)}}" style="width:50%">
        </div>
    </div>
    
<div class="row">

        @foreach ($news->NewsImgs as $item)
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('/storage/'.$item->img)}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text">{{$item->context}}</p>
                    </div>
                </div>
               
            </div>
             
        @endforeach

</div>

@endsection

@section('js')
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> --}}
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );

    function show_confirm(id)
    {
        var r = confirm("A U Sure?")
        if (r== true)
        {
            document.getElementById(`de${id}`).submit();
        }
    }
</script>
@endsection

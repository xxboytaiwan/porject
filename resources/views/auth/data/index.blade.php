@extends('layouts.app')


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <div class="container">
        <a href="/Relation/create" class="btn btn-success">新增</a>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th style="width:30%">IMG</th>
                    <th>Context</th>
                    <th>Sort</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($news as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td><img src="{{asset('/storage/'.$item->img)}}" alt="" style="width:100%"></td>
                        <td>{{$item->context}}</td>
                        <td>{{$item->sort}}</td>
                        <td>
                            <a href="/data/{{$item->id}}/edit" class="btn btn-success">修改</a>
                            <button type="submit" class="btn btn-danger" onclick="show_confirm({{$item->id}})">刪除</button>
                            <form action="/data/{{$item->id}}" method="POST" id="de{{$item->id}}" style="display:none">
                                @csrf
                                @method('DELETE')
                            </form>


                        </td>

                    </tr>
                @endforeach


            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>IMG</th>
                    <th>Context</th>
                    <th>Sort</th>
                    <th></th>

                </tr>
            </tfoot>
        </table>
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
            // console.log(document.getElementById(`de${id}`));

        }
    }
</script>
@endsection

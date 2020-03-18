@extends('layouts\app')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <a href="/product_manager/create" class="btn btn-success">管理</a>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Type</th>
                <th>Product Name</th>
                <th>IMG</th>
                <th>Product_content</th>
                <th>Sort</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{$item->ProductTypes->type_name}}</td>
                    <td>{{$item->product_name}}</td>
                    <td><img src="{{asset('/storage/'.$item->img)}}" alt="" style="width:80%"></td>
                    <td>{{$item->product_content}}</td>
                    <td>{{$item->product_sort}}</td>


                </tr>
            @endforeach


        </tbody>
        <tfoot>
            <tr>
                <th>Type</th>
                <th>Product Name</th>
                <th>IMG</th>
                <th>Product_content</th>
                <th>Sort</th>

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

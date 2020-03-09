@extends('layouts\app')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <a href="/product_manager/create" class="btn btn-success">新增</a>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Type</th>
                <th>Product Name</th>
                <th>Product_content</th>
                <th>Sort</th>
                <th>功能</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{$item->ProductTypes->type_name}}</td>
                    <td>{{$item->product_name}}</td>
                    <td>{{$item->product_content}}</td>
                    <td>{{$item->product_sort}}</td>
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
                <th>Type</th>
                <th>Product Name</th>
                <th>Product_content</th>
                <th>Sort</th>
                <th>功能</th>

            </tr>
        </tfoot>
    </table>
</div>
@endsection


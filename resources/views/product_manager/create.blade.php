@extends('layouts\app')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/create_select.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="All">
    <a href="/product_manager/producttypes">
        <div class="box product_type">
            新增產品類別
        </div>
    </a>
    <a href="/product_manager/products">
        <div class="box product">
            新增產品
        </div>
    </a>

</div>
@endsection


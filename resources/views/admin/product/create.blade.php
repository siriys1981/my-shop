@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Add Product</h1>
    
@stop

@section('content')
{{-- проверка на ошибки --}}

 {{ $products[0]->category_id }}

@include('admin._messages')

  <form action="/admin/product" method="POST" enctype="multipart/form-data">
     @include('admin.product._form')
  </form>
@stop

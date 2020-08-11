@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
    <h1>Add Category</h1>
    
@stop

@section('content')
{{-- проверка на ошибки --}}

@include('admin._messages')

  <form action="/admin/category" method="POST" enctype="multipart/form-data">
     @include('admin.category._form')
  </form>
@stop

@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
    <h1>Categories</h1>
    <a href="/admin/category/create" class="btn btn-primary btn-sm">Add category</a>
@stop

@section('content')
	@include('admin._messages')
   <table class="table">
   	<thead>
   		<tr>
   			<th>#</th>
   			<th>Image</th>
   			<th>Name</th>
   			<th>Slug</th>
   			<th>Button Here</th>
   		</tr>
   	</thead>
   	<tbody>
   		@foreach($categories as $item)
   		<tr>
   			<td>{{ $loop->iteration }}</td>
   			<td><img src="{{ $item->img }}" alt="{{$item->name}}" style="width: 100px"></td>
   			<td>{{ $item->name }}</td>
   			<td>{{ $item->slug }}</td>
   			<td></td>
   		</tr>
   		@endforeach
   	</tbody>
   </table>
@stop

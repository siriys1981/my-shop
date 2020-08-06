@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Products</h1>
@stop

@section('content')
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
   		@foreach($products as $item)
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

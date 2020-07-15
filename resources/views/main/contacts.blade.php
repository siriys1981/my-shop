@extends('mainlayouts.main')

@section('contacts')
	<h1>Это страница контактов: {{$title}}</h1>
	<p>Какое-то сообщение: {{$message}}</p>
	<form action="/contacts" class="col-6">
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" name="name" class="form-control" value="" placeholder="Author name">
		</div>
		<div class="form-group">
			<label for="">Message</label>
			<input type="text" name="name" class="form-control" value="" placeholder="{{$message}}">
		</div>
	</form>
@endsection
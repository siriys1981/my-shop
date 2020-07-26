@extends('mainlayouts.main')

@section('index')
	<h2 class="text-center my-3">Index Categories</h2>
	<div class="container">
		<div class="row justify-content-center">
			@foreach($categories as $category)
				<div class="col-3">
					<div class="border">
						<a href="/category/{{$category->slug}}">
							<img src="{{$category->img}}" alt="" class="img-fluid">
							<div class="bg-light cat-name">{{$category->name}}</div>
						</a>
					</div>
				</div>
			@endforeach
		</div>
		<h3 class="mr-2 my-2">Comments</h3>
		@foreach($reviews as $review)
			<p class="mb-1"><strong>Created at: </strong>{{$review["created_at"]}}</p>
		    <p><strong>Review: </strong>{{$review["review"]}}</p>
		@endforeach
	</div>

@endsection

{{-- ниже теория с урока --}}

{{-- <h1>This is a home page. {{ $title }}</h1> --}}
<!-- {{-- {{}} --}} - это замена синтаксиса ПХП для вставки кода в теги ХТМЛ -->
{{-- {{ $subtitle }} --}}
{{-- <br> --}}
{{-- при выводе теги не учитываются --}}
{{-- {!! $subtitle !!}
<br> --}}
{{-- при выводе теги учитываются --}}

{{-- @php
	echo time();  //если нужно написать ПХП код в представлении. Вообще весь код должен быть в контроллере!
@endphp --}}
{{-- <br> --}}
{{-- @foreach($users as $user)
	{{$loop->iteration}} . {{$user}} <br>
@endforeach --}}
{{-- 
@endsection

@section('title')
{{$title}}
@endsection --}}

{{-- @section('title', $title)  --}}
{{-- для короткой записи, если 1 переменная выводится --}}
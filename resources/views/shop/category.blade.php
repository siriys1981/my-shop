@extends('mainlayouts.main')

@section('index')
	<h1 class="text-center">{{$category->name}}</h1>
	<div class="container">
		<div class="row">
			@foreach($products as $product)
				<div class="col-3">
					<div class="border m-2">
						@if($product->recommended)
						<div class="recommended">Recommended</div>
						@endif
						<a href="/product/{{$product->slug}}">
							<img src="{{$product->img}}" alt="" class="img-fluid">
							<div class="bg-light pl-1">{{$product->name}}</div> 
							<div class="border-top bg-dark pl-1">
								Price: {{$product->price}}
							</div>
						</a>
					</div>
				</div>
			@endforeach
		</div>
		<div class="mt-4 d-flex justify-content-center">{{$products->links()}}</div>
	</div>

@endsection
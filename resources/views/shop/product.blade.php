@extends('mainlayouts.main')

@section('index')
	<h1 class="text-center my-3">Product Card</h1>
	<div class="card mb-3">
		<div class="row no-gutters">
			<div class="col-md-4 border">
				<img src="{{$products->img}}" class="card-img h-75" alt="{{$products->name}}">
			</div>
			<div class="col-md-8 bg-light">
				<div class="card-body">
					<h2>Product name: <span class="text-success">{{$products->name}}</span> </h3>
					<p><strong>Product description:</strong> {{$products->description}}</p>
					<p>Product ID: {{$products->id}}</p>
					<h3>Price: {{$products->price}}</h3>
					<h4>Name of category: {{ $products->category ? $products->category->name : 'No category!' }}</h4>
					<a href="#" class="btn btn-primary">Add to cart</a>
					<div><strong>Comments: </strong>{{$reviews["review"]}}</div>
				</div>
			</div>
		</div>
	</div>
@endsection
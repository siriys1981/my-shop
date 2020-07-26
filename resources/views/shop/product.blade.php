@extends('mainlayouts.main')

@section('index')
	<h1 class="text-center my-3">Product Card</h1>
	<div class="card mb-3">
		<div class="row no-gutters">
			<div class="col-md-4 border">
				<img src="{{$products->img}}" class="card-img h-50" alt="{{$products->name}}">
			</div>
			<div class="col-md-8 bg-light">
				<div class="card-body">
					<h2>Product name: <span class="text-success">{{$products->name}}</span> </h2>
					<h4>Name of category: <span class="text-success">{{ $products->category ? $products->category->name : 'No category!'}}</span></h4>
					<p><strong>Product description:</strong> {{$products->description}}</p>
					<p>Product ID: {{$products->id}}</p>
					<h3>Price: {{$products->price}}</h3>
					{{-- {{$reviews}} --}}
					<a href="#" class="btn btn-primary">Add to cart</a>

					<div>
						<h4 class="my-3">Hello, {{Auth::user()["name"] ?? 'No login person now'}}</h4>
						<h6 class="mb-2"><strong>Comments for this product: ( total - {{$reviews->count()}} ) </strong></h6>
						<ul>
						@foreach($reviews->sortBy('created_at')->reverse() as $review)
							<li class="mb-2">
								<p class="my-0"><strong>Date of creation: </strong>{{$review["created_at"]}}</p>
								<p><strong>Comment: </strong>{{$review["review"]}}</p>

							</li>
						@endforeach
						</ul>
						{{-- @foreach($reviews->sortBy('created_at')->reverse() as $review)
							<p><strong>Date of creation: </strong> {{$review["created_at"]}}</p>
							<p><strong>Comment: </strong> {{$review["review"]}} </p>
						@endforeach --}}
					</div>
					{{-- <div><strong>Comments: </strong>{{$reviews["review"]}}</div> --}}
				</div>
			</div>
		</div>
		<div class="col-6 mx-auto">
			@guest
				<h3 class="alert-danger text-center">For comments please <a href="/login">Login</a> or <a href="/register">Register</a></h3>
			@else
			<h5 class="my-2">Add your comment here</h5>
				<form action="/product/{{$products->slug}}" method="POST">
					@csrf
					<div class="form-group">
						<textarea name="comment" cols="30" rows="5" class="form-control"></textarea>
					</div>
					<input type="hidden" name="product" value="{{$products->id}}">
					<input type="hidden" name="user" value="{{Auth::user()->id}}">
					<button class="btn btn-primary">Post comment</button>
				</form> 
			@endguest
		</div>
	</div>
@endsection
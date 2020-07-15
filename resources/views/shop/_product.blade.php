					<div class="border m-2">
						<a href="/product/{{$product->slug}}">
							<img src="{{$product->img}}" alt="" class="img-fluid">
							<div class="bg-light pl-1">{{$product->name}}</div> 
							<div class="border-top bg-dark pl-1">
								Price: {{$product->price}}
							</div>
						</a>
					</div>
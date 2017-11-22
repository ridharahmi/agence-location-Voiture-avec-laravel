@extends('layouts.client')

@section('content')
<div class="voiture">
	<div class="row">
		@foreach($voiture as $myvoiture)
		<div class="col-sm-3">
			<article class="col-item">
				<div class="photo">
					<div class="options-cart-round">
						<a href="ListVoiture/{{ $myvoiture->id }}" class="btn btn-default" title="Commander"> <i class="fa fa-shopping-cart"></i></a>
					</div>
					<a href="#"> <img src="{{ asset($myvoiture->image) }}" class="img-responsive" alt="Product Image" /> </a>
				</div>
				<div class="info">
					<div class="row">
						<div class="price-details col-md-6">
							<p class="details">
								{{ $myvoiture->description }}
							</p>
							<h1>{{ $myvoiture->title }}</h1>
							<span class="price-new"> {{ $myvoiture->price }} Dt/j</span>
						</div>
					</div>
				</div>
			</article>
		</div>
		@endforeach
		<div class="col-md-12 text-center">
			{!! $voiture->render() !!}
		</div>
	</div>
</div>
@endsection

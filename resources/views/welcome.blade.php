@extends('layouts.app')

@section('content')
<div class="head-index">
	<div class="head">
		<div class="container">
			<h1>Bienvenue à Agence de Location</h1>
		</div>
	</div>
</div>
<div class="container voiture">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 text-center">
				<form method="post" class="form-inline" action="SearchVoiture">
					{{ csrf_field() }}
					<div class="form-group">
						<input type="text" name="motcle" class="form-control"  placeholder="">
					</div>
					<button type="submit" class="btn btn-default">
						<i class="fa fa-search fa-btn"></i> Search
					</button>
				</form>
			</div>
			<div class="col-md-4 pagination text-right">
				{!! $voiture->render() !!}
			</div>
		</div>
		<div class="col-md-12">
			<hr />
		</div>
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
	</div>
</div>
@endsection

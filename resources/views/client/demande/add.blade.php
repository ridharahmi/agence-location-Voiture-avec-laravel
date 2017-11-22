@extends('layouts.client')

@section('content')

{!! Form::open(array('class'=>'form-horizontal','route'=>'ListVoiture.store','files'=>true)) !!}
<input type="hidden" class="form-control" name="voiture_id" value="{{ $voiture->id }}" >
<div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
	<label  class="col-md-4 control-label">Adresse</label>
	<div class="col-md-6">
		<input type="text" class="form-control" name="adresse" >
		@if ($errors->has('adresse'))
		<span class="help-block"> <strong>{{ $errors->first('adresse') }}</strong> </span>
		@endif
	</div>
</div>
<div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
	<label class="col-md-4 control-label">Telephone</label>
	<div class="col-md-6">
		<input  type="tel" class="form-control" name="tel" >
		@if ($errors->has('tel'))
		<span class="help-block"> <strong>{{ $errors->first('tel') }}</strong> </span>
		@endif
	</div>
</div>
<div class="form-group{{ $errors->has('dateDebut') ? ' has-error' : '' }}">
	<label class="col-md-4 control-label">Datedebut</label>
	<div class="col-md-6">
		<input type="date" class="form-control" name="dateDebut">
		@if ($errors->has('dateDebut'))
		<span class="help-block"> <strong>{{ $errors->first('dateDebut') }}</strong> </span>
		@endif
	</div>
</div>
<div class="form-group{{ $errors->has('nmbejour') ? ' has-error' : '' }}">
	<label class="col-md-4 control-label">N' Jour</label>
	<div class="col-md-6">
		<input  type="number" class="form-control" name="nmbejour">
		@if ($errors->has('nmbejour'))
		<span class="help-block"> <strong>{{ $errors->first('nmbejour') }}</strong> </span>
		@endif
	</div>
</div>
<div class="form-group">
	<div class="col-md-6 col-md-offset-4">
		<button type="submit" class="btn btn-warning">
			<i class="fa fa-btn fa-cart-plus"></i> Commander
		</button>
	</div>
</div>
{!! Form::close() !!}

@endsection

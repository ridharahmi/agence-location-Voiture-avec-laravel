@extends('layouts.admin')

@section('content')
<div class="col-md-3">
	<img class="img-responsive" src="{{ asset( $voiture->image)}}" />
</div>
{!! Form::model($voiture, array('class'=>'form-horizontal', 'method'=>'PATCH','action'=>['Admin\VoitureController@update',$voiture->id],'files'=>true)) !!}
<input type="hidden" name="photo" value="{{ $voiture->image }}" />
<div class="col-md-9">
	<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
		<label  class="col-md-2 control-label">Title</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="title" value="{{ $voiture->title }}">
			@if ($errors->has('title'))
			<span class="help-block"> <strong>{{ $errors->first('title') }}</strong> </span>
			@endif
		</div>
	</div>

	<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
		<label class="col-md-2 control-label">Description</label>
		<div class="col-md-6">
			{!! Form::textarea('description', null, array('class'=>'form-control', 'rows' => '6')) !!}
			@if ($errors->has('description'))
			<span class="help-block"> <strong>{{ $errors->first('description') }}</strong> </span>
			@endif
		</div>
	</div>

	<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
		<label class="col-md-2 control-label">Price</label>
		<div class="col-md-6">
			<input  type="number" class="form-control" name="price" value="{{ $voiture->price }}">
			@if ($errors->has('price'))
			<span class="help-block"> <strong>{{ $errors->first('price') }}</strong> </span>
			@endif
		</div>
	</div>

	<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
		<label class="col-md-2 control-label">Image</label>
		<div class="col-md-6">
			<input type="file" class="form-control" name="image">
			@if ($errors->has('image'))
			<span class="help-block"> <strong>{{ $errors->first('image') }}</strong> </span>
			@endif
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-6 col-md-offset-4">
			<button type="submit" class="btn btn-info">
				<i class="fa fa-btn fa-edit"></i> Modifier
			</button>
		</div>
	</div>
	{!! Form::close() !!}
</div>
@endsection

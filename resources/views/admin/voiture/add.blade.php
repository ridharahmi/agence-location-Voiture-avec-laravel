@extends('layouts.admin')

@section('content')

{!! Form::open(array('class'=>'form-horizontal','route'=>'GestionVoiture.store','files'=>true)) !!}
<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
	<label  class="col-md-4 control-label">Title</label>
	<div class="col-md-6">
		<input type="text" class="form-control" name="title" >
		@if ($errors->has('title'))
		<span class="help-block"> <strong>{{ $errors->first('title') }}</strong> </span>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
	<label class="col-md-4 control-label">Description</label>
	<div class="col-md-6">
		<textarea  class="form-control" name="description" rows="6"></textarea>						
			@if ($errors->has('description'))
         <span class="help-block"> <strong>{{ $errors->first('description') }}</strong> </span>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
	<label class="col-md-4 control-label">Price</label>
	<div class="col-md-6">
		<input  type="number" class="form-control" name="price">
		@if ($errors->has('price'))
		<span class="help-block"> <strong>{{ $errors->first('price') }}</strong> </span>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
	<label class="col-md-4 control-label">Image</label>
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
			<i class="fa fa-btn fa-plus"></i> Ajouter
		</button>
	</div>
</div>
{!! Form::close() !!}

@endsection

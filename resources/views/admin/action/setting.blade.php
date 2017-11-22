@extends('layouts.admin')

@section('content')
<form class="form-horizontal"  method="POST" action="Setting">
	{{ csrf_field() }}
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		<label for="name" class="col-md-4 control-label">Name</label>
		<div class="col-md-6">
			<input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
		</div>
	</div>
	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		<label for="email" class="col-md-4 control-label">E-Mail Address</label>
		<div class="col-md-6">
			<input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-6 col-md-offset-4">
			<button type="submit" class="btn btn-success">
				<i class="fa fa-btn fa-edit"></i> Modifier
			</button>
		</div>
	</div>
</form>
@endsection

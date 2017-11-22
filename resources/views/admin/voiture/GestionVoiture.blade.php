@extends('layouts.admin')

@section('content')
<a href="GestionVoiture/create"><i class="fa fa-plus fa-fw"></i>Add New Voiture</a>
<hr />
<table id="mytable" class="table table-bordred table-striped">
	<thead>
		<th>Image</th>
		<th>title</th>
		<th>price</th>
		<th>Edit</th>
		<th>Delete</th>
	</thead>
	<tbody>
		@foreach($voiture as $myvoiture)
		<tr>
			<td><img class="img-responsive img-voit" src="{{ asset($myvoiture->image) }}" /></td>
			<td>{{ $myvoiture->title }}</td>
			<td>{{ $myvoiture->price }} Dt/jour</td>
			<td width="2%">
				<a class="btn btn-default" href="GestionVoiture/{{ $myvoiture->id }}/edit"><i class="fa fa-btn fa-pencil"></i></a>
			</td>
			<td width="2%">
			<p data-placement="top" data-toggle="tooltip" title="Delete">
				<button class="btn btn-danger" data-title="Delete" data-toggle="modal" data-target="#delete{{ $myvoiture->id }}" >
					<span class="fa fa-btn fa-trash"></span>
				</button>
			</p></td>
		</tr>
		<div class="modal fade" id="delete{{ $myvoiture->id }}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<span class="fa fa-remove" aria-hidden="true"></span>
						</button>
						<h4 class="modal-title custom_align" id="Heading">Delete this item: {{ $myvoiture->id }}</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-danger">
							<span class="fa fa-warning-sign"></span> Are you sure you want to delete this Record?
						</div>
					</div>
					<div class="modal-footer ">
						{!! Form::open(['method'=>'DELETE', 'route'=>['GestionVoiture.destroy',$myvoiture->id]]) !!}
						<button  class="btn btn-success" type="submit">
							<span class="fa fa-check"></span> Yes
						</button>
						{!! Form::close() !!}

						<button type="button" class="btn btn-default" data-dismiss="modal">
							<span class="fa fa-remove"></span> No
						</button>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</tbody>
</table>
<div class="pagination col-lg-12">
	{!! $voiture->render() !!}
</div>
@endsection

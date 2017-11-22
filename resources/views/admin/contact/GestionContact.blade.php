@extends('layouts.admin')

@section('content')
<table id="mytable" class="table table-bordred table-striped">
	<thead>
		<th>Name</th>
		<th>Message</th>
		<th>Lire</th>
		<th>Delete</th>
	</thead>
	<tbody>
		@foreach($contact as $mycontact)
		<tr>
			<td>{{ $mycontact->name }}</td>
			<td>{{ $mycontact->message }}</td>
			<td width="2%">
			<p data-placement="top" data-toggle="tooltip" title="Edit">
				<button class="btn btn-primary btn-xs" data-title="Lire" data-toggle="modal" data-target="#Lire{{ $mycontact->id }}" >
					<span class="fa fa-eye"></span>
				</button>
			</p></td>
			<td width="2%">
			<p data-placement="top" data-toggle="tooltip" title="Delete">
				<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete{{ $mycontact->id }}" >
					<span class="fa fa-trash"></span>
				</button>
			</p></td>
		</tr>
		<div class="modal fade" id="Lire{{ $mycontact->id }}" tabindex="-1" role="dialog" aria-labelledby="Lire" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<span class="fa fa-remove" aria-hidden="true"></span>
						</button>
						<h4 class="modal-title custom_align" id="Heading">Mesage Contact n': {{ $mycontact->id }}</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							Name : {{ $mycontact->name }}
						</div>
						<div class="form-group">
							Email : {{ $mycontact->email }}
						</div>
						<div class="form-group">
							Subject : {{ $mycontact->subject }}
						</div>
						<div class="form-group">
							Message : {{ $mycontact->message }}
						</div>
					</div>
					<div class="modal-footer ">
						<button type="button" class="btn btn-danger" data-dismiss="modal">
							<span class="fa fa-remove"></span> Close
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="delete{{ $mycontact->id }}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<span class="fa fa-remove" aria-hidden="true"></span>
						</button>
						<h4 class="modal-title custom_align" id="Heading">Delete this item: {{ $mycontact->id }}</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-danger">
							<span class="fa fa-warning-sign"></span> Are you sure you want to delete this Record?
						</div>
					</div>
					<div class="modal-footer ">
						{!! Form::open(['method'=>'DELETE', 'route'=>['GestionContact.destroy',$mycontact->id]]) !!}
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

@endsection

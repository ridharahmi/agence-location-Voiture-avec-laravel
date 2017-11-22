@extends('layouts.admin')

@section('content')
<a href="GestionClient/create"><i class="fa fa-plus fa-fw"></i>Add New Client</a>
<hr />
<table id="mytable" class="table table-bordred table-striped">
	<thead>
		<th>Name</th>
		<th>email</th>
		<th>List Commande</th>
		<th>Delete</th>
	</thead>
	<tbody>
		@foreach($client as $myclient)
		<tr>
			<td>{{ $myclient->name }}</td>
			<td>{{ $myclient->email }}</td>
			<td width="20%">
				<a href="GestionClient/{{ $myclient->id }}">Commandes</a>
			</td>
			<td width="2%">
			<p data-placement="top" data-toggle="tooltip" title="Delete">
				<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete{{ $myclient->id }}" >
					<span class="fa fa-trash"></span>
				</button>
			</p></td>
		</tr>
		<div class="modal fade" id="delete{{ $myclient->id }}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<span class="fa fa-remove" aria-hidden="true"></span>
						</button>
						<h4 class="modal-title custom_align" id="Heading">Delete this item: {{ $myclient->id }}</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-danger">
							<span class="fa fa-warning-sign"></span> Are you sure you want to delete this Record?
						</div>
					</div>
					<div class="modal-footer ">
						{!! Form::open(['method'=>'DELETE', 'route'=>['GestionClient.destroy',$myclient->id]]) !!}
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
	{!! $client->render() !!}
</div>
@endsection

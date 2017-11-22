@extends('layouts.admin')

@section('content')
<h5 class="total-price"><i class="fa fa-shopping-basket fa-fw fa-2x"></i>
	 Price Total : <span>{{ $total }} Dt</span>  </h5>
<hr />
<table id="mytable" class="table table-bordred table-striped">
	<thead>
		<th>Adresse</th>
		<th>Telephone</th>
		<th>Date Debut</th>
		<th>Voiture</th>
		<th>N' Jour'</th>
		<th>Total</th>
		<th>Delete</th>
	</thead>
	<tbody>
		@foreach($demande as $mydmd)
		<tr>
			<td>{{ $mydmd->adresse }}</td>
			<td>{{ $mydmd->tel }}</td>
			<td>{{ $mydmd->dateDebut }} </td>
			<td>{{ $mydmd->voiture_id }} </td>
			<td>{{ $mydmd->nmbejour }} </td>
			<td>{{ $mydmd->total }} </td>
			<td width="2%">
			<p data-placement="top" data-toggle="tooltip" title="Delete">
				<button class="btn btn-danger" data-title="Delete" data-toggle="modal" data-target="#delete{{ $mydmd->id }}" >
					<span class="fa fa-btn fa-trash"></span>
				</button>
			</p></td>
		</tr>
		<div class="modal fade" id="delete{{ $mydmd->id }}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<span class="fa fa-remove" aria-hidden="true"></span>
						</button>
						<h4 class="modal-title custom_align" id="Heading">Delete this item: {{ $mydmd->id }}</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-danger">
							<span class="fa fa-warning-sign"></span> Are you sure you want to delete this Record?
						</div>
					</div>
					<div class="modal-footer ">
						{!! Form::open(['method'=>'DELETE']) !!}
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

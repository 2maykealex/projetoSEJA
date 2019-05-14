@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
		<div class="col-md-8 bg-light py-3">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  	<h2>PLANOS</h2>
			  	<div class="ml-auto">
			  		<a class="btn btn-primary btn-sm" href="{{route('adm.subscriptions.types.new')}}">Novo</a>
			  	</div>
			</nav>
	      	<div class="table-responsive pb-3 pt-3 bg-white px-3">
	        	<table class="table table-bordered">
	          		<thead>
	            		<tr>
	              			<th>#</th>
	              			<th>DESCRIÇÃO</th>
	              			<th>AÇÕES</th>
	            		</tr>
	          		</thead>
	          		<tbody>
	          			@foreach ($subscriptionTypes as $subscriptionType)
		                <tr>
			                <td>{{$subscriptionType->id}}</td>
			                <td>{{$subscriptionType->name}}</td>
			                <td class="actions">
		                        <div class="text-center">
				                		<a class="btn btn-success btn-sm button-width" href="{{route('adm.subscriptions.types.show', [$subscriptionType->id])}}">Visualizar</a>
			                        	<a class="btn btn-warning btn-sm button-width" href="{{route('adm.subscriptions.types.edit', [$subscriptionType->id])}}">Editar</a>
				                </div>
			                </td>
		                </tr>
		                @endforeach
	          		</tbody>
	        	</table>
	      	</div>
	    </div>
	</div>
@endsection
@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
		<div class="col-md-8">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  	<h2>TIPOS DE ASSINATURAS</h2>
			  	<div class="ml-auto">
			  		<a class="btn btn-primary btn-sm" href="{{route('adm.subscriptions.plans.new')}}">Novo tipo</a>
			  	</div>
			</nav>
	      	<div class="table-responsive">
	        	<table class="table table-bordered">
	          		<thead>
	            		<tr>
	              			<th>#</th>
	              			<th>DESCRIÇÃO</th>
	              			<th>AÇÕES</th>
	            		</tr>
	          		</thead>
	          		<tbody>
	          			@foreach ($subscriptionPlans as $subscriptionPlan)
		                <tr>
			                <td>{{$subscriptionPlan->id}}</td>
			                <td>{{$subscriptionPlan->type->name}} - {{$subscriptionPlan->collection->name}}</td>
			                <td class="actions">
			                	<div class="text-center">
			                		<a class="btn btn-success btn-sm button-width" href="{{route('adm.subscriptions.plans.show', [$subscriptionPlan->id])}}">Visualizar</a>
		                        	<a class="btn btn-warning btn-sm button-width" href="{{route('adm.subscriptions.plans.edit', [$subscriptionPlan->id])}}">Editar</a>
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
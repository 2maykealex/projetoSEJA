@extends('templates.default_subscriber')

@section('title')
	MINHA ASSINATURA
@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center py-5">
		<div class="col-md-10 bg-light py-3">
			<nav class="navbar navbar-expand-lg ">
			  	<h2>MINHA ASSINATURA</h2>
			</nav>
	      	<div class="table-responsive pb-3 pt-3 bg-white px-3">
	        	<table class="table table-bordered">
	          		<thead>
	            		<tr>
	              			<th>DATA DA ASSINATURA</th>
	              			<th>Plano</th>
	              			<th>Forma de pagamento</th>
	              			<th>Valor</th>
	              			<th class="text-center">AÇÕES</th>
	            		</tr>
	          		</thead>
	          		<tbody>
		                <tr>
			                <td>{{date('d/m/Y', strtotime($subscriptionRegistry->created_at))}}</td>
			                <td>{{$subscriptionRegistry->subscriptionPlan->type->name}}</td>
			                <td>{{$subscriptionRegistry->subscriptionPlan->collection->name}}</td>
			                <td>{{$subscriptionRegistry->subscriptionPlan->price}}</td>
			                <td class="actions text-center" width="27%">
		                		<a class="btn btn-success btn-sm button-width">Alterar Plano</a>
		                		<a class="btn btn-warning btn-sm button-width">Cancelar</a>
			                 </td>
		                </tr>
	          		</tbody>
	        	</table>
	      	</div>
	    </div>
	</div>
@endsection
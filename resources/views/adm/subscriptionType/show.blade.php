@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
		<div class="col-md-8">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  	<h2>VISUALIZAR PLANO</h2>
			</nav>
	      	<div class="table-responsive">
	        	<table class="table table-bordered">
	          		<thead>
	            		<tr>
	              			<th>#</th>
	              			<th>DESCRIÇÃO</th>
	              			<th>DATA DE CRIAÇÃO</th>
	            		</tr>
	          		</thead>
	          		<tbody>
		          		@foreach ($subscriptionType as $subscriptionShow)	          			
			                <tr>
				                <td>{{$subscriptionShow->id}}</td>
				                <td>{{$subscriptionShow->name}}</td>
				                <td>{{$subscriptionShow->created_at}}</td>
			                </tr>
			            @endforeach
			        </tbody>
	        	</table>
	      	</div>
	      	<div class="text-center mt-4">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.subscriptions.types.list')}}">Voltar</a>
			</div>
	    </div>
	</div>
@endsection
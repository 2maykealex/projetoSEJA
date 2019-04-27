@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
		<div class="col-md-8">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  	<h2>VISUALIZAR EVENTO</h2>
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
		          		@foreach ($eventType as $eventShow)	          			
			                <tr>
				                <td>{{$eventShow>id}}</td>
				                <td>{{$$eventShow->name}}</td>
				                <td>{{$$eventShow->created_at}}</td>
			                </tr>
			            @endforeach
			        </tbody>
	        	</table>
	      	</div>
	      	<div class="text-center mt-4">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.events.types.list')}}">Voltar</a>
			</div>
	    </div>
	</div>
@endsection
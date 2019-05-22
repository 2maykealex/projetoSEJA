@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
		<div class="col-md-10 bg-light py-3">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  	<h2>EVENTOS</h2>
			  	<div class="ml-auto">
			  		<a class="btn btn-primary btn-sm" href="{{route('adm.events.types.new')}}">Novo</a>
			  	</div>
			</nav>
	      	<div class="table-responsive pb-3 pt-3 bg-white px-3">
	        	<table class="table table-bordered">
	          		<thead>
	            		<tr>
	              			<th>#</th>
	              			<th>DESCRIÇÃO</th>
	              			<th class="text-center">AÇÕES</th>
	            		</tr>
	          		</thead>
	          		<tbody>
	          			@foreach ($eventsTypes as $eventsType)
		                <tr>
			                <td>{{$eventsType->id}}</td>
			                <td>{{$eventsType->name}}</td>
			                <td class="actions text-center">	                        
		                		<a class="btn btn-success btn-sm button-width" href="{{route('adm.events.types.show', [$eventsType->id])}}">Visualizar</a>
	                        	<a class="btn btn-warning btn-sm button-width" href="{{route('adm.events.types.edit', [$eventsType->id])}}">Editar</a>                
			                 </td>
		                </tr>
		                @endforeach
	          		</tbody>
	        	</table>
	      	</div>
	    </div>
	</div>
@endsection
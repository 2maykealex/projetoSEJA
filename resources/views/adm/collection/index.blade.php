@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
		<div class="col-md-8">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  	<h2>TIPOS DE PAGAMENTOS</h2>
			  	<div class="ml-auto">
			  		<a class="btn btn-primary btn-sm" href="{{route('adm.collections.new')}}">Novo tipo</a>
			  	</div>
			</nav>
	      	<div class="table-responsive">
	        	<table class="table table-bordered">
	          		<thead>
	            		<tr>
	              			<th>#</th>
	              			<th>DESCRIÇÃO</th>
	              			<th>VIZUALIZAR</th>
	              			<th>EDITAR</th>
	            		</tr>
	          		</thead>
	          		<tbody>
	          			@foreach ($collections as $collection)
		                <tr>
			                <td>{{$collection->id}}</td>
			                <td>{{$collection->name}}</td>
			                <td class="actions">	                        
		                		<a class="btn btn-success btn-sm button-width" href="{{route('adm.collections.show', [$collection->id])}}">Visualizar</a>
		                	</td>
		                	<td class="actions">
	                        	<a class="btn btn-warning btn-sm button-width" href="{{route('adm.collections.edit', [$collection->id])}}">Editar</a>                
			                 </td>
		                </tr>
		                @endforeach
	          		</tbody>
	        	</table>
	      	</div>
	    </div>
	</div>
@endsection
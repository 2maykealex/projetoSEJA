@extends('templates.default_subscriber')

@section('title')
	PUBLICADORES
@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center py-5">
		<div class="col-md-10 bg-light py-3">
			<nav class="navbar navbar-expand-lg ">
			  	<h2>PUBLICADORES</h2>
			</nav>
	      	<div class="table-responsive pb-3 pt-3 bg-white px-3">
	        	<table class="table table-bordered">
	          		<thead>
	            		<tr>
	              			<th>NOME</th>
	              			<th class="text-center">AÇÕES</th>
	            		</tr>
	          		</thead>
	          		<tbody>
	          		@foreach($publishers as $publisher)
		                <tr>
			                <td>{{$publisher->person->name}}</td>
			                <td class="actions text-center">
		                		<a class="btn btn-success btn-sm button-width" href="{{route('subscriber.publishers.show', $publisher->person->id)}}">Visualizar</a>
			                 </td>
		                </tr>
		            @endforeach   
	          		</tbody>
	        	</table>
	      	</div>
	    </div>
	</div>
@endsection
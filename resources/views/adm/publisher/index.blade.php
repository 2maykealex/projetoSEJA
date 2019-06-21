@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center py-5">
		<div class="col-md-10 bg-light py-3">
			<nav class="navbar navbar-expand-lg ">
			  	<h2>PUBLISHERS</h2>
			</nav>
	      	<div class="table-responsive pb-3 pt-3 bg-white px-3">
	        	<table class="table table-bordered">
	          		<thead>
	            		<tr>
	              			<th>DATA DE CADASTRO</th>
	              			<th>NOME</th>
	              			<th>ÁREA</th>
	              			<th class="text-center">AÇÕES</th>
	            		</tr>
	          		</thead>
	          		<tbody>
	          		@foreach($publishers as $publisher)
		                <tr>
			                <td>{{date('d/m/Y', strtotime($publisher->created_at))}}</td>
			                <td>{{$publisher->person->name}}</td>
			                <td>Área de atuação</td>
			                <td class="actions text-center">
		                		<a class="btn btn-success btn-sm button-width" href="{{route('adm.publishers.show', $publisher->id)}}">Visualizar</a>
	                        	<a class="btn btn-warning btn-sm button-width" href="{{route('adm.publishers.edit', $publisher->id)}}">Editar</a>
			                 </td>
		                </tr>
		            @endforeach   
	          		</tbody>
	        	</table>
	      	</div>
	    </div>
	</div>
@endsection
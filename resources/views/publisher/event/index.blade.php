@extends('templates.default_publisher')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
		<div class="col-md-10 bg-white">
			<nav class="navbar navbar-expand-lg ">
			  	<h2>EVENTOS</h2>
			</nav>
	      	<div class="table-responsive">
	        	<table class="table table-bordered">
	          		<thead>
	            		<tr>
	              			<th>#</th>
	              			<th>NOME</th>
	              			<th>DESCRIÇÃO</th>
	              			<th class="text-center">AÇÕES</th>
	            		</tr>
	          		</thead>
	          		<tbody>
	          		
		                <tr>
			                <td>01</td>
			                <td>Lorem ipsum</td>
			                <td>dolor sit amet, consectetur adipiscing elit, sed do eiusmod</td>
			                <td class="actions text-center">	                        
		                		<a class="btn btn-success btn-sm button-width" href="#">Visualizar</a>
	                        	<a class="btn btn-warning btn-sm button-width" href="#">Editar</a>                
			                 </td>
		                </tr>
		                
	          		</tbody>
	        	</table>
	      	</div>
	    </div>
	</div>
@endsection
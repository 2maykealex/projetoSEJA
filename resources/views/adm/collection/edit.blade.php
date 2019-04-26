@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
		<div class="col-md-8">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  	<h2>EDITAR PAGAMENTO</h2>
			</nav>
	      	<div class="table-responsive">
	        	<table class="table table-bordered">
	          		<thead>
	            		<tr>
	              			<th>#</th>
	              			<th>DESCRIÇÃO</th>
	              			<th>DATA</th>
	              			<th class="text-center">AÇÕES</th>
	            		</tr>
	          		</thead>
	          		<tbody>
	          			@foreach ($collection as $collectionEdit)	          			
		                <tr>
			                <td>{{$collectionEdit->id}}</td>
			                <td>{{$collectionEdit->name}}</td>
			                <td>{{$collectionEdit->created_at}}</td>
			                <td class="actions text-center">		                       
	                        	<a class="btn btn-primary btn-sm button-width mr-3" href="#">Confirmar</a>
		                		<a class="btn btn-danger btn-sm button-width" href="#">Deletar</a>               
			                </td>
		                </tr>
		                @endforeach
	          		</tbody>
	        	</table>
	      	</div>
	      	<div class="text-center mt-4">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.collections.list')}}">Voltar</a>
			</div>
	    </div>
	</div>
@endsection
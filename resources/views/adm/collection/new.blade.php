@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
		<div class="col-md-8">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  	<h2>CRIAR PAGAMENTO</h2>
			</nav>
	      	<div class="table-responsive">
	        	<table class="table table-bordered">
	          		<thead>
	            		<tr>
	              			<th>#</th>
	              			<th>DESCRIÇÃO</th>
	              			<th>CONFIRMAR</th>
	            		</tr>
	          		</thead>
	          		<tbody>
		                <tr>
			                <td></td>
			                <td></td>
			                <td class="actions">
			                	<a class="btn btn-primary btn-sm button-width " href="#">Confirmar</a> 
			                </td>
		                </tr>
	          		</tbody>
	        	</table>
	      	</div>
	      	<div class="text-center mt-4">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.collections.list')}}">Voltar</a>
			</div>
	    </div>
	</div>
@endsection
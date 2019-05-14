@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
		<div class="col-md-8 bg-light py-3">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  	<h2>PERFIS DE ACESSO</h2>
			</nav>
	      	<div class="table-responsive pb-3 pt-3 bg-white px-3">
	        	<table class="table table-bordered">
	          		<thead>
	            		<tr>
	              			<th>#</th>
	              			<th>DESCRIÇÃO</th>
	              			<th>AÇÕES</th>
	            		</tr>
	          		</thead>
	          		<tbody>
	          			@foreach ($profilesAccesses as $profilesAccesse)
		                <tr>
			                <td>{{$profilesAccesse->id}}</td>
			                <td>{{$profilesAccesse->name}}</td>
			                <td class="actions">
			                	<div class="text-center">
			                		<a class="btn btn-success btn-sm button-width" href="{{route('adm.security.profile.show', [$profilesAccesse->id])}}">Visualizar</a>
			                	</div>
			                </td>
		                </tr>
		                @endforeach
	          		</tbody>
	        	</table>
	      	</div>
	    </div>
	</div>
@endsection
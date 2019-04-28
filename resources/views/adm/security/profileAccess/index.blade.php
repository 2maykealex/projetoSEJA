@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
		<div class="col-md-8">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  	<h2>PERFIS DE ACESSO</h2>
			  	<div class="ml-auto">
			  		<button type="button" class="btn btn-primary btn-sm">Novo tipo</button>
			  	</div>
			</nav>
	      	<div class="table-responsive">
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
		                        	{{--<a class="btn btn-warning btn-sm button-width" href="{{route('adm.subscriptions.plans.edit', [$profilesAccesse->id])}}">Editar</a>--}}
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
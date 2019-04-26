@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
		<div class="col-md-8">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  	<h2>VISUALIZAR CONGRESSO</h2>
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
		          		@foreach ($congressType as $congressShow)	
			                <tr>
				                <td>{{$congressShow->id}}</td>
				                <td>{{$congressShow->name}}</td>
				                <td>{{$congressShow->created_at}}</td>
			                </tr>
			            @endforeach
			        </tbody>
	        	</table>
	      	</div>
	      	<div class="text-center mt-4">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.congresses.types.list')}}">Voltar</a>
			</div>
	    </div>
	</div>
@endsection
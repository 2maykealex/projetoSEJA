@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	@include('includes.alerts')
	<div class="d-flex justify-content-center flex-lg-center py-5">
    	<div class="col-md-10 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>EDITAR EVENTO</h2>
			</nav>
			<form action="{{route('adm.events.types.update', $eventType->id)}}" method="post" class="pb-3 pt-3 bg-white px-3">
				@csrf
				<div class="form-group">						    
				    <input type="hidden" class="form-control" id="id" name="id" value="{{$eventType->id}}">
				</div>
				<div class="form-group">
				    <label for="name">DESCRIÇÃO</label>   
				    <input type="text" class="form-control" id="name" name="name" value="{{$eventType->name}}" autofocus>
				</div>
		    	<div class="clearfix">
				  	<button type="submit" class="btn btn-warning float-left">Confirmar</button>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.events.types.list')}}">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
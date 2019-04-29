@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
    	<div class="col-md-8 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>EDITAR EVENTO</h2>
			</nav>
			<form action="#" method="POST" class="pb-3 pt-3 bg-white px-3">
				@csrf

				@foreach ($eventType as $eventEdit)
				<div class="form-group">
				    <label for="disabledTextInput">ID</label>							    
				    <input type="text" class="form-control" id="disabledTextInput" placeholder="{{$eventEdit->id}}" disabled>
				</div>
				<div class="form-group">
				    <label>DESCRIÇÃO</label>   
				    <input type="text" class="form-control" id="name" name="name" placeholder="{{$eventEdit->name}}">
				</div>
				@endforeach
		    	<div class="clearfix">
				  	<button type="button" class="btn btn-warning float-left">Confirmar</button>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="javascript:history.go(-1)">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
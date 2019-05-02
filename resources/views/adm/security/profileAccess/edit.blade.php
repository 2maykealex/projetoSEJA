@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
    	<div class="col-md-8 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>EDITAR PERFIL</h2>
			</nav>
			@foreach ($profilesAccess as $profilesAccessEdit)
			<form action="{{route('adm.security.profile.update', $profilesAccessEdit->id)}}" method="POST" class="pb-3 pt-3 bg-white px-3">
				@csrf
				<div class="form-group">
				    <label for="id">ID</label>							    
				    <input type="text" class="form-control" id="id" name="id" value="{{$profilesAccessEdit->id}}" disabled>
				</div>
				<div class="form-group">
				    <label for="name">DESCRIÇÃO</label>   
				    <input type="text" class="form-control" id="name" name="name" value="{{$profilesAccessEdit->name}}">
				</div>
		    	<div class="clearfix">
				  	<button type="submit" class="btn btn-warning float-left">Confirmar</button>
				</div>
			</form> 
			@endforeach 
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="javascript:history.go(-1)">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
    	<div class="col-md-8 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>EDITAR PERFIL</h2>
			</nav>
			<form action="{{route('adm.security.profile.update', $profilesAccess->id)}}" method="POST" class="pb-3 pt-3 bg-white px-3">
				@csrf
				<div class="form-group">					    
				    <input type="hidden" class="form-control" id="id" name="id" value="{{$profilesAccess->id}}">
				</div>
				<div class="form-group">
				    <label for="name">DESCRIÇÃO</label>   
				    <input type="text" class="form-control" id="name" name="name" value="{{$profilesAccess->name}}">
				</div>
		    	<div class="clearfix">
				  	<button type="submit" class="btn btn-warning float-left">Confirmar</button>
				</div>
			</form> 
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="javascript:history.go(-1)">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
    	<div class="col-md-8 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>EDITAR PERFIL</h2>
			</nav>
			<form action="#" method="POST" class="pb-3 pt-3 bg-white px-3">
				@csrf

				@foreach ($profilesAccess as $profilesAcces)
				<div class="form-row">
					<div class="form-group col-md-6">
					    <label>ID</label>							    
					    <input type="text" class="form-control" id="id" name="id" placeholder="{{$profilesAcces->id}}">							    
					</div>
					<div class="form-group col-md-6">
					    <label>DATA DE CRIAÇÃO</label> 
					    <input type="text" class="form-control" id="created_at" name="created_at" placeholder="{{$profilesAcces->created_at}}">
					</div>
				</div>
				<div class="form-group">
				    <label>DESCRIÇÃO</label>   
				    <input type="text" class="form-control" id="name" name="name" placeholder="{{$profilesAcces->name}}">
				</div>
				@endforeach
		    	<div class="clearfix">
				  	<button type="button" class="btn btn-warning float-left">Confirmar</button>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.security.profile.list')}}">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
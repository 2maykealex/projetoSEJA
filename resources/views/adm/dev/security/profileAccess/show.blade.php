@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	
    <div class="d-flex justify-content-center flex-lg-center">
    	<div class="col-md-8 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>PERFIL DE ACESSO</h2>
			</nav>
			<form class="pb-3 pt-3 bg-white px-3">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-2">
					    <label for="id">ID</label>							    
					    <input type="text" class="form-control" placeholder="{{$profilesAccess->id}}" disabled>			    
					</div>
					<div class="form-group col-md-5">
					    <label for="created_at">DATA DE CRIAÇÃO</label> 
					    <input type="text" class="form-control" placeholder="{{$profilesAccess->created_at}}" disabled>
					</div>
					<div class="form-group col-md-5">
					    <label for="updated_at">DATA DE ALTERAÇÃO</label> 
					    <input type="text" class="form-control" placeholder="{{$profilesAccess->updated_at}}" disabled>
					</div>
				</div>
				<div class="form-group">
				    <label for="name">DESCRIÇÃO</label>   
				    <input type="text" class="form-control" placeholder="{{$profilesAccess->name}}" disabled>
				</div>
		    	<div class="clearfix">
				  	<a class="btn btn-warning float-left" href="{{route('adm.security.profile.edit', [$profilesAccess->id])}}" >Alterar</a>
				  	<a class="btn btn-danger float-right" href="{{route('adm.security.profile.delete', [$profilesAccess->id])}}">Deletar</a>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="javascript:history.go(-1)">Voltar</a>
			</div> 
		</div>             
	</div>	      
@endsection
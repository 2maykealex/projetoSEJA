@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
    	<div class="col-md-8 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>VISUALIZAR</h2>
			</nav>
			<form class="pb-3 pt-3 bg-white px-3">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-2">
					    <label>ID</label>							    
					    <input type="text" class="form-control" placeholder="{{$collection->id}}" disabled>							    
					</div>
					<div class="form-group col-md-5">
					    <label>DATA CRIAÇÃO</label> 
					    <input type="text" class="form-control" placeholder="{{$collection->created_at}}" disabled>
					</div>
					<div class="form-group col-md-5">
					    <label>DATA ALTERAÇÃO</label> 
					    <input type="text" class="form-control" placeholder="{{$collection->updated_at}}" disabled>
					</div>
				</div>
				<div class="form-group">
				    <label>DESCRIÇÃO</label>   
				    <input type="text" class="form-control" placeholder="{{$collection->name}}" disabled>
				</div>
		    	<div class="clearfix">
				  	<a class="btn btn-warning float-left" href="{{route('adm.collections.edit', [$collection->id])}}" >Alterar</a>
				  	<form action="{{ route('adm.collections.delete', $collection->id)}}" method="post">
	                  	@csrf
	                  	@method('DELETE')
	                  	<button class="btn btn-danger float-right" type="submit">Delete</button>
	                </form>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.collections.list')}}">Voltar</a>
			</div> 
		</div>             
	</div>
@endsection
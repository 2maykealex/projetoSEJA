@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center py-5">
    	<div class="col-md-10 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>VISUALIZAR PUBLISHER</h2>
			</nav>
			<form class="pb-3 pt-3 bg-white px-3">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-2">
					    <label>ID</label>							    
					    <input type="text" class="form-control" placeholder="{{$publisher->id}}" disabled>							    
					</div>
					<div class="form-group col-md-5">
					    <label>DATA CRIAÇÃO</label> 
					    <input type="text" class="form-control" placeholder="{{date('d/m/Y', strtotime($publisher->created_at))}}" disabled>
					</div>
					<div class="form-group col-md-5">
					    <label>DATA ALTERAÇÃO</label> 
					    <input type="text" class="form-control" placeholder="{{date('d/m/Y', strtotime($publisher->updated_at))}}" disabled>
					</div>
				</div>
				<div class="form-group">
				    <label>NOME</label>   
				    <input type="text" class="form-control" placeholder="{{$publisher->person->name}}" disabled>
				</div>
				<div class="form-group">
				    <label>IMAGEM</label>
		            <div class="row no-gutters bg-light py-3 px-3">
		                <div class="col-lg-1 text-center">
		                    <img class="rounded-circle" src="{{ asset('storage/img/profiles/' . $publisher->person->image)}}" width="50" height="50">
		                </div>
		            </div>
		       	</div>
		    	<div class="clearfix">
				  	<a class="btn btn-warning float-left" href="{{route('adm.publishers.edit', [$publisher->id])}}" >Alterar</a>
				  	<a class="btn btn-danger float-right" href="{{route('adm.publishers.delete', [$publisher->id])}}" >Deletar</a>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.publishers.list')}}">Voltar</a>
			</div> 
		</div>
	</div>
@endsection
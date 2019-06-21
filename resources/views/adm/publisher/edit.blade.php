@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center py-5">
    	<div class="col-md-10 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>EDITAR PUBLISHER</h2>
			</nav>
			<form action="{{route('adm.publishers.update', $publisher->id)}}" method="post" class="pb-3 pt-3 bg-white px-3" enctype="multipart/form-data">
				@csrf
				<div class="form-group"> 
				    <input type="hidden" class="form-control" id="id" name="id" value="{{$publisher->id}}">
				</div>
				<div class="form-group">
				    <label for="title">NOME</label>   
				    <input type="text" class="form-control" id="title" name="title" value="{{$publisher->person->name}}" autofocus>
				</div>
				
				<div class="form-group">
				    <label>IMAGEM</label>
		            <div class="row no-gutters bg-light py-3 px-3">
		                <div class="col-lg-1 text-center">
		                    <img class="rounded-circle" src="{{ asset('storage/img/profiles/' . $publisher->person->image)}}" width="50" height="50">
		                </div>
					</div>
					<input type="file" class="form-control-file" id="image" name="image" accept="image/*">
		       	</div>
		    	<div class="clearfix">
				  	<button type="submit" class="btn btn-warning float-left">Confirmar</button>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.publishers.list')}}">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
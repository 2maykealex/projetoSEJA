@extends('templates.default_publisher')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
    	<div class="col-md-8 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>CRIAR PUBLICAÇÃO</h2>
			</nav>
			<form action="{{route('publisher.posts.store')}}" method="post" class="pb-3 pt-3 bg-white px-3">
				@csrf
				<div class="form-group">
				    <label>TITULO</label>   
				    <input type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
				    <label>DATA DE CRIAÇÃO</label>   
				    <input type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
				    <label>HORARIO</label>   
				    <input type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
				    <label>CONTEUDO</label>   
				    <input type="text" class="form-control" id="name" name="name">
				</div>
		    	<div class="clearfix">
				  	<button type="button" class="btn btn-primary">Criar</button>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="javascript:history.go(-1)">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
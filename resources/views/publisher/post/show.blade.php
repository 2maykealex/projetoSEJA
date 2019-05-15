@extends('templates.default_publisher')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center pb-5">
    	<div class="col-md-8 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>VISUALIZAR</h2>
			</nav>
			<form class="pb-3 pt-3 bg-white px-3">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-2">
					    <label>ID</label>							    
					    <input type="text" class="form-control" value="{{$post->id}}" disabled>							    
					</div>
					<div class="form-group col-md-5">
					    <label>DATA CRIAÇÃO</label> 
					    <input type="text" class="form-control" value="{{$post->created_at}}" disabled>
					</div>
					<div class="form-group col-md-5">
					    <label>DATA ALTERAÇÃO</label> 
					    <input type="text" class="form-control" value="{{$post->updated_at}}" disabled>
					</div>
				</div>
				<div class="form-group">
				    <label>IMAGEM</label>   
				    <input type="text" class="form-control" value="{{$post->image}}" disabled>
				</div>
				<div class="form-group">
				    <label>TIPO DE PÚBLICO</label>   
				    <input type="text" class="form-control" value="{{$subscriptionType->name}}" disabled>
				</div>
				<div class="form-group">
				    <label>TÍTULO</label>   
				    <input type="text" class="form-control" value="{{$post->title}}" disabled>
				</div>
				<div class="form-group">
				    <label>RESUMO</label>   
				    <textarea class="form-control" rows="4" disabled>{{$post->summary}}</textarea>
				</div>
				<div class="form-group">
				    <label>TEXTO</label>   
				    <textarea class="form-control" rows="8" disabled>{{$post->text}}</textarea>
				</div>
				<div class="form-group">
				    <label>ANEXOS</label>   
				    <input type="text" class="form-control" value="#" disabled>
				</div>
		    	<div class="clearfix">
				  	<a class="btn btn-warning float-left" href="{{route('publisher.posts.edit', [$post->id])}}" >Alterar</a>
				  	<a class="btn btn-danger float-right" href="{{route('publisher.posts.edit', [$post->id])}}" >Deletar</a>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('publisher.posts.list')}}">Voltar</a>
			</div> 
		</div>             
	</div>
@endsection
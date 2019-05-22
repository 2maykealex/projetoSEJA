@extends('templates.default_publisher')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center pb-5">
    	<div class="col-md108 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>VISUALIZAR CONGRESSO</h2>
			</nav>
			<form class="pb-3 pt-3 bg-white px-3">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-2">
					    <label>ID</label>							    
					    <input type="text" class="form-control" placeholder="{{$->id}}" disabled>							    
					</div>
					<div class="form-group col-md-5">
					    <label>DATA CRIAÇÃO</label> 
					    <input type="text" class="form-control" placeholder="{{date('d/m/Y', strtotime($post->created_at))}}" disabled>
					</div>
					<div class="form-group col-md-5">
					    <label>DATA ALTERAÇÃO</label> 
					    <input type="text" class="form-control" placeholder="{{date('d/m/Y', strtotime($post->updated_at))}}" disabled>
					</div>
				</div>
				<div class="form-group">
				    <label>TÍTULO</label>   
				    <input type="text" class="form-control" placeholder="{{$->title}}" disabled>
				</div>
				<div class="form-group">
				    <label>RESUMO</label>   
				    <textarea class="form-control" rows="4" disabled>{{$->summary}}</textarea>
				</div>
				<div class="form-group">
				    <label>TEXTO</label>   
				    <textarea class="form-control" rows="8" disabled>{{$->text}}</textarea>
				</div>
				<div class="form-group">
				    <label>TIPO DE PÚBLICO</label>   
				    <input type="text" class="form-control" placeholder="{{$->name}}" disabled>
				</div>
				<div class="form-group">
				    <label>IMAGEM</label>   
				    <div class="col-md-8 py-3"> 
				    	<img src="{{ asset('storage/img/posts/' . $->image) }}" width="100%" class="img-fluid "> 
				    </div>
				</div>
				<div class="form-group">
				    <label>ANEXOS</label>   
				    <input type="text" class="form-control" placeholder="#" disabled>
				</div>
		    	<div class="clearfix">
				  	<a class="btn btn-warning float-left" href="{{route('publisher.congresses.edit', [$->id])}}" >Alterar</a>
				  	<a class="btn btn-danger float-right" href="{{route('publisher.congresses.delete', [$->id])}}" >Deletar</a>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('publisher.congresses.list')}}">Voltar</a>
			</div> 
		</div>             
	</div>
@endsection
@extends('templates.default_publisher')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
    	<div class="col-md-8 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>EDITAR</h2>
			</nav>
			<form action="{{route('publisher.posts.update', $post->id)}}" method="post" class="pb-3 pt-3 bg-white px-3">
				@csrf
				<div class="form-group"> 
				    <input type="hidden" class="form-control" id="id" name="id" value="{{$post->id}}">
				</div>
				<div class="form-group">
				    <label for="image">IMAGEM</label>   
				    <input type="text" class="form-control" id="image" name="image" value="#">
				</div>
				{{--<div class="form-group">
		    		<label for="subscription_plans_id">TIPO DE PÚBLICO</label>	    		
		      		<select class="form-control" id="subscription_plans_id" name="subscription_plans_id" collapse>
		        		<option>Escolher</option>
		        		@foreach ($subscriptionTypes as $subscriptionType)
		        			<option value="{{$subscriptionType->id}}" 
		        			@if ( isset($subscriptionPlan) && $subscriptionPlan->type->id == $subscriptionType->id ) selected @endif>{{$subscriptionType->name}}</option>
		        		@endforeach	        		
		      		</select>	
		    	</div>--}}
				<div class="form-group">
				    <label for="title">TÍTULO</label>   
				    <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" autofocus>
				</div>
				<div class="form-group">
				    <label for="summary">RESUMO</label>   
				    <input type="text" class="form-control" id="summary" name="summary" value="{{$post->summary}}">
				</div>
				<div class="form-group">
				    <label for="text">TEXTO</label>   
				    <input type="text" class="form-control" id="text" name="text" placeholder="{{$post->text}}">
				</div>
				<div class="form-group">
				    <label>ANEXOS</label>   
				    <input type="text" class="form-control" placeholder="#" >
				</div>
		    	<div class="clearfix">
				  	<button type="submit" class="btn btn-warning float-left">Confirmar</button>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('publisher.posts.list')}}">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
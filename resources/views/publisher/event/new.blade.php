@extends('templates.default_publisher')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center pb-5">
    	<div class="col-md-10 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>CRIAR EVENTOS</h2>
			</nav>
			<form action="{{route('publisher.events.store')}}" method="post" class="pb-3 pt-3 bg-white px-3" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
				    <label for="title">TÍTULO</label>   
				    <input type="text" class="form-control" id="title" name="title" autofocus>
				</div>
				<div class="form-group">
				    <label for="summary">RESUMO</label>   
				    <textarea class="form-control" id="summary" name="summary" rows="4"></textarea>
				</div>
				<div class="form-group">
				    <label for="text">TEXTO</label>   
				    <textarea class="form-control" id="text" name="text" rows="8"></textarea>
				</div>
				<div class="form-group">
		    		<label for="subscription_type_id">TIPO DE PÚBLICO</label>	    		
		      		<select class="form-control" id="subscription_type_id" name="subscription_type_id" collapse>
		        		<option>Escolher</option>
		        		@foreach ($subscriptionTypes as $subscriptionType)
		        			<option value="{{$subscriptionType->id}}">{{$subscriptionType->name}}</option>
		        		@endforeach	        		
		      		</select>	
		    	</div>
		    	<div class="form-group">
				    <label for="image">IMAGEM</label>   
				    <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
				</div>
				<div class="form-group">
				    <label>ANEXOS</label>   
				    <input type="text" class="form-control" placeholder="#" >
				</div>
		    	<div class="clearfix">
				  	<button type="submit" class="btn btn-primary float-left">Criar</button>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('publisher.posts.list')}}">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
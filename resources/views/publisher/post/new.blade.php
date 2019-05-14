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
				    <label>Título</label>   
				    <input type="text" class="form-control" id="name" name="name" autofocus>
				</div>
				<div class="form-group">
				    <label>Resumo</label>   
				    <input type="text" class="form-control" id="name" name="name" autofocus>
				</div>
				<div class="form-group">
		    		<label>Tipo de público</label>	    		
		      		<select class="form-control"collapse>
		        		<option>Escolher</option>		        		
		        			<option></option>		        			        		
		      		</select>	
		    	</div>
				<div class="form-group">
				    <label>Mensagem</label>   
				    <input type="text" class="form-control" id="name" name="name" autofocus>
				</div>
				<div class="form-group">
				    <label>Links</label>   
				    <input type="text" class="form-control" id="name" name="name" autofocus>
				</div>

		    	<div class="clearfix">
				  	<button type="submit" class="btn btn-primary">Criar</button>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.collections.list')}}">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
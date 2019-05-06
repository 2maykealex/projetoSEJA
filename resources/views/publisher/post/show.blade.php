@extends('templates.default_publisher')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
    	<div class="col-md-8 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>VISUALIZAR EVENTO</h2>
			</nav>
			<form action="#" method="POST" class="pb-3 pt-3 bg-white px-3">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-6">
					    <label for="disabledTextInput">ID</label>							    
					    <input type="text" class="form-control" id="disabledTextInput" placeholder="01" disabled>							    
					</div>
					<div class="form-group col-md-6">
					    <label for="disabledTextInput">DATA</label> 
					    <input type="text" class="form-control" id="disabledTextInput" placeholder="10/10/2010" disabled>
					</div>
				</div>
				<div class="form-group">
				    <label for="disabledTextInput">DESCRIÇÃO</label>   
				    <input type="text" class="form-control" id="disabledTextInput" placeholder="dolor sit amet, consectetur adipiscing elit, sed do eiusmod" disabled>
				</div>
		    	<div class="clearfix">
				  	<a class="btn btn-warning float-left" href="#" >Alterar</a>
				  	<a class="btn btn-danger float-right" href="#">Deletar</a>
				</div>
				@endforeach
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('publisher.posts.list')}}">Voltar</a>
			</div> 
		</div>             
	</div>	      
@endsection
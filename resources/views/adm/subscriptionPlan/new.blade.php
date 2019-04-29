@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
    	<div class="col-md-8 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>CRIAR ASSINATURA</h2>
			</nav>
			<form action="#" method="POST" class="pb-3 pt-3 bg-white px-3">
				@csrf
				<div class="form-group">
				    <label for="disabledTextInput">ID</label>							    
				    <input type="text" class="form-control" id="disabledTextInput" placeholder="campo preenchido automaticamente" disabled>
				</div>
				<div class="form-group">
				    <label>PREÇO</label>							    
				    <input type="text" class="form-control" id="price" name="price">
				</div>
				<div class="form-group">
				    <label>DESCRIÇÃO</label>   
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
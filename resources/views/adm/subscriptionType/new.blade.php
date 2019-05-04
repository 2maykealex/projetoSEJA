@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	@include('includes.alerts')
	<div class="d-flex justify-content-center flex-lg-center">
    	<div class="col-md-8 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>CRIAR PLANO</h2>
			</nav>
			<form action="{{route('adm.subscriptions.types.store')}}" method="post" class="pb-3 pt-3 bg-white px-3">
				@csrf
				<div class="form-group">
				    <label for="name">DESCRIÇÃO</label>   
				    <input type="text" class="form-control" id="name" name="name">
				</div>
		    	<div class="clearfix">
				  	<button type="submit" class="btn btn-primary">Criar</button>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.subscriptions.types.list')}}">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
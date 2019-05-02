@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
    	<div class="col-md-8 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>VISUALIZAR PAGAMENTO</h2>
			</nav>
			<form action="#" method="post" class="pb-3 pt-3 bg-white px-3">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-2">
					    <label for="disabledTextInput">ID</label>							    
					    <input type="text" class="form-control" id="disabledTextInput" placeholder="{{$collection->id}}" disabled>							    
					</div>
					<div class="form-group col-md-5">
					    <label for="disabledTextInput">DATA CRIAÇÃO</label> 
					    <input type="text" class="form-control" id="disabledTextInput" placeholder="{{$collection->created_at}}" disabled>
					</div>
					<div class="form-group col-md-5">
					    <label for="disabledTextInput">DATA ALTERAÇÃO</label> 
					    <input type="text" class="form-control" id="disabledTextInput" placeholder="{{$collection->updated_at}}" disabled>
					</div>
				</div>
				<div class="form-group">
				    <label for="disabledTextInput">DESCRIÇÃO</label>   
				    <input type="text" class="form-control" id="disabledTextInput" placeholder="{{$collection->name}}" disabled>
				</div>
		    	<div class="clearfix">
				  	<a class="btn btn-warning float-left" href="{{route('adm.collections.edit', [$collection->id])}}" >Alterar</a>
				  	<button type="button" class="btn btn-danger float-right">Deletar</button>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="javascript:history.go(-1)">Voltar</a>
			</div> 
		</div>             
	</div>
@endsection
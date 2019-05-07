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

				@foreach ($eventType as $eventShow)
				<div class="form-row">
					<div class="form-group col-md-6">
					    <label for="disabledTextInput">ID</label>							    
					    <input type="text" class="form-control" id="disabledTextInput" placeholder="{{$eventShow->id}}" disabled>							    
					</div>
					<div class="form-group col-md-6">
					    <label for="disabledTextInput">DATA</label> 
					    <input type="text" class="form-control" id="disabledTextInput" placeholder="{{$eventShow->created_at}}" disabled>
					</div>
				</div>
				<div class="form-group">
				    <label for="disabledTextInput">DESCRIÇÃO</label>   
				    <input type="text" class="form-control" id="disabledTextInput" placeholder="{{$eventShow->name}}" disabled>
				</div>
		    	<div class="clearfix">
				  	<a class="btn btn-warning float-left" href="{{route('adm.events.types.edit', [$eventShow->id])}}" >Alterar</a>
				  	<button type="button" class="btn btn-danger float-right">Deletar</button>
				</div>
				@endforeach
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="javascript:history.go(-1)">Voltar</a>
			</div> 
		</div>             
	</div>	      
@endsection
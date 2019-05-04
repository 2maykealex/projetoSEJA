@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
    	<div class="col-md-8 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>CRIAR ASSINATURA</h2>
			</nav>
			<form action="{{route('adm.subscriptions.plans.store')}}" method="post" class="pb-3 pt-3 bg-white px-3">
				@csrf
				<div class="form-group">
		    		<label for="subscription_type_id">TIPO DE PLANO</label>	    		
		      		<select class="form-control" id="subscription_type_id" name="subscription_type_id" collapse>
		        		<option>Escolher</option>
		        		@foreach ($subscriptionTypes as $subscriptionType)
		        			<option value="{{$subscriptionType->id}}">{{$subscriptionType->name}}</option>
		        		@endforeach	        		
		      		</select>	
		    	</div>
		    	<div class="form-group">
		    		<label for="collection_id">TIPO DE PAGAMENTO</label>
		      		<select class="form-control" id="collection_id" name="collection_id" collapse>
		        		<option>Escolher</option>
		        		@foreach ($collections as $collection)
		        			<option value="{{$collection->id}}">{{$collection->name}}</option>
		        		@endforeach
		      		</select>	
		    	</div>
				<div class="form-group">
				    <label for="price">PREÇO</label>   
				    <input type="number" class="form-control" id="price" name="price">
				</div>
		    	<div class="clearfix">
				  	<button type="submit" class="btn btn-primary">Criar</button>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.subscriptions.plans.list')}}">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
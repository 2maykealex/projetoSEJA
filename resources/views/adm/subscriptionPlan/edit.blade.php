@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	@include('includes.alerts')
	<div class="d-flex justify-content-center flex-lg-center">
    	<div class="col-md-8 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>EDITAR ASSINATURA</h2>
			</nav>
			<form action="{{route('adm.subscriptions.plans.update', $subscriptionPlan->id)}}" method="post" class="pb-3 pt-3 bg-white px-3">	
				@csrf	
				<div class="form-group">			    							    
				    <input type="hidden" class="form-control" id="id" name="id" value="{{$subscriptionPlan->id}}">
				</div>
		    	<div class="form-group">
		    		<label for="subscription_type_id">DESCRIÇÃO PLANO</label>	    		
		      		<select class="form-control" id="subscription_type_id" name="subscription_type_id" collapse>
		        		<option>Escolher</option>
		        		@foreach ($subscriptionTypes as $subscriptionType)
		        			<option value="{{$subscriptionType->id}}" 
		        			@if ( isset($subscriptionPlan) && $subscriptionPlan->type->id == $subscriptionType->id ) selected @endif>{{$subscriptionType->name}}</option>
		        		@endforeach	        		
		      		</select>	
		    	</div>
		    	<div class="form-group">
		    		<label for="collection_id">DESCRIÇÃO PAGAMENTO</label>
		      		<select class="form-control" id="collection_id" name="collection_id" collapse>
		        		<option>Escolher</option>
		        		@foreach ($collections as $collection)
		        			<option value="{{$collection->id}}" 
		        			@if ( isset($subscriptionPlan) && $subscriptionPlan->collection->id == $collection->id) selected @endif>{{$collection->name}}</option>
		        		@endforeach
		      		</select>	
		    	</div>
				<div class="form-group">
				    <label for="name">PREÇO</label>							    
				    <input type="number" class="form-control" id="price" name="price" value="{{$subscriptionPlan->price}}">
				</div>				
		    	<div class="clearfix">
				  	<button type="submit" class="btn btn-warning float-left">Confirmar</button>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.subscriptions.plans.list')}}">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
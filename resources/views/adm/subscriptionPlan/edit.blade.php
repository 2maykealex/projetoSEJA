@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
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
		    		<label for="name">DESCRIÇÃO PLANO</label>	    		
		      		<select class="form-control" id="name" name="name" collapse>
		        		<option value="">Escolher</option>
		        		@foreach ($subscriptionTypes as $subscriptionType)
		        			<option value="{{$subscriptionType->name}}" 
		        			@if ( isset($subscriptionPlan) && $subscriptionPlan->type->name == $subscriptionType->name ) selected @endif>{{$subscriptionType->name}}</option>
		        		@endforeach	        		
		      		</select>	
		    	</div>
		    	<div class="form-group">
		    		<label for="name">DESCRIÇÃO PAGAMENTO</label>
		      		<select class="form-control" id="name" name="name" collapse>
		        		<option value="">Escolher</option>
		        		@foreach ($collections as $collection)
		        			<option value="{{$collection->name}}" 
		        			@if ( isset($subscriptionPlan) && $subscriptionPlan->collection->name == $collection->name) selected @endif>{{$collection->name}}</option>
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
				<a class="btn btn-secondary btn-sm" href="javascript:history.go(-1)">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
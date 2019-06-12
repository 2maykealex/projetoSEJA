@extends('templates.default_publisher')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center py-5">
    	<div class="col-md-10 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>EDITAR CONGRESSO</h2>
			</nav>
			<form action="{{route('publisher.congresses.update', $congress->id)}}" method="post" class="pb-3 pt-3 bg-white px-3" enctype="multipart/form-data">
				@csrf
				<div class="form-group"> 
				    <input type="hidden" class="form-control" id="post_type_id" name="id" value="{{$congress->post_type_id}}">
				</div>
				<div class="form-group">
				    <label for="title">TÍTULO</label>   
				    <input type="text" class="form-control" id="title" name="title" value="{{$congress->title}}" autofocus>
				</div>
				<div class="form-group">
				    <label for="summary">RESUMO</label>   
				    <textarea class="form-control" id="summary" name="summary" rows="4">{{$congress->summary}}</textarea>
				</div>
				<div class="form-group">
				    <label for="text">TEXTO</label>   
				    <textarea class="form-control" id="text" name="text" rows="8">{{$congress->text}}</textarea>
				</div>
				<div class="form-group">
		    		<label for="subscription_type_id">TIPO DE PÚBLICO</label>	    		
		      		<select class="form-control" id="subscription_type_id" name="subscription_type_id" collapse>
		        		<option>Escolher</option>
		        		@foreach ($subscriptionTypes as $subscriptionType)
		        			<option value="{{$subscriptionType->id}}" 
		        			@if ( isset($post) && $post->id == $subscriptionType->id ) selected @endif>{{$subscriptionType->name}}</option>
		        		@endforeach	        		
		      		</select>	
		    	</div>
		    	<div class="form-group">
				    <label for="image">IMAGEM</label>
				    <div class="col-md-8 py-3"> 
				    	<img src="{{ asset('storage/img/congresses/' . $congress->image) }}" width="100%" class="img-fluid "> 
				    </div> 
				    <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
				</div>
				<div class="form-group">
				    <label>ANEXOS</label>   
				    <input type="text" class="form-control" placeholder="#" >
				</div>
				<div class="form-group">
				    <label>ESCRITO POR</label>
		            <div class="row no-gutters bg-light py-3 px-3">
		                <div class="col-lg-1 text-center">
		                    <img class="rounded-circle" src="{{ asset('storage/img/profiles/' . $publisher->image)}}" width="50" height="50">
		                </div>
		                <table class="col-lg-2 text-center" style=" height: 50px;">
		                	<tbody>
		                		<tr>
		                			<td class="align-middle h5">{{$publisher->name}}</td>
		                		</tr>
		                	</tbody>
		                </table>	                
		            </div>
		       	</div>
		    	<div class="clearfix">
				  	<button type="submit" class="btn btn-warning float-left">Confirmar</button>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('publisher.congresses.list')}}">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
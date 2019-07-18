@extends('templates.default_publisher')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center py-5">
    	<div class="col-md-10 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>EDITAR PUBLICAÇÕES</h2>
			</nav>
			<form action="{{route('publisher.posts.update', $post->id)}}" method="post" class="pb-3 pt-3 bg-white px-3" enctype="multipart/form-data">
				@csrf
				<input type="hidden" class="form-control" id="post_id" name="post_id" value="{{$post->id}}">
				
				<div class="form-group">
				    <label for="title">TÍTULO</label>   
				    <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" autofocus>
				</div>
				<div class="form-group">
				    <label for="summary">RESUMO</label>   
				    <textarea class="form-control" id="summary" name="summary" rows="3">{{$post->summary}}</textarea>
				</div>
				<div class="form-group">
				    <label for="text">TEXTO</label>   
				    <textarea class="form-control" id="text" name="text" rows="16">{{$post->text}}</textarea>
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
					<label for="report_type_id">TIPO DE RELATÓRIO</label>
					<select class="form-control" id="report_type_id" name="report_type_id" collapse>
						<option>Escolher</option>
						@foreach ($reportTypes as $reportType)
							<option value="{{$reportType->id}}" 
							@if ( isset($post) && $post->id == $reportType->id ) selected @endif>
							{{$reportType->name}}</option>
								
						@endforeach
					</select>
				</div>
		    	<div class="form-group">
				    <label for="image">IMAGEM</label>
				    <div class="col-md-8 py-3"> 
				    	<img src="{{ asset('storage/img/posts/' . $post->image) }}" width="100%" class="img-fluid "> 
				    </div> 
				    <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
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
				<a class="btn btn-secondary btn-sm" href="{{route('publisher.posts.list')}}">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
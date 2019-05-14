@extends('templates.default_publisher')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
		<div class="col-md-10 bg-white">
			<nav class="navbar navbar-expand-lg ">
			  	<h2>PUBLICAÇÕES</h2>
			</nav>
	      	<div class="table-responsive">
	        	<table class="table table-bordered">
	          		<thead>
	            		<tr>
	              			<th>#</th>
	              			<th>TÍTULO</th>
	              			<th class="text-center">AÇÕES</th>
	            		</tr>
	          		</thead>
	          		<tbody>
	          		@foreach($posts as $post)
		                <tr>
			                <td>{{$post->id}}</td>
			                <td>{{$post->title}}</td>
			                <td class="actions text-center">	                        
		                		<a class="btn btn-success btn-sm button-width" href="{{route('publisher.posts.show', $post->id)}}">Visualizar</a>
	                        	<a class="btn btn-warning btn-sm button-width" href="{{route('publisher.posts.edit', $post->id)}}">Editar</a>                
			                 </td>
		                </tr>
		            @endforeach   
	          		</tbody>
	        	</table>
	      	</div>
	    </div>
	</div>
@endsection
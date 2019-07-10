@extends('templates.default_subscriber')

@section('title')
	CURSOS
@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center py-5">
		<div class="col-md-10 bg-light py-3">
			<nav class="navbar navbar-expand-lg ">
			  	<h2>CURSOS</h2>
			</nav>
	      	<div class="table-responsive pb-3 pt-3 bg-white px-3">
	        	<table class="table table-bordered">
	          		<thead>
	            		<tr>
	              			<th>DATA DE CRIAÇÃO</th>
	              			<th>TÍTULO</th>
	              			<th class="text-center">AÇÕES</th>
	            		</tr>
	          		</thead>
	          		<tbody>
	          		@foreach($courses as $course)
		                <tr>
			                <td>{{date('d/m/Y', strtotime($course->created_at))}}</td>
			                <td>{{$course->title}}</td>
			                <td class="actions text-center">
		                		<a class="btn btn-success btn-sm button-width" href="{{route('subscriber.courses.show', $course->id)}}">Visualizar</a>
			                 </td>
		                </tr>
		            @endforeach   
	          		</tbody>
	        	</table>
	      	</div>
	    </div>
	</div>
@endsection
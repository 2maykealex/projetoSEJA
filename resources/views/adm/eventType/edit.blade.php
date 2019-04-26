@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
		<div class="col-md-8">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  	<h2>EDITAR EVENTO</h2>
			</nav>
	      	<div class="table-responsive">
	        	<table class="table table-bordered">
	          		<thead>
	            		<tr>
	              			<th>#</th>
	              			<th>DESCRIÇÃO</th>
	              			<th>DATA</th>
	              			<th class="text-center">AÇÕES</th>
	            		</tr>
	          		</thead>
	          		<tbody>
	          			@foreach ($eventType as $eventEdit)	          			
		                <tr>
			                <td>{{$eventEdit->id}}</td>
			                <td>{{$eventEdit->name}}</td>
			                <td>{{$eventEdit->created_at}}</td>
			                <td class="actions text-center">		                       
		                		<a class="btn btn-warning btn-sm button-width" href="#">Alterar</a> 
		                		<a class="btn btn-danger btn-sm button-width" href="#">Deletar</a>              
			                </td>
		                </tr>
		                @endforeach
	          		</tbody>
	        	</table>
	      	</div>
	      	<div>
	      		<h4>Alterar descrição</h4>
	      	</div>
	      	<form method="post" action="#">
            @csrf
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Descrição" id="name" name="name">
                    </div>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
	      	<div class="text-center mt-4">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.events.types.list')}}">Voltar</a>
			</div>
	    </div>
	</div>
@endsection
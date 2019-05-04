@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
<button class="btn btn-light col-md-12 text-left mt-2" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent1" aria-controls="navbarToggleExternalContent1" aria-expanded="false" aria-label="Alterna navegação">
                  Editar tipos de:
                </button>             
                <div class="collapse mt-2" id="navbarToggleExternalContent1">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link text-white" href="{{route('publisher.congresses.list')}}" >Congressos</a>
                        <a class="nav-link text-white" href="{{route('publisher.events.list')}}">Eventos</a>
                        <a class="nav-link text-white" href="{{route('publisher.home')}}">Início</a>
                        <a class="nav-link text-white" href="{{route('publisher.posts.list')}}">Postagens</a>
                    </div>                       
                </div>
	<div class="d-flex justify-content-center flex-lg-center">
		<div class="col-md-8">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  	<h2>TIPOS DE CONGRESSOS</h2>
			  	<div class="ml-auto">
			  		<a class="btn btn-primary btn-sm" href="{{route('adm.congresses.types.new')}}">Novo tipo</a>
			  	</div>
			</nav>
	      	<div class="table-responsive">
	        	<table class="table table-bordered">
	          		<thead>
	            		<tr>
	              			<th>#</th>
	              			<th>DESCRIÇÃO</th>
	              			<th class="text-center">AÇÕES</th>
	            		</tr>
	          		</thead>
	          		<tbody>
	          			@foreach ($congressTypes as $congressType)
		                <tr>
			                <td>{{$congressType->id}}</td>
			                <td>{{$congressType->name}}</td>
			                <td class="actions text-center">	                        
		                		<a class="btn btn-success btn-sm button-width" href="{{route('adm.congresses.types.show', [$congressType->id])}}">Visualizar</a>
	                        	<a class="btn btn-warning btn-sm button-width" href="{{route('adm.congresses.types.edit', [$congressType->id])}}">Editar</a>                
			                 </td>
		                </tr>
		                @endforeach
	          		</tbody>
	        	</table>
	      	</div>
	    </div>
	</div>
@endsection
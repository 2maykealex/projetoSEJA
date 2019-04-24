@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="col-md-10">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  	<h2>TIPOS DE PAGAMENTOS</h2>
		  	<div class="ml-auto">
		  		<a class="btn btn-primary btn-sm" href="{{route('adm.collections.new')}}">Novo tipo</a>
		  	</div>
		</nav>
      	<div class="table-responsive">
        	<table class="table table-bordered">
          		<thead>
            		<tr>
              			<th>Número</th>
              			<th>Descrição</th>
              			<th>Nome</th>
              			<th>Data</th>
              			<th>Ações</th>
            		</tr>
          		</thead>
          		<tbody>
	                <tr>
		                <td>1,001</td>
		                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
		                <td>ipsum</td>
		                <td>10/10/2010</td>
		                <td class="actions">
	                        {{--<a class="btn btn-success btn-sm button-height" href="{{route('adm.collections.show')}}">Visualizar</a>
	                        <a class="btn btn-warning btn-sm button-height" href="{{route('adm.collections.edit')}}">Editar</a>
	                        <a class="btn btn-danger btn-sm"  href="{{route(route('adm.collections.delete'))}}" data-toggle="modal" data-target="#delete-modal">Excluir</a>--}}

	                        <a class="btn btn-success btn-sm button-height" href="#">Visualizar</a>
	                        <a class="btn btn-warning btn-sm button-height" href="#">Editar</a>
		                 </td>
	                </tr>
          		</tbody>
        	</table>
      	</div>
	</div>
@endsection
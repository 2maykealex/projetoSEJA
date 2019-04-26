@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center">
		<div class="col-md-8">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  	<h2>CRIAR ASSINATURA</h2>
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
		                <tr>
			                <td></td>
			                <td>
			                	<form method="post" action="#">
					            @csrf
					                <div class="row">
					                    <div class="col">
					                        <input type="text" class="form-control" placeholder="Descrição" id="name" name="name">
					                    </div>
					                </div>
					            </form>
			                <td class="actions text-center">
			                	<a class="btn btn-primary btn-sm button-width " href="#">Criar</a> 
			                </td>
		                </tr>
	          		</tbody>
	        	</table>
	      	</div>
	      	<div class="text-center mt-4">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.subscriptions.plans.list')}}">Voltar</a>
			</div>
	    </div>
	</div>
@endsection
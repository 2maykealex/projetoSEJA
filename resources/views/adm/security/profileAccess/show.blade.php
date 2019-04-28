@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="fundo">
		<div class="container">
	        <div class="d-flex justify-content-center flex-lg-center">
	           	<div class="col-lg-6 py-4 ">
	                <div class="text-xs-center pb-3">
	                    <span class="d-block h3 text-primary-light text-center">DADOS DO ASSIANTE</span>
	                </div>
					<form action="{{route('subscriber.store')}}" method="POST" class="form form-">
						@csrf
						<div class="form-group row">
						    <label class="col-md-2 col-form-label">Nome</label>
						    <div class="col-md-10">
						    	<input class="form-control" id="name" name="name">
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-md-2 col-form-label">CPF</label>
						    <div class="col-md-10">
						    	<input class="form-control" id="cpf" name="cpf" >
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-md-2 col-form-label">Tel/Cel</label>
						    <div class="col-md-10">
						    	<input class="form-control" id="telephone" name="telephone">
						    </div>
						</div>
				    	<div class="form-group row">
				    		<label for="inputCEP" class="col-md-2 col-form-label">CEP</label>
				    		<div class="col-md-10">
				      			<input type="text" class="form-control" id="zipcode" name="zipcode" >
				      		</div>
				    	</div>  	
				    	<div class="form-group row">
				    		<label for="inputCEP" class="col-md-2 col-form-label">Endereço</label>
				    		<div class="col-md-10">
				      			<input type="text" class="form-control" id="address" name="address">
				      		</div>
				    	</div>
				    	<div class="form-group row">
				      		<label for="inputEstado" class="col-md-2 col-form-label">Estado</label>
				      		<div class="col-md-10">
					      		<select class="form-contro" collapse>
					        		<option value="-1">Escolher</option>
					        		
					        			<option>...</option>
					        		
					      		</select>	
					      	</div>
				    	</div>
				    	<div class="form-group row">
				      		<label for="inputCity" class="col-md-2 col-form-label">Cidade</label>
				      		<div class="col-md-10">
					      		<select id="city" name="city" class="form-control">
					        		<option selected>Escolher</option>
					        		<option>...</option>
					      		</select>	
					      	</div>
					  	</div>
					  	<div class="form-group row">
				    		<label  for="email" class="col-md-2 col-form-label">E-mail</label>
				    		<div class="col-md-10">
				      			<input type="email" class="form-control" id="email" name="email">
				      		</div>
				    	</div>  	
				    	<div class="form-group row">
				    		<label for="password" class="col-md-2 col-form-label">Senha</label>
				    		<div class="col-md-10">
				      			<input type="password" class="form-control" id="password" name="password">
				      		</div>
				    	</div>
				    	<div class="form-group row">
				    		<label for="confirmPassword" class="col-md-2 col-form-label">Confirmar</label>
				    		<div class="col-md-10">
				      			<input type="password" class="form-control" id="confirmPassword">
				      		</div>
				    	</div>
				    	<div class="clearfix">
						  	<button type="button" class="btn btn-warning float-left">Alterar</button>
						  	<button type="button" class="btn btn-danger float-right">Deletear</button>
						</div>
					</form>                
				</div>
			</div>
		</div>
	</div>       
@endsection
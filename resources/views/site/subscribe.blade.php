@extends('templates.default_2')

@section('title')
    
@endsection

@section('content')
	<div class="fundo">
		<div class="container">
	        <div class="d-flex justify-content-center flex-lg-center">
	           	<div class="col-lg-6 py-4 ">
	                <div class="text-xs-center pb-3">
	                    <span class="d-block h3 text-primary-light text-center">Novo assinante:</span>
	                </div>
					<form action="{{route('subscriber.store')}}" method="POST" class="form form-" onsubmit="EnviarFormulario()">
						@csrf
						<div class="form-group row">
						    <label class="col-md-3 col-form-label">Nome</label>
						    <div class="col-md-9">
						    	<input class="form-control" id="name" name="name">
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-md-3 col-form-label">CPF</label>
						    <div class="col-md-9">
						    	<input class="form-control" id="cpf" name="cpf" onInput="checkMaskDocument(this)">
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-md-3 col-form-label">Tel/Cel</label>
						    <div class="col-md-9">
						    	<input class="form-control" id="telephone" name="telephone" onInput="checkMaskTelephone(this)">
						    </div>
						</div>
				    	<div class="form-group row">
				    		<label for="inputCEP" class="col-md-3 col-form-label">CEP</label>
				    		<div class="col-md-9">
				      			<input type="text" class="form-control" id="zipcode" name="zipcode" onInput="checkMaskZipCode(this)">
				      		</div>
				    	</div>  	
				    	<div class="form-group row">
				    		<label for="inputCEP" class="col-md-3 col-form-label">Endereço</label>
				    		<div class="col-md-9">
				      			<input type="text" class="form-control" id="address" name="address">
				      		</div>
				    	</div>
				    	<div class="form-group row">
				      		<label for="inputEstado" class="col-md-3 col-form-label">Estado</label>
				      		<div class="col-md-9">
					      		<select class="form-control" id="state" required onchange="listCities(this.value);" collapse>
					        		<option value="-1">Escolher</option>
					        		@foreach($states as $state)
					        			<option value="{{$state->id}}">{{$state->initials}}</option>
					        		@endforeach
					      		</select>	
					      	</div>
				    	</div>
				    	<div class="form-group row">
				      		<label for="inputCity" class="col-md-3 col-form-label">Cidade</label>
				      		<div class="col-md-9">
					      		<select id="city" name="city" class="form-control">
					        		<option selected>Escolher</option>
					        		<option>...</option>
					      		</select>	
					      	</div>
					  	</div>
					  	<div class="form-group row">
				    		<label  for="email" class="col-md-3 col-form-label">E-mail</label>
				    		<div class="col-md-9">
				      			<input type="email" class="form-control" id="email" name="email">
				      		</div>
				    	</div>  	
				    	<div class="form-group row">
				    		<label for="password" class="col-md-3 col-form-label">Senha</label>
				    		<div class="col-md-9">
				      			<input type="password" class="form-control" id="password" name="password">
				      		</div>
				    	</div>
				    	<div class="form-group row">
				    		<label for="confirmPassword" class="col-md-3 col-form-label">Confirmar</label>
				    		<div class="col-md-9">
				      			<input type="password" class="form-control" id="confirmPassword">
				      		</div>
				    	</div>
					  	<button type="submit" class="btn btn-primary btn-block">Registrar</button>
					</form>
	                <div class="pt-4 text-xs-center text-center">
	                    Já possui uma conta? <a class="text-white" href="{{route('site.login')}}">Entre agora!</a>
	                </div>                
				</div>
			</div>
		</div>
	</div>       
@endsection
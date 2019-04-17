@extends('templates.default')

@section('title')
    
@endsection

@section('styles')
	<style>
		html,body{
			background: url("{{url('storage/img/astro.jpg')}}") no-repeat center center fixed;
			color:white;
		}
		#inscrever{
			display: table;
            height: 100vh;
            position: relative;
            width : 100%;
            background-size: cover;
            background-color: rgba(3,169,244,.3) !important;

	</style>


@endsection

@section('content')
<div id="inscrever">
	<div class="container">
        <div class="d-flex justify-content-center flex-lg-center">
           	<div class="col-lg-6 py-4 ">
                <div class="text-xs-center pb-3">
                    <span class="d-block h3 text-primary-light text-center">Novo assinante:</span>
                </div>	
				<!--<form>            
					<div id="socialLoginList" class="row">
						<div class="col-lg-6 py-1">
							<button class="btn btn-block btn-primary" type="submit" name="provider">
								<i class="mr-1"></i> Facebook
							</button>
						</div>
						<div class="col-lg-6 py-1">
							<button class="btn btn-block btn-danger" type="submit" name="provider">
								<i class="mr-1"></i> Google
							</button>
						</div>
						<div class="col-lg-6 py-1">
							<button class="btn btn-block btn-light" type="submit" name="provider">
								<i class="mr-1"></i> Instagran
							</button>
						</div>
						<div class="col-lg-6 py-1">
							<button class="btn btn-block btn-info" type="submit" name="provider">
								<i class="mr-1"></i> Twitter
							</button>
						</div>
					</div>
				</form>
				<div class="divider h4 my-3 text-center">
			        <span class="text-muted">ou</span>
			    </div>
				<form >-->
					<div class="form-group row">
					    <label class="col-md-3 col-form-label">Nome</label>
					    <div class="col-md-9">
					    	<input class="form-control" id="name" name="name">
					    </div>
					</div>
					<div class="form-group row">
					    <label class="col-md-3 col-form-label">CPF</label>
					    <div class="col-md-9">
					    	<input class="form-control" id="cpf" name="cpf">
					    </div>
					</div>
					<div class="form-group row">
					    <label class="col-md-3 col-form-label">Número</label>
					    <div class="col-md-9">
					    	<input class="form-control" id="telephone" name="telephone">
					    </div>
					</div>
			    	<div class="form-group row">
			    		<label for="inputCEP" class="col-md-3 col-form-label">CEP</label>
			    		<div class="col-md-9">
			      			<input type="text" class="form-control" id="zipcode" name="zipcode">
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
				      		<select id="inputEstado" class="form-control">
				        		<option selected>Escolher</option>
				        		@foreach($states as $state)
				        			<option id="{{$state->id}}">{{$state->name}}</option>
				        		@endforeach

				      		</select>	
				      	</div>
			    	</div>
			    	<div class="form-group row">
			      		<label for="inputCity" class="col-md-3 col-form-label">Cidade</label>
			      		<div class="col-md-9">
				      		<select id="city_id" name="city_id" class="form-control">
				        		<option selected>Escolher</option>
				        		<option>...</option>
				      		</select>	
				      	</div>
				  	</div>
				  <button type="submit" class="btn btn-primary btn-block">Entrar</button>
				</form>
				
                <div class="pt-4 text-xs-center text-center">
                    Já possui uma conta?<a class="text-white" href="{{route('site.login')}}">Entre agora!</a>
                </div>
                
                
			</div>
		</div>
	</div>
</div>       
@endsection
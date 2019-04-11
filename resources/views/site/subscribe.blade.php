@extends('templates.default')

@section('title')
    
@endsection

@section('styles')

@endsection

@section('content')
	<div class="container">
        <div class="d-flex justify-content-center flex-lg-center">
           	<div class="col-lg-5 py-4">
                <div class="text-xs-center pb-3">
                    <span class="d-block h3 text-primary-light text-center">registre-se com:</span>
                </div>	
				<form>            
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
				<form >
					<div class="form-group">
					    <label>Nome</label>
					    <input class="form-control">
					</div>
				  	<div class="form-row">
				    	<div class="form-group col-md-6">
				      		<label for="#">CPF</label>
				      		<input class="form-control">
				    	</div>
				    	<div class="form-group col-md-6">
				      		<label >Número</label>
				      		<input class="form-control">
				    	</div>
				  	</div>
				  	<div class="form-row">
				    	<div class="form-group col-md-6">
				      		<label >Email</label>
				      		<input class="form-control">
				    	</div>
				    	<div class="form-group col-md-6">
				      		<label >Senha</label>
				      		<input class="form-control">
				    	</div>
				  	</div>

				  	<div class="form-row">
				  		<div class="form-group col-md-6">
				    		<label >Endereço</label>
				    		<input type="text" class="form-control" id="inputAddress1">
				    	</div>
				    	<div class="form-group col-md-6">
				    		<label for="inputCEP">CEP</label>
				      		<input type="text" class="form-control" id="inputCEP">
				    	</div>
				  	</div>
				  	<div class="form-row">
				    	<div class="form-group col-md-6">
				      		<label for="inputCity">Cidade</label>
				      		<input type="text" class="form-control" id="inputCity">
				    	</div>
				    	<div class="form-group col-md-6">
				      		<label for="inputEstado">Estado</label>
				      		<select id="inputEstado" class="form-control">
				        		<option selected>Escolher...</option>
				        		<option>...</option>
				      		</select>
				    	</div>
				  	</div>
				  <button type="submit" class="btn btn-primary btn-block">Entrar</button>
				</form>
				<div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Já possui uma conta?<a href="{{route('site.login')}}">Entre agora!</a>
                    </div>
                </div>
			</div>
		</div>
	</div>
        
@endsection
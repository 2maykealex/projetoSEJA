@extends('templates.default_subscriber')

@section('title')
    Perfil
@endsection

@section('content')
    
    <div class="fundo">
		<div class="container">
	        <div class="d-flex justify-content-center flex-lg-center">
	           	<div class="col-lg-6 py-4 ">
	                <div class="text-xs-center pb-3">
	                    <span class="d-block h3 text-primary-light text-center">Meus dados</span>
	                </div>
                    <form action="{{route('subscriber.profile.update')}}" method="POST" class="form form-" onsubmit="EnviarFormulario()">
						@csrf
						<div class="form-group row">
						    <label class="col-md-2 col-form-label">Nome</label>
						    <div class="col-md-10">
                                <input class="form-control" id="name" name="name" value="{{auth()->user()->person->name}}">
                                <input type="hidden" class="form-control" id="person_id" name="person_id"  value="{{auth()->user()->person->id}}">
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-md-2 col-form-label">CPF</label>
						    <div class="col-md-10">
						    	<input class="form-control" id="cpf" name="cpf" onInput="checkMaskDocument(this)" value="{{auth()->user()->person->cpf}}">
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-md-2 col-form-label">Tel/Cel</label>
						    <div class="col-md-10">
						    	<input class="form-control" id="telephone" name="telephone" onInput="checkMaskTelephone(this)" value="{{auth()->user()->person->telephone}}">
						    </div>
						</div>
				    	<div class="form-group row">
				    		<label for="inputCEP" class="col-md-2 col-form-label">CEP</label>
				    		<div class="col-md-10">
				      			<input type="text" class="form-control" id="zipcode" name="zipcode" onInput="checkMaskZipCode(this)" value="{{auth()->user()->person->zipcode}}">
				      		</div>
				    	</div>
				    	<div class="form-group row">
				    		<label for="inputCEP" class="col-md-2 col-form-label">Endereço</label>
				    		<div class="col-md-10">
				      			<input type="text" class="form-control" id="address" name="address" value="{{auth()->user()->person->address}}">
				      		</div>
                        </div>
                        <div class="form-group row">
                            <label for="state" class="col-md-2 col-form-label">Estado</label>
                            <div class="col-md-10">
                                <select class="form-control" id="state" required onchange="listCities(this.value);" collapse>
                                    <option value="-1">Escolher</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}">{{$state->initials}}</option>
                                    @endforeach
                                </select>	
                            </div>
                          </div>
                        <div class="form-group row">
                            <label for="city" class="col-md-2 col-form-label">Cidade</label>
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
                                  <input type="email" class="form-control" id="email" name="email" value="{{auth()->user()->email}}">
                                  <input type="hidden" class="form-control" id="user_id" name="user_id"  value="{{auth()->user()->id}}">
				      		</div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-success btn-block">Salvar atualização</button>
                        </div>
                    </form>
                    
                    
                    
				</div>
			</div>
		</div>
	</div>       
@endsection
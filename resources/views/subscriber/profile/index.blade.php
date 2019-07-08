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
                        
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nome</label>
                        <div class="col-md-10">
                            <input class="form-control" id="name" name="name" value="{{auth()->user()->person->name}}">
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
                        <label for="city" class="col-md-2 col-form-label">Estado</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="city" name="city" value="{{auth()->user()->person->city->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="state" class="col-md-2 col-form-label">Estado</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="state" name="state" value="{{auth()->user()->person->city->state->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  for="email" class="col-md-2 col-form-label">E-mail</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" id="email" name="email" value="{{auth()->user()->email}}">
                        </div>
                    </div>
                    
                    <div class="row">
                        <a href="{{route('subscriber.profile.edit')}}">
                            <button type="button" class="btn btn-warning btn-block">Editar</button>
                        </a>
                    </div>
                    
				</div>
			</div>
		</div>
	</div>       
@endsection
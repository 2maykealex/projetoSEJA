@extends('templates.default_subscriber')

@section('title')
    Perfil
@endsection

@section('content')
    
	<div class="container">
        <div class="d-flex justify-content-center flex-lg-center">
            <div class="col-md-6 py-4">
                <div class="text-xs-center pb-3">
                    <span class="d-block h3 text-primary-light text-center">Meus dados</span>
                </div>
	           	<form>
                    <div class="form-group text-center">
                        <img src="{{ asset('storage/img/profiles/' . auth()->user()->person->image)}}" width="150px" class="rounded-circle "> 
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="name" name="name" placeholder="{{auth()->user()->person->name}}" readonly>      
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input class="form-control" id="cpf" name="cpf" onInput="checkMaskDocument(this)" placeholder="{{auth()->user()->person->cpf}}" readonly>
                        </div>
                        <div class="form-group col">
                            <input class="form-control" id="telephone" name="telephone" onInput="checkMaskTelephone(this)" placeholder="{{auth()->user()->person->telephone}}" readonly>
                        </div>       
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="text" class="form-control" id="zipcode" name="zipcode" onInput="checkMaskZipCode(this)" placeholder="{{auth()->user()->person->zipcode}}" readonly>
                        </div>
                        <div class="form-group col"> 
                            <input type="text" class="form-control" id="address" name="address" placeholder="{{auth()->user()->person->address}}" readonly>
                        </div>    
                    </div>      
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="text" class="form-control" id="state" name="state" placeholder="{{auth()->user()->person->city->state->name}}" readonly>
                        </div> 
                        <div class="form-group col">
                            <input type="text" class="form-control" id="city" name="city" placeholder="{{auth()->user()->person->city->name}}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                         <input type="email" class="form-control" id="email" name="email" placeholder="{{auth()->user()->email}}" readonly>
                    </div>      
                    <div class="row">
                        <a class="btn btn-warning btn-block" href="{{route('subscriber.profile.edit')}}">Editar</a>
                    </div>
				</form>
            </div>
		</div>
	</div>      
@endsection
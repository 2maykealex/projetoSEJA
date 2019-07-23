@extends('templates.default_subscriber')

@section('title')
    Perfil
@endsection

@section('content')
    
	<div class="container">
        <div class="d-flex justify-content-center flex-lg-center">
           	<div class="col-md-6 py-4 ">
                <div class="text-xs-center pb-3">
                    <span class="d-block h3 text-primary-light text-center">Alterar meus dados</span>
                </div>
                <form action="{{route('subscriber.profile.update')}}" method="POST" onsubmit="EnviarFormulario()">
					@csrf
					
                    <input type="hidden" id="person_id" name="person_id"  value="{{auth()->user()->person->id}}">
                    
                    <div class="form-group d-flex justify-content-center"> 
                        <label for="image">
                            <div class="d-flex justify-content-center rounded-circle pointer" style="width: 140px; height: 140px; background-color: #e0e0e0;">
                                @if (Empty(auth()->user()->person->image))
                                    <span class="oi oi-camera-slr d-flex align-self-center" aria-hidden="true" style="color: white;"></span>
                                    
                                @else
                                    <img src="{{ asset('storage/img/profiles/' . auth()->user()->person->image)}}" width="140px" class="rounded-circle">
                                @endif
                            </div>
                        </label>
                        <input type="file" class="form-control-file" id="image" name="image" accept="image/*" style="display: none;">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="name" name="name" value="{{auth()->user()->person->name}}" autofocus>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input class="form-control" id="cpf" name="cpf" onInput="checkMaskDocument(this)" value="{{auth()->user()->person->cpf}}">
                        </div>
                        <div class="form-group col">
                            <input class="form-control" id="telephone" name="telephone" onInput="checkMaskTelephone(this)" value="{{auth()->user()->person->telephone}}">
                        </div>       
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="text" class="form-control" id="zipcode" name="zipcode" onInput="checkMaskZipCode(this)" value="{{auth()->user()->person->zipcode}}">
                        </div>
                        <div class="form-group col"> 
                            <input type="text" class="form-control" id="address" name="address" value="{{auth()->user()->person->address}}">
                        </div>    
                    </div>      
                    <div class="form-row">
                        <div class="form-group col">
                            <select class="form-control" id="state" required onchange="listCities(this.value);" collapse>
                                <option value="-1">Escolher</option>
                                @foreach($states as $state)
                                    <option value="{{$state->id}}" @if ( isset($states) && auth()->user()->person->city->state->id == $state->id ) selected @endif>{{$state->initials}}</option>
                                @endforeach
                            </select>	
                        </div>
                        <div class="form-group col">
                            <select id="city" name="city" class="form-control">
                                <option>{{auth()->user()->person->city->name}}</option>
                            </select>	
                        </div>
                    </div>
                    <div class="form-group">
                         <input type="email" class="form-control" id="email" name="email" value="{{auth()->user()->email}}">
                    </div>      
                    <div class="row">
                        <button type="submit" class="btn btn-success btn-block">Salvar atualização</button>
                    </div>
                </form>      
			</div>
		</div>
	</div>     

@endsection
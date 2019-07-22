@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center py-5">
    	<div class="col-md-10 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>EDITAR EVENTOS</h2>
			</nav>
			<form action="{{route('adm.events.update', $event->id)}}" method="post" class="pb-3 pt-3 bg-white px-3" enctype="multipart/form-data">
				@csrf
				<div class="form-group"> 
				    <input type="hidden" class="form-control" id="id" name="id" value="{{$event->id}}">
				</div>
				<div class="form-group">
				    <label for="title">TÍTULO</label>   
				    <input type="text" class="form-control" id="title" name="title" value="{{$event->title}}" autofocus>
				</div>
				<div class="form-group">
				    <label for="summary">RESUMO</label>   
				    <textarea class="form-control" id="summary" name="summary" rows="4">{{$event->summary}}</textarea>
				</div>
				<div class="form-group">
				    <label for="text">TEXTO</label>   
				    <textarea class="form-control" id="text" name="text" rows="8">{{$event->text}}</textarea>
				</div>
				<div class="form-group">
					<label for="text">SERÁ REALIZADO EM:</label>
					<input type="date" class="form-control" id="event_date" name="event_date" min="{{date('Y-m-d')}}" value="{{$event->event_date}}">
				</div>
				<div class="form-group">
					<label for="event_type_id">TIPO DE EVENTO</label>
						<select class="form-control" id="event_type_id" name="event_type_id" collapse>
							<option>Escolher</option>
							@foreach ($eventTypes as $eventType)
								<option value="{{$eventType->id}}"
									@if ( isset($event) && $event->event_type_id == $eventType->id ) 
										@echo selected 
									@endif>{{$eventType->name}}
								</option>
							@endforeach
						</select>
				</div>
		    	<div class="form-group">
				    <label for="image">IMAGEM</label>
				    <div class="col-md-8 py-3">
				    	<img src="{{ asset('storage/img/events/' . $event->image) }}" width="100%" class="img-fluid "> 
				    </div> 
				    <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
				</div>
				<div class="form-group">
				    <label>ANEXOS</label>   
				    <input type="text" class="form-control" placeholder="#" >
				</div>
				<div class="form-group">
				    <label>ESCRITO POR</label>
		            <div class="row no-gutters bg-light py-3 px-3">
		                <div class="col-lg-1 text-center">
		                    <img class="rounded-circle" src="{{ asset('storage/img/profiles/' . $event->author->image)}}" width="50" height="50">
		                </div>
		                <table class="col-lg-2 text-center" style=" height: 50px;">
		                	<tbody>
		                		<tr>
		                			<td class="align-middle h5">{{$event->author->name}}</td>
		                		</tr>
		                	</tbody>
		                </table>	                
		            </div>
		       	</div>
		    	<div class="clearfix">
				  	<button type="submit" class="btn btn-warning float-left">Confirmar</button>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.events.list')}}">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
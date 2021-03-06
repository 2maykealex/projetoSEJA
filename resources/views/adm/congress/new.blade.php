@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center py-5">
    	<div class="col-md-10 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>NOVO CONGRESSO</h2>
			</nav>
			<form action="{{route('adm.events.store')}}" method="post" class="pb-3 pt-3 bg-white px-3" enctype="multipart/form-data">
				@csrf
				<div class="form-group"> 
				    <input type="hidden" class="form-control" id="event_type_id" name="event_type_id" value="1">
				</div>
				<div class="form-group">
				    <label for="title">TÍTULO</label>   
				    <input type="text" class="form-control" id="title" name="title" autofocus>
				</div>
				<div class="form-group">
				    <label for="summary">RESUMO</label>   
				    <textarea class="form-control" id="summary" name="summary" rows="4"></textarea>
				</div>
				<div class="form-group">
				    <label for="text">TEXTO</label>   
				    <textarea class="form-control" id="text" name="text" rows="8"></textarea>
				</div>
				<div class="form-group">
					<label for="text">SERÁ REALIZADO EM:</label>
					<input type="date" class="form-control" id="event_date" name="event_date" min="{{date('Y-m-d')}}">
				</div>
		    	<div class="form-group">
				    <label for="image">IMAGEM</label>   
				    <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
				</div>
				<div class="form-group">
				    <label>ANEXOS</label>   
				    <input type="text" class="form-control" placeholder="#" >
				</div>
				<div class="form-group">
				    <label>ESCRITO POR</label>
		            <div class="row no-gutters bg-light py-3 px-3">
		                <div class="col-lg-1 text-center">
		                    <img class="rounded-circle" src="{{ asset('storage/img/profiles/' . $person->image)}}" width="50" height="50">
		                </div>
		                <table class="col-lg-2 text-center" style=" height: 50px;">
		                	<tbody>
		                		<tr>
		                			<td class="align-middle h5">{{$person->name}}</td>
		                		</tr>
		                	</tbody>
		                </table>	                
		            </div>
		       	</div>
		    	<div class="clearfix">
				  	<button type="submit" class="btn btn-primary float-left">Criar</button>
				</div>
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('adm.congresses.list')}}">Voltar</a>
			</div>
		</div>              
	</div>
@endsection
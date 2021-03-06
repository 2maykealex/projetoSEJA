@extends('templates.default_publisher')

@section('title')

@endsection

@section('content')
	<div class="d-flex justify-content-center flex-lg-center py-5">
    	<div class="col-md108 bg-light py-3">
	       	<nav class="navbar navbar-expand-lg">
		  		<h2>VISUALIZAR CONGRESSO</h2>
			</nav>
			<form class="pb-3 pt-3 bg-white px-3">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-2">
					    <label>ID</label>							    
					    <input type="text" class="form-control" placeholder="{{$congress->id}}" disabled>							    
					</div>
					<div class="form-group col-md-5">
					    <label>DATA CRIAÇÃO</label> 
					    <input type="text" class="form-control" placeholder="{{date('d/m/Y', strtotime($congress->created_at))}}" disabled>
					</div>
					<div class="form-group col-md-5">
					    <label>DATA ALTERAÇÃO</label> 
					    <input type="text" class="form-control" placeholder="{{date('d/m/Y', strtotime($congress->updated_at))}}" disabled>
					</div>
				</div>
				<div class="form-group">
				    <label>TÍTULO</label>   
				    <input type="text" class="form-control" placeholder="{{$congress->title}}" disabled>
				</div>
				<div class="form-group">
				    <label>RESUMO</label>   
				    <textarea class="form-control" rows="4" disabled>{{$congress->summary}}</textarea>
				</div>
				<div class="form-group">
				    <label>TEXTO</label>   
				    <textarea class="form-control" rows="8" disabled>{{$congress->text}}</textarea>
				</div>
				<div class="form-group">
				    <label>TIPO DE PÚBLICO</label>   
				    <input type="text" class="form-control" placeholder="{{$congress->name}}" disabled>
				</div>
				<div class="form-group">
				    <label>IMAGEM</label>   
				    <div class="col-md-8 py-3"> 
				    	<img src="{{ asset('storage/img/congresses/' . $congress->image) }}" width="100%" class="img-fluid "> 
				    </div>
				</div>
				<div class="form-group">
				    <label>ANEXOS</label>   
				    <input type="text" class="form-control" placeholder="#" disabled>
				</div>
				<div class="form-group">
				    <label>ESCRITO POR</label>
		            <div class="row no-gutters bg-light py-3 px-3">
		                <div class="col-lg-1 text-center">
		                    <img class="rounded-circle" src="{{ asset('storage/img/profiles/' . $congress->author->image)}}" width="50" height="50">
		                </div>
		                <table class="col-lg-2 text-center" style=" height: 50px;">
		                	<tbody>
		                		<tr>
		                			<td class="align-middle h5">{{$congress->author->name}}</td>
		                		</tr>
		                	</tbody>
		                </table>	                
		            </div>
		       	</div>
		    	
			</form>  
			<div class="text-center mt-4 ">
				<a class="btn btn-secondary btn-sm" href="{{route('publisher.congresses.list')}}">Voltar</a>
			</div> 
		</div>             
	</div>
@endsection
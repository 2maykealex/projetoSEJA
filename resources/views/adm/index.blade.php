@extends('templates.default_adm')

@section('title')

@endsection

@section('content')

	
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Projeto Seja</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item mr-5">
        			<a class="nav-link" href="#">Congressos</a>
      			</li>
      			<li class="nav-item mr-5">
        			<a class="nav-link" href="#">Cursos</a>
      			</li>
      			<li class="nav-item mr-5">
        			<a class="nav-link" href="#">Eventos</a>
      			</li>
      			<li class="nav-item mr-5">
        			<a class="nav-link" href="#">Perfis</a>
      			</li>
      			<li class="nav-item mr-5">
        			<a class="nav-link" href="#">Planos</a>
      			</li>
      			<li class="nav-item mr-5">
        			<a class="nav-link" href="#">Publicações</a>
      			</li>
    		</ul>
    		<ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Sair</a>
                </li>
            </ul>
  		</div>
	</nav>

@endsection
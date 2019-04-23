@extends('templates.default_adm')

@section('title')

@endsection

@section('content')
	<div class="col-md-10">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <h2>Pagamentos</h2>
		  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
		  	<div class="">		  		
		  	</div>
		    <form class="form-inline my-2 my-lg-0 ml-auto">
		      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
		    </form>
		  </div>
		</nav>
	 	
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Número</th>
                  <th>Descrição</th>
                  <th>Nome</th>
                  <th>Data</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                  <td>ipsum</td>
                  <td>10/10/2010</td>
                  <td class="actions">
                        <a class="btn btn-success btn-sm" href="view.html">Visualizar</a>
                        <a class="btn btn-warning btn-sm" href="edit.html">Editar</a>
                        <a class="btn btn-danger btn-sm"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                   </td>
                </tr>
              </tbody>
            </table>
          </div>
	
	</div>
@endsection
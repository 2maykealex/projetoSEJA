<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .altura{
            height: 100vh;            
        }
    </style>

</head>
<body>
    <div class="content">

    <!--barra de navegação principal-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">      
        <a class="navbar-brand col mr-0" href="#">Projeto Seja</a>  
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item mr-5">
                    <a class="nav-link active" href="{{route('site.home')}}">Sair</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--barra de navegação com conteudo do site-->
    <div class="container-fluid">
        <div class="row altura">
            <nav class="col-md-2 d-none d-md-block border-right border-top sidebar bg-info text-dark">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item dropdown dropright">  
                            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Publicações</a>
                            <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Inserir</a>
                                  <a class="dropdown-item" href="#">Alterar</a>
                                  <a class="dropdown-item" href="#">Deletar</a>

                            </div>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link text-white" href="{{route('adm.planos')}}">Planos</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link text-white" href="#">Cursos</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link text-white" href="#">Eventos</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link text-white" href="#">Congressos</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link text-white" href="#">Perfis</a>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('mahoe')
        </div>
    </div>

        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
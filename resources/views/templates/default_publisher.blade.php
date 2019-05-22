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
        .button-width{
            width: 100px;
        }
        .bg-escuro{
            background-color: rgba(0,0,0,.3) !important;
        }
        .altura{
            height: 100vh;            
        }
        .button-height{
            width: 80px;
        }
        .heigt-test{
            height: 400px;
        }
    </style>

</head>
<body class="bg-escuro">
    <!--barra de navegação com conteudo do site-->
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
                <div class="text-center">
                    <h2 class="text-white py-2 border-bottom">ALMA</h2>
                </div>
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <button class="btn btn-dark col-md-12 text-left mt-1" type="button" data-toggle="collapse" data-target="#menuPublicacao" aria-controls="menuPublicacao" aria-expanded="false" aria-label="Alterna navegação">
                                <div  class="clearfix">
                                    <div  class="float-left">
                                     Publicações
                                    </div>
                                    <div class="float-right" >
                                        <span data-feather="plus-circle" class="text-right"></span>
                                    </div>
                                </div>  
                            </button>
                            <div class="collapse mt-1" id="menuPublicacao">
                                <div class="nav flex-column">
                                    <a class="nav-link text-light" href="http://127.0.0.1:8000/publisher/posts/new" >Nova</a>
                                    <a class="nav-link text-light" href="http://127.0.0.1:8000/publisher/posts/list">Listagem</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-dark col-md-12 text-left mt-1" type="button" data-toggle="collapse" data-target="#menuEventos" aria-controls="menuEventos" aria-expanded="false" aria-label="Alterna navegação">
                                <div  class="clearfix">
                                    <div  class="float-left">
                                        Eventos  
                                    </div>
                                    <div class="float-right" >
                                        <span data-feather="plus-circle" class="text-right"></span>
                                    </div>
                                </div> 
                            </button>
                            <div class="collapse mt-1" id="menuEventos">
                                <div class="nav flex-column">
                                    <a class="nav-link text-light " href="http://127.0.0.1:8000/publisher/events/new" >Novo</a>
                                    <a class="nav-link text-light" href="http://127.0.0.1:8000/publisher/events/list">Listagem</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-dark col-md-12 text-left mt-1" type="button" data-toggle="collapse" data-target="#menuCongressos" aria-controls="menuCongressos" aria-expanded="false" aria-label="Alterna navegação">
                                <div  class="clearfix">
                                    <div  class="float-left">
                                        Congressos  
                                    </div>
                                    <div class="float-right" >
                                        <span data-feather="plus-circle" class="text-right"></span>
                                    </div>
                                </div> 
                            </button>
                            <div class="collapse mt-1" id="menuCongressos">
                                <div class="nav flex-column">
                                    <a class="nav-link text-light" href="http://127.0.0.1:8000/publisher/congresses/new" >Novo</a>
                                    <a class="nav-link text-light" href="http://127.0.0.1:8000/publisher/congresses/list">Listagem</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <a class="btn btn-warning btn-block text-white fixed-bottom col-md-2" href="http://127.0.0.1:8000/logout">Sair</a>
            </nav>
            
            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">
                @include('includes.alerts')
                @yield('content')
            </main>

        </div>
    </div>


    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
        
    </script>
</body>
</html>
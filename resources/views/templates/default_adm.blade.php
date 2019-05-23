<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
            font-size: .875rem;
        }
        .feather {
            width: 16px;
            height: 16px;
            vertical-align: text-bottom;
        }

        /*
         * Sidebar
         */

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 0 0 0; 
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: .5rem;
            overflow-x: hidden;
            overflow-y: auto; 
        }

        @supports ((position: -webkit-sticky) or (position: sticky)) {
          .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky;
          }
        }

        .sidebar .nav-link {
            font-weight: 500;
            color: #333;
        }

        .sidebar .nav-link .feather {
            margin-right: 4px;
            color: #999;
        }

        .sidebar .nav-link.active {
            color: #007bff;
        }

        .sidebar .nav-link:hover .feather,
        .sidebar .nav-link.active .feather {
            color: inherit;
        }

        .sidebar-heading {
            font-size: .75rem;
            text-transform: uppercase;
        }

        /*
         * Content
         */

        [role="main"] {
            padding-top: 48px; 
        }

        /*
         * Navbar
         */

        .navbar-brand {
            padding-top: .75rem;
            padding-bottom: .75rem;
            font-size: 1rem;
            background-color: rgba(0, 0, 0, .25);
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
        }

        .navbar .form-control {
            padding: .75rem 1rem;
            border-width: 0;
            border-radius: 0;
        }

        .form-control-dark {
            color: #fff;
            background-color: rgba(255, 255, 255, .1);
            border-color: rgba(255, 255, 255, .1);
        }

        .form-control-dark:focus {
            border-color: transparent;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
        }
        .altura{
            height: 100vh;            
        }
        .button-width{
            width: 100px;
        }
        .bg-escuro{
            background-color: rgba(0,0,0,.3) !important;
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
                            <button class="btn btn-dark col-md-12 text-left mt-1" type="button" data-toggle="collapse" data-target="#menuTipos" aria-controls="menuTipos" aria-expanded="false" aria-label="Alterna navegação">
                                <div  class="clearfix">
                                    <div  class="float-left">
                                     Configurar tipos de ...
                                    </div>
                                    <div class="float-right" >
                                        
                                    </div>
                                </div>  
                            </button>
                            <div class="collapse mt-1" id="menuTipos">
                                <div class="nav flex-column border">
                                    <a class="nav-link text-light" href="{{route('adm.collections.list')}}" >Pagamentos</a>
                                    <a class="nav-link text-light" href="{{route('adm.subscriptions.types.list')}}">Planos</a>
                                    <a class="nav-link text-light" href="{{route('adm.subscriptions.plans.list')}}">Assinaturas</a>
                                    <a class="nav-link text-light" href="{{route('adm.congresses.types.list')}}">Congressos</a>
                                    <a class="nav-link text-light" href="{{route('adm.events.types.list')}}">Eventos</a>
                                </div>
                            </div>
                        </li>

                        <!--botão para Configurar tipos-->
                        <li class="nav-item">
                            <button class="btn btn-dark col-md-12 text-left mt-1" type="button" data-toggle="collapse" data-target="#menuAcesso" aria-controls="menuAcesso" aria-expanded="false" aria-label="Alterna navegação">
                                <div  class="clearfix">
                                    <div  class="float-left">
                                     Segurança
                                    </div>
                                    <div class="float-right" >
                                        
                                    </div>
                                </div>  
                            </button>
                            <div class="collapse mt-1" id="menuAcesso">
                                <div class="nav flex-column border">
                                    <a class="nav-link text-light" href="{{route('adm.security.profile.list')}}">Perfis de acesso</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <a class="btn btn-warning fixed-bottom col-md-2 text-white" href="{{route('site.logout')}}">Sair</a>
            </nav>
            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">
                @include('includes.alerts')
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
        
    </script>
</body>
</html>
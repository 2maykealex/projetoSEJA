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
    </style>

</head>
<body>
    <!--barra de navegação com conteudo do site-->
    <div class="container-fluid">
        <div class="row altura">
            <div class="col-md-2  bg-info">
                <div class="text-center">
                    <h2 class="text-white py-2 border-bottom">ALMA</h2>
                </div>     
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Configurar tipos de:
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <a class="dropdown-item" href="{{route('adm.collections.list')}}">Tipos de pagamentos</a>
                        <a class="dropdown-item" href="{{route('adm.subscriptions.types.list')}}">Tipos de planos</a>
                        <a class="dropdown-item" href="{{route('adm.subscriptions.plans.list')}}">Tipos de assinaturas</a>
                        <a class="dropdown-item" href="{{route('adm.congresses.types.list')}}">Tipos de congressos</a>
                        <a class="dropdown-item" href="{{route('adm.events.types.list')}}">Tipos de eventos</a> 
                        <a class="dropdown-item" href="{{route('adm.security.profile.list')}}">Perfis de acessos</a>
                    </div>
                </div>
                <a class="btn btn-warning fixed-bottom col-md-2 text-white" href="{{route('site.logout')}}">Sair</a>
            </div>
            <div class="content col-md-10">
                @yield('content')
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
        
    </script>
</body>
</html>
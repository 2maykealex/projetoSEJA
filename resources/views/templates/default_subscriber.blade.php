<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/subscriber_style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/world_style.css') }}">

    <style>
        .pointer {
            cursor: pointer;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
</head>
<body>

    <?php 
        $url = explode("/", URL::current());
    ?>
    
    <nav class="navbar navbar-expand bg-white shadow fixed-top">
        <!--label com um botão que liga com o input-->  
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <label for="bt_menu">&#9776;</label>
            </li>
        </ul>
        
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="#"><img class="rounded-circle abs" src="{{ asset('storage/img/profiles/' . auth()->user()->person->image)}}" width="40" height="40"></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{auth()->user()->person->name}}</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('subscriber.profile')}}">Ver perfil</a>
                    <a class="dropdown-item" href="#">Alterar senha</a>
                    <a class="dropdown-item" href="{{route('site.logout')}}">Sair</a>
                </div>
            </li>
        </ul> 
        
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="flex-column">
                <!--Input com checkbox para verificar sidebar--> 
                <input type="checkbox" id="bt_menu">
                <div class="sidebar bg-white shadow">
                    <div class="sidebar-sticky">
                        <form class="form-inline mt-3 mb-4 ">
                            <input class="form-nav mr-sm-2 ml-2" type="search" placeholder="Pesquisar" aria-label="Search">
                        </form>

                        <h5 class="font-heading text-muted px-2 mt-3 pt-4 border-top">Painel do assinante</h5>
                        <ul class="nav-ul mt-0">
                            <li class=" nav-li active">
                                <a class="nav-a pl-3" href="{{route('subscriber.home')}}">Início</a>
                            </li>
                            <li class="nav-li">
                                <a class="nav-a pointer pl-3">Postagens</a>
                                <ul class="mt-0">
                                    @if(Session::get('menuPosts'))
                                        @foreach (Session::get('menuPosts') as $menuPost)        
                                            <li>
                                                <a href="{{route('subscriber.posts.list', $menuPost)}}" class=" pl-3">{{$menuPost->name}}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li class="nav-li">
                                <a class="nav-a pl-3" href="{{route('subscriber.events.list')}}">Eventos</a>
                            </li>
                            <li class="nav-li">
                                <a class="nav-a pl-3" href="{{route('subscriber.congresses.list')}}">Congressos</a>
                            </li>
                            <li class="nav-li">
                                <a class="nav-a pl-3" href="{{route('subscriber.courses.list')}}">Cursos</a>
                            </li>
                            <li class="nav-li">
                                <a class="nav-a pl-3 pointer">Financeiro</a>
                                <ul class="mt-0 ">
                                    <li>
                                        <a href="#" class="pl-3">Cartão de Crédito</a>
                                    </li>
                                    <li>
                                        <a href="#" class="pl-3">Formas de Pagamentos</a>
                                    </li>
                                    <li>
                                        <a href="#" class="pl-3">Faturas</a>
                                    </li>
                                    <li>
                                        <a href="#" class="pl-3">Histórico de pagamentos</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col" style="padding-left: 75px; padding-top: 65px; padding-right: 0;">        
                <main role="main" style="padding: 0;">
                    @include('includes.alerts')
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        //script para colocar active na barra transversal da pagina do assinante
        $('.sidebar-sticky').on('click', 'li', function(){
            $('.sidebar-sticky ul li.active').removeClass('active');
            $(this).addClass('active');
        });

        // Listando cidades
        function listCities (idUF){
        $("#city option").remove();
        if (idUF > 0){
            url = '{{route("listCities", ['idUF'])}}';
            url = url.replace('idUF', idUF);

            var ajaxRequest = $.getJSON(url, function(data){
                element = document.getElementById('city');
                elemSelect1 = "";
                elemSelect1 += '<option selected> Selecione </option>';
                $.each(data, function(i ,obj){
                    elemSelect1 += '<option value="'+obj.id+'">'+obj.name+'</option>';
                })
                $('#city').append(elemSelect1);
            });
        }
    }

        //script para colocar um carousel de posts
         $('.carousel').slick({
            infinite: false,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            centerMode: false,

            responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]

        });
        
    </script>
</body>
</html>
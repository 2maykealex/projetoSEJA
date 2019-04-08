@extends('templates.default')

@section('title')
    
@endsection

@section('styles')

    <style>

    #inicio {
        /* background: url ('../storage/img/astro.jpg') no-repeat center center fixed; */

        /* background-image:url({{url('storage/img/astro.jpg')}}) no-repeat center center fixed; */
        /* background-image: url({{ url('storage/img/astro.jpg')}}) no-repeat center center fixed; */
        /* background-image:url({{url('storage/img/astro.jpg')}}) no-repeat center center fixed; */


        background: url("{{url('storage/img/astro.jpg')}}") no-repeat center center fixed;
        display: table;
        height: 100%;
        position: relative;
        width : 100%;
        background-size: cover;
        }

    </style>
   
@endsection

@section('content')

    <!--navbar-->



    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark border-bottom">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-5" href="#">Logotipo</a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="{{route('site.home')}}">Home</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="{{route('site.quemsomos')}}">Quem somos?</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="{{route('site.localizacao')}}">Localização</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="{{route('site.contatos')}}">Contatos</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav text-right">
                            <li class="nav-item mr-5">
                                <a class="nav-link" href="{{route('site.subscribe')}}">Inscreva-se</a>
                            </li>

                            <li class="nav-item mr-5">
                                <a class="nav-link" href="{{route('site.login')}}">Login</a>
                            </li>
                    <</ul>
                    {{-- <form class="form-inline my-2 my-lg-0">
                        <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-light btn-sm my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form> --}}
                </div>
            </div>
        </nav>
    </header>

    <!--home-->

    <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-dark" id="inicio">
        <div class="col-md-5 p-lg-5 mx-auto my-5" >
            <h1 class="display-4 font-weight-normal text-white">Projeto Seja</h1>
            <p class="lead font-weight-normal text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
            <a class="btn btn-outline-light" href="{{route('site.login')}}">Entrar</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <!--album-->

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                        <div class="card-body">
                        <p class="card-text">God of War é uma série de jogos eletrônicos de ação-aventura vagamente baseado nas mitologias grega e nórdica sendo criado originalmente por David Jaffe da Santa Monica Studio.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                        <div class="card-body">
                        <p class="card-text">God of War é uma série de jogos eletrônicos de ação-aventura vagamente baseado nas mitologias grega e nórdica sendo criado originalmente por David Jaffe da Santa Monica Studio.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                        <div class="card-body">
                        <p class="card-text">God of War é uma série de jogos eletrônicos de ação-aventura vagamente baseado nas mitologias grega e nórdica sendo criado originalmente por David Jaffe da Santa Monica Studio.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>         
    </div>

            
    <!-- Footer -->
    <footer class="bg-secondary text-white">
        {{-- <div class="container-fluid border-bottom border-light">
            <div class="row py-3 d-flex align-items-center ">
                <div class="col-md-6 col-lg-5">
                    <h6 class="text-center">Nossas redes sociais</h6>
                </div>
                <div class="col-md-6 col-lg-7">
                    <h6 class="text-center"> redes sociais</h6>
                </div>
            </div>
        </div> --}}

         <!--Footer link-->
        {{-- <div class="container-fluid text-center mt-5">
            <div class="row mt-3 ">
                <div class="col-md-3 col-lg-3 col-xl-3 mb-4">
                    <h6><strong>SERVIÇOS</strong></h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mb-4">
                    <h6><strong>LINKS ÚTEIS</strong></h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mb-4">
                    <h6><strong>CONTATOS</strong></h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mb-4">
                    <h6><strong>CONTA</strong></h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('site.login')}}">Entrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <div class="footer-copyright text-center border-top border-light py-3">© 2018 Copyright:
            <a class="text-white" href="#"> projetoseja.com</a>
        </div>
    </footer>

    

@endsection

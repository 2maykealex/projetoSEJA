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
                <a class="navbar-brand text-center mr-5" href="#">Logotipo</a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="{{route('site.home')}}">Início</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="">Conteúdo</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="{{route('site.quemsomos')}}">Sobre nós</a>
                        </li>
                        <!--<li class="nav-item mr-5">
                            <a class="nav-link" href="{{route('site.contatos')}}">Contatos</a>
                        </li>-->
                    </ul>
                    <!--cololcar um icon de pesquisa e colocar o login a direita quando o navbar diminuir mateus-->
                    <!--<form class="form-inline my-2 my-lg-0 mr-4">
                        <button class="btn btn-outline-light btn-sm my-2 my-sm-0" type="submit">Pesquisar</button>
                        <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    </form>-->
                    <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('site.login')}}">Entrar</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!--home-->

    <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-dark" id="inicio">
        <div class="col-md-5 p-lg-5 mx-auto my-5" >
            <h1 class="display-4 font-weight-normal text-white">Projeto Seja</h1>
            <p class="lead font-weight-normal text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
            <a class="btn btn-outline-light" href="{{route('subscribe')}}">Partícipe nosso projeto</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <!--card-->

    <div id="conteudo" class="pricing-header container border-bottom py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-5">Conteúdo</h1>
    </div>

    <div class="album py-5">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-2 shadow-sm">
                        <img class="card-img-top" src="{{asset('storage/img/astro.jpg')}}" alt="Card image cap">
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
                    <div class="card mb-2 shadow-sm">
                        <img class="card-img-top" src="{{asset('storage/img/astro.jpg')}}" alt="Card image cap">
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
                    <div class="card mb-2 shadow-sm">
                        <img class="card-img-top" src="{{asset('storage/img/astro.jpg')}}" alt="Card image cap">
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
                <div class="col-md-5 p-lg-5 mx-auto my-3 text-center" >
                    <a class="btn btn-outline-danger" href="{{route('subscribe')}}">Mais</a>
                </div>
            </div>
        </div>         
    </div>

    <!--sobre nós -->

    
    <div class="container pricing-header px-3 pt-md-5 pb-md-4 mx-auto text-center border-top">
    <h1 class="display-5">Sobre nós</h1>        
    </div>

    <main role="main" class="container border-top text-center">
        <div class="row">
            <div class="blog-main py-4">
                <h3>Empresa</h3>
                <div class="lead">
                    < class="blog-post-meta">Sed your perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventor veritatis et quasi architectu beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia Consequentur magni dolores eos qui ratione voluptatem sequi nesciunt, ne, porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. , os nostrum exercitationem ullam corporis tentipus laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in a voluptate velit esse quam nihil molestiae consequatur,vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
                </div>
            </div>
            <div class="blog-main py-1 mb-5">
                <h3>Equipe</h3>
                <div class="lead">
                    <p class="blog-post-meta">Sed your perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventor veritatis et quasi architectu beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia Consequentur magni dolores eos qui ratione voluptatem sequi nesciunt, ne, porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. , os nostrum exercitationem ullam corporis tentipus laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in a voluptate velit esse quam nihil molestiae consequatur,vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
                </div>
            </div>
        </div>                
    </main>
            
    <!-- Footer -->
    <footer class=" text-dark mt-5">
        <div class="container-fluid border-bottom bg-light">
            <div class="row py-3 d-flex align-items-center ">
                <div class="col-md-6 col-lg-5">
                    <h6 class="text-center">Nossas redes sociais</h6>
                </div>
                <div class="col-md-6 col-lg-7">
                    <h6 class="text-center"> redes sociais</h6>
                </div>
            </div>
        </div>

         <!--Footer link-->
        <div class="container mt-5">
            <div class="row mt-3 ">
                <div class="col-md-3 col-lg-3 col-xl-3 mb-4">
                    <h6 class="border-right border-dark"><strong>EMPRESA</strong></h6>
                    <!--<ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>-->
                    <p class="lead">
                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
                    </p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mb-4">
                    <h6 class="border-right border-dark"><strong>LINKS ÚTEIS</strong></h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="#">Termos de serviço</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Políticas de privacidade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Políticas de uso</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Central ajuda</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mb-4">
                    <h6 class="border-right border-dark"><strong>CONTATOS</strong></h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Número de telefone</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Número de celular</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">E-mail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Localização</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mb-4">
                    <h6><strong>CONTA</strong></h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('site.login')}}">Entrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center bg-light border-top py-3">© 2018 Copyright:
            <a  href="#"> projetoseja.com</a>
        </div>
    </footer>

@endsection

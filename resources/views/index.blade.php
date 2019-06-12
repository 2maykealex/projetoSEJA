@extends('templates.default')

@section('title')
    
@endsection

@section('content')

    <!--navbar-->

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow p-2 mb-2 py-3">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--<a class="navbar-brand text-center mr-5" href="#">Logotipo</a>-->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item mr-5">
                            <a class="nav-link h6" href="#publicacao">Conteúdo</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link h6" href="#eventos">Eventos</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link h6" href="#assinantes">Assinaturas</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link h6" href="#">Atendimentos</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link h6" href="#sobre">Sobre nós</a>
                        </li>
                    </ul>
                     <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link h6" href="{{route('site.login')}}">Entrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!--inicio-->
    <!--<div id="inicio">
        <div class="position-relative overflow-hidden p-3 p-md-5 text-center fundo-escuro">
            <div class="col-md-5 p-lg-5 mx-auto my-5" >
                <h1 class="display-4 font-weight-normal text-white">ALMA</h1>
                <p class="lead font-weight-normal text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                <a class="btn btn-outline-light" href="{{route('subscribe')}}">Partícipe nosso projeto</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    </div>-->


    <div id="inicio">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="position-relative overflow-hidden p-3 p-md-5 text-center">
                <div class="col-md-5 p-lg-5 mx-auto my-5" >
                    <h1 class="display-4 font-weight-normal text-white">ALMA</h1>
                    <p class="lead font-weight-normal text-white">Text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. . </p>
                    <a class="btn btn-outline-light" href="{{route('subscribe')}}">Partícipe nosso projeto</a>
                </div>
                <div class="product-device shadow-sm d-none d-md-block"></div>
                <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
            </div>
        </div>
    </div>

    <!--publicações-->
    <div id="publicacao" class="pricing-header container py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-5 mt-5">Conteúdo</h1>
    </div>

    <div class="container">
        <div class="carousel">         
            <div class="alto col-lg-12">
                <div class="card">
                    <div class="hoverzoom">
                        <img src="{{asset('storage/img/astro.jpg')}}" alt="lobos" class="card-img-top">
                        <div class="retina text-right">
                            <button type="submit" class="btn btn-light">icone</button>
                        </div>
                    </div>
                    <div class="row no-gutters px-3 pb-3">
                        <div class="pt-3" style="width: 3em;">
                            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="40" height="40">
                        </div>
                        <div class="card-body" style="width: 9em;">                      
                            <a class="card-title h6" href="#">
                                God of War é uma série de jogos eletrônicos
                            </a>
                        </div>      
                        <div class="text-right col-lg-12">
                            <small class="text-muted">Por Fulano em 10/10/2010</small>
                        </div>            
                    </div>
                </div>
            </div>
            <div class="alto col-lg-12">
                <div class="card">
                    <div class="hoverzoom">
                        <img src="{{asset('storage/img/astro.jpg')}}" alt="lobos" class="card-img-top">
                        <div class="retina text-right">
                            <button type="submit" class="btn btn-light">icone</button>
                        </div>
                    </div>
                    <div class="row no-gutters px-3 pb-3">
                        <div class="pt-3" style="width: 3em;">
                            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="40" height="40">
                        </div>
                        <div class="card-body" style="width: 9em;">                      
                            <a class="card-title h6" href="#">
                                God of War é uma série de jogos eletrônicos
                            </a>
                        </div>      
                        <div class="text-right col-lg-12">
                            <small class="text-muted">Por Fulano em 10/10/2010</small>
                        </div>            
                    </div>
                </div>
            </div>
            <div class="alto col-lg-12">
                <div class="card">
                    <div class="hoverzoom">
                        <img src="{{asset('storage/img/astro.jpg')}}" alt="lobos" class="card-img-top">
                        <div class="retina text-right">
                            <button type="submit" class="btn btn-light">icone</button>
                        </div>
                    </div>
                    <div class="row no-gutters px-3 pb-3">
                        <div class="pt-3" style="width: 3em;">
                            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="40" height="40">
                        </div>
                        <div class="card-body" style="width: 9em;">                      
                            <a class="card-title h6" href="#">
                                God of War é uma série de jogos eletrônicos
                            </a>
                        </div>      
                        <div class="text-right col-lg-12">
                            <small class="text-muted">Por Fulano em 10/10/2010</small>
                        </div>            
                    </div>
                </div>
            </div>
            <div class="alto col-lg-12">
                <div class="card">
                    <div class="hoverzoom">
                        <img src="{{asset('storage/img/astro.jpg')}}" alt="lobos" class="card-img-top">
                        <div class="retina text-right">
                            <button type="submit" class="btn btn-light">icone</button>
                        </div>
                    </div>
                    <div class="row no-gutters px-3 pb-3">
                        <div class="pt-3" style="width: 3em;">
                            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="40" height="40">
                        </div>
                        <div class="card-body" style="width: 9em;">                      
                            <a class="card-title h6" href="#">
                                God of War é uma série de jogos eletrônicos
                            </a>
                        </div>      
                        <div class="text-right col-lg-12">
                            <small class="text-muted">Por Fulano em 10/10/2010</small>
                        </div>            
                    </div>
                </div>
            </div>
            <div class="alto col-lg-12">
                <div class="card">
                    <div class="hoverzoom">
                        <img src="{{asset('storage/img/astro.jpg')}}" alt="lobos" class="card-img-top">
                        <div class="retina text-right">
                            <button type="submit" class="btn btn-light">icone</button>
                        </div>
                    </div>
                    <div class="row no-gutters px-3 pb-3">
                        <div class="pt-3" style="width: 3em;">
                            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="40" height="40">
                        </div>
                        <div class="card-body" style="width: 9em;">                      
                            <a class="card-title h6" href="#">
                                God of War é uma série de jogos eletrônicos
                            </a>
                        </div>      
                        <div class="text-right col-lg-12">
                            <small class="text-muted">Por Fulano em 10/10/2010</small>
                        </div>            
                    </div>
                </div>
            </div>
            <div class="alto col-lg-12">
                <div class="card">
                    <div class="hoverzoom">
                        <img src="{{asset('storage/img/astro.jpg')}}" alt="lobos" class="card-img-top">
                        <div class="retina text-right">
                            <button type="submit" class="btn btn-light">icone</button>
                        </div>
                    </div>
                    <div class="row no-gutters px-3 pb-3">
                        <div class="pt-3" style="width: 3em;">
                            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="40" height="40">
                        </div>
                        <div class="card-body" style="width: 9em;">                      
                            <a class="card-title h6" href="#">
                                God of War é uma série de jogos eletrônicos
                            </a>
                        </div>      
                        <div class="text-right col-lg-12">
                            <small class="text-muted">Por Fulano em 10/10/2010</small>
                        </div>            
                    </div>
                </div>
            </div>
            <div class="alto col-lg-12">
                <div class="card">
                    <div class="hoverzoom">
                        <img src="{{asset('storage/img/astro.jpg')}}" alt="lobos" class="card-img-top">
                        <div class="retina text-right">
                            <button type="submit" class="btn btn-light">icone</button>
                        </div>
                    </div>
                    <div class="row no-gutters px-3 pb-3">
                        <div class="pt-3" style="width: 3em;">
                            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="40" height="40">
                        </div>
                        <div class="card-body" style="width: 9em;">                      
                            <a class="card-title h6" href="#">
                                God of War é uma série de jogos eletrônicos
                            </a>
                        </div>      
                        <div class="text-right col-lg-12">
                            <small class="text-muted">Por Fulano em 10/10/2010</small>
                        </div>            
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--eventos-->
    <div id="eventos" class="container pricing-header px-3 pt-md-5 pb-md-4 mx-auto text-center border-bottom">
        <h1 class="display-5 mt-5">Eventos</h1>        
    </div>
    <div class="container py-5">
        <div class="mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{asset('storage/img/astro.jpg')}}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">beatae vitae</h5>
                        <p class="card-text">Sed your perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventor veritatis et quasi architectu beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia Consequentur magni dolores eos qui ratione voluptatem sequi nesciunt, ne, porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
                        <p class="card-text"><small class="text-muted">minutes lorem ipsun 3 min</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--assinantes-->

    <div id="assinantes" class="container pricing-header px-3 pt-md-5 pb-md-4 mx-auto text-center border-top">
        <h1 class="display-5 mt-5">Assinantes</h1>        
    </div>
    <main role="main" class="container border-top text-center">
        <div class="d-flex justify-content-center flex-lg-center">
            <div class="col-md-9">
                <div class="blog-main py-4">
                    
                    <div class="lead">
                        Sed your perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventor veritatis et quasi architectu beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia Consequentur magni dolores eos qui ratione voluptatem sequi nesciunt, ne, porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. , os nostrum exercitationem ullam corporis tentipus laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in a voluptate velit esse quam nihil molestiae consequatur,vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
                        Sed your perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventor veritatis et quasi architectu beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia Consequentur magni dolores eos qui ratione voluptatem sequi nesciunt, ne, porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. , os nostrum exercitationem ullam corporis tentipus laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in a voluptate velit esse quam nihil molestiae consequatur,vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
                    </div>
                </div>
            </div>
        </div>                
    </main>

    <!--sobre nós -->
    
    <div id="sobre" class="container pricing-header px-3 pt-md-5 pb-md-4 mx-auto text-center border-top">
        <h1 class="display-5 mt-5">Sobre nós</h1>        
    </div>

    <main role="main" class="container border-top text-center">
        <div class="d-flex justify-content-center flex-lg-center">
            <div class="col-md-9">
                <div class="blog-main py-4">
                    <h3>Empresa</h3>
                    <div class="lead">
                        Sed your perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventor veritatis et quasi architectu beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia Consequentur magni dolores eos qui ratione voluptatem sequi nesciunt, ne, porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. , os nostrum exercitationem ullam corporis tentipus laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in a voluptate velit esse quam nihil molestiae consequatur,vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
                    </div>
                </div>

                <div class="blog-main py-1 mb-5">
                    <h3>Equipe</h3>
                    <div class="lead">
                        <p class="blog-post-meta">Sed your perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventor veritatis et quasi architectu beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia Consequentur magni dolores eos qui ratione voluptatem sequi nesciunt, ne, porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. , os nostrum exercitationem ullam corporis tentipus laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in a voluptate velit esse quam nihil molestiae consequatur,vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
                    </div>
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
            <a  href="#"> alma.com</a>
        </div>
    </footer>

@endsection

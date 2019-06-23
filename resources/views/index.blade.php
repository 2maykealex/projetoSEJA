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
                <!--<a class="navbar-brand text-center mr-5" href="#"><img src="{{url('storage/img/seja.jpg')}}" alt="logo do site" width="30px" ></a>-->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item mr-5">
                            <a class="nav-link h6" href="#sobre">Sobre nós</a>
                        </li>
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
        <div class="d-flex justify-content-center flex-lg-center">
    </div>-->


    <div id="inicio" class="mb-5">
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

<!--sobre nós -->
    
    <div class="container my-5" id="sobre">
        <div class="container pricing-header py-4 pt-md-5 pb-md-4 mx-auto">
            <h1 class="display-5 mt-5 mb-3">Sobre nós</h1>   
            <div class="mb-2" style="border-bottom: 7px solid #00BFFF;
  width:40px;"></div>     
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="blog-main px-5 py-5">
                    <h1>Quem somos</h1>
                    <div class="lead mt-4">
                        Sed your perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventor veritatis et quasi architectu beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia Consequentur magni dolores eos qui ratione voluptatem sequi nesciunt, ne, porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. , os nostrum exercitationem ullam corporis tentipus laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in a voluptate velit esse quam nihil molestiae consequatur,vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
                    </div>
                </div>
            </div>
            <div class="row col-md-6 py-5">

                <div class="col-md-6">
                    <div class="card text-white imgzoom ">
                        <img class="card-img mb-3 " src="{{asset('storage/img/astro.jpg')}}" alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with .</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-white imgzoom">
                        <img class="card-img mb-3 " src="{{asset('storage/img/astro.jpg')}}" alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with .</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-white imgzoom">
                        <img class="card-img mb-3 " src="{{asset('storage/img/astro.jpg')}}" alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with .</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-white imgzoom">
                        <img class="card-img mb-3 " src="{{asset('storage/img/astro.jpg')}}" alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with .</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>


    <!--publicações-->
    <div class="container-fluid my-5" id="publicacao">
        <div class="pricing-header container py-4 pt-md-5 pb-md-4 mx-auto">
            <h1 class="display-5 mt-5 mb-3">Conteúdo</h1>
            <div class="mb-5" style="border-bottom: 7px solid #00BFFF;
  width:40px;"></div>
            <div class="col-md-12 text-center mt-5">
                <p class="mb-5 h3">Veja alguns dos conteúdos criados pelos nossos especialistas</p>
            </div>
        </div>

    
        <div class="carousel">
            @foreach($posts as $post)         
            <div class="alto col-lg-12 mb-2">
                <div class="card my-3 shadow rounded">
                    <div class="hoverzoom">
                        <img src="{{ asset('storage/img/posts/' . $post->image)}}" alt="..." class="card-img-top">
                        <div class="retina text-right">
                            <button type="submit" class="btn btn-light">icone</button>
                        </div>
                    </div>
                    <div class="row no-gutters px-3 pb-3">
                        <div class="pt-3" style="width: 3em;">
                            <img class="rounded-circle" src="{{ asset('storage/img/profiles/' . $post->author->image)}}" width="40" height="40">
                        </div>
                        <div class="card-body" style="width: 9em;">                      
                            <a class="card-title h6" href="#">{{$post->title}}</a>
                        </div>      
                        <div class="text-right col-lg-12">
                            <small class="text-muted">Por {{$post->author->name}} em {{date('d/m/Y', strtotime($post->created_at))}}</small>
                        </div>            
                    </div>
                </div>
            </div>
            @endforeach
            <div class="alto col-lg-12 mb-2">
                <div class="card my-3 shadow rounded">
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
            <div class="alto col-lg-12 mb-2">
                <div class="card my-3 shadow rounded">
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
            <div class="alto col-lg-12 mb-2">
                <div class="card my-3 shadow rounded">
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
            <div class="alto col-lg-12 mb-2">
                <div class="card my-3 shadow  rounded">
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
    <div class="container my-5" id="eventos">      
        <div class="pricing-header container py-4 pt-md-5 pb-md-4 mx-auto">
            <h1 class="display-5 mt-5 mb-3">Eventos</h1>
            <div class="mb-5" style="border-bottom: 7px solid #00BFFF;
  width:40px;"></div>
        <div class="col-md-12 text-center mt-5">
             <p class="mb-5 h3">Acompanhe nossos eventos</p>
        </div>
        </div>
        <?php $count = 0; ?>
            @foreach($events as $event)
                <?php if($count == 1) break; ?>
                <div class="mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-5 ">
                            <img src="{{ asset('storage/img/events/' . $event->image)}}" class="card-img shadow my-1" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">{{$event->title}}</h5>
                                <small class="text-muted mb-2">Por {{$event->author->name}} em {{date('d/m/Y', strtotime($event->created_at))}}</small>
                                <p class="card-text text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporary incididunt ut labore et dolore magna aliqua. O uso de um mínimo de exercícios, os exercícios nostrud ullamco
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporary incididunt ut labore et dolore magna aliqua. O uso de um mínimo de exercícios, os exercícios nostrud ullamco
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporary incididunt ut labore et dolore magna aliqua. O uso de um mínimo de exercícios, os exercícios nostrud ullamco</p>                              
                            </div>
                        </div>
                    </div>
                </div>
                <?php $count++; ?>
            @endforeach
            <div class="col-md-12 text-center mt-5">
                <a class="btn btn-danger" href="#">Saiba mais</a>    
            </div>
    </div>
    
    <!--assinantes-->
    <div class="container my-5" id="assinantes">
        <div class="container pricing-header py-4 pt-md-5 pb-md-4 mx-auto">
            <h1 class="display-5 mt-5 mb-3">Planos</h1>   
            <div class="mb-3" style="border-bottom: 7px solid #00BFFF;
  width:40px;"></div>     
        </div>
        <!-- <div class="d-flex justify-content-center flex-lg-center">
            <div class="card-deck text-center mb-3 col-md-10">
                <?php $count = 0; ?>
                @foreach($subscriptionPlans as $subscriptionPlan)
                    <?php if($count == 4) break; ?>
                    <div class="card shadow pb-3">
                        <div class="card-header">
                            <h4 class="font-weight-normal">{{$subscriptionPlan->collection->name}}</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">${{$subscriptionPlan->price}}</h1>
                            <small class="text-dark h6">{{$subscriptionPlan->collection->name}}</small>
                            <div class="col-md-12 mt-2 text-left">
                                <small class="text-dark h6">Inclui:</small>
                            </div>
                            <ul class="mb-4 text-left">
                                <li><small>Lorem ipsum dolor sit amet</small></li>
                                <li><small>Lorem ipsum dolor sit amet</small></li>
                                <li><small>Lorem ipsum dolor sit amet</small></li>
                            </ul>
                            <a class="btn btn-md btn-block btn-info" href="#">Assinar</a>
                        </div>
                    </div>    
                    <?php $count++; ?> 
                @endforeach      
            </div>
        </div> -->
        <ul class="nav nav-pills justify-content-center mb-5" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">primeiro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="profile" aria-selected="false">segundo</a>
            </li>
        </ul>

        
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card-deck text-center mb-3" >
                        <div class="card shadow pb-3">
                            <div class="card-header">
                                <h4 class="font-weight-normal">lorem um</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$10</h1>
                                <small class="text-dark h6">basico</small>
                                <div class="col-md-12 mt-2 text-left">
                                    <small class="text-dark h6">Inclui:</small>
                                </div>
                                <ul class="mb-4 text-left">
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                </ul>
                                <a class="btn btn-md btn-block btn-info" href="#">Assinar</a>
                            </div>
                        </div>  
                        <div class="card shadow pb-3">
                            <div class="card-header">
                                <h4 class="font-weight-normal">lorem ipsum</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$10</h1>
                                <small class="text-dark h6">basico</small>
                                <div class="col-md-12 mt-2 text-left">
                                    <small class="text-dark h6">Inclui:</small>
                                </div>
                                <ul class="mb-4 text-left">
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                </ul>
                                <a class="btn btn-md btn-block btn-info" href="#">Assinar</a>
                            </div>
                        </div>  
                        <div class="card shadow pb-3">
                            <div class="card-header">
                                <h4 class="font-weight-normal">lorem ipsum</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$10</h1>
                                <small class="text-dark h6">basico</small>
                                <div class="col-md-12 mt-2 text-left">
                                    <small class="text-dark h6">Inclui:</small>
                                </div>
                                <ul class="mb-4 text-left">
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                </ul>
                                <a class="btn btn-md btn-block btn-info" href="#">Assinar</a>
                            </div>
                        </div>  
                        <div class="card shadow pb-3">
                            <div class="card-header">
                                <h4 class="font-weight-normal">lorem ipsum</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$10</h1>
                                <small class="text-dark h6">basico</small>
                                <div class="col-md-12 mt-2 text-left">
                                    <small class="text-dark h6">Inclui:</small>
                                </div>
                                <ul class="mb-4 text-left">
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                </ul>
                                <a class="btn btn-md btn-block btn-info" href="#">Assinar</a>
                            </div>
                        </div>     
                    </div>
                </div>


                <div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="card-deck text-center mb-3" >
                        <div class="card shadow pb-3">
                            <div class="card-header">
                                <h4 class="font-weight-normal">lorem dois</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$10</h1>
                                <small class="text-dark h6">basico</small>
                                <div class="col-md-12 mt-2 text-left">
                                    <small class="text-dark h6">Inclui:</small>
                                </div>
                                <ul class="mb-4 text-left">
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                </ul>
                                <a class="btn btn-md btn-block btn-info" href="#">Assinar</a>
                            </div>
                        </div>  
                        <div class="card shadow pb-3">
                            <div class="card-header">
                                <h4 class="font-weight-normal">lorem ipsum</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$10</h1>
                                <small class="text-dark h6">basico</small>
                                <div class="col-md-12 mt-2 text-left">
                                    <small class="text-dark h6">Inclui:</small>
                                </div>
                                <ul class="mb-4 text-left">
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                </ul>
                                <a class="btn btn-md btn-block btn-info" href="#">Assinar</a>
                            </div>
                        </div>  
                        <div class="card shadow pb-3">
                            <div class="card-header">
                                <h4 class="font-weight-normal">lorem ipsum</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$10</h1>
                                <small class="text-dark h6">basico</small>
                                <div class="col-md-12 mt-2 text-left">
                                    <small class="text-dark h6">Inclui:</small>
                                </div>
                                <ul class="mb-4 text-left">
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                </ul>
                                <a class="btn btn-md btn-block btn-info" href="#">Assinar</a>
                            </div>
                        </div>  
                        <div class="card shadow pb-3">
                            <div class="card-header">
                                <h4 class="font-weight-normal">lorem ipsum</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$10</h1>
                                <small class="text-dark h6">basico</small>
                                <div class="col-md-12 mt-2 text-left">
                                    <small class="text-dark h6">Inclui:</small>
                                </div>
                                <ul class="mb-4 text-left">
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                    <li><small>Lorem ipsum dolor sit amet</small></li>
                                </ul>
                                <a class="btn btn-md btn-block btn-info" href="#">Assinar</a>
                            </div>
                        </div>     
                    </div>
                </div>
            
        </div>
    </div>

            
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

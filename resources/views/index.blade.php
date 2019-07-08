@extends('templates.default')

@section('title')
    
@endsection

@section('content')



    <!--navbar-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow p-2 mb-2 py-3">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <label>&#9776;</label>
                </button>
                <!--<a class="navbar-brand text-center mr-5" href="#"><img src="{{url('storage/img/seja.jpg')}}" alt="logo do site" width="30px" ></a>-->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item mr-5 ">
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
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalLogin">Entrar</button>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



   <!--Modal de Login e Subscriber-->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item mr-2">
                            <a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Entrar</a>
                        </li>
                        <li class="nav-item mr-auto">
                            <a class="nav-link" id="pills-subscribe-tab" data-toggle="pill" href="#pills-subscribe" role="tab" aria-controls="pills-subscribe" aria-selected="false">Inscreva-se</a>
                        </li>
                    </ul>
                </div>
                <div class="modal-body">
                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                            
                            <form action="{{route('site.login.validate')}}" method="post" class="form-signin">
                                {!! csrf_field()!!}
                                <input type="email" name="email" id="email" placeholder="E-mail" class="form-control mt-4" required >
                                <input type="password" id="password" name="password" minlength="6" placeholder="Senha" onchange="validaCaracter(this)" class="form-control mt-3" required>
                                <div class="row">
                                    <div class="checkbox mt-3 col-md-6">
                                        <label>
                                            <input type="checkbox" value="remember-me"> Lembrar-se de mim
                                        </label>
                                    </div>
                                    <div class="col-md-6 mt-3 text-md-right">
                                        <a href="#">Recuperar senha?</a>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-orange btn-block mt-3">Entrar</button>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="pills-subscribe" role="tabpanel" aria-labelledby="pills-subscribe-tab">
                            
                            <form action="{{route('subscriber.store')}}" method="POST" onsubmit="EnviarFormulario()" class="py-3"> 
                                @csrf      
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Nome" required>      
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input class="form-control" id="cpf" name="cpf" onInput="checkMaskDocument(this)" placeholder="CPF" required>
                                    </div>
                                    <div class="form-group col">
                                        <input class="form-control" id="telephone" name="telephone" onInput="checkMaskTelephone(this)" placeholder="Tel/Cel" required="">
                                    </div>       
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="text" class="form-control" id="zipcode" name="zipcode" onInput="checkMaskZipCode(this)" placeholder="CEP" required>
                                    </div>
                                    <div class="form-group col"> 
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Endereço" required>
                                    </div>    
                                </div>      
                                <div class="form-row">
                                    <div class="form-group col">
                                        <select class="form-control" id="state" name="state" required onchange="listCities(this.value);" collapse required>
                                            <option value="-1">Estado</option>
                                            @foreach($states as $state)
                                                <option value="{{$state->id}}">{{$state->initials}}</option>
                                            @endforeach
                                        </select>  
                                    </div>
                                    <div class="form-group col">
                                        <select id="city" name="city" class="form-control" required>
                                            <option selected>Cidade</option>
                                            <option>...</option>
                                        </select>
                                    </div> 
                                </div>
                                <div class="form-group">
                                    <select id="subscription_plan_id" name="subscription_plan_id" class="form-control">
                                        <option value="-1">Planos</option>
                                        @foreach($subscriptionPlans as $subscriptionPlan)
                                            <option value="{{$subscriptionPlan->id}}">{{$subscriptionPlan->type->name}} - {{$subscriptionPlan->collection->name}} - R$ <?php echo number_format($subscriptionPlan->price,2, ',', '.');?></option>
                                        @endforeach
                                    </select>  
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                                </div>      
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirmar senha" required>
                                </div>
                                <button type="submit" class="btn btn-orange btn-block mt-3">Inscrever</button>
                            </form>
                        </div>       
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Inicio com video de fundo-->
    <div id="inicio" class="mb-5 active">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="position-relative overflow-hidden p-3 p-md-5 text-center">
                <div class="col-md-5 p-lg-5 mx-auto my-5" >
                    <h1 class="display-4 font-weight-normal text-white">Seja</h1>
                    <p class="lead font-weight-normal text-white">Text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. . </p>
                </div>
                <div class="product-device shadow-sm d-none d-md-block"></div>
                <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
            </div>
        </div>
    </div>

    <!--publicações-->
    @if (!$posts->isEmpty())
        <div class="container-fluid my-5" id="publicacao">
            <div class="pricing-header container py-4 pt-md-5 pb-md-4 mx-auto">
                <h1 class="display-5 mt-5 mb-3">Conteúdo</h1>
                <div class="mb-5" style="border-bottom: 7px solid #00BFFF; width:40px;">
                </div>
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
                            <div class="card-body">
                                <a class="card-title h6" href="#">{{$post->title}}</a>
                            </div>    
                            <div class="position-profile">
                                <a href="#"><img class="rounded-circle abs" src="{{ asset('storage/img/profiles/' . $post->author->image)}}" width="40" height="40"></a>
                            </div>  
                            <div class="position-people">
                                <small class="text-muted">Por <a href="#">{{$post->author->name}}</a></small>
                            </div>
                            <div class="position-date-time">
                                <small class="text-muted">Em {{date('d/m/Y', strtotime($post->created_at))}}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif


    <!--eventos-->
    @if (!$events->isEmpty())
        <div class="container my-5" id="eventos">      
            <div class="pricing-header container py-4 pt-md-5 pb-md-4 mx-auto">
                <h1 class="display-5 mt-5 mb-3">Eventos</h1>
                <div class="mb-5" style="border-bottom: 7px solid #00BFFF;width:40px;"></div>
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
                            <div class="col-md-7 pl-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{$event->title}}</h5>
                                    <small class="text-muted mb-2">Por {{$event->author->name}} em {{date('d/m/Y', strtotime($event->created_at))}}</small>
                                    <p class="card-text text-left">{{$event->text}}</p>                              
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
        </div>
    @endif
    
    <!--assinantes-->
    <div class="container my-5" id="assinantes">
        <div class="container pricing-header py-4 pt-md-5 pb-md-4 mx-auto">
            <h1 class="display-5 mt-5 mb-3">Planos</h1>   
            <div class="mb-3" style="border-bottom: 7px solid #00BFFF;  width:40px;"></div>
        </div>
        <ul class="nav nav-pills justify-content-center mb-5" id="myTab" role="tablist">
            @foreach($subscriptionTypes as $subscriptionType)
            <li class="nav-item">
                <a class="nav-link mr-1 <?php if ($subscriptionType->id == 1) {echo 'active';}?>" id="{{$subscriptionType->name}}-tab" data-toggle="tab" href="#{{$subscriptionType->name}}" role="tab" aria-controls="{{$subscriptionType->name}}" aria-selected="true">{{$subscriptionType->name}}</a>
            </li>
            @endforeach
        </ul>
        <div class="tab-content" id="myTabContent">
            @foreach($subscriptionTypes as $subscriptionType)
            <div class="tab-pane fade show <?php if ($subscriptionType->id == 1) {echo 'active';}?>" id="{{$subscriptionType->name}}" role="tabpanel" aria-labelledby="{{$subscriptionType->name}}-tab">
                <div class="card-deck d-flex justify-content-center flex-lg-center text-center mb-3" >
                        @foreach($subscriptionPlans as $subscriptionPlan)
                            @if($subscriptionType->id == $subscriptionPlan->subscription_type_id)
                                <div class="card col-md-3 shadow pb-3">
                                    <div class="card-header">
                                        <h3 class="font-weight-normal mt-4">{{$subscriptionPlan->collection->name}}</h3>
                                        <small class="text-cinza h6">{{$subscriptionPlan->type->name}}</small>
                                        <div class="justify-content-center d-flex mt-4">
                                            <div class="border-bottom-my"></div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title pricing-card-title"><span class="text-cinza h4">R$ </span><?php echo number_format($subscriptionPlan->price,2, ',', '.');?> </h3>
                                        <div class="justify-content-center d-flex mt-4 mb-5">
                                            <div class="border-bottom-my"></div>
                                        </div>
                                        <!--<div class="col-md-12 mt-2 text-left">
                                            <small class="text-dark h6">Inclui:</small>
                                        </div>
                                        <ul class="mb-4 text-left">
                                            <li><small>Lorem ipsum dolor sit amet</small></li>
                                            <li><small>Lorem ipsum dolor sit amet</small></li>
                                            <li><small>Lorem ipsum dolor sit amet</small></li>
                                        </ul>-->
                                        <a class="btn btn-md btn-block btn-info" href="#">Conhecer</a>
                                    </div>
                                </div> 
                            @else

                            @endif
                          
                        @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!--SOBRE NÓS-->
    <div class="container-fluid my-5" id="sobre">
        <div class="container pricing-header py-4 pt-md-5 pb-md-4 mx-auto">
            <h1 class="display-5 mt-5 mb-3">Sobre nós</h1>   
            <div class="mb-2" style="border-bottom: 7px solid #00BFFF;  width:40px;"></div>
        </div>
        <div class="container">
            <div class="col-md-6">
                <div class="blog-main px-5 py-5">
                    <h2>Quem somos</h2>
                    <div class="lead mt-4">
                        Sed your perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventor veritatis et quasi architectu beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia Consequentur magni dolores eos qui ratione voluptatem sequi nesciunt, ne, porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. , os nostrum exercitationem ullam corporis tentipus laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in a voluptate velit esse quam nihil molestiae consequatur,vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <h2>Nosso Time</h2>
            <p class="mb-5 h3">Veja o perfil do nosso pessoal</p>
            <div class="carousel carousel-we">
                @foreach ($publishers as $publisher)
                    <div class="col-md-12">
                        <div class="card text-white imgzoom ">
                            <img class="card-img mb-3 " src="{{ asset('storage/img/profiles/' . $publisher->person->image)}}" alt="Card image" height="350">
                            <div class="card-img-overlay">
                                <h5 class="card-title">{{$publisher->person->name}}</h5>
                                <p class="position-people">{{$publisher->summary}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach   
            </div>
        </div>
    </div>

    <!-- FOOTER RODÁPE -->
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

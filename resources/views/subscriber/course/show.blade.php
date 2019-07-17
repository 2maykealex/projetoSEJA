@extends('templates.default_subscriber')

@section('title')
    CURSO
@endsection

@section('content')
    <!--@foreach($course->courseItens as $class)
    <tr>
        <td>{{$class->summary}}</td>
        <td embed-responsive embed-responsive-16by9>
            <iframe class="embed-responsive-item" width="420" height="245" 
                src="{{$class->file}}">
            </iframe>
        </td>
    </tr>
    @endforeach --> 
                                

            
                    

    <!-- Imagem de topo -->
    <div class="bg-dark" style="height: 20rem;">
        <div class="col">
            <!--<img src="../image/lobos.jpg" class="card-img shadow my-1" alt="...">-->
        </div>
    </div>

    <!-- Conteúdo -->
    <div class="container mt-5">

        <!-- Barra na vertical para troca de conteúdo -->
        <ul class="nav nav-pills mb-5" id="myTab" role="tablist">
           <!--<@foreach($subscriptionTypes as $subscriptionType)
            <li class="nav-item">
                <a class="nav-link mr-1 <?php if ($subscriptionType->id == 1) {echo 'active';}?>" id="{{$subscriptionType->name}}-tab" data-toggle="tab" href="#{{$subscriptionType->name}}" role="tab" aria-controls="{{$subscriptionType->name}}" aria-selected="true">{{$subscriptionType->name}}</a>
            </li>
            @endforeach-->
            <li class="nav-item">
                <a class="nav-link mr-1 active" id="descricao-tab" data-toggle="tab" href="#descricao" role="tab" aria-controls="descricao" aria-selected="true">Descricao</a>
            </li>
             <li class="nav-item">
                <a class="nav-link mr-1 " id="conteudo-tab" data-toggle="tab" href="#conteudo" role="tab" aria-controls="conteudo" aria-selected="false">Contéudo</a>
            </li>
        </ul>

        <!-- Conteúdo que será trocado de acordo com a barra vertical -->
        <div class="tab-content " id="myTabContent">
            
            <!--@foreach($subscriptionTypes as $subscriptionType)
                <div class="tab-pane fade show <?php if ($subscriptionType->id == 1) {echo 'active';}?>" id="{{$subscriptionType->name}}" role="tabpanel" aria-labelledby="{{$subscriptionType->name}}-tab">
                    <div class="d-flex flex-wrap justify-content-around text-center mb-3">
                        @foreach($subscriptionPlans as $subscriptionPlan)
                            @if($subscriptionType->id == $subscriptionPlan->subscription_type_id)
                                
                            Contéudo do site

                            @else

                            @endif
                          
                        @endforeach
                    </div>
                </div>
            @endforeach-->
            <div class="tab-pane fade show active" id="descricao" role="tabpanel" aria-labelledby="descricao-tab">
                <div class="d-flex flex-wrap mb-3">
                    <!-- Falta colocar class para tratar textos em descrição -->
                    <div>
                        <h5>Descrição sobre o curso</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporary incididunt ut labore et dolore magna aliqua. O uso de um mínimo de exercícios, os exercícios nostrud ullamco</p>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade show" id="conteudo" role="tabpanel" aria-labelledby="conteudo-tab">
                <div class="d-flex flex-wrap mb-3">
                    <div class="col-12 bg-light p-0">
                        <ul class="nav flex-column nav-ul">
                            <li class="nav-li">
                                <a class="nav-a" data-toggle="modal" data-target=".bd-example-modal-lg" style="cursor: pointer;">modal sobre o video</a>
                            </li>
                            <li class="nav-li">
                                <a class="nav-a" style="cursor: pointer;">botão para expandir PDFs sobre o video</a>
                                <ul class="nav nav-sub-ul">
                                    <li class="nav-sub-li">
                                        <a class="nav-sub-a">pdf 1</a>
                                    </li>
                                    <li class="nav-sub-li">
                                        <a class="nav-sub-a">pdf 2</a>
                                    </li>
                                    <li class="nav-sub-li">
                                        <a class="nav-sub-a">pdf 3</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <video width="100%" controls>
                    <source src="../video/baleiazul.mp4" type="video/mp4" >
                </video>
            </div>
        </div>
    </div>

@endsection
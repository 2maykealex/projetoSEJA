@extends('templates.default_subscriber')

@section('title')
    CURSO
@endsection

@section('content')
    <!-- Imagem de topo -->
   
    <img src="{{ asset('storage/img/astro.jpg')}}" class="card-img mt-1" alt="..." height="280rem">


    <!-- Conteúdo -->
    <div class="container mt-5">

        <!-- Barra na vertical para troca de conteúdo -->
        <ul class="nav nav-pills mb-5" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link mr-1 active" id="descricao-tab" data-toggle="tab" href="#descricao" role="tab" aria-controls="descricao" aria-selected="true">Descrição</a>
            </li>
             <li class="nav-item">
                <a class="nav-link mr-1 " id="conteudo-tab" data-toggle="tab" href="#conteudo" role="tab" aria-controls="conteudo" aria-selected="false">Conteúdo</a>
            </li>
        </ul>

        <!-- Conteúdo que será trocado de acordo com a barra vertical -->
        <div class="tab-content " id="myTabContent">
            @foreach($course->courseItens as $class)
                <div class="tab-pane fade show active" id="descricao" role="tabpanel" aria-labelledby="descricao-tab">
                    <div class="d-flex flex-wrap mb-3">
                        <!-- Falta colocar class para tratar textos em descrição -->
                        <div class="p-3 col-12">
                            <h3>Sobre o que é este curso</h3>
                            <p class="p-3">{{$class->summary}}</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show" id="conteudo" role="tabpanel" aria-labelledby="conteudo-tab">
                    <div class="d-flex flex-wrap mb-3">
                        <div class="col-12 bg-light p-0">
                            <ul class="nav flex-column nav-ul">
                                <li class="nav-li active">
                                    <a class="nav-a" data-toggle="modal" data-target=".bd-example-modal-lg" style="cursor: pointer;">Vídeo aula</a>
                                    <!-- Modal do video do curso-->
                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <!--<video width="100%" controls>
                                                    <source src="../video/baleiazul.mp4" type="video/mp4" >
                                                </video>-->
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="{{$class->file}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-li">
                                    <a class="nav-a" style="cursor: pointer;">Anexos da vídeo aula</a>
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
            @endforeach
        </div>
    </div>

@endsection
@extends('templates.default_subscriber')

@section('title')
    CURSO
@endsection

@section('content')
    <!-- Imagem de topo -->
   
        <div class="d-flex justify-content-center bg-dark" style="height: 20rem;">
            <img src="{{ asset('storage/img/courses/' . $course->image)}}" class="img-fluid col-sm-12 col-md-7 px-0" alt="Descrição da img">  
        </div>

    <!-- Conteúdo -->
    <div class="container mt-5">
        <div class="overflow-nav">
            <ul class="nav nav-pills mb-5 d-flex flex-nowrap ">
                <li class="nav-item">
                    <a class="nav-link mr-1 active" id="descricao-tab" data-toggle="tab" href="#descricao" role="tab" aria-controls="descricao" aria-selected="true">Descrição</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-1 " id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Vídeo aulas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-1 " id="anexo-tab" data-toggle="tab" href="#anexo" role="tab" aria-controls="anexo" aria-selected="false">Anexos</a>
                </li>
            </ul>
        </div>

        <!-- Conteúdo que será trocado de acordo com a barra vertical -->
        <div class="tab-content " id="myTabContent">
            
                <div class="tab-pane fade show active" id="descricao" role="tabpanel" aria-labelledby="descricao-tab">
                    <div class="d-flex flex-wrap mb-3">
                        <!-- Falta colocar class para tratar textos em descrição -->
                        <div class="p-3 col-12">
                            <h3>Sobre o que é este curso</h3>
                            <p class="p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporary incididunt ut labore et dolore magna aliqua. O uso de um mínimo de exercícios, os exercícios nostrud ullamco laboris nisi ut alipip ex ea commodo conseqüat. Duis aute irure dolor in reprehenderit in voluptate Este caso não é proeminente, não é proeminente, não é proeminente, não é proeminente, está em causa qui officia deserunt mollit anim id est laborum. </p>
                        </div>
                    </div>
                </div>
            

                <div class="tab-pane fade show" id="video" role="tabpanel" aria-labelledby="video-tab">
                    <div class="d-flex flex-wrap mb-3">
                        <div class="col-12 bg-light p-0">
                            <ul class="nav flex-column nav-ul">
                                @foreach($course->courseItens as $class)
                                    <li class="nav-li border-bottom active">
                                        <a class="nav-a" data-toggle="modal" data-target=".modal-{{$class->id}}" style="cursor: pointer;">{{$class->summary}}</a>
                                        <!-- Modal do video do curso-->
                                        <div class="modal fade modal-{{$class->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe class="embed-responsive-item" src="{{$class->file}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="anexo" role="tabpanel" aria-labelledby="anexo-tab">
                    <div class="d-flex flex-wrap">
                        <div class="col-12 bg-light p-0">
                            <ul class="nav flex-column nav-ul">
                                @foreach($course->courseItens as $class)
                                    <li class="nav-li border-bottom">
                                        <a class="nav-a">{{$class->summary}}</a>
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
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
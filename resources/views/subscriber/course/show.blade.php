@extends('templates.default_subscriber')

@section('title')
    CURSO
@endsection

@section('content')
	<div class="container">
            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark heigt-test">
            </div>
        </div>

        <main role="main" class="container">
          <div class="row">
            <div class="d-flex justify-content-center flex-lg-center">
                <div class="col-md-9 blog-main">

                    <div class="blog-post">
                        <div class="text-center py-4">
                            <h2 class="blog-post-title">CURSO</h2>
                        </div>
                        <div class="table-responsive pb-3 pt-3 bg-white px-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>AULA</th>
                                        <th class="text-center">AÇÕES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($course->courseItens as $class)
                                    <tr>
                                        <td>{{$class->summary}}</td>
                                        <td embed-responsive embed-responsive-16by9>
                                            <iframe class="embed-responsive-item" width="420" height="245" 
                                                src="{{$class->file}}">
                                            </iframe>
                                        </td>
                                    </tr>
                                    @endforeach   
                                </tbody>
                            </table>
                            </div>
                    </div><!-- /.blog-post -->

            
                    <aside class="blog-sidebar">
                        <div class="p-3 mb-3 rounded">
                            <h4 class="font-italic">Relacionados...</h4>
                            <div class="col-md-6">
                                <div class="card mb-4 shadow-sm mt-5">
                                    <img class="card-img-top" src="image/astro.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-outline-secondary">Ver tudo</a>
                                        </div>
                                        <small class="text-muted">Atualizado a 9 mins</small>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside><!-- /.blog-sidebar -->
                </div><!-- /.row -->
            </div>
        </main>
    </div>

@endsection
@extends('templates.default_subscriber')

@section('title')
    EVENTOS
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
                            <h2 class="blog-post-title">EVENTO</h2>
                        </div>
                        <p class="blog-post-meta">Escrito por <a href="#">Fulano</a>, em 10 de Janeiro de 2010 - 10h10</p>
                        <small class="text-muted">Atualizado a 10 mins</small>
                        <p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro</p>
                        <img src="image/astro.jpg" class="img-fluid py-3" alt="Responsive image" width="100%"> 
                        <p>quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
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
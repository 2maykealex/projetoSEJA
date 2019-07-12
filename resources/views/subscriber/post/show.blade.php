@extends('templates.default_subscriber')

@section('title')

@endsection

@section('content')
	<div class="container-fluid" style="padding-right: 0; padding-left: 0;">
        <img src="{{asset('storage/img/posts/'. $post->image)}}" class="img-fluid" alt="Responsive image" width="100%" height="400px">  

        <main role="main" class="container">
            <div class="row d-flex justify-content-center flex-lg-center">
                
                    <div class="col-md-9 blog-main">
                        <div class="blog-post">
                            <div class="text-center py-4">
                                <h2 class="blog-post-title">{{$post->title}}</h2>
                            </div>
                            <div class="text-muted py-4">
                                <h4 class="blog-post-title">"{{$post->summary}}"</h4>
                            </div>
                            <p class="blog-post-meta">Publicado por <a href="#">{{$post->author->name}}</a>, em {{date('d/m/Y', strtotime($post->created_at))}}</p>
                            <small class="text-muted">Postado há 10 min</small>
                            <p class="mt-3">{{$post->text}}</p>
                        </div>
                    </div>
                
            </div>
        </main>
    </div>

@endsection
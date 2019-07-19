@extends('templates.default_subscriber')

@section('title')

@endsection

@section('content')
	<div class="container-fluid" style="padding-right: 0; padding-left: 0;">
        <div class="d-flex justify-content-center">
            <img src="{{asset('storage/img/posts/'. $post->image)}}" class="img-fluid col-sm-12 col-md-7 px-0" alt="Responsive image">  
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-10 col-md-7 blog-main">
                    <div class="blog-post">
                        <div class="text-center pt-5">
                            <div class="blog-post-title h2">{{$post->title}}</div>
                        </div>
                        <div class="text-muted py-4">
                            <div class="blog-post-title h4">"{{$post->summary}}"</div>
                        </div>
                        <p class="blog-post-meta">Publicado por <a href="#">{{$post->author->name}}</a>, em {{date('d/m/Y', strtotime($post->created_at))}}</p>
                        <p class="mt-3">{{$post->text}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
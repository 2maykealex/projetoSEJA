@extends('templates.default_subscriber')

@section('title')
    CONGRESSOS
@endsection

@section('content')
	<div class="container-fluid" style="padding-right: 0; padding-left: 0;">
        <div class="d-flex justify-content-center">
            <img src="{{asset('storage/img/events/'. $event->image)}}" class="img-fluid col-sm-12 col-md-7 px-0" alt="Descrição da img">  
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-10 col-md-7 blog-main">
                    <div class="blog-post">
                        <div class="text-center pt-5">
                            <div class="blog-post-title h2">{{$event->title}}</div>
                        </div>
                        <div class="text-muted py-4">
                            <div class="blog-post-title h4">"{{$event->summary}}"</div>
                        </div>
                        <p class="blog-post-meta">Publicado por <a href="#">{{$event->author->name}}</a>, em {{date('d/m/Y', strtotime($event->created_at))}}</p>
                        <p class="mt-3">{{$event->text}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
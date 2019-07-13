@extends('templates.default_subscriber')

@section('title')
	PUBLICAÇÕES
@endsection

@section('content')

	
    <div class="container">      
        <div class="pricing-header text-center mt-3 mb-5 mx-auto">
            <h1 class="display-5">Postagens</h1>
        </div>
        @if (!$posts->isEmpty())
            @foreach($posts as $post)
                <div class="border-bottom">
                    <div class="row no-gutters my-4">
                        <div class="col-md-5">
                            <img src="{{ asset('storage/img/posts/' . $post->image)}}" class="card-img shadow my-1" alt="...">
                        </div>
                        <div class="col-md-7 pl-3">
                            <div class="card-body">
                                <div class="card-title">
                                    <a class="h5" href="{{route('subscriber.posts.show' , $post->id)}}">{{$post->title}}</a>
                                </div>
                                <small class="text-muted mb-2">Por <a href="#">{{$post->author->name}}</a> em {{date('d/m/Y', strtotime($post->created_at))}}</small>
                                <p class="card-text text-left">{{$post->text}}</p>                              
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    
@endsection
@extends('templates.default_subscriber')

@section('title')
	Home
@endsection

@section('content')


    <div class="container-fluid" >

        <!-- Slider para Postagens-->
        @if (!$posts->isEmpty())
        <div class="pricing-header mx-auto text-center mt-3 mb-5">
            <h1 class="display-5">Últimas postagens</h1>
        </div>
        <div class="carousel">
            @foreach($posts as $post)
            <div class="alto col-lg-12 mb-2">
                <div class="p-1 text-center text-white rounded-top" style="background-color: #2BBBAD;">
                    {{$post->reportType->name}}
                </div>
                <div class="card mb-3 shadow rounded-bottom border-0">
                    <div class="hoverzoom">
                        <img src="{{ asset('storage/img/posts/' . $post->image)}}" alt="..." class="card-img-top">
                        <div class="retina text-right">
                            <button type="submit" class="btn btn-light">icone</button>
                        </div>
                    </div>
                    <div class="row no-gutters px-3 pb-3">
                        <div class="card-body">
                            <a class="card-title h6" href="{{route('subscriber.posts.show' , $post->id)}}">{{$post->title}}</a>
                        </div>    
                        <div class="position-profile">
                            <a href="#"><img class="rounded-circle abs" src="{{ asset('storage/img/profiles/' . $post->author->image)}}" width="40" height="40"></a>
                        </div>  
                        <div class="position-people">
                            <small class="text-muted">Por <a href="{{route('subscriber.publishers.show', $post->author->id)}}">{{$post->author->name}}</a></small>
                        </div>
                        <div class="position-date-time">
                            <small class="text-muted">Em {{date('d/m/Y', strtotime($post->created_at))}}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif   
    </div>
@endsection
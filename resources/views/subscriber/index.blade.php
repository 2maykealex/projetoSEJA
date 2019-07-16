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
                <div class="card my-3 shadow rounded">
                    <div class="text-center btn-success">
                        {{$post->reportType->name}}
                    </div>
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

        <!-- Slider de eventos-->
        <!--@if (!$events->isEmpty())
        <div class="pricing-header py-4 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-5 mt-5 mb-3">Últimos Eventos</h1>
        </div>
        <div class="carousel">
            @foreach($events as $event)
            <div class="alto col-lg-12 mb-2">
                <div class="card my-3 shadow rounded">
                    <div class="hoverzoom">
                        <img src="{{ asset('storage/img/events/' . $event->image)}}" alt="..." class="card-img-top">
                        <div class="retina text-right">
                            <button type="submit" class="btn btn-light">icone</button>
                        </div>
                    </div>
                    <div class="row no-gutters px-3 pb-3">
                        <div class="card-body">
                            <a class="card-title h6" href="#">{{$event->title}}</a>
                        </div>    
                        <div class="position-profile">
                            <a href="#"><img class="rounded-circle abs" src="{{ asset('storage/img/profiles/' . $event->author->image)}}" width="40" height="40"></a>
                        </div>  
                        <div class="position-people">
                            <small class="text-muted">Por <a href="{{route('subscriber.publishers.show', $event->author->id)}}">{{$event->author->name}}</a></small>
                        </div>
                        <div class="position-date-time">
                            <small class="text-muted">Em {{date('d/m/Y', strtotime($event->created_at))}}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif-->

        
    </div>

    
                <!--<div class="alto col-lg-12 mb-2">
                    <div class="card my-3 shadow rounded">
                        <div class="hoverzoom">
                            <img src="" alt="..." class="card-img-top">
                            <div class="retina text-right">
                                <button type="submit" class="btn btn-light">icone</button>
                            </div>
                        </div>
                        <div class="row no-gutters px-3 pb-3">
                            <div class="card-body">
                                <a class="card-title h6" href="#"></a>
                            </div>    
                            <div class="position-profile">
                                <a href="#"><img class="rounded-circle abs" src="" width="40" height="40"></a>
                            </div>  
                            <div class="position-people">
                                <small class="text-muted">Por <a href="#"></a></small>
                            </div>
                            <div class="position-date-time">
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>-->
@endsection
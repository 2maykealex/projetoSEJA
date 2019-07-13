@extends('templates.default_subscriber')

@section('title')
	EVENTOS
@endsection

@section('content')
	
    <div class="container">      
        <div class="pricing-header text-center mt-3 mb-5 mx-auto">
            <h1 class="display-5">Eventos</h1>
        </div>
        @if (!$events->isEmpty())
            @foreach($events as $event)
                <div class="border-bottom">
                    <div class="row no-gutters my-4">
                        <div class="col-md-5">
                            <img src="{{ asset('storage/img/events/' . $event->image)}}" class="card-img shadow my-1" alt="...">
                        </div>
                        <div class="col-md-7 pl-3">
                            <div class="card-body">
                                <div class="card-title">
                                    <a class="h5" href="{{route('subscriber.congresses.show' , $event->id)}}">{{$event->title}}</a>
                                </div>
                                <small class="text-muted mb-2">Por <a href="#">{{$event->author->name}}</a> em {{date('d/m/Y', strtotime($event->created_at))}}</small>
                                <p class="card-text text-left">{{$event->text}}</p>                              
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
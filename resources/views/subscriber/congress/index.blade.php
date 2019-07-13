@extends('templates.default_subscriber')

@section('title')
	CONGRESSOS
@endsection

@section('content')
	<!-- Conteudo com imagem e titulo -->
    <div class="container">      
        <div class="pricing-header text-center mt-3 mb-5 mx-auto">
            <h1 class="display-5">Congressos</h1>
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

    <!-- Modal do conteudo com todos os dados-->
    <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Modal extra grande</button>
    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                
            </div>
        </div>
    </div>
@endsection
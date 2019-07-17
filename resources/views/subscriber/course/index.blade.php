@extends('templates.default_subscriber')

@section('title')
	CURSOS
@endsection

@section('content')

	<div class="container">
        <div class="pricing-header text-center mt-3 mb-5 mx-auto">
            <h1 class="display-5">Cursos</h1>
        </div>
        @if (!$courses->isEmpty())
            @foreach($courses as $course)
                <div class="border-bottom">
                    <div class="row no-gutters my-4">
                        <div class="col-md-3">
                            <a href="curso.html"><img src="../image/lobos.jpg" class="card-img shadow my-1" alt="..."></a>
                        </div>
                        <div class="col-md-7 pl-3">
                            <div class="card-body">
                                <div class="card-title">
                                    <a class="h5" href="curso.html">Lobos cinzentos são lindos e ferozes</a>
                                </div>
                                <p class="card-text text-left">Eu tenho medo de lobos porque são animais selvagens, porem são lindos</p>   
                                <small class="text-muted mb-2">Por <a href="#">Mateus</a> em 10/10/2010</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
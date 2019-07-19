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
                            <img src="{{ asset('storage/img/courses/' . $course->image)}}" class="card-img shadow my-1" alt="...">
                        </div>
                        <div class="col-md-7 pl-3">
                            <div class="card-body">
                                <div class="card-title">
                                    <a class="h5" href="{{route('subscriber.courses.show' , $course->id)}}">{{$course->name}}</a>
                                </div>
                                <p class="card-text text-left">{{$course->summary}}</p>   
                                <small class="text-muted">Ministrado por <a href="#">Falta colocar</a> em {{date('d/m/Y', strtotime($course->created_at))}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
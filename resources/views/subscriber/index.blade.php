@extends('templates.default_subscriber')

@section('title')
	Home
@endsection

@section('content')

	<div class="col-md-10 text-center">
		<h1>BEM VINDO(A) {{explode(" ", auth()->user()->name)[0] }}</h1>
	</div>

	@if (!$posts->isEmpty())
		{{"POSTS"}}
		<div class="container-fluid">
			<div class="carousel carousel-us">
				@foreach ($posts as $post)
					<div class="col-md-12">
						<div class="card text-white imgzoom ">
							<img class="card-img mb-3 " src="{{ asset('storage/img/profiles/' . $post->author->image)}}" alt="Card image" height="350">
							<div class="card-img-overlay">
								<h5 class="card-title">{{$post->author->name}}</h5>
								<p class="position-people">{{$post->summary}}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	@endif

	@if (!$events->isEmpty())
		{{"EVENTOS - CONGRESSOS - CURSOS"}}
		<div class="container-fluid">
			<div class="carousel carousel-us">
				@foreach ($events as $event)
					<div class="col-md-12">
						<div class="card text-white imgzoom ">
							<img class="card-img mb-3 " src="{{ asset('storage/img/profiles/' . $event->author->image)}}" alt="Card image" height="350">
							<div class="card-img-overlay">
								<h5>{{$event->type->name}}</h5>
								<h5 class="card-title">{{$event->author->name}}</h5>
								<p class="position-people">{{$event->summary}}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	@endif
@endsection
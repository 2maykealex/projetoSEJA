@extends('templates.default_subscriber')

@section('title')
	Home
@endsection

@section('content')



	@if (!$posts->isEmpty())
        <div class="container-fluid" id="publicacao">
            <div class="pricing-header py-4 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-5 mt-5 mb-3">Últimas postagens</h1>
            </div>

        
            <div class="carousel carousel-content">
                @foreach($posts as $post)
                <div class="alto col-lg-12 mb-2">
                    <div class="card my-3 shadow rounded">
                        <div class="hoverzoom">
                            <img src="{{ asset('storage/img/posts/' . $post->image)}}" alt="..." class="card-img-top">
                            <div class="retina text-right">
                                <button type="submit" class="btn btn-light">icone</button>
                            </div>
                        </div>
                        <div class="row no-gutters px-3 pb-3">
                            <div class="card-body">
                                <a class="card-title h6" href="#">{{$post->title}}</a>
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
                <div class="alto col-lg-12 mb-2">
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
                </div>
                <div class="alto col-lg-12 mb-2">
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
                </div>
                <div class="alto col-lg-12 mb-2">
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
                </div>
                <div class="alto col-lg-12 mb-2">
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
                </div>
            </div>
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
@extends('templates.default')

@section('styles')

    html, body {
        background: url("{{url('storage/img/astro.jpg')}}") no-repeat center center fixed;
        font-family: 'Nunito', sans-serif;
        height: 100%;
        margin: 0;
        color: white;
        background-size: cover;
    }
      
@endsection
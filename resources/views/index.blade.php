@extends('templates.default')

@section('title')
    
@endsection

@section('styles')
    <style>
        html, body {
            background-color: black ;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            /* color: #636b6f; */
            color: white;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        h1{
            color: white;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style> 
@endsection

@section('content')
    <div class="content">
        <div class="flex-center position-ref full-height">
            <div class="top-right links">        
                <a href="#">Início</a>
                <a href="#">Login</a>    
                <a href="#">Inscreva-se</a>
            </div>        

            <div class="title m-b-md">
                <h1>PROJETO SEJA</h1> Teste
            </div>

        </div>
    </div>  
    
@endsection
    
@extends('templates.default')

@section('title')
    
@endsection

@section('styles')

<style>
        
        html, body {
            background: url("{{url('storage/img/astro.jpg')}}") no-repeat center center fixed;
            font-family: 'Nunito', sans-serif;
            height: 100%;
            margin: 0;
            color: white;

        }
        #fundo{
            display: table;
            height: 100vh;
            position: relative;
            width : 100%;
            background-size: cover;
            background-color:rgba(0,0,0,.7)!important;


        }
        .espaco{
            height: 370px;
            width: 300px;
        }
    </style> 

@endsection

@section('content')
	
    <div id="fundo">
        <div class="container mt-5">
            <div class="d-flex justify-content-center">
                <div class="espaco">
                    <form action="{{route('site.login.validate')}}" method="post" class="form-signin">
                            <h1 class="h3 mt-5 font-weight-normal text-center">Login</h1>
                        {!! csrf_field()!!}                     
                            <!--<label for="">E-mail:</label>-->
                            <input type="email" name="email" id="email" placeholder="E-mail" class="form-control mt-4" required>     
                            <!--<label for="">Senha:</label>-->
                            <input type="password" id="password" name="password" minlength="6" placeholder="Senha" onchange="validaCaracter(this)" class="form-control mt-3" required>
                            <div class="checkbox mt-3">
                                <label>
                                    <input type="checkbox" value="remember-me"> Lembre-se de mim
                                </label>
                            </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary btn-block mt-3">Entrar</button>
                            <!--<a href="{{URL::previous()}}">
                                <button type="button" class="btn btn-warning">Voltar</button>
                            </a>-->
                        </div>
                    </form>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Não tem conta?<a href="#">Inscreva-se</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#">Recuperar senha?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
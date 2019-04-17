@extends('templates.default')

@section('title')
    
@endsection

@section('scripts')
    
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
        /*esse id dá para transformar em uma classe*/
        #fundo{
            display: table;
            height: 100vh;
            position: relative;
            width : 100%;
            background-size: cover;
            background-color: rgba(3,169,244,.3) !important;
        }
    </style> 
@endsection

@section('content')
    <div id="fundo">
        <div class="container mt-5">
            <div class="d-flex justify-content-center">
                <div class="col-md-4">
                    <form action="{{route('site.login.validate')}}" method="post" class="form-signin">
                    {!! csrf_field()!!}
                        <span class="d-block h3 text-primary-light text-center">Entre</span>
                        <input type="email" name="email" id="email" placeholder="E-mail" class="form-control mt-4" required>
                        <input type="password" id="password" name="password" minlength="6" placeholder="Senha" onchange="validaCaracter(this)" class="form-control mt-3" required>
                        <div class="row">
                            <div class="checkbox mt-3 col-md-6">
                                <label>
                                    <input type="checkbox" value="remember-me"> Lembre-se de mim
                                </label>
                            </div>
                            <div class="col-md-6 mt-3 text-md-right">
                                <a class="text-white" href="#">Recuperar senha?</a>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary btn-block mt-3">Entrar</button>            
                        </div>
                    </form>
                    <div class="pt-4 text-xs-center text-center">
                        <a class="text-white" href="{{route('subscribe')}}">Registrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

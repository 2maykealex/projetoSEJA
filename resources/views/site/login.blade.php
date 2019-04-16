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
        #fundo{
            display: table;
            height: 100vh;
            position: relative;
            width : 100%;
            background-size: cover;
            background-color: rgba(3,169,244,.3) !important;


        }
        .espaco{
            height: 370px;
            width: 350px;
        }
    </style> 
@endsection

@section('content')
    <div id="fundo">
        <div class="container mt-5">
            <div class="d-flex justify-content-center">
                <div class="espaco">

<!--<div class="content">
    
    <div class="flex-center position-ref full-height">

        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                </div>

                <div class="col-md-4 mt-5">
                    <div class="content text-center mb-5">
                        <h2>Acesso ao sistema:</h2>
                    </div>-->
                    

                    <form action="{{route('site.login.validate')}}" method="post" class="form-signin">
                    {!! csrf_field()!!}
                            <span class="d-block h3 text-primary-light text-center">Entre</span>
                    
                        
                            <!--<label for="">E-mail:</label>-->
                            <input type="email" name="email" id="email" placeholder="E-mail" class="form-control mt-4" required>
                        

                        
                            <!--<label for="">Senha:</label>-->
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
                            <!--<div class="d-flex justify-content-center">
                                <a href="#">Recuperar senha?</a>
                            </div>-->
                            

                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary btn-block mt-3">Entrar</button>
                            
                            <!--<a href="{{URL::previous()}}">
                                <button type="button" class="btn btn-warning">Voltar</button>
                            </a>-->
                        </div>
                    </form>

                    <!--<div class="divider h4 my-3 text-center">
                        <span class="text-muted">ou</span>
                    </div>

                    <form>            
                    <div id="socialLoginList" class="row">
                        <div class="col-lg-6 py-1">
                            <button class="btn btn-block btn-primary" type="submit" name="provider">
                                <i class="mr-1"></i> Facebook
                            </button>
                        </div>
                        <div class="col-lg-6 py-1">
                            <button class="btn btn-block btn-danger" type="submit" name="provider">
                                <i class="mr-1"></i> Google
                            </button>
                        </div>
                        <div class="col-lg-6 py-1">
                            <button class="btn btn-block btn-light" type="submit" name="provider">
                                <i class="mr-1"></i> Instagran
                            </button>
                        </div>
                        <div class="col-lg-6 py-1">
                            <button class="btn btn-block btn-info" type="submit" name="provider">
                                <i class="mr-1"></i> Twitter
                            </button>
                        </div>
                    </div>
                </form>-->
                <div class="pt-4 text-xs-center text-center">
                    <a class="text-white" href="{{route('subscribe')}}">Registrar</a>
                </div>
            </div>
        </div>

    </div>
@endsection

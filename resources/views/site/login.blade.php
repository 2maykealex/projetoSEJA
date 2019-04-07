@extends('templates.default')

@section('title')
    
@endsection

@section('scripts')
    function ToValidPassword(){ 

        password        = document.getElementById('password').value;
        confirmPassword = document.getElementById('confirmPassword').value;
        
        if (password != confirmPassword){
            alert("As senhas não conferem!");

            document.getElementById('password').value= "";
            document.getElementById('confirmPassword').value = "";
            
            document.getElementById('password').focus();
            return false;
        }
    }
    
@endsection

@section('styles')
    <style>
        html, body {
            background-color: white ;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
/* 
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
            color: black;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        h1{
            color: black;
        }
        
        .m-b-md {
            margin-bottom: 30px;
        } */
    </style> 
@endsection

@section('content')
    
    <div class="content">
        
        <div class="flex-center position-ref full-height">
    
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                    </div>

                    <div class="col-md-4 mt-5">
                        <div class="row mb-5">
                            <h2>Acesso ao sistema:</h2>
                        </div>

                        <form action="{{route('site.login')}}" method="post" class="form">
                            {!! csrf_field()!!}
                            <div class="form-group">
                                <label for="">E-mail:</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <div class="form-group mt-2">
                                <label for="">Senha:</label>
                                <input type="password" id="password" name="password" minlength="6" placeholder="senha" onchange="validaCaracter(this)" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Fazer login</button>
                                <button type="button" class="btn btn-warning">Cancelar</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

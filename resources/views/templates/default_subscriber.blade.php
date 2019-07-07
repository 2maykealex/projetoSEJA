<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/subscriber_style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        
        
    .dropdown-menu-right {
        right: 0;
        left: auto;
    }
    .navbar-expand {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }
    </style>

</head>
<body>
    
    <nav class="navbar navbar-expand shadow">
        <!--label com um botão que liga com o input-->  
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <label for="bt_menu">&#9776;</label>
            </li>
        </ul>
        
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="#"><img class="rounded-circle abs" src="3" width="40" height="40"></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Nome
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">item 1</a>
                    <a class="dropdown-item" href="#">item 2</a>
                    <a class="dropdown-item" href="#">item 3</a>
                </div>
            </li>
        </ul> 
        
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="flex-column">
                <!--Input com checkbox para verificar sidebar--> 
                <input type="checkbox" id="bt_menu">
                <div class="sidebar shadow">
                    <div class="sidebar-sticky">
                        <form class="form-inline mt-3 mb-4 ">
                            <input class="form-nav mr-sm-2 ml-3" type="search" placeholder="Pesquisar" aria-label="Search">
                        </form>

                        <h6 class="font-heading text-muted px-2 mt-3 pt-4 border-top">Painel Inicial</h6>
                        <ul class="mt-0">
                            <li>
                                <a class="pl-3" href="#">Início</a>
                            </li>
                        </ul>
              
                        <h6 class="font-heading text-muted px-2 mt-3">Conteúdo</h6>
                        <ul class="mt-0">         
                            <li>
                                <a href="#" class=" pl-3">Postagens</a>
                            </li>
                            <li>
                                <a href="#" class="pl-3">Eventos</a>
                            </li>
                            <li>
                                <a href="#" class="pl-3">Congressos</a>
                            </li>
                            <li>
                                <a href="#" class="pl-3">Cursos</a>
                            </li>
                        </ul>

                        <h6 class="font-heading text-muted px-2 mt-3">FINANCEIRO</h6>
                        <ul class="mt-0 ">
                            <li>
                                <a href="#" class="pl-3">Cartão de Crédito</a>
                            </li>
                            <li>
                                <a href="#" class="pl-3">Histórico de pagamentos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col" style="padding: 0">        
                <p class="m-5">Há muitos casos de uso para essa propriedade. O mais comum é quando uma caixa de seleção está disponível e "possui" um número de subopções (que também são caixas de seleção). Se todas as subopções estiverem marcadas, a caixa de seleção proprietária também será marcada e, se todas elas estiverem desmarcadas, a caixa de seleção proprietária será desmarcada. Se uma ou mais das subopções tiverem um estado diferente das outras, a caixa de seleção proprietária está no estado indeterminado.</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        
    </script>
</body>
</html>
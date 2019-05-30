<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        #inicio {
            background: url("{{url('storage/img/astro.jpg')}}") no-repeat center center fixed;
            display: table;
            height: 100%;
            position: relative;
            width : 100%;
            background-size: cover;
            }
        .fundo-escuro{
            background-color: rgba(0,0,0,.3) !important;
        }

        /* NAVBAR - links do menu */
        .navbar.compressed {
            padding-top: 10px;
            padding-bottom: 10px;
            background: white;
            color: black;
           
        }
        .navbar-brand.changecolorlogo {
            height: auto;
            filter: brightness(0) invert(1);

        }
        
        .navbar-nav.changecolormenu a,
        .navbar-nav.changecolormenu a.active {
            color: black !important;
        }

        .navbar-nav.changecolormenu li a:hover,
        .navbar-nav.changecolormenu li.active a {
            color: silver !important;
            background-color: transparent;
        }
        .h6{
            margin: 0 0 0;
        }

    </style>

</head>
<body>
    @include('includes.alerts')

    <div class="content">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(window).on('scroll', function() {
                if ($(window).scrollTop() >= 20) {
                    $('.navbar').addClass('compressed');
                    $('.navbar-nav').addClass('changecolormenu');
                    $('.navbar-brand').addClass('changecolorlogo');
                    
                } else {
                    $('.navbar').removeClass('compressed');
                    $('.navbar-nav').removeClass('changecolormenu');
                    $('.navbar-brand').removeClass('changecolorlogo');
                }
            });
        });
    </script>

</body>
</html>
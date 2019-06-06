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

        /* CARD */
        .card:hover{
            -webkit-box-shadow: -1px 1px 15px -4px rgba(0,0,0,0.75);
            -moz-box-shadow: -1px 1px 15px -4px rgba(0,0,0,0.75);
            box-shadow: -1px 1px 15px -4px rgba(0,0,0,0.75);
        }
        .hoverzoom {
            position: relative;
            overflow: hidden;
        }        
        .hoverzoom .retina{
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0;    
            background: none repeat scroll 0 0 rgba(0, 0, 0, 0.5);    

        }
        .card:hover .hoverzoom .retina {
            opacity: 1;
            box-shadow: inset 0 0 100px 50px rgba(0,0,0,.5);
            
        }

    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
    @include('includes.alerts')

    <div class="content">
        @yield('content')
    </div>

   
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

        $(document).ready(function(){
                $('.col-lg-3').hover(
                    function(){
                        $(this).animate({
                            marginTop: "-=1%",
                        },200);
                    },
                    function(){
                        $(this).animate({
                            marginTop: "0%"
                        },200);
                    }
                );
            });
    </script>

</body>
</html>
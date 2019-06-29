<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Links Slick-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">

    <style>

        #inicio {
            /*background: url("{{url('https://www.youtube.com/watch?v=WU944Mgs4E4')}}") no-repeat center center fixed;*/
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
        .navbar-dark .navbar-nav .nav-link:hover {
            color: white;
        }
        .navbar-dark .navbar-toggler {
            background-color: darkcyan;
        }


        /* CARD */
        .carousel .card{
            height: 18em;
        }
        .hoverzoom {
            position: relative;
            overflow: hidden;
        }        
        .card-body{
            padding: 12px;
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
            background: none repeat scroll 0 0 ;   
        }
        .card-img-top{
            height: 10rem;
        }
        .card:hover .hoverzoom .retina {
            opacity: 1;
            box-shadow: inset 0 0 100px 50px  rgba(0,0,0,0.7);       
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;  
        }


        /*Carousel*/
        .slick-arrow {
            color: #555;
            position: absolute;
            width: 52px;
            height: 52px;
            background: #fff;
            border-radius: 100%;
            box-shadow: 0 4px 12px rgba(0,0,0,.45);
            z-index: 3;

        }
        .slick-arrow:hover{
            background: #f5f4f4;

        }
        .slick-next{
            right: 10px;
        }
        .slick-prev{
            left: 10px;
        }
        .slick-next::before, .slick-prev::before{
            font-family: 'Franklin Gothic Medium', Arial, sans-serif;
        }
        .slick-next::before{
            content: ">";
            color: black;
        }
        .slick-prev::before {
            content: "<";
            color: black;
        }

        .carousel-button {
            color: #555;
            position: absolute;
            top: 32px;
            width: 52px;
            height: 52px;
            background: #fff;
            border-radius: 100%;
            box-shadow: 0 4px 12px rgba(0,0,0,.45);
            z-index: 3;
            text-align: center;
            transition: all .3s ease;
        }
        .carousel-button-next{
            right: 10px;
        }
        .carousel-button-prev{
            right: 10px;
        }


        /*tratando video*/
        #inicio {
            position: relative;
            background-color: black;
            height: 100vh;
            min-height: 25rem;
            width: 100%;
            overflow: hidden;
        }

        #inicio video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 0;
            -ms-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        #inicio .container {
            position: relative;
            z-index: 2;
        }

        #inicio .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: black;
            opacity: 0.5;
            z-index: 1;
        }

        @media (pointer: coarse) and (hover: none) {
            #inicio {
                background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
            }
            #inicio video {
                display: none;
            }
        }

        /*Sobre nós*/
        .row .card {
            border:0px;
        }
        .imgzoom {
            position: relative;
            overflow: hidden;
            height: 15em;
            margin-top: 15px;
        }
        .imgzoom > img {
            width: 100%;
            height: 15em; 
            border-radius: 2px;
            -webkit-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
                -moz-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
                 -ms-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
                  -o-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
                     transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
        }
        .imgzoom:hover > img {
            -webkit-transform: scale(1.5);
               -moz-transform: scale(1.5);
                -ms-transform: scale(1.5);
                 -o-transform: scale(1.5);
                    transform: scale(1.5);
            opacity: 0.9;
        }

        /* CARDS REFERENTES A PLANOS */
        .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0,0,0,0); 
            border-bottom: 1px solid rgba(0,0,0,0); 
        }
        .card-deck .card{
            color: black;
        }
        .card-deck .card:hover{
            color: white;  
            background-color: #17a2b8;
            border-color: #f8f9fa; 
            -webkit-transition: 0.5s ease-in; 
            -moz-transition: 0.3s ease-in;
            -o-transition: 0.3s ease-in;
            transition: 0.3s ease-in;
        }
        .card-deck .card:hover .btn-info {
            color: #17a2b8;
            background-color: #f8f9fa;
            border: #f8f9fa;
        }
        .text-cinza{
            color: #6c757d;
        }
        .card-deck .card:hover .text-cinza{
            color: white;
            -webkit-transition: 0.5s ease-in; 
            -moz-transition: 0.3s ease-in;
            -o-transition: 0.3s ease-in;
            transition: 0.3s ease-in;
        }

        .card-deck .card .btn-info:hover{
            -webkit-transform: scale(1.05);
            -ms-transform: scale(1.05);
            transform: scale(1.05);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }
        .border-bottom-my{
            width: 70px;
            border-bottom: 1px solid ;
        }

        .font-weight-normal{
            margin: 0;
        }

        /*Card referente a planos barra de navegação*/
        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #495057;
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #dee2e6;
        }
        .nav-pills .nav-link {
            border: 1px solid transparent;
            border-radius: 0px ;
        }
        .nav-pills .nav-link:hover {
            border-radius: 0px;
            color: #495057;
            border-color: #dee2e6 #dee2e6 #dee2e6;
        }
        .nav-link {
            color: black;
        }

        /* Events */
        .position-profile{
            position: absolute;
            width: 40px;
            height: 40px;
            bottom: 10px;
            left: 10px;
        }
        .position-people{
            position: absolute;
            width:200px;
            height: 33px;
            bottom: 10px;
            left: 60px;
        }
        .position-date-time{
            position: absolute;
            width:100px;
            height: 20px;
            bottom: 10px;
            right: 0px;
        }
        .btn-danger:hover{
            -webkit-transform: scale(1.05);
            -ms-transform: scale(1.05);
            transform: scale(1.05);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }


        /* Modal de login e subscriber*/
        input[type=checkbox], input[type=radio] {
            top: .25rem;
            left: -1.5rem;
            width: 1rem;
            height: 1rem;
            content: "";
            background: no-repeat black;
        }

        .modal-header .nav-pills .nav-link.active, 
        .modal-header .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #2BBBAD;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }

        .modal-header .nav-pills .nav-link:hover {
            background-color: #2BBBAD;
            color:white;
        }

        .modal-header .nav-pills .nav-link {
            border-radius: 0;
            color: black;
            width: 14rem;
        }

        .modal-header{
            border-bottom: 0;
        }

        .btn-orange{
            color: white;
            background-color: #2BBBAD;
            border-color: #2BBBAD;
        }

        .btn-orange:hover{
            color: white;
            -webkit-transform: scale(1.05);
            -ms-transform: scale(1.05);
            transform: scale(1.05);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }

    </style>

<script type="text/javascript">

    function checkMaskDocument(elemento){
        var valor = elemento.value;

        if (valor.length == 11){
            novo = valor.substring(0,3)+"."+valor.substring(3,6)+"."+valor.substring(6,9)+"-"+valor.substring(9,11);
        }else{
            valor = valor.replace("-","");
            valor = valor.replace("/","");
            valor = valor.replace(".","");
            valor = valor.replace(".","");

            if (valor.length == 14){
                novo = valor.substring(0,2)+"."+valor.substring(2,5)+"."+valor.substring(5,8)+"/"+valor.substring(8,12)+"-"+valor.substring(12,14);
            }else{
                novo = valor;
            }
        }
        elemento.value=novo;
    }

    function checkMaskTelephone(elemento){
        var valor = elemento.value;

        valor = valor.replace("-","");
        valor = valor.replace("(","");
        valor = valor.replace(") ","");
        valor = valor.replace(" ","");

        if (valor.length == 11){
            novo = "("+valor.substring(0,2)+") "+valor.substring(2,3)+""+valor.substring(3,7)+"-"+valor.substring(7,11);
        }else if (valor.length == 10){
            novo = "("+valor.substring(0,2)+") "+valor.substring(2,6)+"-"+valor.substring(6,10);
        }else{
            novo = valor;
        }

        elemento.value=novo;
    }

    function checkMaskZipCode(elemento){
        var valor = elemento.value;

        valor = valor.replace("-","");
        valor = valor.replace(".","");

        if (valor.length == 8){
            novo = valor.substring(0,2)+"."+valor.substring(2,5)+"-"+valor.substring(5,8);
        }else{
            novo = valor;
        }
        elemento.value=novo;
    }

    function listCities (idUF){
        $("#city option").remove();
        if (idUF > 0){
            url = '{{route("listCities", ['idUF'])}}';
            url = url.replace('idUF', idUF);

            var ajaxRequest = $.getJSON(url, function(data){
                element = document.getElementById('city');
                elemSelect1 = "";
                elemSelect1 += '<option selected> Selecione </option>';
                $.each(data, function(i ,obj){
                    elemSelect1 += '<option value="'+obj.id+'">'+obj.name+'</option>';
                })
                $('#city').append(elemSelect1);
            });
        }
    }
    function EnviarFormulario(){
        cpf = $("#cpf").val();
        cpf = cpf.replace("-","");
        cpf = cpf.replace("/","");
        cpf = cpf.replace(".","");
        cpf = cpf.replace(".","");
        $("#cpf").val(cpf);

        telephone = $("#telephone").val();
        telephone = telephone.replace("-","");
        telephone = telephone.replace("(","");
        telephone = telephone.replace(") ","");
        telephone = telephone.replace(" ","");
        $("#telephone").val(telephone);

        zipCode = $("#zipcode").val();
        zipCode = zipCode.replace("-","");
        zipCode = zipCode.replace(".","");
        $("#zipcode").val(zipCode);
    }
</script>
    
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>

</head>
<body>
    @include('includes.alerts')

    <div class="content">
        @yield('content')
    </div>

   
    <script type="text/javascript">

        /*Script para o Navbar*/
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




        /*Script para o Carousel*/
        $('.carousel').slick({
            infinite: false,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            centerMode: false,
            dots: true,

            responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]

        });

        /*Script para destacar o Card*/
        $(document).ready(function(){
            $('.alto').hover(
                function(){
                    $(this).animate({
                        marginTop: "-=10px",
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
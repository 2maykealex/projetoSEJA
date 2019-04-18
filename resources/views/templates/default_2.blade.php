<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        html, body {
            background: url("{{url('storage/img/astro.jpg')}}") no-repeat center center fixed;
            font-family: 'Nunito', sans-serif;
            height: 100%;
            margin: 0;
            color: white;
            background-size: cover;
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
    </script>

</head>

<body>
    <div class="content">
        @yield('content')
    </div>

    <script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
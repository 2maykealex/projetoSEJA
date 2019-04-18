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
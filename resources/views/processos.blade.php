<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            background-color: #edf2f7 ;
            font-family: 'Nunito', sans-serif;
            margin: 0;
        }
    </style>
</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="container">
        @if($processos->isEmpty())
            <h3>Não há processos para <span class="badge bg-primary">{{ $codigo }}</span>.</h3>
        @else
            <h3>Seus processos abaixo <span class="badge bg-primary">{{ $codigo }}</span> :</h3>
            <hr>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Número do Processo</th>
                        <th>Número da DI</th>
                        <th>Data da DI</th>
                        <th>Data do Desembaraço</th>
                        <th>Data da Entrega</th>
                    </tr>
                    @foreach($processos as $processo)
                    <tr>
                        <td>{{ $processo->NumeroProcesso }}</td>
                        <td>{{ $processo->NumeroDI }}</td>
                        <td>{{ date('d/m/Y', strtotime($processo->DataDI)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($processo->DataDesembaraco)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($processo->DataEntrega)) }}</td>
                    </tr>
                    @endforeach
                </table>

        @endif
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>
</html>

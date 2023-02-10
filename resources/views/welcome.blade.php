<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

<div class="container">
    <div class="row">

        @foreach ($trains as $train )
        <div class="col-12">
            
            <div class="card text-center">
                <h1>
                     Treno:{{$train->Azienda}}
                </h1>
                <h2>
                     Stazione di partenza:{{$train->Stazione_di_partenza}}
                </h2>
                <h2>
                    Partenza treno: {{$train->Orario_di_partenza}} , Orario di arrivo: {{$train->Orario_di_arrivo}}
                </h2>
                <h5>
                    Codice treno:{{$train->Codice_Treno}}
                </h5>
                <h5>
                    Numero di Carrozze:{{$train->Numero_Carrozze}}
                </h5>
                <h5>
                    {{$train->In_orario ? 'No' : 'Si'}}
                </h5>
                <h5>
                    {{$train->Cancellato ? 'No' : 'Si'}}
                </h5>
            </div>
        </div>
        @endforeach
    </div>
</div>

</body>

</html>

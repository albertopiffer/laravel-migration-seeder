<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

    <!-- Styles -->
    {{-- @vite('resources/js/app.js') --}}

</head>

<body>

    <main>
        <main>
            <div>
                @foreach ($trains as $train)
                    <ul card-trains>

                            <li>azienda: {{ $train->azienda }}</li>
                            <li>stazione_partenza: {{ $train->stazione_partenza }}</li>
                            <li>stazione_arrivo: {{ $train->stazione_arrivo }}</li>
                            <li>orario_partenza: {{ $train->orario_partenza }}</li>
                            <li>orario_arrivo: {{ $train->orario_arrivo }}</li>
                            <li>codice_treno: {{ $train->codice_treno }}</li>
                            <li>numero_carrozze: {{ $train->numero_carrozze }}</li>
                            <li>puntuale: {{ $train->puntuale }}</li>
                            <li>binario_partenza: {{ $train->binario_partenza }}</li>

                    </ul>
                @endforeach
            </div>
        </main>
    </main>

</body>

</html>
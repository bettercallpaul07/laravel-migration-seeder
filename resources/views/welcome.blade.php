<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trains</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                <h1>Treni in arrivo</h1>

                @foreach ($trains as $train)
                <div class="card">
                
                        
                    {{ $train->departure_station }}
                    -
                    {{ $train->arrival_station }}

                </div>
                @endforeach


            </div>
        </main>


    </body>
</html>

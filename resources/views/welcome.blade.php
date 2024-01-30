<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Includo gli assets con la direttiva @vite --}}
    @vite ('resources/js/app.js')
    <title>Laravel Template</title>
</head>
<body class="d-flex flex-column vh-100 justify-content-center align-items-center">
    {{-- HEADER --}}
    <header class="bg-primary text-white text-center py-3 w-100">
        <h1>TrainInfo</h1>
    </header>

    {{-- CARD CON I TRENI --}}
    <div class="container mt-5">
        <div class="row justify-content-center">
            @foreach ($trains as $train)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{ $train->image_url }}" class="card-img-top" alt="Immagine Città">
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ $train->company }} - Treno {{ $train->train_code }}</h5>
                            <p class="card-text">
                                Partenza: {{ $train->departure_station }} <br>
                                Arrivo: {{ $train->arrival_station }} <br>
                                Orario di partenza: {{ $train->departure_time }} <br>
                                Orario di arrivo: {{ $train->arrival_time }} <br>
                                Carrozze: {{ $train->carriages }} <br>
                                Stato: {{ $train->on_time ? 'In orario' : 'Ritardo' }} <br>
                                {{ $train->cancelled ? 'Cancellato' : '' }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- FOOTER --}}
    <footer class="bg-primary text-white text-center py-3 w-100">
        <p>&copy; 2024 TrainInfo. Tutti i diritti riservati.</p>
    </footer>

      
</body>

</html>
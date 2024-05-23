@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div id="homeView" class="d-flex flex-column  justify-content-between ">
        @foreach ($trains as $train)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase ">{{ $train->azienda }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Partenza: {{ $train->stazione_di_partenza }} h:
                        {{ $train->ora_di_partenza }}
                    </h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Arrivo: {{ $train->stazione_di_arrivo }} h:
                        {{ $train->ora_di_arrivo }}
                    </h6>
                    <p class="card-text">N. carrozze: {{ $train->numero_carrozze }}</p>
                    <p class="card-text">In orario: {{ $train->in_orario }}</p>
                    <p class="card-text">Cancellato: {{ $train->cancellato }}</p>
                    <div><a href="#" class="card-link">Dettagli</a>
                    <a href="#" class="card-link">Compra</a></div>
                    
                </div>
            </div>
        @endforeach
    </div>






</main>

@endsection
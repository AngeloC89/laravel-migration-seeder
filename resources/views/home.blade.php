@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="d-flex">
        @foreach ($trains as $train)
            <div class="card" style="width: 18rem;">
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
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        @endforeach
    </div>






</main>

@endsection
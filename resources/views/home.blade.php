@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="d-flex">
        @foreach ($trains as $train)
            <ul class="m-auto list-unstyled ">
                <li>
                    <h2>{{ $train->azienda }}</h2>
                </li>
                <li>
                    <h4>Partenza: {{ $train->stazione_di_partenza }}</h4>
                </li>
                <li>
                    <h4>Arrivo: {{ $train->stazione_di_arrivo }}</h4>
                </li>
                <li>
                    <h6>Partenza: {{ $train->ora_di_partenza }}</h6>
                </li>
                <li>
                    <h6>Arrivo: {{ $train->ora_di_arrivo }}</h6>
                </li>
                <li>Numero carrozze: {{ $train->numero_carrozze }}</li>
                <li>In orario: {{ $train->in_orario }}</li>
                <li>Cancellato: {{ $train->cancellato }}</li>
            </ul>
        @endforeach
    </div>


</main>

@endsection
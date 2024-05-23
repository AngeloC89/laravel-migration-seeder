@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="d-flex">
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
<div id="bunner">
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.fsnews.it/content/dam/fs_news/focus-2023/giugno/corporate/Frecciarossa_Red_in_Italy_apertura.jpg" class="d-block img-fluid  w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.adcgroup.it%2Fadv-express%2Fcreative-portfolio%2Fadvertising%2Fal-via-la-nuova-campagna.html&psig=AOvVaw1mZUb5PwVNsgGlDQcWFHfX&ust=1716563765635000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCNj28r-IpIYDFQAAAAAdAAAAABAE" class="d-block w-100" alt="pubblicità">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


</div>






</main>

@endsection
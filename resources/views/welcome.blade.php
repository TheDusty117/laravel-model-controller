<!-- estende il pezzo "layouts/app" ovvero la nostra maschera di layout, e ne estende l'interno con un content qui sotto -->
@extends('layouts.app')



@section('content')

<section class="content-section">
    <div class="container">
        <h3>questo e' il contenuto tramite controller</h3>

        @forelse ($movies as $movie)
        <div class="card my-4" style="width: 18rem;">
            <img src="../images/logo_film.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Titolo Ita: {{ $movie->title }}</h5>
              <h5 class="card-title">Titolo Originale: <br>{{ $movie->original_title }}</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Lingua originale: {{ $movie->nationality }}</li>
              <li class="list-group-item">Release {{ $movie->date }}</li>
            </ul>
          </div>
            {{-- <div class="col-6 pt-5">
                <h3>Titolo Ita: {{ $movie->title }}</h3>
                <h3>Titolo Originale: {{ $movie->original_title }}</h3>
                <p>Nazionalita' film: {{ $movie->nationality }}</p>
                <p>Data release: {{ $movie->date }} </p>
            </div> --}}
        @empty

        @endforelse

    </div>
</section>

@endsection



@section('content')

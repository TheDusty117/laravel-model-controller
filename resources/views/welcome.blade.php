<!-- estende il pezzo "layouts/app" ovvero la nostra maschera di layout, e ne estende l'interno con un content qui sotto -->
@extends('layouts.app')



@section('content')

<section class="content-section">
    <div class="container">
        <h3>questo e' il contenuto tramite controller</h3>

        @forelse ($movies as $movie)
            <div class="col-6 pt-5">
                <h3>Titolo Ita: {{ $movie->title }}</h3>
                <h3>Titolo Originale: {{ $movie->original_title }}</h3>
                <p>Nazionalita' film: {{ $movie->nationality }}</p>
                <p>Data release: {{ $movie->date }} </p>
            </div>
        @empty

        @endforelse

    </div>
</section>

@endsection



@section('content')

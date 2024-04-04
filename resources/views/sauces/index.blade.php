@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>The Sauces</h1>
        <div class="row">
            @foreach ($sauces as $sauce)
            <div class="col-md-4 mb-4">
                <div class="card h-100"> <!-- Utilisez la classe h-100 pour forcer la carte à remplir la hauteur -->
                    <img src="{{ $sauce->imageUrl }}" alt="{{ $sauce->name }}" class="card-img-top">
                    <div class="card-body d-flex flex-column"> <!-- Utilisez d-flex et flex-column pour que le contenu de la carte se comporte correctement -->
                        <h2 class="card-title">{{ $sauce->name }}</h2>
                        <p class="card-text">Heat : {{ $sauce->heat }} /10</p>
                        <a href="{{ route('sauces.show', ['id' => $sauce->id]) }}" class="btn btn-primary mt-auto" type="button">Plus d'infos</a> <!-- Utilisez mt-auto pour aligner le bouton en bas -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
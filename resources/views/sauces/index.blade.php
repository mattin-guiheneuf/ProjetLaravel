@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Nos Sauces</h1>
        <div class="row">
            @foreach ($sauces as $sauce)
            <div class="">
                <div class="carte">
                    <img src="{{ $sauce->imageUrl }}" alt="{{ $sauce->name }}" class="carte-img">
                    <div class="carte-infos">
                        <h2 class="carte-titre">{{ $sauce->name }}</h2>
                        <p class="carte-piquant">Heat : {{ $sauce->heat }} /10</p>
                        <a href="{{ route('sauces.show', ['id' => $sauce->id]) }}" class="btn-details" type="button">Plus d'infos</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $sauce->name }}</h2>
        <img src="{{ $sauce->imageUrl }}" alt="{{ $sauce->name }}">
        <p><strong>Description : </strong>{{ $sauce->description }}</p>
        <p><strong>Heat : </strong>{{ $sauce->heat }}</p>
        <p><strong>Main pepper : </strong>{{ $sauce->mainPepper }}</p>
        <p><strong>Manufacturer : </strong>{{ $sauce->manufacturer }}</p>
        <p><strong>Likes : </strong>{{ $sauce->likes }}</p>
        <p><strong>Dislikes : </strong>{{ $sauce->dislikes }}</p>
        @if(Auth::check())
        @if(Auth::user()->id == $sauce->userId)
        <a href="{{ route('sauces.edit', ['id' => $sauce->id]) }}" method="POST"></a>
        <button>Supprimer la sauce</button>
        @endif
        @endif
    </div>
@endsection
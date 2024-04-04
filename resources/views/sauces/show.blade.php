@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">{{ $sauce->name }}</h2>
                        <form action="{{ route('sauces.like', ['id' => $sauce->id]) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-success mr-2">Like</button>
                        </form>
                        <form action="{{ route('sauces.dislike', ['id' => $sauce->id]) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger">Dislike</button>
                        </form>
                    </div>
                    <div class="card-body">
                        <img src="{{ $sauce->imageUrl }}" alt="{{ $sauce->name }}" class="img-fluid mb-3">
                        <p><strong>Description :</strong> {{ $sauce->description }}</p>
                        <p><strong>Heat :</strong> {{ $sauce->heat }}</p>
                        <p><strong>Main pepper :</strong> {{ $sauce->mainPepper }}</p>
                        <p><strong>Manufacturer :</strong> {{ $sauce->manufacturer }}</p>
                        <p><strong>Likes :</strong> {{ $sauce->likes }}</p>
                        <p><strong>Dislikes :</strong> {{ $sauce->dislikes }}</p>
                    </div>
                    @if(Auth::check() && Auth::user()->id == $sauce->userId)
                        <div class="card-footer">
                            <a href="{{ route('sauces.edit', ['id' => $sauce->id]) }}" class="btn btn-primary mr-2">Modifier la sauce</a>
                            <form action="{{ route('sauces.destroy', ['id' => $sauce->id]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette sauce ?')">Supprimer la sauce</button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

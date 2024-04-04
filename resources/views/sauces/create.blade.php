@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Ajouter une nouvelle sauce</h1>
        <form action="{{ route('sauces.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nom de la sauce :</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Saisissez un nom">
            </div>
            <div class="mb-3">
                <label for="mainPepper" class="form-label">Piment principal :</label>
                <input type="text" class="form-control" name="mainPepper" id="mainPepper" placeholder="Saisissez le piment principal">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description de la sauce :</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Saisissez sa description">
            </div>
            <div class="mb-3">
                <label for="heat" class="form-label">Force de la sauce :</label>
                <input type="text" class="form-control" name="heat" id="heat" placeholder="Saisissez sa force">
            </div>
            <div class="mb-3">
                <label for="manufacturer" class="form-label">Fabriquant :</label>
                <input type="text" class="form-control" name="manufacturer" id="manufacturer" placeholder="Saisissez le fabriquant">
            </div>
            <div class="mb-3">
                <label for="imageUrl" class="form-label">Image :</label>
                <input type="text" class="form-control" name="imageUrl" id="imageUrl" placeholder="Saisissez le lien vers l'image">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Valider votre sauce</button>
            </div>
        </form>
    </div>
@endsection
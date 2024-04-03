@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ajouter une nouvelle sauce</h1>
        <form action="{{ route('sauces.store') }}" method="POST">
            @csrf
            <div class="">
                <label for="name">Nom de la sauce : </label>
                <input type="text" name="name" id="name" placeholder="Saisissez un nom">
            </div>
            <div class="">
                <label for="mainPepper">Piment principal : </label>
                <input type="text" name="mainPepper" id="mainPepper" placeholder="Saisissez le piment principal">
            </div>
            <div class="">
                <label for="description">Description de la sauce : </label>
                <input type="text" name="description" id="description" placeholder="Saisissez sa description">
            </div>
            <div class="">
                <label for="heat">Force de la sauce : </label>
                <input type="text" name="heat" id="heat" placeholder="Saisissez sa force">
            </div>
            <div class="">
                <label for="manufacturer">Fabriquant : </label>
                <input type="text" name="manufacturer" id="manufacturer" placeholder="Saisissez le fabriquant">
            </div>
            <div class="">
                <label for="imageUrl">Image : </label>
                <input type="text" name="imageUrl" id="imageUrl" placeholder="Saisissez le lien vers l'image">
            </div>
            <div class="">
                <button type="submit">Valider votre sauce</button>
            </div>
        </form>
    </div>
@endsection
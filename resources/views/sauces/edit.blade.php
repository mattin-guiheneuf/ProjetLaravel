@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header">Modifier la sauce {{ $sauce->name }}</h2>

                <div class="card-body">
                    <form action="{{ route('sauces.update', ['id' => $sauce->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Nom de la sauce :</label>
                            <input type="text" name="name" class="form-control" value="{{ $sauce->name }}" id="name">
                        </div>

                        <div class="form-group">
                            <label for="description">Description de la sauce :</label>
                            <input type="text" name="description" class="form-control" value="{{ $sauce->description }}" id="description">
                        </div>

                        <div class="form-group">
                            <label for="mainPepper">Piment principal :</label>
                            <input type="text" name="mainPepper" class="form-control" value="{{ $sauce->mainPepper }}" id="main_pepper">
                        </div>

                        <div class="form-group">
                            <label for="heat">Force :</label>
                            <input type="range" name="heat" class="form-control" value="{{ $sauce->heat }}" id="heat" min = 1 max = 10>
                        </div>

                        <div class="form-group">
                            <label for="manufacturer">Fabriquant :</label>
                            <input type="text" name="manufacturer" class="form-control" value="{{ $sauce->manufacturer }}" id="manufacturer">
                        </div>

                        <div class="form-group">
                            <label for="imageUrl">Image :</label>
                            <input type="text" name="imageUrl" class="form-control" value="{{ $sauce->imageUrl }}" id="imageUrl">
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary">Valider les modifications</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
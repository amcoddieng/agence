@extends('admin.nav.nav')
@section('title', 'ajouter un Appartements')

@section('content')
<div class="container">
    <h2 class="mb-4">Ajouter un nouvel appartement</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('appartements.store') }}" method="POST">
        @csrf

        <h4>Informations du Bien</h4>
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" value="{{ old('titre') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" name="prix" id="prix" class="form-control" value="{{ old('prix') }}">
        </div>

        <div class="mb-3">
            <label for="region" class="form-label">Région</label>
            <input type="text" name="region" id="region" class="form-control" value="{{ old('region') }}">
        </div>

        <div class="mb-3">
            <label for="ville" class="form-label">Ville</label>
            <input type="text" name="ville" id="ville" class="form-control" value="{{ old('ville') }}">
        </div>

        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" name="adresse" id="adresse" class="form-control" value="{{ old('adresse') }}">
        </div>

        <div class="mb-3">
            <label for="surface" class="form-label">Surface (m²)</label>
            <input type="number" name="surface" id="surface" class="form-control" value="{{ old('surface') }}">
        </div>

        <h4>Informations de l'Appartement</h4>
        <div class="mb-3">
            <label for="nbChambre" class="form-label">Nombre de chambres</label>
            <input type="number" name="nbChambre" id="nbChambre" class="form-control" value="{{ old('nbChambre') }}">
        </div>

        <div class="mb-3">
            <label for="nbSalon" class="form-label">Nombre de salons</label>
            <input type="number" name="nbSalon" id="nbSalon" class="form-control" value="{{ old('nbSalon') }}">
        </div>

        <div class="mb-3">
            <label for="nbSalleBain" class="form-label">Nombre de salles de bain</label>
            <input type="number" name="nbSalleBain" id="nbSalleBain" class="form-control" value="{{ old('nbSalleBain') }}">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection

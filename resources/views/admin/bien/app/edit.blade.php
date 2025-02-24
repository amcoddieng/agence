@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mb-4">Modifier l'Appartement</h1>

        <form action="{{ route('admin.bien.app.update', $appartement->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Titre</label>
                <input type="text" name="titre" class="form-control" value="{{ $appartement->bien->titre }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Prix</label>
                <input type="number" name="prix" class="form-control" value="{{ $appartement->bien->prix }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Région</label>
                <input type="text" name="region" class="form-control" value="{{ $appartement->bien->region }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Ville</label>
                <input type="text" name="ville" class="form-control" value="{{ $appartement->bien->ville }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Adresse</label>
                <input type="text" name="adresse" class="form-control" value="{{ $appartement->bien->adresse }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Surface (m²)</label>
                <input type="number" name="surface" class="form-control" value="{{ $appartement->bien->surface }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Nombre de chambres</label>
                <input type="number" name="nbChambre" class="form-control" value="{{ $appartement->nbChambre }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nombre de salons</label>
                <input type="number" name="nbSalon" class="form-control" value="{{ $appartement->nbSalon }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nombre de salles de bain</label>
                <input type="number" name="nbSalleBain" class="form-control" value="{{ $appartement->nbSalleBain }}" required>
            </div>

            <button type="submit" class="btn btn-success">Mettre à jour</button>
            <a href="{{ route('admin.bien.app.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
@endsection

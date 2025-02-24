@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Détails de l'appartement</h2>

    <div class="card">
        <div class="card-header">
            <h4>{{ $appartement->bien->titre }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Description :</strong> {{ $appartement->bien->description }}</p>
            <p><strong>Prix :</strong> {{ number_format($appartement->bien->prix, 0, ',', ' ') }} FCFA</p>
            <p><strong>Région :</strong> {{ $appartement->bien->region }}</p>
            <p><strong>Ville :</strong> {{ $appartement->bien->ville }}</p>
            <p><strong>Adresse :</strong> {{ $appartement->bien->adresse }}</p>
            <p><strong>Surface :</strong> {{ $appartement->bien->surface }} m²</p>
            <p><strong>Nombre de chambres :</strong> {{ $appartement->nbChambre }}</p>
            <p><strong>Nombre de salons :</strong> {{ $appartement->nbSalon }}</p>
            <p><strong>Nombre de salles de bain :</strong> {{ $appartement->nbSalleBain }}</p>

            <a href="{{ route('appartements.index') }}" class="btn btn-secondary">Retour</a>
            <a href="{{ route('appartements.edit', $appartement->id) }}" class="btn btn-warning">Modifier</a>
        </div>
    </div>
</div>
@endsection

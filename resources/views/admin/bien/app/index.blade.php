@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Liste des appartements</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Ville</th>
                <th>Prix</th>
                <th>Surface</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appartements as $appartement)
                <tr>
                    <td>{{ $appartement->id }}</td>
                    <td>{{ $appartement->bien->titre }}</td>
                    <td>{{ $appartement->bien->ville }}</td>
                    <td>{{ number_format($appartement->bien->prix, 0, ',', ' ') }} FCFA</td>
                    <td>{{ $appartement->bien->surface }} m²</td>
                    <td>
                        <a href="{{ route('appartements.show', $appartement->id) }}" class="btn btn-sm btn-info">Voir</a>
                        <a href="{{ route('appartements.edit', $appartement->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('appartements.destroy', $appartement->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cet appartement ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@extends('admin.nav.nav')
@section('title', 'Liste des Appartements')

@section('content')
<div class="container mx-auto p-1">
    <h1 class="text-2xl font-bold mb-6">Liste des Appartements</h1>

    <table class="table-auto border-collapse w-full bg-white shadow-lg rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Titre</th>
                <th class="px-4 py-2 border">Prix (FCFA)</th>
                <th class="px-4 py-2 border">Localisation</th>
                <th class="px-4 py-2 border">Surface</th>
                <th class="px-4 py-2 border">Nb Chambres</th>
                <th class="px-4 py-2 border">Nb Salons</th>
                <th class="px-4 py-2 border">Nb Salles de Bain</th>
                <th class="px-4 py-2 border">Disponibilité</th>
                <th class="px-4 py-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appartements as $appartement)
            <tr>
                <td class="px-4 py-2 border">{{ $appartement->id }}</td>
                <td class="px-4 py-2 border">{{ $appartement->bien->titre }}</td>
                <td class="px-4 py-2 border">{{ number_format($appartement->bien->prix, 0, ',', ' ') }}</td>
                <td class="px-4 py-2 border">{{ $appartement->bien->region }}, {{ $appartement->bien->ville }}</td>
                <td class="px-4 py-2 border">{{ $appartement->bien->surface }} m²</td>
                <td class="px-4 py-2 border">{{ $appartement->nbChambre }}</td>
                <td class="px-4 py-2 border">{{ $appartement->nbSalon }}</td>
                <td class="px-4 py-2 border">{{ $appartement->nbSalleBain }}</td>
                <td class="px-4 py-2 border">{{ $appartement->bien->disponibilite ? 'Disponible' : 'Indisponible' }}</td>

                <td class="px-4 py-2 border">
                    {{-- <a href="{{ route('appartements.show', $appartement->id) }}" class="text-blue-500 hover:underline">Voir</a> --}}
                    {{-- <a href="{{ route('appartements.edit', $appartement->id) }}" class="text-green-500 hover:underline ml-2">Modifier</a> --}}
                    {{-- <form action="{{ route('appartements.destroy', $appartement->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline ml-2" onclick="return confirm('Voulez-vous supprimer cet appartement ?')">Supprimer</button>
                    </form> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $appartements->links('pagination::tailwind') }}
    </div>
</div>
@endsection

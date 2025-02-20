@extends('admin.nav.nav')
@section('title','Gestion des Biens')

@section('content')

@section('content')
<div class="container mx-auto p-1">
    <h1 class="text-2xl font-bold mb-6">Liste des Biens</h1>

    <table class="table-auto border-collapse w-full bg-white shadow-lg rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Titre</th>
                <th class="px-4 py-2 border">Prix (FCFA)</th>
                <th class="px-4 py-2 border">localisatinon</th>
                <th class="px-4 py-2 border">surface</th>
                <th class="px-4 py-2 border">Disponibilité</th>
                <th class="px-4 py-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($biens as $bien)
            <tr>
                <td class="px-4 py-2 border">{{ $bien->id }}</td>
                <td class="px-4 py-2 border">{{ $bien->titre }}</td>
                {{-- <td class="px-4 py-2 border">{{ \Illuminate\Support\Str::limit($bien->description, 50) }}</td> --}}
                <td class="px-4 py-2 border">{{ number_format($bien->prix, 0, ',', ' ') }}</td>
                <td class="px-4 py-2 border">{{ $bien->region }}
                {{ $bien->ville }}</td>
                <td class="px-4 py-2 border">{{ $bien->surface }} m²</td>
                <td class="px-4 py-2 border">{{ $bien->disponibilite ? 'Disponible' : 'Indisponible' }}</td>

                <td class="px-4 py-2 border">
                    <a href="{{ route('biens.show', $bien->id) }}" class="text-blue-500 hover:underline">Voir</a>
                    <a href="{{ route('biens.edit', $bien->id) }}" class="text-green-500 hover:underline ml-2">Modifier</a>
                    <form action="{{ route('biens.destroy', $bien->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline ml-2" onclick="return confirm('Voulez-vous supprimer ce bien ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $biens->links('pagination::tailwind') }}
    </div>
</div>

@endsection

@extends('admin.nav.nav')
@section('title','Dashbord')

@section('content')
{{-- @dd($RecentBien) --}}
      <!-- Stats Cards -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between mb-4">
            <div class="text-gray-500">Propriétés</div>
            <i data-lucide="home" class="w-5 h-5 text-blue-600"></i>
          </div>
          <div class="text-2xl font-bold">{{$nbBien}}</div>
          <div class="text-sm text-green-600 flex items-center gap-1 mt-2">
            <i data-lucide="trending-up" class="w-4 h-4"></i>
            +12% ce mois
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between mb-4">
            <div class="text-gray-500">Utilisateurs</div>
            <i data-lucide="users" class="w-5 h-5 text-blue-600"></i>
          </div>
          <div class="text-2xl font-bold">{{$nbClient}}</div>
          <div class="text-sm text-green-600 flex items-center gap-1 mt-2">
            <i data-lucide="trending-up" class="w-4 h-4"></i>
            +8% ce mois
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between mb-4">
            <div class="text-gray-500">Messages</div>
            <i data-lucide="message-square" class="w-5 h-5 text-blue-600"></i>
          </div>
          <div class="text-2xl font-bold">{{ $messageNonVu }}</div>
          <div class="text-sm text-yellow-600 flex items-center gap-1 mt-2">
            <i data-lucide="minus" class="w-4 h-4"></i>
            Stable
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between mb-4">
            <div class="text-gray-500">Revenus</div>
            <i data-lucide="euro" class="w-5 h-5 text-blue-600"></i>
          </div>
          <div class="text-2xl font-bold">84,500 €</div>
          <div class="text-sm text-green-600 flex items-center gap-1 mt-2">
            <i data-lucide="trending-up" class="w-4 h-4"></i>
            +24% ce mois
          </div>
        </div>
      </div>

      <!-- Recent Properties -->
      <div class="bg-white rounded-lg shadow mb-8">
        <div class="p-6 border-b border-gray-200">
          <h2 class="text-lg font-semibold">Propriétés Récentes</h2>
        </div>
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Propriété</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prix</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
@foreach ($RecentBien as $bien_Recent)

              <tr>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <img
                      src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=100&h=100&q=80"
                      alt="Property"
                      class="w-10 h-10 rounded-md object-cover"
                    />
                    <div>
                      <div class="font-medium"> {{ $bien_Recent->titre }} </div>
                      <div class="text-sm text-gray-500"> {{ $bien_Recent->departement }} - {{ $bien_Recent->ville }} , {{ $bien_Recent->adresse }} </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                    Disponible
                  </span>
                </td>
                <td class="px-6 py-4 font-medium"> {{ $bien_Recent->prix }} FCFA</td>
                <td class="px-6 py-4 text-gray-500"> {{ $bien_Recent->created_at }} </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <button class="text-gray-600 hover:text-blue-600">
                      <i data-lucide="edit" class="w-4 h-4"></i>
                    </button>
                    <button class="text-gray-600 hover:text-red-600">
                      <i data-lucide="trash-2" class="w-4 h-4"></i>
                    </button>
                  </div>
                </td>
              </tr>
@endforeach
            </tbody>
          </table>
        </div>
      </div>
{{-- {{ $RecentBien->links('pagination::tailwind') }} --}}

      <!-- Recent Activity -->
      <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b border-gray-200">
          <h2 class="text-lg font-semibold">Activité Récente</h2>
        </div>
        <div class="p-6">
          <div class="space-y-6">
            <div class="flex items-start gap-4">
              <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center">
                <i data-lucide="plus" class="w-4 h-4 text-blue-600"></i>
              </div>
              <div>
                <div class="font-medium">Nouvelle propriété ajoutée</div>
                <div class="text-sm text-gray-500">Villa Moderne avec Vue - Bordeaux</div>
                <div class="text-sm text-gray-400 mt-1">Il y a 2 heures</div>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center">
                <i data-lucide="user-plus" class="w-4 h-4 text-green-600"></i>
              </div>
              <div>
                <div class="font-medium">Nouvel utilisateur inscrit</div>
                <div class="text-sm text-gray-500">Marie Dubois</div>
                <div class="text-sm text-gray-400 mt-1">Il y a 4 heures</div>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="w-8 h-8 rounded-full bg-yellow-100 flex items-center justify-center">
                <i data-lucide="message-square" class="w-4 h-4 text-yellow-600"></i>
              </div>
              <div>
                <div class="font-medium">Nouveau message reçu</div>
                <div class="text-sm text-gray-500">Demande de visite - Appartement Paris</div>
                <div class="text-sm text-gray-400 mt-1">Il y a 6 heures</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

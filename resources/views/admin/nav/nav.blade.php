<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ImmoAgence - Administration</title>
    <link href="/style.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
  </head>
  <style type="text/css">
    .cont{
      /* border: solid; */
      width: 100%;
      height: 100%;
    }
  </style>
  <body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 w-64 bg-gray-900">
      <div class="flex items-center gap-2 p-6 border-b border-gray-800">
        <i data-lucide="building-2" class="w-8 h-8 text-blue-500"></i>
        <span class="text-xl font-bold text-white">ImmoAgence</span>
      </div>

      <nav class="p-4">
        <div class="space-y-6">
          <div>
            <div class="text-gray-400 text-sm font-medium mb-2">Menu Principal</div>
            <a href="{{ route('dashboard.index')}}" class="flex items-center gap-2 text-white bg-blue-600 px-3 py-2 rounded-md">
              <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
              Tableau de bord
            </a>
          </div>

          <div>
            <div class="text-gray-400 text-sm font-medium mb-2">Gestion</div>
            <div class="space-y-1">
              <a href="{{ route('biens.index')}}" class="flex items-center gap-2 text-gray-300 hover:bg-gray-800 px-3 py-2 rounded-md">
                <i data-lucide="users" class="w-5 h-5"></i>
                Proprietaires
              </a>
              <a href="" class="flex items-center gap-2 text-gray-300 hover:bg-gray-800 px-3 py-2 rounded-md">
                <i data-lucide="users" class="w-5 h-5"></i>
                Personnels
              </a>
              <a href="#" class="flex items-center gap-2 text-gray-300 hover:bg-gray-800 px-3 py-2 rounded-md">
                <i data-lucide="users" class="w-5 h-5"></i>
                Contrats
              </a>
              <a href="#" class="flex items-center gap-2 text-gray-300 hover:bg-gray-800 px-3 py-2 rounded-md">
                <i data-lucide="home" class="w-5 h-5"></i>
                Propriétés
              </a>
              <a href="#" class="flex items-center gap-2 text-gray-300 hover:bg-gray-800 px-3 py-2 rounded-md">
                <i data-lucide="users" class="w-5 h-5"></i>
                Locataires
              </a>
              <a href="#" class="flex items-center gap-2 text-gray-300 hover:bg-gray-800 px-3 py-2 rounded-md">
                <i data-lucide="message-square" class="w-5 h-5"></i>
                Messages
              </a>
            </div>
          </div>

          <div>
            <div class="text-gray-400 text-sm font-medium mb-2">Configuration</div>
            <div class="space-y-1">
              <a href="#" class="flex items-center gap-2 text-gray-300 hover:bg-gray-800 px-3 py-2 rounded-md">
                <i data-lucide="settings" class="w-5 h-5"></i>
                Paramètres
              </a>
              <a href="#" class="flex items-center gap-2 text-gray-300 hover:bg-gray-800 px-3 py-2 rounded-md">
                <i data-lucide="shield" class="w-5 h-5"></i>
                Sécurité
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="ml-64 p-8">
      <!-- Top Bar -->
      <div class="flex justify-between items-center mb-8">
        <div>
          <h1 class="text-2xl font-bold text-gray-900"> @yield('title') </h1>
          <p class="text-gray-600">Bienvenue dans votre espace d'administration</p>
        </div>

        <div class="flex items-center gap-4">
          <button class="flex items-center gap-2 text-gray-600 hover:text-gray-900">
            <i data-lucide="bell" class="w-5 h-5"></i>
            <div class="w-2 h-2 bg-red-500 rounded-full absolute translate-x-3 -translate-y-1"></div>
          </button>
          <div class="flex items-center gap-2">
            <img
              src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=48&h=48&q=80"
              alt="Admin"
              class="w-8 h-8 rounded-full object-cover"
            />
            <span class="text-gray-900 font-medium">Amadou Dieng</span>
          </div>
        </div>
      </div>

<div class="cont">
@yield('content')
</div>




    </div>

    <script>
      lucide.createIcons();
    </script>
  </body>
</html>

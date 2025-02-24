@extends('admin.nav.nav')
@section('title', 'Gestion des Biens')

@section('content')



<div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-4">

        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
            <a href="#" class="block">
                <img class="w-full h-48 object-cover transition-transform duration-300 hover:scale-105"
                     src="{{ asset('imageSite/app1.webp') }}"
                     alt="Appartement">
            </a>
            <div class="p-4">
                <h2 class="text-xl font-semibold text-center text-gray-800">Appartement</h2>
            </div>
        </div>
        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
            <a href="#" class="block">
                <img class="w-full h-48 object-cover transition-transform duration-300 hover:scale-105"
                     src="{{ asset('imageSite/villa1.jpg') }}"
                     alt="Villa">
            </a>
            <div class="p-4">
                <h2 class="text-xl font-semibold text-center text-gray-800">Villa</h2>
            </div>
        </div>
        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
            <a href="#" class="block">
                <img class="w-full h-48 object-cover transition-transform duration-300 hover:scale-105"
                     src="{{ asset('imageSite/terrain1.jpg') }}"
                     alt="Terrain">
            </a>
            <div class="p-4">
                <h2 class="text-xl font-semibold text-center text-gray-800">Terrain</h2>
            </div>
        </div>
        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
            <a href="#" class="block">
                <img class="w-full h-48 object-cover transition-transform duration-300 hover:scale-105"
                     src="{{ asset('imageSite/bureau1.jpeg') }}"
                     alt="Bureau">
            </a>
            <div class="p-4">
                <h2 class="text-xl font-semibold text-center text-gray-800">Bureau</h2>
            </div>
        </div>
        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
            <a href="#" class="block">
                <img class="w-full h-48 object-cover transition-transform duration-300 hover:scale-105"
                     src="{{ asset('imageSite/magazin1.jpg') }}"
                     alt="Magasin">
            </a>
            <div class="p-4">
                <h2 class="text-xl font-semibold text-center text-gray-800">Magasin</h2>
            </div>
        </div>

</div>

@endsection

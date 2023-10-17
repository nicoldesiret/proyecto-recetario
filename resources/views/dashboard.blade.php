<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
 
            {{ __('Dashboard') }}

            <a href="/ingredientes" style="color: black; text-decoration: none;">
                    <h2 style="color: black;">PROYECTO 2: CRUD INGREDIENTES - Deneb Rivera Alcaraz</h2>
                </a>

         <a href="/comentarios" style="color: black; text-decoration: none;">
                    <h2 style="color: black;">PROYECTO 2: CRUD COMENTARIOS - Lilia del Carmen González González</h2>
                </a>

                <a href="/recetas" style="color: black; text-decoration: none;">
                    <h2 style="color: black;">PROYECTO 2: CRUD RECETAS - Nicol Desire Trujillo Jimenez</h2>
                </a>
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
 
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
 
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>

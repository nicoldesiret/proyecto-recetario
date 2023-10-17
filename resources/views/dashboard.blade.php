<x-app-layout>
    <x-slot name="header">
        <h1></h1>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <a href="/ingredientes" style="color: white; text-decoration: none;">
                    <h2 style="color: white;">PROYECTO 2: CRUD INGREDIENTES - Deneb Rivera Alcaraz</h2>
                </a>
                
            </div>
        </div>
    </div>
</x-app-layout>

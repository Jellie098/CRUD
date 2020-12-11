<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>
    @include('mensaje')
    <div class="py-12">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="inicio" class="btn btn-outline btn-info"> Pedidos </a>
                <br><br>
                <a href="{{ route('producto.index') }}" class="btn btn-outline btn-info"> Productos </a>
            </div>
        </div>
    </div>
    
    
</x-app-layout>

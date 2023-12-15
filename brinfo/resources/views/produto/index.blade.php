<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-green-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-white dark:text-gray-100">
                <div class="btn btn-primary">
                    <a href="{{ route('produto.create') }}">Adicionar novo produto</a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
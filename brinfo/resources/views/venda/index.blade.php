<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Vendas') }}
        </h2>
    </x-slot>

    <!-- Link para adicionar nova venda -->
    
    <div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-green-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-white dark:text-gray-100">
                <div class="btn btn-primary">
                    <a href="{{ route('venda.create') }}">Adicionar Nova Venda</a>
                </div>
            </div>
        </div>
    </div>     

    <div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <x-list
                :title="__('Lista de Vendas')",
                :description="__('Listagem de vendas da equipe')",
                :headers="[
                    ['label' => 'ID'],
                    ['label' => 'Data', 'field' => 'data'],
                    ['label' => 'valor', 'field' => 'valor'],
                    ['label' => 'Status', 'field' => 'status', 'class' => 'hidden lg:table-cell'],
                    ['label' => 'Venda feita em', 'field' => 'created_at'],
                ]"
                :records="$vendas"
            />
    </div>
    
</x-app-layout>
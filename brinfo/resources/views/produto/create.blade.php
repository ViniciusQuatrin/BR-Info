<x-guest-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route ('produto.store') }}">
        @csrf
        <div class="mt-4">
            <x-input-label for="name" :value="__('Nome do Produto')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="description" :value="__('Descrição')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="cost" :value="__('Custo')" />
            <x-text-input id="cost" class="block mt-1 w-full" type="number" name="cost" :value="old('cost')" required autocomplete="cost" />
            <x-input-error :messages="$errors->get('cost')" class="mt-2" />
        </div> 

        <div class="mt-4">
            <x-input-label for="price" :value="__('Preço')" />
            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required autocomplete="price" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="valor_liquido" :value="__('Valor Líquido')" />
            <x-text-input id="valor_liquido" class="block mt-1 w-full" type="text" name="valor_liquido" :value="old('valor_liquido')" readonly />

        </div>
        
        <div class="mt-4">
            <x-input-label for="categoria" :value="__('Categoria')" />
            <select id="categoria" name="categoria" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                @foreach (\App\Enums\Categoria::cases() as $categoria)
                    <option value="{{ $categoria }}" {{ old('categoria') == $categoria ? 'selected' : '' }}>
                        {{ $categoria->name }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Criar') }}
            </x-primary-button>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-secondary-button class="ml-4">
                {{ __('Cancelar') }}
            </x-secondary-button>
        </div>


    </form>

</x-guest-layout>
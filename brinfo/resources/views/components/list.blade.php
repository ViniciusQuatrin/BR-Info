<div class="w-full" wire:init="initialize">
    @if (!$loading)
        <x-lb.element.table>
            <x-slot name="header">
                <x-lb.element.table.header :title="$title" :description="$description">
                    <x-lb.element.table.search-bar />
                    <x-lb.element.table.advanced-filter-dropdown />
                </x-lb.element.table.header>
            </x-slot>

            <x-slot name="thead">
                @foreach ($headers as $header)
                    <x-lb.element.table.head :class="$header['class'] ?? ''">{{ $header['label'] }}</x-lb.element.table.head>
                @endforeach
            </x-slot>


            A estrutura do código da lista parece correta, e ela deve lidar com a exibição de dados mesmo que não haja registros. No entanto, a condição @if(count($records) > 0) está dentro do slot tbody, o que significa que a tabela não será gerada se não houver registros. Isso pode ser o motivo pelo qual você não está vendo nada quando não há dados.

            Vamos fazer uma pequena alteração para garantir que a tabela seja gerada, mesmo que não haja registros. Vamos mover a condição para o slot x-lb.element.table.row da seguinte maneira:
            
            php
            Copy code
            <x-slot name="tbody">
                <x-lb.element.table.row>
                    @if (count($records) > 0)
                        @foreach ($records as $record)
                            @foreach ($headers as $header)
                                <x-lb.element.table.cell :class="$header['class'] ?? ''">
                                    @if (isset($header['content']))
                                        {!! $header['content']($record) !!}
                                    @else
                                        {{ data_get($record, $header['field']) }}
                                    @endif
                                </x-lb.element.table.cell>
                            @endforeach
                        </x-lb.element.table.row>
                    @else
                        <x-lb.element.table.cell :colspan="count($headers)">
                            <p>Nenhum registro encontrado.</p>
                        </x-lb.element.table.cell>
                    @endif
                </x-lb.element.table.row>
            </x-slot>

            <x-slot name="footer">
                @include('components.lb.element.table.pagination')
            </x-slot>

        </x-lb.element.table>
    @else
        <div class="w-full flex items-center justify-center">
            <x-lb.extra.loading.table-loading-indicator />
        </div>
    @endif
</div>

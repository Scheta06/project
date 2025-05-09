@extends('layouts.catalog')

@section('product-block')
    @switch($type)
        @case('processors')
            @foreach ($componentModel as $item)
                <div class="products-block for-length mediun-border-radius">
                    <div class="right-info for-length full-width">
                        <div class="photo center small-border-radius"></div>
                        <div class="desctiption small-border-radius full-width center">
                            {{ $item->vendor->title }}
                            {{ $item->processorGeneration->type }}
                            {{ $item->processorGeneration->title }}
                            {{ $item->title }}
                            [{{ $item->socket->title }}, {{ $item->base_frequency }}*{{ $item->count_of_cores }}]
                        </div>
                    </div>
                    <div class="action-section column-display full-width">
                        <a href="{{ route('showProduct', ['type' => $type, 'id' => $item->id]) }}"
                            class="action-link pale-button-style center">
                            Подробнее
                        </a>
                        <a href="#" class="action-link pale-button-style center">
                            Добавить
                        </a>
                    </div>
                </div>
            @endforeach
        @break

        @case('motherboards')
            @foreach ($componentModel as $item)
                <div class="products-block for-length mediun-border-radius">
                    <div class="right-info for-length full-width">
                        <div class="photo center small-border-radius"></div>
                        <div class="desctiption small-border-radius full-width center">
                            {{ $item->vendor->title }}
                            {{ $item->title }}
                            {{ $item->chipset->title }}
                            {{ $item->subtitle }}
                            [{{ $item->socket->title }}]
                        </div>
                    </div>
                    <div class="action-section column-display full-width">
                        <a href="{{ route('showProduct', ['type' => $type, 'id' => $item->id]) }}"
                            class="action-link pale-button-style center">
                            Подробнее
                        </a>
                        <a href="#" class="action-link pale-button-style center">
                            Добавить
                        </a>
                    </div>
                </div>
            @endforeach
        @break

        @case('coolers')
            @foreach ($componentModel as $item)
                <div class="products-block for-length mediun-border-radius">
                    <div class="right-info for-length full-width">
                        <div class="photo small-border-radius"></div>
                        <div class="desctiption small-border-radius full-width center">
                            {{ $item->vendor->title }}
                            {{ $item->title }}
                            [{{ $item->power }}W, {{ $item->min_performance }} об/мин.]
                        </div>
                    </div>
                    <div class="action-section column-display full-width">
                        <a href="{{ route('showProduct', ['type' => $type, 'id' => $item->id]) }}"
                            class="action-link pale-button-style center">
                            Подробнее
                        </a>
                        <a href="#" class="action-link pale-button-style center">
                            Добавить
                        </a>
                    </div>
                </div>
            @endforeach

            @default
        @endswitch
    @endsection

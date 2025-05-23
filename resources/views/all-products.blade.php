@extends('layouts.catalog')

@section('product-block')
    @switch($type)
        @case('processors')
            @foreach ($componentModel as $item)
                <div class="products-block for-length mediun-border-radius">
                    <div class="right-info for-length full-width">
                        <div class="photo small-border-radius"></div>
                        <div class="desctiption small-border-radius full-width center">
                            {{ $item->vendor->title }}
                            {{ $item->processorGeneration->type }}
                            @if ($item->vendor->title === 'intel')
                                {{ $item->processorGeneration->title }}-{{ $item->title }}
                            @else
                                {{ $item->processorGeneration->title }}
                                {{ $item->title }}
                            @endif
                            [{{ $item->socket->title }},
                            {{ $item->base_frequency }}*{{ $item->count_of_cores }},
                            TDP {{ $item->tdp }} вт]

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
                            [{{ $item->socket->title }}, {{ $item->typeOfMemory->title }}, {{ $item->formFactor->type }}]
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
                            [{{ $item->power }}W, {{ $item->min_performance }} об./мин]
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

        @case('storages')
            @foreach ($componentModel as $item)
                <div class="products-block for-length mediun-border-radius">
                    <div class="right-info for-length full-width">
                        <div class="photo small-border-radius"></div>
                        <div class="desctiption small-border-radius full-width center">
                            {{ $item->vendor->title }}
                            {{ $item->title }}
                            [чтение - {{ $item->reading_rate }} Мбайт/сек, запись - {{ $item->recording_rate }} Мбайт/сек]
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

        @case('random_access_memory')
            @foreach ($componentModel as $item)
                <div class="products-block for-length mediun-border-radius">
                    <div class="right-info for-length full-width">
                        <div class="photo small-border-radius"></div>
                        <div class="desctiption small-border-radius full-width center">
                            {{ $item->vendor->title }}
                            {{ $item->title }}
                            [{{ $item->memoryCapacity->title }} гб*{{ $item->count_of_modules }}, {{ $item->frequency->title }} МГц]
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

        @case('videocards')
            @foreach ($componentModel as $item)
                <div class="products-block for-length mediun-border-radius">
                    <div class="right-info for-length full-width">
                        <div class="photo small-border-radius"></div>
                        <div class="desctiption small-border-radius full-width center">
                            {{ $item->vendor->title }}
                            {{ $item->title }}
                            [{{ $item->reading_rate }}]
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
        @case('cases')
            @foreach ($componentModel as $item)
                <div class="products-block for-length mediun-border-radius">
                    <div class="right-info for-length full-width">
                        <div class="photo small-border-radius"></div>
                        <div class="desctiption small-border-radius full-width center">
                            {{ $item->vendor->title }}
                            {{ $item->title }}
                            {{ $item->formFactor->title }}
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

        @default
    @endswitch
@endsection

@extends('layouts.category')

@section('product-block')

@foreach ($componentModel as $item)
    <div class="products-block for-length">
        <div class="photo small-border-radius"></div>
        <div class="desctiption small-border-radius full-width center">
            {{ $item->vendor->title }}
            {{ $item->processorGeneration->type }}
            {{ $item->processorGeneration->title }}
            {{ $item->title }}
            [
                {{ $item->socket->title }},
                {{ $item->base_frequency }}*{{ $item->count_of_cores }}
            ]
        </div>
        <div class="action-section column-display full-width">
            <a href="#" class="action-link pale-button-style center">
                Подробнее
            </a>
            <a href="#" class="action-link pale-button-style center">
                Добавить
            </a>
        </div>
    </div>
@endforeach
@endsection

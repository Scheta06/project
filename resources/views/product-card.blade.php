@extends('layouts.card')

@switch($type)
    @case('processors')
        @section('title')
            Процессор @if ($data->vendor->title == 'intel')
                <span>
                    {{ $data->vendor->title }} {{ $data->processorGeneration->type }}
                    {{ $data->processorGeneration->title }}-{{ $data->title }}
                @else
                    <span>{{ $data->vendor->title }} {{ $data->processorGeneration->type }}
                        {{ $data->processorGeneration->title }} {{ $data->title }}
            @endif
            </span>
        @endsection
        @section('description')
            {{ $data->description }}
        @endsection
        @section('specifications')
        @endsection
    @break

    @case('motherboards')
        @section('title')
            Материнская плата <span>{{ $data->vendor->title }} {{ $data->title }} {{ $data->chipset->title }}
                {{ $data->subtitle }}</span>
        @endsection
        @section('description')
            {{ $data->description }}
        @endsection
        @section('specifications')
        @endsection
    @break

    @case('coolers')
        @section('title')
            Кулер <span>{{ $data->vendor->title }} {{ $data->title }}</span>
        @endsection
        @section('description')
            {{ $data->description }}
        @endsection
    @break

    @default
@endswitch

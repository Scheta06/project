@extends('layouts.card')

@switch($type)
    @case('processors')
        @section('title')
        Процессор <span class="dataTitle">{{ $data->vendor->title }} {{ $data->processorGeneration->type }} {{ $data->processorGeneration->title }} {{ $data->title }}</span>
        @endsection
        @section('description')
        {{ $data->description }}
        @endsection
    @break

    @case('motherboards')
    @break

    @default
@endswitch

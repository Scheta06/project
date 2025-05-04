@extends('layouts.admin-panel')

@section('content')
    <h1>Выберите категорию</h1>
    <div class="category-container">
        @foreach ($typeOfComponents as $key => $type)
        <div class="item-block background-block-color huge-border-radius column-for-over-length">
            <div class="image full-height small-border-radius"></div>
            <p class="bold-small-font">{{ $type }}</p>
        </div>
        @endforeach
    </div>
@endsection

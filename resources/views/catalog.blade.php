@extends('layouts.app')

@section('content')
    <main class="main-catalog full-height column-display">
        <div class="welcome-section">
            <h1>Категории комплектующих</h1>
        </div>
        <div class="all-components-section">
            @foreach ($typeOfComponents as $key => $value)
                <a href="catalog/{{ $key }}" class="component-block background-block-color huge-border-radius column-for-over-length">
                    <img src="" alt="" class="small-border-radius">
                    <p class="bold-medium-font">{{ $value }}</p>
                </a>
            @endforeach
        </div>
    </main>
@endsection

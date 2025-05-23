@extends('layouts.app')

@section('content')
    <main class="main-catalog full-height column-display">
        <div class="welcome-section">
            <h1>Категории комплектующих</h1>
        </div>
        <div class="all-components-section">
            @foreach($typeOfComponents as $key => $type)
                <a href="{{ route('allProducts', ['type' => $key]) }}" class="component-block background-block-color huge-border-radius column-for-over-length">
                    <img src="" alt="" class="small-border-radius">
                    <p class="bold-medium-font">{{ $type }}</p>
                </a>
            @endforeach
        </div>
    </main>
@endsection

@extends('layouts.app')

@section('content')
    <main class="catalog full-height column-display">
        <div class="welcome-section">
            <h1>Категории комплектующих</h1>
        </div>
        <div class="all-components-section">
            <a href="{{ route('processors') }}" class="component-block background-block-color huge-border-radius column-for-over-length">
                <img src="" alt="Процессоры" class="small-border-radius">
                <p class="bold-medium-font">Процессоры</p>
            </a>
            <a href="#" class="component-block background-block-color huge-border-radius column-for-over-length">
                <img src="" alt="Материнские платы" class="small-border-radius">
                <p class="bold-medium-font">Материнские платы</p>
            </a>
            <a href="#" class="component-block background-block-color huge-border-radius column-for-over-length">
                <img src="" alt="Кулеры" class="small-border-radius">
                <p class="bold-medium-font">Кулеры</p>
            </a>
            <a href="#" class="component-block background-block-color huge-border-radius column-for-over-length">
                <img src="" alt="Оперативная память" class="small-border-radius">
                <p class="bold-medium-font">Оперативная память</p>
            </a>
            <a href="#" class="component-block background-block-color huge-border-radius column-for-over-length">
                <img src="" alt="Видеокарты" class="small-border-radius">
                <p class="bold-medium-font">Видеокарты</p>
            </a>
            <a href="#" class="component-block background-block-color huge-border-radius column-for-over-length">
                <img src="" alt="Накопители" class="small-border-radius">
                <p class="bold-medium-font">Накопители</p>
            </a>
            <a href="#" class="component-block background-block-color huge-border-radius column-for-over-length">
                <img src="" alt="Блоки питания" class="small-border-radius">
                <p class="bold-medium-font">Блоки питания</p>
            </a>
            <a href="#" class="component-block background-block-color huge-border-radius column-for-over-length">
                <img src="" alt="Корпусы" class="small-border-radius">
                <p class="bold-medium-font">Корпусы</p>
            </a>
            <div class="row-components for-length">

            </div>

        </div>
    </main>
@endsection

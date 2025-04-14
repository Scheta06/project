@extends('layouts.app')

@section('content')

    <body>
        <div class="container">
            <div class="main-home center">
                <div class="search-input center">
                    <div class="new-config center">
                        <a href="#" class="desktop">Новая конфигурация</a>
                        <a href="#" class="mobile">
                            <img src="{{ asset('images/DesktopTower.png') }}" alt="new-config">
                        </a>
                    </div>
                    <input type="text" class="search" placeholder="Поиск...">
                </div>
                <div class="config-block">
                    <div class="background-config-block center">
                        <div class="title-huge">Сохраненные кофигурации</div>
                        <div class="title-medium">Здесь пока что нет ни одной сборки</div>
                        <div class="create-config center">
                            <a href="#">Создать сборку</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection

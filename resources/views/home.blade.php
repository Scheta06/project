@extends('layouts.app')

@section('content')
<main class="main column-display">
    <div class="search-section bold-huge-font full-width">
        <p style="line-height: 50px;">Конфигурации компьютеров</p>
        <div class="search-block huge-border-radius-with-color row-for-over-length">
            <a href="#" class="create-config-button bright-button-style center bold-small-font full-width">
                Новая конфигурация
            </a>
            <input type="text" class="search-input huge-border-radius regular-small-font full-width" placeholder="Поиск...">
        </div>
        <div class="my-config-section huge-border-radius-with-color full-width">
            <div class="my-config-pre-background mediun-border-radius center full-width">
                <div class="regular-medium-font">Сохраненные конфигурации</div>
                <div class="regular-medium-font" style="opacity: .6 ;">Здесь пока что нет ни одной сборки</div>
                <a href="#" class="create-button bright-button-style bold-medium-font center full-width">
                    Создать сборку
                </a>
            </div>
        </div>
    </div>
</main>
@endsection

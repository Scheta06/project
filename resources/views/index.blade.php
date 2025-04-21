@extends('layouts.app')

@section('content')
    <form class="main-index" method="POST">
        @csrf
        <h1>Конфигуратор ПК</h1>
        <div class="configuration-components-section huge-border-radius background-block-color for-length">
            <div class="left-bar column-display secong-gap full-width">
                <div class="configuration-components-block full-height mediun-border-radius for-length second-gap">
                    <h2>Процессоры</h2>
                    <a href="#" class="action-button">Добавить</a>
                </div>
                <div class="configuration-components-block full-height mediun-border-radius for-length second-gap">
                    <h2>Материнские платы</h2>
                    <a href="#" class="action-button">Добавить</a>
                </div>
                <div class="configuration-components-block full-height mediun-border-radius for-length second-gap">
                    <h2>Кулеры</h2>
                    <a href="#" class="action-button">Добавить</a>
                </div>
                <div class="configuration-components-block full-height mediun-border-radius for-length second-gap">
                    <h2>Оперативная память</h2>
                    <a href="#" class="action-button">Добавить</a>
                </div>
                <div class="configuration-components-block full-height mediun-border-radius for-length second-gap">
                    <h2>Постоянная память</h2>
                    <a href="#" class="action-button">Добавить</a>
                </div>
                <div class="configuration-components-block full-height mediun-border-radius for-length second-gap">
                    <h2>Видеокарты</h2>
                    <a href="#" class="action-button">Добавить</a>
                </div>
                <div class="configuration-components-block full-height mediun-border-radius for-length second-gap">
                    <h2>Блоки питания</h2>
                    <a href="#" class="action-button">Добавить</a>
                </div>
                <div class="configuration-components-block full-height mediun-border-radius for-length second-gap">
                    <h2>Корпусы</h2>
                    <a href="#" class="action-button">Добавить</a>
                </div>
            </div>
            <div class="right-bar column-display first-gap full-width">
                <div class="photo small-border-radius"></div>
                <div class="change-config-block column-display">
                    <div class="save-config__button small-border-radius center">
                        <button type="submit">
                            <h2>Сохранить конфигурацию</h2>
                        </button>
                    </div>
                    <div class="message-section column-display">
                        <div class="title-of-configuration column-display">
                            <h2>Название</h2>
                            <input type="text" class=" small-border-radius">
                        </div>
                        <div class="title-of-configuration column-display">
                            <h2>Описание</h2>
                            <input type="text" class="desctiption small-border-radius">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

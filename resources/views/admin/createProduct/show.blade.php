@extends('layouts.admin-panel')

@section('content')
    @switch($type)
        @case('processor')
            <h1>Новый процессор</h1>
            <form action="" class="for-length full-height">
                <div class="specifications-section">
                    <div class="specifications-input">
                        <label for="">Название</label>
                        <input type="text">
                    </div>
                    <div class="specifications-input">
                        <label for="">Описание</label>
                        <input type="text">
                    </div>
                </div>
                <div class="add-section full-width column-for-over-length">
                    <div class="new-image-block full-width mediun-border-radius center">
                        
                    </div>
                    <button class="add-new-component center pale-button-style">Создать</button>
                </div>
            </form>
        @break

        @case('motherboard')
            <h1>Новая материнская плата</h1>
        @break

        @case('cooler')
            <h1>Новый кулер</h1>
        @break

        @case('ram')
            <h1>Новая оперативная память</h1>
        @break

        @case('storage')
            <h1>Новое хранилище</h1>
        @break

        @case('videocard')
            <h1>Новая видеокарта</h1>
        @break

        @case('psu')
            <h1>Новый блок питания</h1>
        @break

        @case('case')
            <h1>Новый корпус</h1>
        @break

        @default
    @endswitch
@endsection

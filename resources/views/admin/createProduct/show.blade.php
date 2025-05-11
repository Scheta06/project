@extends('layouts.admin-panel')

@section('content')
    @switch($type)
        @case('processors')
            <h1>Новый процессор</h1>
            <form action="">
                @csrf

            </form>
        @break

        @case('motherboards')
            <h1>Новая материнская плата</h1>

        @break

        @case('coolers')
            <h1>Новый кулер</h1>
        @break

        @case('random_access_memory')
            <h1>Новая оперативная память</h1>
        @break

        @case('storages')
            <h1>Новое хранилище</h1>
        @break

        @case('videocards')
            <h1>Новая видеокарта</h1>
        @break

        @case('psu')
            <h1>Новый блок питания</h1>
        @break

        @case('cases')
            <h1>Новый корпус</h1>
        @break

        @default
    @endswitch
@endsection

@extends('layouts.admin-panel')

@section('content')
    <div class="column-display center" style="gap: 15px">
        <h1>Добро пожаловать, {{ $userData->name }}</h1>
        <h2>Выберите действие!</h2>
    </div>
@endsection

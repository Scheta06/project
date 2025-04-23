@extends('layouts.app')

@section('content')
    <main class="main-profile column-display profile full-width">
        <h1>Добро пожаловать, {{ $userData->name }}!</h1>
        <div class="account-section full-width">
            <div class="account-block column-display full-width">
                <div class="title">Информация об аккаунте</div>
                <div class="block mediun-border-radius center full-width">
                    <div class="info column-display full-width">
                        <div class="info-row for-length full-width">
                            <p>Дата создания</p>
                            <div class="user-info">{{ $userData->created_at }}</div>
                        </div>
                        <div class="info-row for-length full-width">
                            <p>E-mail</p>
                            <div class="user-info">{{ $userData->email }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="account-block column-display full-width">
                <div class="title">Действия с аккаунтом</div>
                <div class="block mediun-border-radius center full-width">
                    <div class="info column-display full-width">
                        <div class="info-row for-length full-width">
                            <a href="{{ route('changePasswordForm') }}">Изменить пароль</a>
                        </div>
                        <div class="info-row for-length full-width">
                            <a href="{{ route('logout') }}">Выйти из аккаунта</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

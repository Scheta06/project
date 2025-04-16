<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | ASMR</title>
    @vite(['resources/css/duplicate-elements.css','resources/css/desktop/login.css','resources/css/mobile/mobile-login.css'])
</head>

<body class="center">
    <main class="main column-display center">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}" class="column-display center">
            @csrf
            <h1>Авторизация</h1>
            <div class="input-section column-display">
                <label for="name" class="bold-medium-font">Логин</label>
                <input type="text" name="name" class="small-border-radius" required>
            </div>
            <div class="input-section column-display">
                <label for="password" class="bold-medium-font">Пароль</label>
                <input type="password" name="password" class=" small-border-radius" required>
            </div>
            <button type="sumbit"
                class="join-button mediun-border-radius  bold-small-font bright-button-style center full-width">Войти</button>
            <div class="links column-display">
                <a href="{{ route('registerForm') }}" class="bold-small-font mediun-border-radius center full-width">Нет
                    аккаунта? Перейти к регистрации</a>
                <a href="{{ route('home') }}" class="bold-small-font mediun-border-radius center full-width">Вернуться
                    на главную страницу</a>
            </div>
        </form>
    </main>
</body>

</html>

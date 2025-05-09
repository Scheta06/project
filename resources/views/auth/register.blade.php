<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | ASMR</title>
    @vite(['resources/css/duplicate-elements.css', 'resources/css/desktop/header-and-footer.css', 'resources/css/desktop/login.css', 'resources/css/desktop/without-config.css', 'resources/css/mobile/mobile-header-and-footer.css', 'resources/css/mobile/mobile-login.css', 'resources/css/mobile/mobile-without-config.css'])
</head>

<body class="center">
    <main class="main-auth column-display center full-width">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}" class="main column-display center full-width">
            @csrf
            <h1>Регистрация</h1>
            <div class="input-section column-display full-width">
                <label for="name" class="bold-medium-font">Логин</label>
                <input type="text" name="name" value="{{ old('name') }}" class="small-border-radius" required>
            </div>
            <div class="input-section column-display full-width">
                <label for="email" class="bold-medium-font">E-mail</label>
                <input type="email" name="email" class=" small-border-radius" required>
            </div>
            <div class="input-section column-display full-width">
                <label for="password" class="bold-medium-font">Пароль</label>
                <input type="password" name="password" class=" small-border-radius" required>
            </div>
            <button type="submit"
                class="join-button mediun-border-radius  bold-small-font bright-button-style center full-width">Войти</button>
            <div class="links column-display">
                <a href="{{ route('loginForm') }}" class="bold-small-font mediun-border-radius center full-width">Есть аккаунт? Перейти к авторизации</a>
                <a href="{{ route('index') }}" class="bold-small-font mediun-border-radius center full-width">Вернуться на главную
                    страницу</a>
            </div>
        </form>
    </main>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | ASMR</title>
    @vite(['resources/css/duplicate-elements.css','resources/css/desktop/login.css','resources/css/mobile/mobile-login.css'])
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
        <form method="POST" action="{{ route('changePassword') }}" class="column-display center full-width">
            @csrf
            <h1>Смена пароля</h1>
            <div class="input-section column-display full-width">
                <label for="current_password" class="bold-medium-font">Текущий пароль</label>
                <input type="password" name="current_password" class="small-border-radius" required>
            </div>
            <div class="input-section column-display full-width">
                <label for="new_password" class="bold-medium-font">Новый пароль</label>
                <input type="password" name="new_password" class=" small-border-radius" required>
            </div>
            <div class="input-section column-display full-width">
                <label for="new_password_confirmation" class="bold-medium-font">Подтверждение нового пароля</label>
                <input type="password" name="new_password_confirmation" class="small-border-radius" required>
            </div>
            <button type="sumbit"
                class="join-button mediun-border-radius  bold-small-font bright-button-style center full-width">Изменить пароль</button>
            <div class="links column-display">
                <a href="{{ route('profile') }}" class="bold-small-font mediun-border-radius center full-width">Вернуться
                    к профилю</a>
            </div>
        </form>
    </main>
</body>

</html>

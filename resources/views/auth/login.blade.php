<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/desktop/register.css')
</head>
<body>
    <div class="container">
    <div class="container center" id="modal">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>Вход</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-block">
                <label for="name" class="title">Логин</label>
                <input type="text" name="name"  required>
            </div>
            <div class="input-block">
                <label for="password" class="title">Пароль</label>
                <input type="password" name="password" required>
            </div>
            <div class="button-block">
                <button type="submit" id="register-button">Войти</button>
                <a href="{{ route('register') }}" class="center" >Нет аккаунта? Перейти к регистрации</a>
                <a id="goBack-button" href="{{ route('home') }}" class="center" >Вернуться на главную страницу</a>
            </div>
        </form>
    </div>
</body>
</html>

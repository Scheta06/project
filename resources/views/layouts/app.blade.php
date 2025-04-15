<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/duplicate-elements.css', 'resources/css/desktop/header-and-footer.css', 'resources/css/desktop/login.css', 'resources/css/desktop/without-config.css', 'resources/css/mobile/mobile-header-and-footer.css', 'resources/css/mobile/mobile-login.css', 'resources/css/mobile/mobile-without-config.css'])
</head>

<body class="column-for-over-length">
    @include('partials.header')

    <div class="container">
        @yield('content')
    </div>
    
    @include('partials.footer')
</body>

</html>

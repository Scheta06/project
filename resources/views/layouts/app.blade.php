<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | ASMR</title>
    @vite(['resources/css/duplicate-elements.css', 'resources/css/mobile-duplicate-elements.css', 'resources/css/desktop/header-and-footer.css', 'resources/css/desktop/login.css', 'resources/css/desktop/index.css', 'resources/css/mobile/mobile-index.css', 'resources/css/mobile/mobile-header-and-footer.css', 'resources/css/mobile/mobile-login.css', 'resources/css/desktop/profile.css', 'resources/css/mobile/mobile-profile.css', 'resources/css/desktop/catalog.css', 'resources/css/mobile/mobile-catalog.css', 'resources/css/desktop/producs.css'])
</head>

<body class="column-for-over-length">
    @include('partials.header')

    <div class="container">
        @yield('content')
    </div>

    @include('partials.footer')
</body>

</html>

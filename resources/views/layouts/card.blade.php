<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Товар</title>
    @vite(['resources/css/duplicate-elements.css', 'resources/css/mobile-duplicate-elements.css', 'resources/css/desktop/header-and-footer.css', 'resources/css/desktop/login.css', 'resources/css/desktop/index.css', 'resources/css/mobile/mobile-header-and-footer.css', 'resources/css/mobile/mobile-login.css', 'resources/css/desktop/profile.css', 'resources/css/mobile/mobile-profile.css', 'resources/css/desktop/catalog.css', 'resources/css/mobile/mobile-catalog.css', 'resources/css/desktop/all-producs.css', 'resources/css/mobile/mobile-index.css', 'resources/css/desktop/card.css'])
</head>
<body class="column-for-over-length">
    @include('partials.header')
    <div class="container">
        <main class="card-main for-length full-width full-height">
            <div class="card-left-bar column-for-over-length full-height full-width">
                <a href="{{ route('allProducts', ['type' => $type]) }}" class="return pale-button-style center">Вернуться к каталогу</a>
                <div class="image full-width full-height mediun-border-radius"></div>
            </div>
            <div class="card-right-bar column-for-over-length full-width">
                <div class="title bold-medium-font">
                    @yield('title')
                </div>
                <div class="description small-border-radius">
                    @yield('description')
                </div>
                <div class="specifications">
                    @yield('specifications')
                </div>
            </div>
        </main>
    </div>
    @include('partials.footer')
</body>
</html>

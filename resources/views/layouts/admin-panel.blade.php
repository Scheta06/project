<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel | ASMR</title>
    @vite(['resources/css/duplicate-elements.css', 'resources/css/mobile-duplicate-elements.css', 'resources/css/desktop/admin.css', 'resources/css/desktop/new-product.css', 'resources/css/mobile/mobile-admin.css'])
</head>

<body>
    @include('partials.admin-header')
    <div class="container">
        <main class="admin-main for-length full-width">
            <div class="admin-nav-bar full-width">
                <a href="{{ route('admin.allProduct.index') }}" class="center full-width unactive">Все товары</a>
                <a href="{{ route('admin.createProduct.index') }}" class="center full-width unactive">Создать товар</a>
            </div>
            <div class="admin-content-bar">
                <div class="admin-welcome-title">
                    @yield('welcome-content')
                </div>
                <div>
                     @yield('content')
                </div>
            </div>
        </main>
    </div>
    @include('partials.admin-footer')
</body>

</html>

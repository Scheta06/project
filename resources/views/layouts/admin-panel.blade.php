<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel | ASMR</title>
    @vite(['resources/css/duplicate-elements.css', 'resources/css/mobile-duplicate-elements.css', 'resources/css/desktop/admin.css', 'resources/css/desktop/new-product.css', 'resources/css/mobile/mobile-admin.css'])
</head>

<body class="admin-body column-display">
    @include('partials.admin-header')
    <main class="admin-main for-length full-height">
        <div class="admin-left-bar full-height full-width column-for-over-length">
            <div class="action-section">
                <a href="{{ route('admin.allProduct') }}" class="admin-action-block center bold-medium-font">Все товары</a>
                <a href="{{ route('admin.createProduct.index') }}" class="admin-action-block center bold-medium-font">Создать новый товар</a>
            </div>
        </div>
        <div class="admin-right-bar full-width full-height">
            @yield('content')
        </div>
        <div class="mobile-admin-nav for-length">
            <a href="{{ route('admin.allProduct') }}" class="center full-width">Все товары</a>
            <a href="{{ route('admin.createProduct.index') }}" class="center full-width">Создать новый товар</a>
        </div>
    </main>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | ASMR</title>
    @vite(['resources/css/duplicate-elements.css','resources/css/mobile-duplicate-elements.css', 'resources/css/desktop/header-and-footer.css', 'resources/css/mobile/mobile-header-and-footer.css', 'resources/css/desktop/all-producs.css', 'resources/css/desktop/all-producs.css', 'resources/css/mobile/mobile-all-products.css'])
</head>

<body class="column-for-over-length">
    @include('partials.header')
    <div class="container">
        <main class="main-products for-length full-width first-gap">
            <div class="left-bar column-display full-width first-gap">
                <a href="#" class="go-back-button pale-button-style full-width center">Вернуться к конфигурации</a>
                <div class="sorting-section mediun-border-radius">
                    <h1>Поиск</h1>
                    <input type="text" class="sorting-input mediun-border-radius regular-small-font" placeholder="Введите ваш запрос...">
                </div>
            </div>
            <div class="right-bar full-width column-display">
                <h1>{{ $componentData }}</h1>
                <div class="products-section column-display mediun-border-radius">
                    @foreach ($componentModel as $value)
                    <div class="products-block for-length">
                        <div class="photo small-border-radius"></div>   
                        <div class="desctiption small-border-radius full-width center">
                            {{ $value->vendor->title }} {{ $value->title }} [{{ $value->socket->title }}, {{ $value->base_frequency }}*{{ $value->count_of_cores }}]
                        </div>
                        <div class="action-section column-display full-width">
                            <div class="action-link pale-button-style center">
                                Подробнее
                            </div>
                            <div class="action-link pale-button-style center">
                                Добавить
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </main>
    </div>
    @include('partials.footer')
</body>

</html>

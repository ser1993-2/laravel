<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('/js/app.js')}}" rel="stylesheet"></script>
    <title>Test laravel</title>
</head>
<body>

<div class="container">

    <div class="row">

        <div class="col-6">

            <p>Панедь отладки</p>
            <p>composer require --dev barryvdh/laravel-debugbar</p>

            <p>ServiceProvider in config/app.php</p>

            <p>Barryvdh\Debugbar\ServiceProvider::class</p>

            <p>'Debugbar' => Barryvdh\Debugbar\Facade::class,</p>

            <p>  php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"</p>

        </div>

        <hr/>

        <div class="col-6">

            @yield('content')

        </div>

    </div>

</div>

</body>
</html>
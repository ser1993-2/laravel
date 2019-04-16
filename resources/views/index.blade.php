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

            <a href="/home"> auth</a>
            <br/>
            <a href="/test"> Подключение через yield</a>
            <br/>
            <a href="/route"> rout (controller)</a>

            <p>Панедь отладки</p>
            <p>composer require --dev barryvdh/laravel-debugbar</p>

            <p>ServiceProvider in config/app.php</p>

            <p>Barryvdh\Debugbar\ServiceProvider::class</p>

            <p>'Debugbar' => Barryvdh\Debugbar\Facade::class,</p>

            <p> php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"</p>

        </div>

        <hr/>

        <div class="col-6">

            @yield('content')

        </div>

        <div class="col-6">


            @section('incl')
                <p>  2 секция </p>

                @endsection

        </div>

    </div>

    <div class="row">

        <div class="col-6">
            @yield('rout')


        </div>

        <div class="col-6">

            @include('include')

        </div>

    </div>

</div>

</body>
</html>
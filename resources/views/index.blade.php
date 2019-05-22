<!doctype html>
<html lang="en">
<head>

    @include('include')

    <title>Test laravel</title>

    @stack('scripts')

</head>
<body>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home block</div>

                <div class="card-body">
                    <a href="/">Child 1</a>
                    <a href="/test">Child 2</a>
                    <a href="/admin">admin</a>
                </div>
            </div>
        </div>

        @yield('content')
        @yield('content2')
        @yield('admin')

    </div>

</div>



</body>
</html>
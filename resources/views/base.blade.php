<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/jquery.js') }}">
    <link rel="stylesheet" href="{{ asset('js/popper.js') }}">
    <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}">
    <title>SIA  | Summer class</title>
</head>
<body>

    @include('navbar')


    @if(Session::has("Error"))
        <div class="alert alert-danger">
            {{ Session::pull("Error") }}
        </div>
    @endif

    <div class="container">
        @yield('content')
    </div>
</body>
</html>

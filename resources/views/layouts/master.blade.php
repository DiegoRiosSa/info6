<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie_edge">
    <title>Info 6</title>
    <link rel='stylesheet' href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

    <div class="container">
        @include('fragments.nav-bar')
        @yield('content')
    </div>

</body>
</html>
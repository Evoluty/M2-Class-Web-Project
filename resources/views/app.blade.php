<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Famous Fashion Store - @yield('title')</title>
    <link rel="icon" href="http://www.clker.com/cliparts/d/d/A/1/m/i/texas-star-hi.png" />

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet" type="text/css">
    <!-- Defered scripts -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
</head>

<body>
    <div id='app'></div>

    @include('top_nav')

    <div class="container-fluid">
        @include('header')
        @include('bot_nav')
        <main>
            @yield('content')
        </main>
    </div>

    @include('footer')

    <!-- Scripts -->
    <script src="js/app.js"></script>
</body>

</html>

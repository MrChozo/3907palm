<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
    <title>{{ env('APP_NAME') }}</title>

    <link rel="stylesheet" href="{{ asset('css/style0.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <nav></nav>
</header>
<main>

    @yield('content')

</main>
</body>
</html>

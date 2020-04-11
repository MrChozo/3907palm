<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
    <title>{{ env('APP_NAME') }}</title>

    <link rel="stylesheet" href="{{ asset('css/style0.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-F59XK8H3DN"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-F59XK8H3DN');
  </script>
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

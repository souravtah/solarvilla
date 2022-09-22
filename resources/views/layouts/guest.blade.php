<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="color-scheme" content="dark light">
    <title>{{ config('app.name', 'SolarVilla1') }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    @yield('content')
    @vite('resources/js/app.js')
</body>
</html>

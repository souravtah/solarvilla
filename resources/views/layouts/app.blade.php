<!doctype html>
<html lang="en" data-theme="dark">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="color-scheme" content="dark light">
    <title>{{ config('app.name', 'SolarVilla') }}</title>
    {{-- <link rel="stylesheet" href="../../cdn.jsdelivr.net/npm/bootstrap-icons%401.7.2/font/bootstrap-icons.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <link rel="stylesheet" type="text/css" href="../../css/utilities.css">
</head>
<?php $my_current_role = Auth::user()->getRoleNames()[0]; ?>
<body>
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        @include('users.navigation_left')
        <div class="flex-lg-1 h-screen overflow-y-lg-auto">
            @include('users.navigation_top')
            @yield('content')
        </div>
    </div>
    <script src="../../js/main.js"></script>
</body>
</html>

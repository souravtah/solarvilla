<!doctype html>
<html lang="en" data-theme="dark">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="color-scheme" content="dark light">
    <title>{{ config('app.name', 'SolarVilla') }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/solarvilla/solar-power-icon.ico') }}">

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> --}}
    @vite(['resources/js/app.js'])
</head>
<?php $myCurrentRole = Auth::user()->getRoleNames()[0]; ?>
<body>
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    @include('users.navigation_left')
    <div class="flex-lg-1 h-screen overflow-y-lg-auto">
        @include('users.navigation_top')
        @yield('content')
    </div>
</div>
<script src="{{ asset('js/main.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> --}}
</body>
</html>

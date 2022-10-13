<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="color-scheme" content="dark light">
    <title>{{ config('app.name', 'SolarVilla') }}</title>
    <!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="SolarVilla">

	<!-- Dark mode -->
	<script type="text/javascript">
		var theme = localStorage.getItem('data-theme');
		var root = document.documentElement;
		if (theme === 'dark' && theme !== undefined) {
			root.classList.add('dark-mode');
		} else {
			root.classList.remove('dark-mode');
		}
	</script>

	<!-- Favicon -->
	{{-- <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}

	<!-- Google Font -->
	{{-- <link rel="preconnect" href="../fonts.googleapis.com/index.html">
	<link rel="preconnect" href="../fonts.gstatic.com/index.html" crossorigin>
	<link rel="stylesheet" href="../fonts.googleapis.com/css21708.css?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap"> --}}

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/flatpickr/css/flatpickr.min.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    @vite('resources/sass/app.scss')
</head>
<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src='{{ asset('js/functions.js') }}'></script>
</body>
</html>

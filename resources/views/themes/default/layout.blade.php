<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    @yield('header_script')
</head>
<body>
    <header>
        <!-- Header content here -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content here -->
    </footer>
    @yield('footer_script')
</body>
</html>

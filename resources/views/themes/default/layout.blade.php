<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ resource_path('views/themes/default/assets/style.css') }}">
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
</body>
</html>

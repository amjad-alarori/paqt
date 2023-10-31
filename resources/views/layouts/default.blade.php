<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'PAQT')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="h-screen bg-gradient-to-b from-gray-50 to-gray-300">
        @yield('content')
    </body>
</html>

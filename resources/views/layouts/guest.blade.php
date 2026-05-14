<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">

    <div class="container min-vh-100 d-flex justify-content-center align-items-center">

        <div class="w-100" style="max-width: 450px;">

            <!-- Logo -->
            <div class="text-center mb-4">
                <a href="/">
                    <h2 class="fw-bold text-dark mb-0">
                        {{ config('app.name', 'Laravel') }}
                    </h2>
                </a>
            </div>

            <!-- Card Form -->
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body p-4">
                    @yield('content')
                </div>
            </div>

        </div>

    </div>

</body>
</html>
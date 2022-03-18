<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Tabler -->
    <link rel="stylesheet" href="{{ asset('css/tabler.css') }}">
    <script src="{{ asset('js/tabler.js') }}" defer></script>
    <!-- JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('head')
</head>

<body {{ $attributes->class('border-top-wide border-primary d-flex flex-column') }}>
    <main class="page page-center">
        <div class="container-tight py-4">
            <!-- Logo -->
            <div class="text-center py-4">
                <a href="{{ route('home') }}">
                    <x-application-logo height="36" />
                </a>
            </div>
            <div class="card card-md">
                {{ $slot }}
            </div>

            {{ $footer ?? '' }}
        </div>

    </main>
</body>

</html>

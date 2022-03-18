<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />


    <!-- Tabler -->
    {{-- <link rel="stylesheet" href="{{ asset('css/tabler.css') }}">
    <script src="{{ asset('js/tabler.js') }}" defer></script> --}}
    <script src="https://unpkg.com/@tabler/core@1.0.0-beta9/dist/js/tabler.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/@tabler/core@1.0.0-beta9/dist/css/tabler.min.css">
    <!-- JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @stack('head')
</head>

<body {{ $attributes }}>
    <div class="page">
        @include('layouts.sidebar')

        <main class="page-wrapper">
            <div class="container-fluid">
                {{ $slot }}
            </div>
        </main>
    </div>

    @stack('modals')
    @stack('scripts')
</body>

</html>

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

        <!-- Scripts -->
        {{-- <script>
            document.addEventListener('DOMContentLoaded', function() {
                let timeout;
                const lockScreenTime = 1 * 60 * 1000; // 2 minutos
    
                function resetTimeout() {
                    clearTimeout(timeout);
                    timeout = setTimeout(() => {
                        window.location.href = '{{ route('lock-screen.show') }}';
                    }, lockScreenTime);
                }
    
                document.addEventListener('mousemove', resetTimeout);
                document.addEventListener('keydown', resetTimeout);
                resetTimeout();
            });
        </script> --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{--Inicio do script responsavel por colocar o sistema trancado (Modo inativo)--}}
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>

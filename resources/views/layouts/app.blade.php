<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <livewire:styles />
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-200">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
                <div class="flex flex-wrap bg-gray-200 w-full h-screen">
                    @include('layouts.sidebar')
                    <div class="w-10/12">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>

        <livewire:scripts />
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
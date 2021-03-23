<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,500;1,500&family=Roboto:ital,wght@0,300;0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('dashboard.components.layouts.navigation')
            
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="container py-6 font-mono uppercase text-xl">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main class="py-12">
                <div class="container">
                    <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>

    @stack('scripts')
</html>

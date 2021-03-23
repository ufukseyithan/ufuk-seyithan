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

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-gray-200 bg-default">
        <div>
            <header class="sticky top-0 bg-white bg-opacity-25 z-40">
                <div class="container flex items-center justify-between py-4 sm:py-8">
                    <div class="flex items-center space-x-2">
                        <x-logo/>
                        <i class="hidden text-sm lg:inline">aka Masea</i>
                    </div>
                    <ul class="flex items-center space-x-2 text-black text-xl">
                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-youtube"></i></a></li>
                        <li><a href=""><i class="fab fa-github"></i></a></li>
                    </ul>
                    <div class="flex items-center space-x-2">
                        <a href="mailto:me@ufukseyithanerdem.com" class="underline"><i class="fas fa-envelope"></i> <span class="hidden md:inline">me@ufukseyithanerdem.com</span></a>
                        <span class="hidden lg:inline"><i class="fab fa-discord"></i> Masea#2132</span>
                    </div>
                </div>
                
            </header>


            <main>
                {{ $slot }}
            </main>

            <footer class="container flex flex-col items-center justify-center py-8 space-y-4">
                <p>All rights reserved © {{ now()->year }}</p>
                <ul>
                    <li><a href="{{ route('privacy-policy') }}" class="underline">Privacy Policy</a></li>
                </ul>
            </footer>
        </div>
    </body>
</html>

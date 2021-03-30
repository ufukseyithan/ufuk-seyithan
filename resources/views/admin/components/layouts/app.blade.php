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

        <script src="https://cdn.tiny.cloud/1/fqn71neaueoy7gogyz6z6jt17dklgnq5dzwhz0wyupg2wk4d/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: 'textarea',
                height: 500,
                plugins: 'link image',
                formats: {
                    h1: { block: 'h2', classes: 'font-mono text-2xl'},
                    h2: { block: 'h3', classes: 'font-mono text-xl'},
                    h3: { block: 'h4', classes: 'font-mono text-lg'},
                    h4: { block: 'h5', classes: 'font-mono text-md'},
                    h5: { block: 'h6', classes: 'font-mono text-sm'},
                },
                style_formats: [
                    { title: 'Paragraph', format: 'p' },
                    { title: 'Heading 1', format: 'h1' },
                    { title: 'Heading 2', format: 'h2' },
                    { title: 'Heading 3', format: 'h3' },
                    { title: 'Heading 4', format: 'h4' },
                    { title: 'Heading 5', format: 'h5' },
                ]
            });
        </script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('admin.components.layouts.navigation')
            
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

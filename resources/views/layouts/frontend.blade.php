<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

       <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Work+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
         <!-- Scripts -->
          @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="bg-slate-200 dark:bg-slate-900">
            {{-- Header --}}
            <x-frontend.header></x-frontend.header>
            <main class="min-h-screen">
                {{ $slot }}
            </main>
            {{-- Footer --}}
            <x-frontend.footer></x-frontend.footer>
     
        </div>
    </body>
</html>

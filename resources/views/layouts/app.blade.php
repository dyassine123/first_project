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
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-200">
            @if (session('success'))
               <div x-data="{ showSuccess: true}" x-show="showSuccess" x-init="setTimeout(() => showSuccess = false, 3000)"
                class="p-4  text-sm text-green-700 bg-green-100 rounded-lg  dark:bg-green-200 dark:text-green-800" role="alert">
               <div class="max-w-7xl mx-auto">{{session('success')}}</div> 
             </div>
            @endif
            @if(session('danger'))
              <div x-data="{ showDanger: true}" x-show="showDanger" x-init="setTimeout(() => showDanger = false, 3000)" 
              class="p-4 text-sm text-red-700  bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                <div class="max-w-7xl mx-auto">{{session('danger')}}</div>
              </div>
            @endif
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
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

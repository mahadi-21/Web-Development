<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-indigo-50 via-white to-purple-50">
        <!-- Logo with animation -->
        <div class="mb-6 transform hover:scale-105 transition-transform duration-300">
            
                <x-application-logo class="w-24 h-24 fill-current text-indigo-600 drop-shadow-lg" />
            
        </div>

        <!-- Card with enhanced styling -->
        <div class="w-full sm:max-w-md px-6 py-8 bg-white/90 backdrop-blur-sm shadow-2xl rounded-2xl sm:rounded-3xl border border-white/30 sm:border-2">
            <!-- Optional decorative header -->
            <div class="mb-6 text-center">
                <h2 class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                    Welcome Back
                </h2>
                <p class="text-sm text-gray-600 mt-1">Please sign in to continue</p>
            </div>
            
            <!-- Main content slot -->
            <div class="space-y-6">
                {{ $slot }}
            </div>

            <!-- Optional footer -->
            <div class="mt-6 text-center">
                <p class="text-xs text-gray-500">
                    &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
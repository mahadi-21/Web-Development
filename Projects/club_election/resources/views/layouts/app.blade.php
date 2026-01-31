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

    <link rel="shortcut icon" href="{{ asset('logo of cpc.png') }}" type="image/x-icon">
    <!-- Scripts -->
    <script src="http://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 flex flex-col">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Notification Messages Container -->
        <div class="relative">
            <!-- Success Message -->
            @if(session()->has('success'))
                <div id="success-alert" 
                     class="fixed top-20 right-4 z-50 max-w-md w-full md:max-w-lg animate-fade-in-slide">
                    <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl shadow-lg flex items-start justify-between">
                        <div class="flex items-start flex-1">
                            <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div class="flex-1">
                                <p class="text-green-800 font-medium">Success</p>
                                <p class="text-green-600 text-sm mt-1">{{ session('success') }}</p>
                            </div>
                        </div>
                        <button onclick="closeNotification('success-alert')" 
                                class="text-green-500 hover:text-green-700 ml-4 flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            @endif

            <!-- Error Message -->
            @if(session()->has('error'))
                <div id="error-alert" 
                     class="fixed top-20 right-4 z-50 max-w-md w-full md:max-w-lg animate-fade-in-slide">
                    <div class="p-4 bg-gradient-to-r from-red-50 to-rose-50 border border-red-200 rounded-xl shadow-lg flex items-start justify-between">
                        <div class="flex items-start flex-1">
                            <svg class="w-5 h-5 text-red-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.998-.833-2.732 0L4.346 16.5c-.77.833.192 2.5 1.732 2.5z">
                                </path>
                            </svg>
                            <div class="flex-1">
                                <p class="text-red-800 font-medium">Error</p>
                                <p class="text-red-600 text-sm mt-1">{{ session('error') }}</p>
                            </div>
                        </div>
                        <button onclick="closeNotification('error-alert')" 
                                class="text-red-500 hover:text-red-700 ml-4 flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            @endif

            <!-- Warning Message -->
            @if(session()->has('warning'))
                <div id="warning-alert" 
                     class="fixed top-20 right-4 z-50 max-w-md w-full md:max-w-lg animate-fade-in-slide">
                    <div class="p-4 bg-gradient-to-r from-yellow-50 to-amber-50 border border-yellow-200 rounded-xl shadow-lg flex items-start justify-between">
                        <div class="flex items-start flex-1">
                            <svg class="w-5 h-5 text-yellow-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.998-.833-2.732 0L4.346 16.5c-.77.833.192 2.5 1.732 2.5z">
                                </path>
                            </svg>
                            <div class="flex-1">
                                <p class="text-yellow-800 font-medium">Warning</p>
                                <p class="text-yellow-600 text-sm mt-1">{{ session('warning') }}</p>
                            </div>
                        </div>
                        <button onclick="closeNotification('warning-alert')" 
                                class="text-yellow-500 hover:text-yellow-700 ml-4 flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            @endif

            <!-- Info Message -->
            @if(session()->has('info'))
                <div id="info-alert" 
                     class="fixed top-20 right-4 z-50 max-w-md w-full md:max-w-lg animate-fade-in-slide">
                    <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-xl shadow-lg flex items-start justify-between">
                        <div class="flex items-start flex-1">
                            <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="flex-1">
                                <p class="text-blue-800 font-medium">Information</p>
                                <p class="text-blue-600 text-sm mt-1">{{ session('info') }}</p>
                            </div>
                        </div>
                        <button onclick="closeNotification('info-alert')" 
                                class="text-blue-500 hover:text-blue-700 ml-4 flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            @endif
        </div>

        <style>
            @keyframes fadeInSlide {
                from {
                    opacity: 0;
                    transform: translateX(100%);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes fadeOutSlide {
                from {
                    opacity: 1;
                    transform: translateX(0);
                }
                to {
                    opacity: 0;
                    transform: translateX(100%);
                }
            }

            .animate-fade-in-slide {
                animation: fadeInSlide 0.3s ease-out forwards;
            }

            .animate-fade-out-slide {
                animation: fadeOutSlide 0.3s ease-out forwards;
            }

            /* Stack multiple notifications */
            #success-alert ~ #error-alert,
            #success-alert ~ #warning-alert,
            #success-alert ~ #info-alert,
            #error-alert ~ #warning-alert,
            #error-alert ~ #info-alert,
            #warning-alert ~ #info-alert {
                top: calc(20px + 6rem) !important;
            }
            
            /* For third notification */
            #success-alert ~ #error-alert ~ #warning-alert,
            #success-alert ~ #error-alert ~ #info-alert,
            #success-alert ~ #warning-alert ~ #info-alert {
                top: calc(20px + 12rem) !important;
            }
        </style>

        <script>
            // Function to close notifications
            function closeNotification(id) {
                const alert = document.getElementById(id);
                if (alert) {
                    alert.classList.remove('animate-fade-in-slide');
                    alert.classList.add('animate-fade-out-slide');
                    setTimeout(() => {
                        alert.remove();
                        repositionNotifications();
                    }, 300);
                }
            }

            // Reposition notifications after one is closed
            function repositionNotifications() {
                const notifications = document.querySelectorAll('[id$="-alert"]');
                notifications.forEach((notification, index) => {
                    notification.style.top = `${20 + (index * 6)}rem`;
                });
            }

            // Auto remove alerts after 5 seconds
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(() => {
                    ['success-alert', 'error-alert', 'warning-alert', 'info-alert'].forEach(id => {
                        const alert = document.getElementById(id);
                        if (alert) {
                            closeNotification(id);
                        }
                    });
                }, 5000);
            });
        </script>

        <!-- Page Content -->
        <main class="flex-1">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
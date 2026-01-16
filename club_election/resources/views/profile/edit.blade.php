<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-blue-50 py-8 px-4">
        <!-- Header -->
        <div class="max-w-7xl mx-auto mb-8">
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl shadow-xl py-8 px-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-6 md:mb-0">
                        <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">
                            Profile Settings
                        </h1>
                        <p class="text-blue-100 text-lg">
                            Manage your account settings and preferences
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        @if (Auth::user()->role == 'admin')
                            <a href="{{ route('admin.dashboard') }}"
                                class="px-6 py-3 bg-white text-blue-700 font-semibold rounded-lg hover:bg-blue-50 transition-all duration-300 transform hover:scale-105 shadow-md flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                                Admin Dashboard
                            </a>
                        @else
                            <a href="{{ route('user.dashboard') }}"
                                class="px-6 py-3 bg-white text-blue-700 font-semibold rounded-lg hover:bg-blue-50 transition-all duration-300 transform hover:scale-105 shadow-md flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                                User Dashboard
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto space-y-8">
            <!-- User Profile Card -->
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                    <!-- Profile Picture -->
                    <div class="relative">
                        <div
                            class="h-32 w-32 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center shadow-xl">
                            <span class="text-white text-4xl font-bold">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </span>
                        </div>
                        <div
                            class="absolute bottom-2 right-2 h-8 w-8 rounded-full bg-emerald-500 border-4 border-white flex items-center justify-center shadow-lg">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>

                    <!-- User Info -->
                    <div class="flex-1">
                        <div class="mb-4">
                            <h2 class="text-2xl font-bold text-gray-900">{{ Auth::user()->name }}</h2>
                            <div class="flex items-center gap-4 mt-2">
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                    {{ Auth::user()->email }}
                                </div>
                                <div class="flex items-center">
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium 
                                        {{ Auth::user()->role == 'admin' ? 'bg-purple-100 text-purple-800' : 'bg-blue-100 text-blue-800' }}">
                                        {{ ucfirst(Auth::user()->role) }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Account Stats -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div
                                class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-4 border border-blue-200">
                                <p class="text-sm text-gray-600 font-medium">Member Since</p>
                                <p class="text-lg font-semibold text-gray-900">
                                    {{ Auth::user()->created_at->format('M d, Y') }}
                                </p>
                            </div>
                            <div
                                class="bg-gradient-to-br from-emerald-50 to-green-50 rounded-xl p-4 border border-emerald-200">
                                <p class="text-sm text-gray-600 font-medium">Last Login</p>
                                <p class="text-lg font-semibold text-gray-900">
                                    {{ now()->format('M d, Y') }}
                                </p>
                            </div>
                            <div
                                class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl p-4 border border-amber-200">
                                <p class="text-sm text-gray-600 font-medium">Account Status</p>
                                <p class="text-lg font-semibold text-green-600 flex items-center">
                                    <span class="h-2 w-2 rounded-full bg-green-500 mr-2 animate-pulse"></span>
                                    Active
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @include('profile.partials.update-profile-information-form')



            @include('profile.partials.update-password-form')



            @include('profile.partials.delete-user-form')

            @include('profile.partials.super')


        </div>
    </div>

    <style>
        .bg-gradient-to-br {
            background-position: center;
            background-size: cover;
        }

        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: .5;
            }
        }

        .shadow-xl {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .shadow-lg {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
    </style>
</x-app-layout>
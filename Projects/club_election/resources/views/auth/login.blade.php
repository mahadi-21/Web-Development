<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CPC Club Election</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        /* Custom focus styles */
        input:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
    </style>
</head>

<body class="min-h-screen flex justify-center items-center bg-gradient-to-br from-blue-50 to-gray-100 p-4">
    <div
        class="bg-white shadow-xl rounded-3xl md:w-2/3 w-full max-w-md flex flex-col justify-center items-center py-4 px-6">
        <!-- Logo -->
        <div class="w-full  flex items-center justify-center">
              <img src="{{ asset('logo of cpc.png') }}" alt="Club Logo" class="w-24 h-24">
                    
        </div>

        <!-- Title -->
        <div class="w-full mb-8">
            <h1 class="text-2xl md:text-3xl font-bold text-center text-gray-800">
                Welcome to Online Voting System
            </h1>
            <p class="text-gray-600 text-center mt-2 text-sm">
                CPC Club Election Portal
            </p>
        </div>
        <form action="{{ route('login') }}" method="POST" class="w-full">
            @csrf



            <!-- Show general errors -->
            @if($errors->any())
                <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-red-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-red-700 font-medium">Login failed. Please check your credentials.</p>
                    </div>
                </div>
            @endif

            <!-- Email/Username Field -->
            <div class="w-full mb-5">
                <label class="block text-gray-700 text-sm font-medium mb-2" for="email">
                    Email or Username
                </label>
                <input type="text" id="email" name="email" value="{{ old('email') }}" class="w-full border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} focus:border-blue-500 focus:ring-2 focus:ring-blue-200 
                              outline-none rounded-xl px-4 py-3.5 text-gray-800 transition-all
                              placeholder:text-gray-400" placeholder="Enter your email or username" required>
                @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Field -->
            <div class="w-full mb-6">
                <div class="flex justify-between items-center mb-2">
                    <label class="block text-gray-700 text-sm font-medium" for="password">
                        Password
                    </label>
                </div>
                <input type="password" id="password" name="password" class="w-full border {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }} focus:border-blue-500 focus:ring-2 focus:ring-blue-200 
                              outline-none rounded-xl px-4 py-3.5 text-gray-800 transition-all
                              placeholder:text-gray-400" placeholder="Enter your password" required>
                @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me Checkbox -->
            <div class="w-full mb-7 flex justify-between">
                <div class="flex items-center text-center">
                    <input type="checkbox" id="remember" name="remember"
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="remember" class="ml-3 block text-sm text-gray-700">
                        Remember me
                    </label>
                </div>
                <div>
                    <a href="{{ route('password.request') }}"
                        class="text-blue-600 hover:text-blue-800 text-xs font-medium hover:underline">
                        Forgot Password?
                    </a>
                </div>
            </div>

            <!-- Login Button -->
            <div class="w-full mb-4">
                <button type="submit" class="w-full bg-gradient-to-r from-blue-700 to-blue-900 text-white font-semibold 
                               py-3.5 rounded-xl hover:from-blue-800 hover:to-blue-950 
                               active:scale-[0.95] transition-all duration-500 shadow-md hover:shadow-lg
                               focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Login
                </button>
            </div>

            <!-- Register Link -->
            <div class="w-full text-center pt-4 border-t border-gray-200">
                <p class="text-gray-600 text-sm">
                    Don't have an account?
                    <a href="{{ route('register') }}"
                        class="text-blue-600 hover:text-blue-800 font-semibold ml-1 hover:underline">
                        Create Account
                    </a>
                </p>
            </div>
        </form>

        <!-- Footer Note -->
        <div class="w-full mt-8 text-center">
            <p class="text-xs text-gray-500">
                Secure voting platform • © 2025 CPC, KiU Club Election
            </p>
        </div>
    </div>
</body>

</html>
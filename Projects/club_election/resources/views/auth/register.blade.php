<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - CPC Club Election</title>
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
    
    <!-- Main Container (Same as login page) -->
    <div class="bg-white shadow-xl rounded-3xl md:w-2/3 w-full max-w-xl md:max-w-xl flex flex-col justify-center items-center py-4 px-6">
        
        <!-- Logo -->
        <div class="w-full  flex items-center justify-center">
            <img src="{{ asset('logo of cpc.png') }}" class="w-32 h-32 rounded-full 
                        flex items-center justify-center shadow-lg">
                
        </div>
        
        <!-- Page Title -->
        <div class="w-full ">
            <h1 class="text-2xl md:text-3xl font-bold text-center text-gray-800">
                Create Your Account
            </h1>
            <p class="text-gray-600 text-center mt-2 text-sm">
                Join CPC Club Election Portal
            </p>
        </div>

        <!-- Registration Form -->
        <form method="POST" action="{{ route('register') }}" class="w-full space-y-5">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-gray-700 text-sm font-medium mb-2">
                    Full Name
                </label>
                <input 
                    id="name" 
                    name="name" 
                    type="text" 
                    value="{{ old('name') }}" 
                    required 
                    autofocus 
                    autocomplete="name"
                    class="w-full border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 
                           outline-none rounded-xl px-4 py-3.5 text-gray-800 transition-all
                           placeholder:text-gray-400"
                    placeholder="Enter your full name"
                />
                @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-gray-700 text-sm font-medium mb-2">
                    Email Address
                </label>
                <input 
                    id="email" 
                    name="email" 
                    type="email" 
                    value="{{ old('email') }}" 
                    required 
                    autocomplete="email"
                    class="w-full border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 
                           outline-none rounded-xl px-4 py-3.5 text-gray-800 transition-all
                           placeholder:text-gray-400"
                    placeholder="Enter your email address"
                />
                @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-gray-700 text-sm font-medium mb-2">
                    Password
                </label>
                <input 
                    id="password" 
                    name="password" 
                    type="password" 
                    required 
                    autocomplete="new-password"
                    class="w-full border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 
                           outline-none rounded-xl px-4 py-3.5 text-gray-800 transition-all
                           placeholder:text-gray-400"
                    placeholder="Create a strong password"
                />
                <div class="mt-1 text-xs text-gray-500">
                    Must be at least 8 characters with letters and numbers
                </div>
                @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-gray-700 text-sm font-medium mb-2">
                    Confirm Password
                </label>
                <input 
                    id="password_confirmation" 
                    name="password_confirmation" 
                    type="password" 
                    required 
                    autocomplete="new-password"
                    class="w-full border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 
                           outline-none rounded-xl px-4 py-3.5 text-gray-800 transition-all
                           placeholder:text-gray-400"
                    placeholder="Re-enter your password"
                />
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Terms Agreement -->
            {{-- <div class="flex items-start mt-4">
                <input 
                    type="checkbox" 
                    id="terms" 
                    name="terms" 
                    required
                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded mt-1"
                >
                <label for="terms" class="ml-2 block text-sm text-gray-700">
                    I agree to the 
                    <a href="#" class="text-blue-600 hover:text-blue-800 hover:underline">Terms of Service</a> 
                    and 
                    <a href="#" class="text-blue-600 hover:text-blue-800 hover:underline">Privacy Policy</a>
                </label>
            </div> --}}

            <!-- Submit Button & Login Link -->
            <div class="flex items-center justify-between mt-6 pt-4 border-t border-gray-200">
                <a class="text-blue-600 hover:text-blue-800 hover:underline text-sm font-medium rounded-md 
                          focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition" 
                   href="{{ route('login') }}">
                    Already have an account?
                </a>

                <button type="submit" 
                        class="bg-gradient-to-r from-blue-700 to-blue-900 text-white font-semibold 
                               py-3 px-8 rounded-xl hover:from-blue-800 hover:to-blue-950 
                               active:scale-[0.98] transition-all duration-200 shadow-md hover:shadow-lg
                               focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Create Account
                </button>
            </div>

            <!-- Divider -->
            <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">Or continue with (May be Implement Letter)</span>
                </div>
            </div>

            <!-- Social Login (Optional) -->
            <div class="flex justify-center">
                <button type="button" 
                        class="flex items-center justify-center w-full py-3 px-4 border border-gray-300 
                               rounded-xl hover:bg-gray-50 transition text-gray-700 font-medium">
                    <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                    Sign up with Google 
                </button>
            </div>
        </form>
        
        <!-- Footer Note -->
        <div class="w-full mt-8 text-center">
            <p class="text-xs text-gray-500">
                Secure voting platform • © 2025 CPC,KiU Club Election
            </p>
        </div>
    </div>

</body>
</html>
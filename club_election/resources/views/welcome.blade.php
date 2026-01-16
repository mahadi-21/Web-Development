<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | CPC Club Elections</title>
    
    <!-- ADD THESE META TAGS TO PREVENT CACHING -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .animate-pulse-slow {
            animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        
        /* Hide content for authenticated users */
        .auth-hidden {
            display: none !important;
        }
    </style>
    
    <script>
        // Force page reload when using back button (BFCache)
        window.addEventListener('pageshow', function(event) {
            if (event.persisted) {
                // Page was loaded from cache (back/forward button)
                window.location.reload();
            }
        });

        // Check authentication status on page load
        document.addEventListener('DOMContentLoaded', function() {
            @auth
                // User is logged in - redirect to dashboard after 1 second
                setTimeout(function() {
                    window.location.href = '{{ route("dashboard") }}';
                }, 1000);
                
                // Show redirect message
                const redirectDiv = document.createElement('div');
                redirectDiv.id = 'auth-redirect';
                redirectDiv.className = 'fixed inset-0 bg-white/90 backdrop-blur-sm z-50 flex items-center justify-center';
                redirectDiv.innerHTML = `
                    <div class="text-center p-8 bg-white rounded-2xl shadow-2xl border border-gray-200 max-w-md mx-4">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Already Logged In</h3>
                        <p class="text-gray-600 mb-4">You are already signed in. Redirecting to dashboard...</p>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div id="progress-bar" class="bg-gradient-to-r from-blue-600 to-indigo-600 h-2 rounded-full" style="width: 0%"></div>
                        </div>
                    </div>
                `;
                document.body.appendChild(redirectDiv);
                
                // Animate progress bar
                let width = 0;
                const progressBar = document.getElementById('progress-bar');
                const interval = setInterval(function() {
                    if (width >= 100) {
                        clearInterval(interval);
                    } else {
                        width++;
                        progressBar.style.width = width + '%';
                    }
                }, 10);
            @endauth
            
            // Intercept all auth links for logged-in users
            @auth
                document.addEventListener('click', function(e) {
                    // Check if clicked element is or inside a login/register link
                    const authLink = e.target.closest('a[href*="login"], a[href*="register"]');
                    if (authLink) {
                        e.preventDefault();
                        e.stopPropagation();
                        window.location.href = '{{ route("dashboard") }}';
                        return false;
                    }
                });
            @endauth
        });
    </script>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-0 left-1/4 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow"></div>
        <div class="absolute top-1/2 right-1/4 w-72 h-72 bg-indigo-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow animation-delay-2000"></div>
        <div class="absolute bottom-0 left-1/2 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow animation-delay-4000"></div>
    </div>

    <!-- Main Content - Conditionally shown for guests only -->
    <div class="relative min-h-screen flex flex-col items-center justify-center px-4 py-12 @auth auth-hidden @endauth">
        <!-- Logo and Header -->
        <div class="text-center mb-12 animate-float">
            <div class="mb-8">
                <div class="inline-block p-4 rounded-2xl bg-gradient-to-br from-white to-gray-50 shadow-2xl border border-gray-200/50 mb-6">
                    <img src="{{ asset('logo of cpc.png') }}" alt="CPC Logo" class="w-24 h-24">
                </div>
                <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-blue-700 to-indigo-800 bg-clip-text text-transparent mt-4">
                    CPC Club Elections
                </h1>
                <p class="text-lg text-gray-600 mt-3 max-w-md mx-auto font-medium">
                    Secure Online Voting Platform
                </p>
            </div>
        </div>

        <!-- Welcome Card -->
        <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-2xl border border-white/50 p-8 md:p-12 max-w-lg w-full">
            <!-- Welcome Message -->
            <div class="text-center mb-10">
                <h2 class="text-2xl font-bold text-gray-900 mb-3">
                    Welcome to Digital Democracy
                </h2>
                <p class="text-gray-600 font-medium">
                    Cast your vote securely and help shape the future of CPC Club
                </p>
            </div>

            <!-- Action Buttons - Only show for guests -->
            @guest
                <div class="space-y-5">
                    <!-- Login Button -->
                    <a href="{{ route('login') }}" 
                       id="login-link"
                       class="group relative block w-full">
                        <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl blur opacity-20 group-hover:opacity-30 transition duration-500"></div>
                        <div class="relative flex items-center justify-center px-6 py-4 bg-gradient-to-r from-blue-600 to-indigo-700 text-white font-bold rounded-xl 
                                   hover:from-blue-700 hover:to-indigo-800 transform hover:-translate-y-0.5 
                                   transition-all duration-300 shadow-lg shadow-blue-500/25 hover:shadow-xl hover:shadow-blue-500/40">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                            </svg>
                            Login to Your Account
                        </div>
                    </a>

                    <!-- Create Account Button -->
                    <a href="{{ route('register') }}" 
                       id="register-link"
                       class="group relative block w-full">
                        <div class="absolute -inset-1 bg-gradient-to-r from-emerald-500 to-green-600 rounded-2xl blur opacity-20 group-hover:opacity-30 transition duration-500"></div>
                        <div class="relative flex items-center justify-center px-6 py-4 bg-gradient-to-r from-emerald-500 to-green-600 text-white font-bold rounded-xl 
                                   hover:from-emerald-600 hover:to-green-700 transform hover:-translate-y-0.5 
                                   transition-all duration-300 shadow-lg shadow-emerald-500/25 hover:shadow-xl hover:shadow-emerald-500/40">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                            </svg>
                            Create New Account
                        </div>
                    </a>
                </div>
            @else
                <!-- Show dashboard link for logged-in users (hidden by CSS but as fallback) -->
                <div class="text-center p-6 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border border-green-200">
                    <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Already Signed In</h3>
                    <p class="text-gray-600 mb-4">Redirecting to dashboard...</p>
                    <a href="{{ route('dashboard') }}" 
                       class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-700 text-white font-bold rounded-xl hover:from-blue-700 hover:to-indigo-800 transition-all duration-300">
                        Go to Dashboard
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            @endguest

            <!-- Features -->
            <div class="mt-10 pt-8 border-t border-gray-200/50">
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Secure Voting</span>
                    </div>
                    <div class="flex items-center">
                        <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-indigo-100 flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Instant Results</span>
                    </div>
                    <div class="flex items-center">
                        <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-purple-100 flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Privacy Protected</span>
                    </div>
                    <div class="flex items-center">
                        <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Transparent</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-12 text-center">
            <p class="text-sm text-gray-500 font-medium">
                © 2025 CPC Club Elections • Secure Digital Voting Platform
            </p>
            <p class="text-xs text-gray-400 mt-2">
                Every vote counts in shaping our community's future
            </p>
        </div>
    </div>
</body>
</html>
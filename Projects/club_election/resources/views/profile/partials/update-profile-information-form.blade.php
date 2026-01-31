<section class="bg-gradient-to-br from-white to-blue-50 rounded-2xl p-6 md:p-8 shadow-lg border border-gray-100">
    <header class="mb-8">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">
                    {{ __('Profile Information') }}
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    {{ __("Update your account's profile information and email address.") }}
                </p>
            </div>
            <div class="hidden md:block">
                <div
                    class="h-12 w-12 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Progress Indicator -->
        <div class="mt-6 flex items-center space-x-4">
            <div class="flex-1">
                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                    <div class="h-full bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full transition-all duration-500"
                        style="width: {{ $user->hasVerifiedEmail() ? '100%' : '66%' }}"></div>
                </div>
                <div class="flex justify-between text-xs text-gray-500 mt-1">
                    <span>Basic Info</span>
                    <span>Contact</span>
                    <span>Verification</span>
                </div>
            </div>
            <span
                class="text-xs font-medium px-3 py-1 rounded-full {{ $user->hasVerifiedEmail() ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                {{ $user->hasVerifiedEmail() ? 'Verified' : 'Pending' }}
            </span>
        </div>
    </header>

    <!-- Verification Form (Hidden) -->
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <!-- Main Profile Form -->
    <form method="post" action="{{ route('profile.update') }}" class="space-y-8" id="profile-form">
        @csrf
        @method('patch')

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Name Field -->
            <div class="space-y-3">
                <div class="flex items-center">
                    <label for="name" class="block text-sm font-medium text-gray-700 flex items-center">
                        <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        {{ __('Full Name') }}
                    </label>
                    <span class="ml-2 text-xs text-gray-500">Required</span>
                </div>
                <div class="relative">
                    <x-text-input id="name" name="name" type="text"
                        class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                        :value="old('name', $user->name)" required autofocus autocomplete="name"
                        placeholder="Enter your full name" />
                    <div class="absolute left-3 top-3.5 text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                <p class="text-xs text-gray-500 mt-1">This is how your name will appear across the platform</p>
            </div>

            <!-- Email Field -->
            <div class="space-y-3">
                <div class="flex items-center">
                    <label for="email" class="block text-sm font-medium text-gray-700 flex items-center">
                        <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        {{ __('Email Address') }}
                    </label>
                    <span class="ml-2 text-xs text-gray-500">Required</span>
                </div>
                <div class="relative">
                    <div class="relative">
                        <x-text-input id="email" name="email" type="email"
                            class="w-full pl-10 pr-4 py-3 border border-gray-200 bg-gray-100 text-gray-600 rounded-lg cursor-not-allowed"
                            :value="old('email', $user->email)" required autocomplete="username"
                            placeholder="your.email@example.com" readonly />


                    </div>
                    <div class="absolute left-3 top-3.5 text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                <p class="text-md text-red-400 mt-1 font-bold">
                    Email cannot be changed. We'll send important updates to this email.
                </p>
            </div>
        </div>

        <!-- Email Verification Status -->
        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
            <div class="bg-gradient-to-r from-yellow-50 to-amber-50 border border-yellow-200 rounded-xl p-4 animate-pulse">
                <div class="flex items-start">
                    <svg class="w-5 h-5 text-yellow-600 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.998-.833-2.732 0L4.346 16.5c-.77.833.192 2.5 1.732 2.5z">
                        </path>
                    </svg>
                    <div class="flex-1">
                        <h3 class="text-sm font-medium text-yellow-800">
                            {{ __('Email Verification Required') }}
                        </h3>
                        <p class="mt-1 text-sm text-yellow-700">
                            {{ __('Your email address is not verified. Please verify your email to access all features.') }}
                        </p>
                        <button form="send-verification"
                            class="mt-3 inline-flex items-center px-4 py-2 bg-gradient-to-r from-yellow-500 to-amber-600 text-white text-sm font-medium rounded-lg hover:from-yellow-600 hover:to-amber-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition-all duration-200 transform hover:-translate-y-0.5">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            {{ __('Resend Verification Email') }}
                        </button>
                    </div>
                </div>

                @if (session('status') === 'verification-link-sent')
                    <div class="mt-4 p-3 bg-green-50 border border-green-200 rounded-lg flex items-center animate-fade-in">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-sm text-green-700 font-medium">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </span>
                    </div>
                @endif
            </div>
        @elseif($user->hasVerifiedEmail())
            <div class="bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl p-4">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h3 class="text-sm font-medium text-green-800">
                            {{ __('Email Verified') }}
                        </h3>
                        <p class="text-sm text-green-700">
                            {{ __('Your email address is verified and secure.') }}
                        </p>
                    </div>
                </div>
            </div>
        @endif

        

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-8 border-t border-gray-200">
            <div class="flex items-center space-x-3">
                <button type="submit" id="save-button" class="relative overflow-hidden group">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-600 group-hover:from-blue-700 group-hover:to-indigo-700 transition-all duration-300">
                    </div>
                    <div class="relative flex items-center px-8 py-3 text-sm font-medium text-white">
                        <svg class="w-5 h-5 mr-2" id="save-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4">
                            </path>
                        </svg>
                        <span id="save-text">{{ __('Save Changes') }}</span>
                        <svg id="loading-spinner" class="hidden animate-spin ml-2 h-5 w-5 text-white" fill="none"
                            viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                            </circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                    </div>
                </button>

                @if (session('status') === 'profile-updated')
                    <div x-data="{ show: true }" x-show="show" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform translate-y-2"
                        x-init="setTimeout(() => show = false, 3000)"
                        class="flex items-center px-4 py-2 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-lg">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-sm font-medium text-green-700">{{ __('Profile updated successfully!') }}</span>
                    </div>
                @endif
            </div>

            <button type="reset"
                class="px-6 py-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all duration-200">
                {{ __('Reset Changes') }}
            </button>
        </div>
    </form>
    
</section>

<!-- JavaScript for Enhanced Interactions -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('profile-form');
        const saveButton = document.getElementById('save-button');
        const saveText = document.getElementById('save-text');
        const saveIcon = document.getElementById('save-icon');
        const loadingSpinner = document.getElementById('loading-spinner');

        // Form submission handling
        if (form && saveButton) {
            form.addEventListener('submit', function () {
                // Show loading state
                saveText.textContent = 'Saving...';
                saveIcon.classList.add('hidden');
                loadingSpinner.classList.remove('hidden');
                saveButton.disabled = true;
            });
        }

        // Input validation and real-time feedback
        const inputs = form.querySelectorAll('input[required]');
        inputs.forEach(input => {
            input.addEventListener('input', function () {
                if (this.value.trim() !== '') {
                    this.classList.remove('border-red-300');
                    this.classList.add('border-green-300');
                } else {
                    this.classList.remove('border-green-300');
                    this.classList.add('border-gray-300');
                }
            });

            input.addEventListener('blur', function () {
                if (this.required && !this.value.trim()) {
                    this.classList.add('border-red-300', 'ring-2', 'ring-red-100');
                }
            });

            input.addEventListener('focus', function () {
                this.classList.remove('border-red-300', 'ring-2', 'ring-red-100');
            });
        });

        // Phone number formatting
        const phoneInput = document.getElementById('phone');
        if (phoneInput) {
            phoneInput.addEventListener('input', function (e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length > 0) {
                    if (!value.startsWith('+')) {
                        value = '+' + value;
                    }
                    if (value.length > 3) {
                        value = value.substring(0, 3) + ' ' + value.substring(3);
                    }
                    if (value.length > 7) {
                        value = value.substring(0, 7) + ' ' + value.substring(7);
                    }
                    if (value.length > 12) {
                        value = value.substring(0, 12) + ' ' + value.substring(12);
                    }
                }
                e.target.value = value;
            });
        }

        // Real-time character count for name
        const nameInput = document.getElementById('name');
        if (nameInput) {
            const nameCounter = document.createElement('div');
            nameCounter.className = 'text-xs text-gray-500 mt-1 text-right';
            nameInput.parentNode.appendChild(nameCounter);

            nameInput.addEventListener('input', function () {
                const count = this.value.length;
                nameCounter.textContent = `${count}/50 characters`;

                if (count > 50) {
                    nameCounter.classList.add('text-red-500');
                } else if (count > 40) {
                    nameCounter.classList.add('text-yellow-500');
                } else {
                    nameCounter.classList.remove('text-red-500', 'text-yellow-500');
                }
            });

            // Trigger on load
            nameInput.dispatchEvent(new Event('input'));
        }

        // Email domain suggestion
        const emailInput = document.getElementById('email');
        if (emailInput) {
            const domains = ['gmail.com', 'yahoo.com', 'outlook.com', 'hotmail.com', 'icloud.com'];
            let suggestionTimeout;

            emailInput.addEventListener('input', function () {
                clearTimeout(suggestionTimeout);
                const value = this.value;
                const atIndex = value.indexOf('@');

                if (atIndex > 0 && !value.includes('.', atIndex)) {
                    const prefix = value.substring(0, atIndex);
                    const currentDomain = value.substring(atIndex + 1).toLowerCase();

                    if (currentDomain.length > 0) {
                        suggestionTimeout = setTimeout(() => {
                            const matchingDomain = domains.find(domain =>
                                domain.startsWith(currentDomain)
                            );

                            if (matchingDomain) {
                                const suggestion = prefix + '@' + matchingDomain;
                                // You could show a suggestion tooltip here
                            }
                        }, 500);
                    }
                }
            });
        }
    });
</script>

<!-- Custom Styles -->
<style>
    /* Custom animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.5;
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.5s ease-out;
    }

    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    /* Form styling */
    input:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }

    /* Button hover effects */
    #save-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.4);
    }

    #save-button:active {
        transform: translateY(0);
    }

    /* Smooth transitions */
    input,
    button,
    select {
        transition: all 0.2s ease-in-out;
    }

    /* Custom scrollbar for better UX */
    ::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #a1a1a1;
    }
</style>
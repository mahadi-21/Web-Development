<section class="bg-gradient-to-br from-white to-gray-50 p-8 rounded-2xl shadow-lg border border-gray-200/50">
    <header class="mb-8">
        <div class="flex items-center gap-3 mb-4">
            <div class="h-12 w-12 rounded-full bg-gradient-to-r from-emerald-500 to-green-600 flex items-center justify-center shadow-md">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-900">
                    {{ __('Update Password') }}
                </h2>
                <p class="mt-1 text-gray-600 font-medium">
                    {{ __('Ensure your account is using a long, random password to stay secure.') }}
                </p>
            </div>
        </div>
        
        <!-- Password Strength Tips -->
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-4 border border-blue-200 mt-6">
            <h3 class="text-sm font-semibold text-gray-800 mb-2 flex items-center gap-2">
                <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                </svg>
                Password Requirements
            </h3>
            <div class="grid grid-cols-2 gap-2 text-xs">
                <div class="flex items-center gap-2">
                    <div id="lengthCheck" class="h-2 w-2 rounded-full bg-gray-300"></div>
                    <span class="text-gray-600">At least 8 characters</span>
                </div>
                <div class="flex items-center gap-2">
                    <div id="uppercaseCheck" class="h-2 w-2 rounded-full bg-gray-300"></div>
                    <span class="text-gray-600">Uppercase letter</span>
                </div>
                <div class="flex items-center gap-2">
                    <div id="lowercaseCheck" class="h-2 w-2 rounded-full bg-gray-300"></div>
                    <span class="text-gray-600">Lowercase letter</span>
                </div>
                <div class="flex items-center gap-2">
                    <div id="numberCheck" class="h-2 w-2 rounded-full bg-gray-300"></div>
                    <span class="text-gray-600">Number</span>
                </div>
            </div>
        </div>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-6" id="passwordForm">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div class="relative group">
            <x-input-label for="update_password_current_password" :value="__('Current Password')" class="mb-2 block text-sm font-semibold text-gray-700" />
            <div class="relative">
                <x-text-input 
                    id="update_password_current_password" 
                    name="current_password" 
                    type="password" 
                    class="w-full px-4 py-3 pl-4 pr-12 border border-gray-300/50 rounded-xl focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 bg-white/50 backdrop-blur-sm transition-all duration-300 placeholder:text-gray-400" 
                    autocomplete="current-password"
                    placeholder="Enter your current password"
                />
                <button type="button" 
                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-emerald-600 transition-colors duration-200 p-1"
                        onclick="togglePassword('update_password_current_password', this)">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </button>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <!-- New Password -->
        <div class="relative group">
            <x-input-label for="update_password_password" :value="__('New Password')" class="mb-2 block text-sm font-semibold text-gray-700" />
            <div class="relative">
                <x-text-input 
                    id="update_password_password" 
                    name="password" 
                    type="password" 
                    class="w-full px-4 py-3 pl-4 pr-12 border border-gray-300/50 rounded-xl focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 bg-white/50 backdrop-blur-sm transition-all duration-300 placeholder:text-gray-400" 
                    autocomplete="new-password"
                    placeholder="Create a new password"
                    oninput="checkPasswordStrength(this.value)"
                />
                <button type="button" 
                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-emerald-600 transition-colors duration-200 p-1"
                        onclick="togglePassword('update_password_password', this)">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Password Strength Meter -->
            <div class="mt-3">
                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                    <div id="passwordStrength" class="h-full bg-gray-300 rounded-full transition-all duration-500" style="width: 0%"></div>
                </div>
                <p id="strengthText" class="text-xs text-gray-500 mt-2">Password strength: None</p>
            </div>
            
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="relative group">
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" class="mb-2 block text-sm font-semibold text-gray-700" />
            <div class="relative">
                <x-text-input 
                    id="update_password_password_confirmation" 
                    name="password_confirmation" 
                    type="password" 
                    class="w-full px-4 py-3 pl-4 pr-12 border border-gray-300/50 rounded-xl focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 bg-white/50 backdrop-blur-sm transition-all duration-300 placeholder:text-gray-400" 
                    autocomplete="new-password"
                    placeholder="Confirm your new password"
                    oninput="checkPasswordMatch()"
                />
                <button type="button" 
                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-emerald-600 transition-colors duration-200 p-1"
                        onclick="togglePassword('update_password_password_confirmation', this)">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </button>
            </div>
            <div id="matchMessage" class="hidden text-sm mt-2"></div>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Actions -->
        <div class="flex items-center justify-between gap-4 pt-6 border-t border-gray-200">
            <div class="flex-1">
                @if (session('status') === 'password-updated')
                    <div class="flex items-center text-emerald-600 text-sm font-medium bg-emerald-50 px-4 py-2 rounded-lg border border-emerald-200">
                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        {{ __('Password updated successfully.') }}
                    </div>
                @endif
            </div>
            <x-primary-button class="px-8 py-3 bg-gradient-to-r from-emerald-600 to-green-700 text-white font-semibold rounded-xl hover:from-emerald-700 hover:to-green-800 transition-all duration-300 transform hover:scale-105 shadow-md">
                {{ __('Update Password') }}
            </x-primary-button>
        </div>
    </form>
</section>

<script>
// Toggle password visibility
function togglePassword(inputId, button) {
    const input = document.getElementById(inputId);
    const icon = button.querySelector('svg');
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L6.59 6.59m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
        `;
        button.classList.add('text-emerald-600');
    } else {
        input.type = 'password';
        icon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
        `;
        button.classList.remove('text-emerald-600');
    }
}

// Check password strength
function checkPasswordStrength(password) {
    let strength = 0;
    const meter = document.getElementById('passwordStrength');
    const text = document.getElementById('strengthText');
    
    // Check length
    const lengthCheck = document.getElementById('lengthCheck');
    const uppercaseCheck = document.getElementById('uppercaseCheck');
    const lowercaseCheck = document.getElementById('lowercaseCheck');
    const numberCheck = document.getElementById('numberCheck');
    
    // Reset checks
    lengthCheck.className = 'h-2 w-2 rounded-full bg-gray-300';
    uppercaseCheck.className = 'h-2 w-2 rounded-full bg-gray-300';
    lowercaseCheck.className = 'h-2 w-2 rounded-full bg-gray-300';
    numberCheck.className = 'h-2 w-2 rounded-full bg-gray-300';
    
    // Check criteria
    if (password.length >= 8) {
        strength += 25;
        lengthCheck.className = 'h-2 w-2 rounded-full bg-emerald-500 animate-pulse';
    }
    
    if (/[A-Z]/.test(password)) {
        strength += 25;
        uppercaseCheck.className = 'h-2 w-2 rounded-full bg-emerald-500 animate-pulse';
    }
    
    if (/[a-z]/.test(password)) {
        strength += 25;
        lowercaseCheck.className = 'h-2 w-2 rounded-full bg-emerald-500 animate-pulse';
    }
    
    if (/[0-9]/.test(password)) {
        strength += 25;
        numberCheck.className = 'h-2 w-2 rounded-full bg-emerald-500 animate-pulse';
    }
    
    // Special characters bonus
    if (/[^A-Za-z0-9]/.test(password)) {
        strength = Math.min(strength + 10, 100);
    }
    
    // Update strength meter
    meter.style.width = strength + '%';
    
    // Update color and text based on strength
    if (strength < 25) {
        meter.className = 'h-full bg-red-500 rounded-full transition-all duration-500';
        text.textContent = 'Password strength: Very Weak';
        text.className = 'text-xs text-red-500 mt-2';
    } else if (strength < 50) {
        meter.className = 'h-full bg-orange-500 rounded-full transition-all duration-500';
        text.textContent = 'Password strength: Weak';
        text.className = 'text-xs text-orange-500 mt-2';
    } else if (strength < 75) {
        meter.className = 'h-full bg-yellow-500 rounded-full transition-all duration-500';
        text.textContent = 'Password strength: Fair';
        text.className = 'text-xs text-yellow-500 mt-2';
    } else if (strength < 90) {
        meter.className = 'h-full bg-blue-500 rounded-full transition-all duration-500';
        text.textContent = 'Password strength: Good';
        text.className = 'text-xs text-blue-500 mt-2';
    } else {
        meter.className = 'h-full bg-emerald-500 rounded-full transition-all duration-500';
        text.textContent = 'Password strength: Strong';
        text.className = 'text-xs text-emerald-500 mt-2';
    }
    
    // Check password match
    checkPasswordMatch();
}

// Check password confirmation match
function checkPasswordMatch() {
    const password = document.getElementById('update_password_password').value;
    const confirmPassword = document.getElementById('update_password_password_confirmation').value;
    const message = document.getElementById('matchMessage');
    
    if (confirmPassword === '') {
        message.className = 'hidden';
        return;
    }
    
    if (password === confirmPassword) {
        message.className = 'flex items-center text-emerald-600 text-sm mt-2';
        message.innerHTML = `
            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Passwords match
        `;
    } else {
        message.className = 'flex items-center text-red-600 text-sm mt-2';
        message.innerHTML = `
            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
            Passwords do not match
        `;
    }
}

// Form submission validation
document.getElementById('passwordForm').addEventListener('submit', function(e) {
    const password = document.getElementById('update_password_password').value;
    const confirmPassword = document.getElementById('update_password_password_confirmation').value;
    
    if (password !== confirmPassword) {
        e.preventDefault();
        checkPasswordMatch();
        const confirmInput = document.getElementById('update_password_password_confirmation');
        confirmInput.classList.add('border-red-500', 'focus:border-red-500', 'focus:ring-red-500/30');
        confirmInput.scrollIntoView({ behavior: 'smooth', block: 'center' });
        return false;
    }
    
    return true;
});
</script>

<style>
.animate-pulse {
    animation: pulse 1.5s ease-in-out infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
}

.bg-gradient-to-br {
    background-position: center;
    background-size: cover;
}

.shadow-lg {
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.transition-all {
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 300ms;
}
</style>
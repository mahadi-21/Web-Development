<section class="bg-gradient-to-br from-red-50 to-rose-50 rounded-2xl p-6 md:p-8 shadow-lg border border-red-200">
    <header class="mb-8">
        <div class="flex items-start justify-between">
            <div class="flex-1">
                <div class="flex items-center mb-4">
                    <div class="h-12 w-12 bg-gradient-to-r from-red-500 to-rose-600 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.998-.833-2.732 0L4.346 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">
                            {{ __('Danger Zone') }}
                        </h2>
                        <p class="text-sm text-gray-600 mt-1">
                            {{ __('Irreversible actions that cannot be undone') }}
                        </p>
                    </div>
                </div>
                
                <!-- Warning Banner -->
                <div class="bg-gradient-to-r from-red-100 to-rose-100 border border-red-300 rounded-xl p-4 mb-6">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-red-600 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.998-.833-2.732 0L4.346 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                        <div>
                            <h3 class="text-sm font-semibold text-red-800 mb-1">
                                {{ __('⚠️ Permanent Account Deletion') }}
                            </h3>
                            <p class="text-sm text-red-700">
                                {{ __('Once your account is deleted, all of your data will be permanently removed. This includes your profile, academic records, and all associated content.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

 
    <!-- Backup Recommendation -->
    {{-- <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-xl p-5 mb-8">
        <div class="flex items-start">
            <svg class="w-5 h-5 text-blue-600 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
            </svg>
            <div class="flex-1">
                <h3 class="text-sm font-semibold text-blue-800 mb-2">
                    {{ __('Before you proceed, consider these alternatives') }}
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-3">
                    <a href="#" class="flex items-center p-3 bg-white border border-blue-200 rounded-lg hover:bg-blue-50 transition-all duration-200 group">
                        <svg class="w-5 h-5 text-blue-500 mr-3 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        <span class="text-sm font-medium text-gray-700">Download Data Export</span>
                    </a>
                    <a href="#" class="flex items-center p-3 bg-white border border-blue-200 rounded-lg hover:bg-blue-50 transition-all duration-200 group">
                        <svg class="w-5 h-5 text-blue-500 mr-3 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="text-sm font-medium text-gray-700">Account Settings</span>
                    </a>
                    <a href="#" class="flex items-center p-3 bg-white border border-blue-200 rounded-lg hover:bg-blue-50 transition-all duration-200 group">
                        <svg class="w-5 h-5 text-blue-500 mr-3 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        <span class="text-sm font-medium text-gray-700">Contact Support</span>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Delete Account Button -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-6 border-t border-red-200">
        <div class="flex-1">
            <p class="text-sm text-gray-600">
                {{ __('If you understand the consequences and still wish to proceed, click the button below.') }}
            </p>
        </div>
        
        <button
            x-data="{
                confirmations: 0,
                isConfirmed: false,
                showPasswordField: false
            }"
            x-on:click="if(confirmations < 2) { 
                confirmations++; 
                if(confirmations === 2) { 
                    isConfirmed = true; 
                    showPasswordField = true;
                    $nextTick(() => $refs.passwordInput?.focus());
                }
            } else {
                $dispatch('open-modal', 'confirm-user-deletion')
            }"
            :class="{
                'bg-gradient-to-r from-red-500 to-rose-600 hover:from-red-600 hover:to-rose-700': confirmations === 0,
                'bg-gradient-to-r from-orange-500 to-amber-600 hover:from-orange-600 hover:to-amber-700': confirmations === 1,
                'bg-gradient-to-r from-red-700 to-rose-800 hover:from-red-800 hover:to-rose-900': confirmations === 2,
                'animate-pulse': confirmations === 2
            }"
            class="relative overflow-hidden group px-8 py-3 text-sm font-medium text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all duration-200 transform hover:-translate-y-0.5"
        >
            <template x-if="confirmations === 0">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                    {{ __('Delete Account') }}
                </div>
            </template>
            <template x-if="confirmations === 1">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.998-.833-2.732 0L4.346 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                    </svg>
                    {{ __('Are you sure? Click again to confirm') }}
                </div>
            </template>
            <template x-if="confirmations === 2">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.998-.833-2.732 0L4.346 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                    </svg>
                    {{ __('Final Confirmation Required') }}
                </div>
            </template>
            <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
        </button>
    </div>

    <!-- Password Confirmation (Initially Hidden) -->
    <div x-show="showPasswordField" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform -translate-y-4"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-4"
        class="mt-6 p-5 bg-white border border-red-300 rounded-xl shadow-sm">
        <h3 class="text-sm font-semibold text-red-800 mb-3">
            {{ __('Final Step: Enter your password to confirm deletion') }}
        </h3>
        <div class="space-y-4">
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                    {{ __('Current Password') }}
                    <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <input
                        x-ref="passwordInput"
                        id="password"
                        name="password"
                        type="password"
                        class="w-full px-4 py-3 border border-red-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all duration-200 pr-10"
                        placeholder="Enter your password"
                        required
                    />
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                </div>
                <p class="text-xs text-gray-500 mt-2">
                    {{ __('Enter your current password to verify your identity and permanently delete your account.') }}
                </p>
            </div>
            
            <!-- Final Confirmation Checkbox -->
            <div class="flex items-start">
                <input
                    id="final-confirmation"
                    name="final_confirmation"
                    type="checkbox"
                    class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded mt-1 mr-3"
                    required
                />
                <label for="final-confirmation" class="text-sm text-gray-700">
                    <span class="font-medium text-red-700">I understand this action cannot be undone.</span>
                    <span class="block text-gray-600 mt-1">I confirm that I want to permanently delete my account and all associated data.</span>
                </label>
            </div>
            
            <div class="flex justify-end space-x-3 pt-4">
                <button
                    type="button"
                    x-on:click="confirmations = 0; showPasswordField = false;"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all duration-200"
                >
                    {{ __('Cancel') }}
                </button>
                <button
                    type="button"
                    x-on:click="$dispatch('open-modal', 'confirm-user-deletion')"
                    class="px-6 py-2.5 text-sm font-medium text-white bg-gradient-to-r from-red-600 to-rose-700 rounded-lg hover:from-red-700 hover:to-rose-800 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all duration-200 transform hover:-translate-y-0.5"
                >
                    {{ __('Proceed to Delete') }}
                </button>
            </div>
        </div>
    </div>

    <!-- Modal (Updated) -->
    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6" id="delete-form">
            @csrf
            @method('delete')
            
            <div class="text-center mb-6">
                <div class="mx-auto h-16 w-16 bg-gradient-to-r from-red-100 to-rose-100 rounded-full flex items-center justify-center mb-4">
                    <svg class="h-8 w-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900">
                    {{ __('Final Confirmation') }}
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    {{ __('This is your last chance to cancel. After this, deletion cannot be reversed.') }}
                </p>
            </div>

            <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6">
                <div class="flex items-start">
                    <svg class="w-5 h-5 text-red-600 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.998-.833-2.732 0L4.346 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                    </svg>
                    <div>
                        <h3 class="text-sm font-semibold text-red-800">
                            {{ __('⚠️ Immediate and Permanent Deletion') }}
                        </h3>
                        <p class="text-sm text-red-700 mt-1">
                            {{ __('All your data will be permanently removed within 24 hours. No recovery option will be available.') }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div>
                    <label for="modal-password" class="block text-sm font-medium text-gray-700 mb-2">
                        {{ __('Enter your password to confirm') }}
                    </label>
                    <div class="relative">
                        <input
                            id="modal-password"
                            name="password"
                            type="password"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all duration-200 pr-10"
                            placeholder="Your current password"
                            required
                            autocomplete="current-password"
                        />
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                </div>

                <div class="flex items-start">
                    <input
                        id="delete-confirmation"
                        name="delete_confirmation"
                        type="checkbox"
                        class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded mt-1 mr-3"
                        required
                    />
                    <label for="delete-confirmation" class="text-sm text-gray-700">
                        {{ __('I understand that this action is permanent and cannot be undone.') }}
                    </label>
                </div>
            </div>

            <div class="mt-8 flex flex-col sm:flex-row justify-end gap-3">
                <button
                    type="button"
                    x-on:click="$dispatch('close')"
                    class="order-2 sm:order-1 px-6 py-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all duration-200"
                >
                    {{ __('Cancel') }}
                </button>
                <button
                    type="submit"
                    id="delete-account-button"
                    class="order-1 sm:order-2 relative overflow-hidden group px-8 py-3 text-sm font-medium text-white bg-gradient-to-r from-red-600 to-rose-700 rounded-lg hover:from-red-700 hover:to-rose-800 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all duration-200"
                >
                    <span id="delete-text">{{ __('Delete Account Permanently') }}</span>
                    <svg id="delete-spinner" class="hidden animate-spin ml-2 h-5 w-5 text-white inline" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </div>
        </form>
    </x-modal>
</section>

<!-- JavaScript for Enhanced Interactions -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form submission handling
        const deleteForm = document.getElementById('delete-form');
        const deleteButton = document.getElementById('delete-account-button');
        const deleteText = document.getElementById('delete-text');
        const deleteSpinner = document.getElementById('delete-spinner');
        
        if (deleteForm && deleteButton) {
            deleteForm.addEventListener('submit', function(e) {
                const password = document.getElementById('modal-password').value;
                const confirmation = document.getElementById('delete-confirmation').checked;
                
                if (!password || !confirmation) {
                    e.preventDefault();
                    
                    if (!password) {
                        document.getElementById('modal-password').classList.add('border-red-500', 'ring-2', 'ring-red-100');
                    }
                    if (!confirmation) {
                        document.getElementById('delete-confirmation').classList.add('ring-2', 'ring-red-100');
                    }
                    
                    return;
                }
                
                // Show loading state
                deleteText.textContent = 'Deleting Account...';
                deleteSpinner.classList.remove('hidden');
                deleteButton.disabled = true;
            });
        }
        
        // Password visibility toggle
        const passwordInputs = document.querySelectorAll('input[type="password"]');
        passwordInputs.forEach(input => {
            const parent = input.parentElement;
            const eyeIcon = parent.querySelector('svg');
            
            if (eyeIcon) {
                eyeIcon.addEventListener('click', function() {
                    const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                    input.setAttribute('type', type);
                    
                    // Toggle eye icon
                    this.classList.toggle('text-gray-400');
                    this.classList.toggle('text-blue-500');
                    
                    // Change icon
                    if (type === 'text') {
                        this.innerHTML = `
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L6.59 6.59m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                        `;
                    } else {
                        this.innerHTML = `
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        `;
                    }
                });
            }
        });
        
        // Countdown timer for reconsideration
        let countdown = 10; // 10 seconds
        const deleteBtn = document.querySelector('button[x-on\\:click*="confirmations"]');
        
        if (deleteBtn && deleteBtn.hasAttribute('x-data')) {
            // Add countdown for the final step
            deleteBtn.addEventListener('click', function() {
                const data = Alpine.evaluate(this, '{ confirmations, isConfirmed }');
                if (data.confirmations === 2 && !data.isConfirmed) {
                    const countdownElement = document.createElement('div');
                    countdownElement.className = 'text-xs text-red-600 font-medium mt-2';
                    countdownElement.textContent = `You have ${countdown} seconds to cancel`;
                    
                    this.parentElement.appendChild(countdownElement);
                    
                    const countdownInterval = setInterval(() => {
                        countdown--;
                        countdownElement.textContent = `You have ${countdown} seconds to cancel`;
                        
                        if (countdown <= 0) {
                            clearInterval(countdownInterval);
                            countdownElement.remove();
                            countdown = 10; // Reset for next time
                        }
                    }, 1000);
                }
            });
        }
        
        // Add shake animation for errors
        const errorShake = function(element) {
            element.classList.add('animate-shake');
            setTimeout(() => {
                element.classList.remove('animate-shake');
            }, 500);
        };
        
        // Listen for validation errors
        const errorMessages = document.querySelectorAll('.text-red-600');
        errorMessages.forEach(error => {
            const input = error.previousElementSibling;
            if (input && input.tagName === 'INPUT') {
                errorShake(input);
            }
        });
    });
</script>

<!-- Custom Styles -->
<style>
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }
    
    .animate-shake {
        animation: shake 0.5s ease-in-out;
    }
    
    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    
    /* Custom scrollbar for modal */
    .modal-content::-webkit-scrollbar {
        width: 8px;
    }
    
    .modal-content::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }
    
    .modal-content::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 4px;
    }
    
    .modal-content::-webkit-scrollbar-thumb:hover {
        background: #a1a1a1;
    }
    
    /* Smooth transitions */
    button, input, a {
        transition: all 0.2s ease-in-out;
    }
    
    /* Focus styles for accessibility */
    :focus {
        outline: none;
        ring-width: 2px;
    }
    
    /* Hover effects for safety */
    button:hover {
        transform: translateY(-2px);
    }
    
    button:active {
        transform: translateY(0);
    }
</style>
<x-guest-layout>
    <div class="max-w-md   mx-auto mt-4">
        <!-- Card Container -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Decorative Header -->
            <div class="relative bg-gradient-to-r from-indigo-600 to-purple-600 h-32">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="bg-white/20 backdrop-blur-sm rounded-full p-4">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0">
                    <svg class="w-full text-white" viewBox="0 0 500 20" preserveAspectRatio="none">
                        <path d="M0,0 L0,20 Q250,30 500,20 L500,0 Z" fill="currentColor"></path>
                    </svg>
                </div>
            </div>

            <!-- Content -->
            <div class="px-8 py-8">
                <!-- Header -->
                <div class="text-center mb-8">
                    <h1 class="text-2xl font-bold text-gray-900 mb-2">
                        Verify Your Email
                    </h1>
                    <p class="text-gray-600 mb-1">
                        Enter the 6-digit code sent to
                    </p>
                    <p class="text-indigo-600 font-medium">
                        {{ auth()->user()->email }}
                    </p>
                </div>

                <!-- Success Message -->
                @if (session('status') == 'otp-sent')
                    <div
                        class="mb-6 p-4 bg-gradient-to-r from-emerald-50 to-green-50 border border-emerald-200 rounded-xl flex items-center animate-fade-in">
                        <svg class="w-5 h-5 text-emerald-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-emerald-700 font-medium">A new OTP has been sent to your email!</span>
                    </div>
                @endif

                <!-- Timer Display -->
                <div class="mb-6">
                    <div class="flex items-center justify-center space-x-2 text-sm text-gray-600">
                        <svg id="timer-icon" class="w-4 h-4 animate-spin" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>OTP expires in <span id="countdown" class="font-semibold text-red-600">10:00</span></span>
                    </div>

                    <!-- Progress Bar -->
                    <div class="mt-2 w-full bg-gray-200 rounded-full h-1.5">
                        <div id="timer-progress"
                            class="bg-gradient-to-r from-green-400 via-yellow-400 to-red-500 h-1.5 rounded-full transition-all duration-300"
                            style="width: 100%"></div>
                    </div>
                </div>

                <!-- OTP Input Form -->
                <form method="POST" action="{{ route('otp.verify') }}" id="otp-form" class="space-y-6">
                    @csrf

                    <!-- OTP Inputs -->
                    <div class="space-y-3">
                        <label class="block text-sm font-medium text-gray-700">
                            Enter 6-digit verification code
                        </label>

                        <div class="flex justify-between space-x-2" id="otp-container">
                            @for($i = 0; $i < 6; $i++)
                                <input type="text" name="otp[]" maxlength="1"
                                    class="otp-digit w-12 h-14 text-center text-2xl font-bold bg-gray-50 border-2 border-gray-300 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition-all duration-200"
                                    data-index="{{ $i }}" onkeyup="moveToNext(this, event)"
                                    onkeydown="handleBackspace(this, event)" autocomplete="off" inputmode="numeric" />
                            @endfor
                        </div>

                        <!-- Hidden field for full OTP -->
                        <input type="hidden" name="full_otp" id="full_otp">

                        @error('otp')
                            <div class="flex items-center justify-center text-red-600 text-sm mt-2 animate-pulse">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" id="verify-btn" class="w-full relative overflow-hidden group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 group-hover:from-indigo-700 group-hover:to-purple-700 transition-all duration-300">
                        </div>
                        <div class="relative flex items-center justify-center py-3 px-4 text-sm font-medium text-white">
                            <span id="btn-text">Verify OTP</span>
                            <svg id="loading-icon" class="hidden animate-spin ml-2 h-4 w-4 text-white" fill="none"
                                viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </div>
                    </button>
                </form>

                <!-- Divider -->
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Need another code?</span>
                    </div>
                </div>

                <!-- Resend Button -->
                <form method="POST" action="{{ route('otp.resend') }}">
                    @csrf
                    <button type="submit" id="resend-btn" disabled
                        class="w-full py-3 px-4 border-2 border-dashed border-gray-300 rounded-lg text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 hover:border-indigo-300 hover:text-indigo-700 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed flex items-center justify-center group">
                        <svg class="w-4 h-4 mr-2 text-gray-400 group-hover:text-indigo-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                        <span id="resend-text">Resend OTP (<span id="resend-timer">0:00</span>)</span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    @php
      
        $expiresAt = $user->email_otp_expires_at ;
        $expiresTimestamp = $expiresAt->timestamp;
    @endphp

    <script>
        const otpExpireTime = {{ $expiresTimestamp }} * 1000; // JS timestamp in ms
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const otpDigits = document.querySelectorAll('.otp-digit');
            const fullOtpInput = document.getElementById('full_otp');
            const verifyBtn = document.getElementById('verify-btn');
            const btnText = document.getElementById('btn-text');
            const loadingIcon = document.getElementById('loading-icon');
            const resendBtn = document.getElementById('resend-btn');
            const resendText = document.getElementById('resend-text');
            const countdownElement = document.getElementById('countdown');
            const timerProgress = document.getElementById('timer-progress');
            const timerIcon = document.getElementById('timer-icon');

            let canResend = false;
            let timerInterval;

            otpDigits[0].focus();

            // Start countdown based on database expiry
            function startTimer() {
                clearInterval(timerInterval);
                timerInterval = setInterval(updateTimer, 1000);
                updateTimer();
            }

            function updateTimer() {
                const now = Date.now();
                let timeLeft = Math.floor((otpExpireTime - now) / 1000); // seconds

                if (timeLeft <= 0) {
                    timeLeft = 0;
                    clearInterval(timerInterval);
                    resendBtn.disabled = false;
                    canResend = true;
                }

                const minutes = Math.floor(timeLeft / 60);
                const seconds = timeLeft % 60;
                countdownElement.textContent = `${minutes}:${seconds.toString().padStart(2, '0')}`;

                // Progress bar
                const totalTime = Math.floor((otpExpireTime - (otpExpireTime - timeLeft * 1000)) / 1000) || 600;
                const progressPercent = (timeLeft / totalTime) * 100;
                timerProgress.style.width = `${progressPercent}%`;

                // Color changes
                if (timeLeft <= 60) {
                    timerProgress.classList.remove('from-green-400', 'via-yellow-400');
                    timerProgress.classList.add('from-red-500', 'to-red-500');
                    countdownElement.classList.add('animate-pulse');
                    timerIcon.classList.add('text-red-500');
                } else if (timeLeft <= 180) {
                    timerProgress.classList.remove('from-green-400');
                    timerProgress.classList.add('from-yellow-400', 'to-yellow-400');
                }
            }

            startTimer();

            window.moveToNext = function (current, event) {
                const index = parseInt(current.dataset.index);
                if (!/^[0-9]$/.test(event.key)) {
                    current.value = '';
                    event.preventDefault();
                    return;
                }
                if (index < otpDigits.length - 1) otpDigits[index + 1].focus();
                updateFullOTP();
            };

            window.handleBackspace = function (current, event) {
                const index = parseInt(current.dataset.index);
                if (event.key === 'Backspace' && current.value === '' && index > 0) {
                    otpDigits[index - 1].focus();
                }
                updateFullOTP();
            };

            function updateFullOTP() {
                fullOtpInput.value = Array.from(otpDigits).map(d => d.value).join('');
                if (fullOtpInput.value.length === 6) document.getElementById('otp-form').submit();
            }

            document.addEventListener('paste', function (e) {
                const pastedData = (e.clipboardData || window.clipboardData).getData('Text').trim();
                if (/^\d{6}$/.test(pastedData)) {
                    e.preventDefault();
                    for (let i = 0; i < 6; i++) otpDigits[i].value = pastedData[i];
                    otpDigits[5].focus();
                    updateFullOTP();
                }
            });

            verifyBtn.addEventListener('click', function (e) {
                const otp = fullOtpInput.value;
                if (otp.length === 6) {
                    btnText.textContent = 'Verifying...';
                    loadingIcon.classList.remove('hidden');
                    verifyBtn.disabled = true;
                } else {
                    e.preventDefault();
                    shakeOTPInputs();
                }
            });

            function shakeOTPInputs() {
                otpDigits.forEach(d => {
                    d.classList.add('animate-shake', 'border-red-500');
                    setTimeout(() => {
                        d.classList.remove('animate-shake', 'border-red-500');
                        d.classList.add('border-gray-300');
                    }, 500);
                });
            }

            otpDigits.forEach(d => {
                d.addEventListener('focus', function () {
                    this.classList.add('ring-2', 'ring-indigo-200', 'scale-105', 'border-indigo-500');
                });
                d.addEventListener('blur', function () {
                    this.classList.remove('ring-2', 'ring-indigo-200', 'scale-105', 'border-indigo-500');
                });
            });

            resendBtn.addEventListener('click', function () {
                if (canResend) {
                    // Reset timer (can fetch new expiry timestamp from backend)
                    location.reload();
                }
            });
        });
    </script>

    <style>
        @keyframes shake {0%,100%{transform:translateX(0);}25%{transform:translateX(-5px);}75%{transform:translateX(5px);}}
        @keyframes fadeIn {from{opacity:0;transform:translateY(-10px);} to{opacity:1;transform:translateY(0);}}
        @keyframes bounceX {0%,100%{transform:translateX(0);}50%{transform:translateX(5px);}}
        .animate-shake {animation: shake 0.5s ease-in-out;}
        .animate-fade-in {animation: fadeIn 0.5s ease-out;}
        .animate-bounce-x {animation: bounceX 1s infinite;}
        .otp-digit:focus {transform: scale(1.05);transition: all 0.2s ease;}
        #verify-btn {border-radius:0.75rem;overflow:hidden;transition: all 0.3s ease;}
        #verify-btn:hover {transform: translateY(-2px);box-shadow: 0 10px 25px -5px rgba(99, 102, 241, 0.4);}
        #resend-btn:not(:disabled):hover {transform: translateY(-1px);box-shadow: 0 4px 12px -2px rgba(99, 102, 241, 0.2);}
    </style>
</x-guest-layout>

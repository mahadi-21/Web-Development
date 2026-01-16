<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-blue-50 py-8 px-4">
        <div class="max-w-7xl mx-auto">
            <!-- Membership Form -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200">
                <!-- Form Header -->
                <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-8 py-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-xl font-bold text-white">Membership Application</h2>
                            <p class="text-blue-100 text-sm mt-1">Fill in your details to join the club</p>
                        </div>
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg px-3 py-1">
                            <a href="{{ route('user.dashboard') }}" class="text-white text-sm font-medium">Back to Dashboard</a>
                        </div>
                    </div>
                </div>

                <!-- Form Content -->
                <form method="POST" action="" id="membershipForm" class="p-8">
                    @csrf

                    <!-- Personal Information Section -->
                    <div class="mb-10">
                        <div class="flex items-center mb-6">
                            <div class="h-8 w-8 bg-gradient-to-r from-blue-100 to-blue-200 rounded-full flex items-center justify-center mr-3">
                                <span class="text-blue-600 font-bold">1</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800">Personal Information</h3>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Full Name -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">
                                    Full Name
                                </label>
                                <input type="text" 
                                       value="{{ Auth::user()->name }}" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50 cursor-not-allowed"
                                       disabled>
                                <p class="text-xs text-gray-500">Your name from profile</p>
                            </div>

                            <!-- Email -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">
                                    Email Address
                                </label>
                                <input type="email" 
                                       value="{{ Auth::user()->email }}" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50 cursor-not-allowed"
                                       disabled>
                                <p class="text-xs text-gray-500">Your email from profile</p>
                            </div>
                        </div>
                    </div>

                    <!-- Academic Information Section -->
                    <div class="mb-10">
                        <div class="flex items-center mb-6">
                            <div class="h-8 w-8 bg-gradient-to-r from-green-100 to-green-200 rounded-full flex items-center justify-center mr-3">
                                <span class="text-green-600 font-bold">2</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800">Academic Information</h3>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Department -->
                            <div class="space-y-2">
                                <label for="department" class="block text-sm font-medium text-gray-700">
                                    Department <span class="text-red-500">*</span>
                                </label>
                                <select id="department" name="department" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 appearance-none bg-white">
                                    <option value="">Select Department</option>
                                    <option value="Computer Science & Engineering" {{ old('department') == 'Computer Science & Engineering' ? 'selected' : '' }}>
                                        Computer Science & Engineering
                                    </option>
                                   
                                    <option value="Mathematics" {{ old('department') == 'Mathematics' ? 'selected' : '' }}>
                                        Mathematics
                                    </option>
                                    <option value="English" {{ old('department') == 'English' ? 'selected' : '' }}>
                                        English
                                    </option>
                                    <option value="Accounting" {{ old('department') == 'Accounting' ? 'selected' : '' }}>
                                        Accounting
                                    </option>
                                    <option value="Other" {{ old('department') == 'Other' ? 'selected' : '' }}>
                                        Other Department
                                    </option>
                                </select>
                                @error('department')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Year of Study -->
                            <div class="space-y-2">
                                <label for="year_of_study" class="block text-sm font-medium text-gray-700">
                                    Year of Study <span class="text-red-500">*</span>
                                </label>
                                <select id="year_of_study" name="year_of_study" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 appearance-none bg-white">
                                    <option value="">Select Year</option>
                                    <option value="1" {{ old('year_of_study') == '1' ? 'selected' : '' }}>1st Year</option>
                                    <option value="2" {{ old('year_of_study') == '2' ? 'selected' : '' }}>2nd Year</option>
                                    <option value="3" {{ old('year_of_study') == '3' ? 'selected' : '' }}>3rd Year</option>
                                    <option value="4" {{ old('year_of_study') == '4' ? 'selected' : '' }}>4th Year</option>
                                    
                                </select>
                                @error('year_of_study')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Semester -->
                            <div class="space-y-2">
                                <label for="semester" class="block text-sm font-medium text-gray-700">
                                    Semester <span class="text-red-500">*</span>
                                </label>
                                <select id="semester" name="semester" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 appearance-none bg-white">
                                    <option value="">Select Semester</option>
                                    <option value="1" {{ old('semester') == '1' ? 'selected' : '' }}>1st Semester</option>
                                    <option value="2" {{ old('semester') == '2' ? 'selected' : '' }}>2nd Semester</option>
                                  
                                </select>
                                @error('semester')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                   
                    <!-- Terms & Conditions -->
                    <div class="mb-8 p-4 bg-gradient-to-r from-yellow-50 to-amber-50 border border-yellow-200 rounded-lg">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-yellow-600 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.998-.833-2.732 0L4.346 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                            </svg>
                            <div class="flex-1">
                                <h4 class="text-sm font-medium text-yellow-800 mb-2">Important Information</h4>
                                <ul class="text-sm text-yellow-700 space-y-1">
                                    <li>• Membership approval may take 1-2 business days</li>
                                    <li>• You must be a current student of the university</li>
                                    <li>• Club membership gives you voting rights in club elections</li>
                                    <li>• Regular attendance in club activities is encouraged</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-6 border-t border-gray-200">
                    
                        
                        <div class="flex items-center space-x-4">
                          
                            
                            <button type="submit" id="submitBtn"
                                    class="px-8 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105 flex items-center">
                                <svg id="submitIcon" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                                <span id="submitText">Submit Application</span>
                                <svg id="loadingSpinner" class="hidden animate-spin ml-2 h-5 w-5 text-white" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Benefits Section -->
            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow-md p-6 border border-blue-100">
                    <div class="h-12 w-12 bg-gradient-to-r from-blue-100 to-blue-200 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-800 mb-2">Voting Rights</h4>
                    <p class="text-sm text-gray-600">Participate in club elections and have a say in leadership decisions.</p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 border border-green-100">
                    <div class="h-12 w-12 bg-gradient-to-r from-green-100 to-green-200 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-800 mb-2">Event Access</h4>
                    <p class="text-sm text-gray-600">Get priority access to workshops, competitions, and social events.</p>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 border border-purple-100">
                    <div class="h-12 w-12 bg-gradient-to-r from-purple-100 to-purple-200 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-3.5a6 6 0 11-12 0 6 6 0 0112 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-800 mb-2">Networking</h4>
                    <p class="text-sm text-gray-600">Connect with like-minded students and industry professionals.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('membershipForm');
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            const submitIcon = document.getElementById('submitIcon');
            const loadingSpinner = document.getElementById('loadingSpinner');
            const departmentSelect = document.getElementById('department');

            // Form submission handling
            if (form && submitBtn) {
                form.addEventListener('submit', function () {
                    // Show loading state
                    submitText.textContent = 'Submitting...';
                    submitIcon.classList.add('hidden');
                    loadingSpinner.classList.remove('hidden');
                    submitBtn.disabled = true;
                });
            }

            // Custom department input for "Other" option
            const customDepartmentContainer = document.createElement('div');
            customDepartmentContainer.className = 'mt-2 hidden';
            customDepartmentContainer.innerHTML = `
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Specify Your Department
                </label>
                <input type="text" name="custom_department" 
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                       placeholder="Enter your department name">
            `;

            departmentSelect.parentNode.appendChild(customDepartmentContainer);

            departmentSelect.addEventListener('change', function () {
                if (this.value === 'Other') {
                    customDepartmentContainer.classList.remove('hidden');
                    customDepartmentContainer.classList.add('block');
                    customDepartmentContainer.querySelector('input').focus();
                } else {
                    customDepartmentContainer.classList.remove('block');
                    customDepartmentContainer.classList.add('hidden');
                }
            });

            // Club card hover effects
            const clubCards = document.querySelectorAll('.club-card');
            clubCards.forEach(card => {
                card.addEventListener('mouseenter', function () {
                    this.style.transform = 'translateY(-2px)';
                });
                
                card.addEventListener('mouseleave', function () {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Form validation
            const requiredFields = form.querySelectorAll('[required]');
            requiredFields.forEach(field => {
                field.addEventListener('change', function () {
                    validateField(this);
                });
                
                field.addEventListener('blur', function () {
                    validateField(this);
                });
            });

            function validateField(field) {
                if (field.required && !field.value.trim()) {
                    field.classList.add('border-red-300', 'ring-2', 'ring-red-100');
                } else {
                    field.classList.remove('border-red-300', 'ring-2', 'ring-red-100');
                    field.classList.add('border-green-300');
                    
                    // Remove green border after 2 seconds
                    setTimeout(() => {
                        field.classList.remove('border-green-300');
                    }, 2000);
                }
            }

            // Clubs validation
            const clubCheckboxes = form.querySelectorAll('input[name="clubs[]"]');
            const clubsContainer = document.querySelector('[name="clubs[]"]').closest('.space-y-2');

            form.addEventListener('submit', function (e) {
                let atLeastOneChecked = false;
                clubCheckboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        atLeastOneChecked = true;
                    }
                });

                if (!atLeastOneChecked) {
                    e.preventDefault();
                    clubsContainer.classList.add('ring-2', 'ring-red-200', 'p-3', 'rounded-lg');
                    alert('Please select at least one club to join.');
                }
            });
        });

      
    </script>

    <style>
        .club-card {
            transition: all 0.3s ease;
        }
        
        .club-card:hover {
            transform: translateY(-2px);
        }
        
        select:focus, textarea:focus, input:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        
        .animate-spin {
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
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
</x-app-layout>
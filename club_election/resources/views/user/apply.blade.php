<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-blue-50 py-8 px-4">

        <!-- Header -->
        <div class="max-w-7xl mx-auto mb-8">
            <div class="bg-gradient-to-r from-emerald-600 to-green-700 rounded-2xl shadow-xl py-8 px-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-6 md:mb-0">
                        <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">
                            Apply for Committee Member
                        </h1>
                        <p class="text-emerald-100 text-lg">
                            Join the leadership team and make a difference in our club
                        </p>
                    </div>
                    <a href="{{ route('user.dashboard') }}"
                        class="px-6 py-3 bg-white text-emerald-700 font-semibold rounded-lg hover:bg-emerald-50 transition-all duration-300 transform hover:scale-105 shadow-md flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Back
                    </a>
                </div>
            </div>
        </div>
         @if ($is_pending )
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                <div class="text-center py-12">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-emerald-100 mb-6">
                        <svg class="w-10 h-10 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">
                        Application Submitted
                    </h2>
                    
                    <p class="text-gray-600 mb-6 max-w-md mx-auto">
                        You have already applied for 
                        <span class="font-semibold text-emerald-700">{{ $existingApplication->position->name }}</span> 
                        position in 
                        <span class="font-semibold text-emerald-700">{{ $existingApplication->committee->name }}</span> 
                        committee.
                    </p>

                    <!-- Application Details Card -->
                    <div class="bg-gray-50 rounded-xl p-6 max-w-md mx-auto mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Application Details</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center py-2 border-b border-gray-200">
                                <span class="text-gray-600">Committee:</span>
                                <span class="font-medium text-gray-800">{{ $existingApplication->committee->name }}</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-gray-200">
                                <span class="text-gray-600">Position:</span>
                                <span class="font-medium text-gray-800">{{ $existingApplication->position->name }}</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-gray-200">
                                <span class="text-gray-600">Applied On:</span>
                                <span class="font-medium text-gray-800">
                                    {{ $existingApplication->created_at->format('F d, Y') }}
                                </span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <span class="text-gray-600">Approve Status:</span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
                                    @if($existingApplication->is_approve === true) bg-yellow-100 text-yellow-800
                                    @elseif($existingApplication->is_approve === false) bg-red-100 text-red-800
                                    @endif">
                                    {{ ucfirst($existingApplication->is_approve ? 'approved' : 'pending') }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('user.dashboard') }}"
                            class="px-6 py-3 bg-emerald-600 text-white font-semibold rounded-lg hover:bg-emerald-700 transition-all duration-300 shadow-md flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Go to Dashboard
                        </a>
                        
                        <a href=""
                            class="px-6 py-3 border border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-all duration-300 shadow flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            View All Applications
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @elseif ($is_rejected)
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                <div class="text-center py-12">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-red-100 mb-6">
                        <svg class="w-10 h-10 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1.293-4.707a1 1 0 011.414 0L10 13.414l1.293-1.293a1 1 0 111.414 1.414L11.414 15l1.293 1.293a1 1 0 01-1.414 1.414L10 16.586l-1.293 1.293a1 1 0 01-1.414-1.414L8.586 15l-1.293-1.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">
                        Application Rejected
                    </h2>
                    
                    <p class="text-gray-600 mb-6 max-w-md mx-auto">
                        We regret to inform you that your application for 
                        <span class="font-semibold text-red-700">{{ $existingApplication->position->name }}</span> 
                        position in 
                        <span class="font-semibold text-red-700">{{ $existingApplication->committee->name }}</span> 
                        committee has been rejected.
                    </p>
                     <div class="bg-gray-50 rounded-xl p-6 max-w-md mx-auto mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Application Details</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center py-2 border-b border-gray-200">
                                <span class="text-gray-600">Committee:</span>
                                <span class="font-medium text-gray-800">{{ $existingApplication->committee->name }}</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-gray-200">
                                <span class="text-gray-600">Position:</span>
                                <span class="font-medium text-gray-800">{{ $existingApplication->position->name }}</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-gray-200">
                                <span class="text-gray-600">Applied On:</span>
                                <span class="font-medium text-gray-800">
                                    {{ $existingApplication->created_at->format('F d, Y') }}
                                </span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <span class="text-gray-600">Approve Status:</span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
                                  bg-red-100 text-red-800
                                    ">
                                    {{ ucfirst($existingApplication->is_rejected ? 'rejected' : 'pending') }}
                                </span>
                            </div>
                        </div>
                    </div>


                    <!-- Actions -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                      
                        <a href="{{ route('user.dashboard') }}"
                            class="px-6 py-3 border border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-green-400 transition-all duration-300 shadow flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Go to Dashboard
                        </a>
                    </div>
                </div>
            </div>

        </div>

           
        @else
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column: Form -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                            <svg class="w-7 h-7 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                    clip-rule="evenodd" />
                            </svg>
                            Application Form
                        </h2>

                        <form id="applicationForm" class="space-y-6" method="post" action="{{ route('appy.for.role') }}"
                            enctype="multipart/form-data">
                            @csrf

                            <!-- Committee Preference -->
                            <div class="border-b border-gray-200 pb-6">
                                <h3 class="text-xl font-semibold text-gray-700 mb-4">Committee Preference</h3>

                                <div class="space-y-4">
                                    <!-- Committee Select -->
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2" for="preferredCommittee">
                                            Preferred Committee *
                                        </label>
                                        <select id="preferredCommittee" name="committee_id" required
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-300">
                                            <option value="">Select Preferred Committee</option>
                                            @foreach ($committees as $committee)
                                                <option value="{{ $committee->id }}">{{ $committee->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Positions -->
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-3">
                                            Select Position You're Applying For *
                                        </label>

                                        <div id="positionsContainer">
                                            <p class="text-gray-500 text-sm">
                                                Please select a committee first.
                                            </p>
                                        </div>

                                        <!-- Error message container -->
                                        <div id="positionError"
                                            class="hidden mt-2 p-2 bg-red-50 border border-red-200 rounded-lg">
                                            <p class="text-sm text-red-600 flex items-center">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Please select a position.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Experience & Motivation -->
                            <div class="border-b border-gray-200 pb-6">
                                <h3 class="text-xl font-semibold text-gray-700 mb-4">Experience & Motivation</h3>

                                <div class="space-y-6">
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2" for="previousExperience">
                                            Previous Club/Leadership Experience
                                        </label>
                                        <textarea id="previousExperience" name="previous_experience" rows="3"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-300"
                                            placeholder="Describe any previous leadership roles or club experiences..."></textarea>
                                    </div>

                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2" for="motivation">
                                            Why do you want to join the committee?
                                        </label>
                                        <textarea id="motivation" name="motivation" rows="4"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-300"
                                            placeholder="Share your motivation and what you hope to achieve..."></textarea>
                                    </div>

                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2" for="skills">
                                            Relevant Skills & Expertise
                                        </label>
                                        <textarea id="skills" name="skills" rows="3"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-300"
                                            placeholder="List your skills that would contribute to the committee..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Documents Upload -->
                            <div class="pb-6">
                                <h3 class="text-xl font-semibold text-gray-700 mb-4">Documents</h3>

                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2" for="photo">
                                            Recent Photo of You *
                                        </label>

                                        <!-- Preview Container (Initially Hidden) -->
                                        <div id="photoPreviewContainer" class="hidden mb-4">
                                            <div class="relative inline-block">
                                                <img id="photoPreview"
                                                    class="w-48 h-48 object-cover rounded-xl shadow-lg border-2 border-emerald-300">
                                                <button type="button" onclick="removePhoto()"
                                                    class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center hover:bg-red-600 transition-colors shadow-lg">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                                <div class="text-xs text-gray-500 mt-2 text-center">Click image to
                                                    change</div>
                                            </div>
                                        </div>

                                        <!-- Upload Area (Initially Visible) -->
                                        <div id="uploadArea"
                                            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-emerald-500 transition-all duration-300">
                                            <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                    fill="none" viewBox="0 0 48 48">
                                                    <path
                                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <div class="flex text-sm text-gray-600">
                                                    <label for="photo"
                                                        class="relative cursor-pointer bg-white rounded-md font-medium text-emerald-600 hover:text-emerald-500 focus-within:outline-none">
                                                        <span>Upload photo</span>
                                                        <input id="photo" name="photo" type="file" class="sr-only"
                                                            accept="image/*" required onchange="previewPhoto(event)">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs text-gray-500">
                                                    JPG, PNG up to 1MB
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Error Message -->
                                        <div id="photoError"
                                            class="hidden mt-2 p-2 bg-red-50 border border-red-200 rounded-lg">
                                            <p class="text-sm text-red-600 flex items-center">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <span id="errorText">Please upload a valid image file (JPG, PNG, max
                                                    1MB)</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Terms & Submit -->
                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="terms" name="terms" type="checkbox" required
                                            class="w-4 h-4 text-emerald-600 border-gray-300 rounded focus:ring-emerald-500">
                                    </div>
                                    <label for="terms" class="ml-3 text-sm text-gray-700">
                                        I certify that all information provided is accurate and complete. I understand
                                        that any false information may lead to disqualification from the selection
                                        process.
                                    </label>
                                </div>

                                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                                    <button type="submit"
                                        class="flex-1 py-3 bg-gradient-to-r from-emerald-600 to-green-700 text-white font-semibold rounded-lg hover:from-emerald-700 hover:to-green-800 transition-all duration-300 transform hover:scale-105 shadow-md flex items-center justify-center gap-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Submit Application
                                    </button>

                                    <button type="button" onclick="resetForm()"
                                        class="flex-1 py-3 bg-gray-100 text-gray-700 font-semibold rounded-lg hover:bg-gray-200 transition-all duration-300 transform hover:scale-105 shadow">
                                        Reset Form
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right Column: Information & Status -->
                <div class="lg:col-span-1">
                    <!-- Application Status -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Application Status
                        </h3>

                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-3 bg-emerald-50 rounded-lg">
                                <span class="text-gray-700 font-medium">Application Deadline</span>
                                <span class="font-bold text-emerald-700">Dec 30, 2024</span>
                            </div>

                            <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                                <span class="text-gray-700 font-medium">Interview Dates</span>
                                <span class="font-bold text-blue-700">Jan 5-10, 2025</span>
                            </div>

                            <div class="flex items-center justify-between p-3 bg-purple-50 rounded-lg">
                                <span class="text-gray-700 font-medium">Results Announcement</span>
                                <span class="font-bold text-purple-700">Jan 15, 2025</span>
                            </div>
                        </div>
                    </div>

                    <!-- Important Instructions -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <svg class="w-6 h-6 text-amber-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd" />
                            </svg>
                            Important Instructions
                        </h3>

                        <ul class="space-y-3">
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">All fields marked with * are mandatory</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">CGPA must be 2.75 or above to apply</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">You may apply for one position only</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Keep your Student ID ready for verification</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Application can't be edited after submission</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Information -->
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-6 border border-blue-200">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Need Help?</h3>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Email</p>
                                    <p class="font-medium text-gray-800">committee@club.edu</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Phone</p>
                                    <p class="font-medium text-gray-800">+880 1234 567890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Main Content -->
        
    </div>
    <script>
        function previewPhoto(event) {
            const fileInput = event.target;
            const file = fileInput.files[0];
            const photoError = document.getElementById('photoError');
            const errorText = document.getElementById('errorText');
            const uploadArea = document.getElementById('uploadArea');
            const previewContainer = document.getElementById('photoPreviewContainer');
            const previewImage = document.getElementById('photoPreview');

            // Reset error
            photoError.classList.add('hidden');

            // Validate file
            if (!file) {
                return;
            }

            // Check file type
            const validTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
            if (!validTypes.includes(file.type)) {
                errorText.textContent = 'Please upload a valid image file (JPG, PNG, GIF)';
                photoError.classList.remove('hidden');
                fileInput.value = '';
                return;
            }

            // Check file size (1MB = 1048576 bytes)
            if (file.size > 1048576) {
                errorText.textContent = 'File size must be less than 1MB';
                photoError.classList.remove('hidden');
                fileInput.value = '';
                return;
            }

            // Create preview
            const reader = new FileReader();
            reader.onload = function (e) {
                previewImage.src = e.target.result;
                previewContainer.classList.remove('hidden');
                uploadArea.classList.add('hidden');
            }
            reader.readAsDataURL(file);
        }

        function removePhoto() {
            const fileInput = document.getElementById('photo');
            const uploadArea = document.getElementById('uploadArea');
            const previewContainer = document.getElementById('photoPreviewContainer');

            fileInput.value = '';
            previewContainer.classList.add('hidden');
            uploadArea.classList.remove('hidden');
        }

        // Allow clicking on preview to change image
        document.getElementById('photoPreview').addEventListener('click', function () {
            document.getElementById('photo').click();
        });

        // Drag and drop functionality
        const uploadArea = document.getElementById('uploadArea');

        uploadArea.addEventListener('dragover', function (e) {
            e.preventDefault();
            uploadArea.classList.add('border-emerald-500', 'bg-emerald-50');
        });

        uploadArea.addEventListener('dragleave', function (e) {
            e.preventDefault();
            uploadArea.classList.remove('border-emerald-500', 'bg-emerald-50');
        });

        uploadArea.addEventListener('drop', function (e) {
            e.preventDefault();
            uploadArea.classList.remove('border-emerald-500', 'bg-emerald-50');

            const fileInput = document.getElementById('photo');
            if (e.dataTransfer.files.length) {
                fileInput.files = e.dataTransfer.files;
                const event = new Event('change');
                fileInput.dispatchEvent(event);
            }
        });

        // Form validation for photo
        document.getElementById('applicationForm').addEventListener('submit', function (e) {
            const fileInput = document.getElementById('photo');
            const photoError = document.getElementById('photoError');
            const errorText = document.getElementById('errorText');

            if (!fileInput.files.length) {
                e.preventDefault();
                errorText.textContent = 'Please upload a photo';
                photoError.classList.remove('hidden');
                uploadArea.scrollIntoView({ behavior: 'smooth' });
                return false;
            }

            photoError.classList.add('hidden');
            return true;
        });
    </script>

    <style>
        /* Additional styles for preview */
        #photoPreview {
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        #photoPreview:hover {
            transform: scale(1.05);
        }

        /* Style for drag and drop active state */
        .drag-active {
            background-color: rgba(16, 185, 129, 0.1) !important;
            border-color: #10b981 !important;
        }
    </style>

    <script>
        const committees = @json($committees);
        const committeeSelect = document.getElementById('preferredCommittee');
        const positionsContainer = document.getElementById('positionsContainer');
        const positionError = document.getElementById('positionError');

        // Load positions when committee is selected
        committeeSelect.addEventListener('change', function () {
            const committeeId = this.value;
            positionsContainer.innerHTML = '';
            positionError.classList.add('hidden');

            if (!committeeId) {
                positionsContainer.innerHTML = '<p class="text-gray-500 text-sm">Please select a committee first.</p>';
                return;
            }

            const committee = committees.find(c => c.id == committeeId);

            if (!committee || !committee.positions || committee.positions.length === 0) {
                positionsContainer.innerHTML = '<p class="text-gray-500 text-sm">No positions available for this committee.</p>';
                return;
            }

            // Create position radio buttons
            let positionsHTML = '';

            // Add specific positions as radio buttons
            committee.positions.forEach(position => {
                positionsHTML += `
                    <label class="flex items-center p-3 mb-2 border border-gray-300 rounded-lg hover:bg-emerald-50 cursor-pointer transition-all duration-300">
                        <input type="radio" name="position_id" value="${position.id}"
                            class="w-5 h-5 text-emerald-600 rounded-full focus:ring-emerald-500">
                        <span class="ml-3 text-gray-700">${position.name}</span>
                    </label>
                `;
            });

            positionsContainer.innerHTML = positionsHTML;
        });

        // Form submission validation
        document.getElementById('applicationForm').addEventListener('submit', function (e) {
            // Check if position is selected
            const selectedPosition = document.querySelector('input[name="position_id"]:checked');
            if (!selectedPosition) {
                e.preventDefault();
                positionError.classList.remove('hidden');
                positionsContainer.scrollIntoView({ behavior: 'smooth' });
                return false;
            }

            positionError.classList.add('hidden');
            return true;
        });

        // Reset Form
        function resetForm() {
            if (confirm('Are you sure you want to reset the form? All entered data will be lost.')) {
                document.getElementById('applicationForm').reset();
                positionsContainer.innerHTML = '<p class="text-gray-500 text-sm">Please select a committee first.</p>';
                positionError.classList.add('hidden');
                document.querySelectorAll('.border-red-500').forEach(el => {
                    el.classList.remove('border-red-500');
                });
            }
        }

        // Auto-hide error when position is selected
        document.addEventListener('change', function (e) {
            if (e.target.name === 'position_id') {
                positionError.classList.add('hidden');
            }
        });

        // Form field validation
        document.querySelectorAll('input, textarea, select').forEach(field => {
            field.addEventListener('input', function () {
                if (this.value.trim()) {
                    this.classList.remove('border-red-500');
                }
            });

            field.addEventListener('change', function () {
                if (this.value.trim()) {
                    this.classList.remove('border-red-500');
                }
            });
        });
    </script>

    <style>
        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(5, 150, 105, 0.1);
        }

        .border-red-500 {
            border-color: #ef4444 !important;
        }

        /* Style for radio buttons */
        input[type="radio"]:checked {
            background-color: currentColor;
            border-color: currentColor;
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }
    </style>
</x-app-layout>
<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Header -->
            <div class="mb-8">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 rounded-xl p-6 shadow-lg">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                        <div>
                            <h1 class="text-3xl font-bold text-white">Edit Committee</h1>
                            <p class="text-green-100 mt-2">Update committee information, roles, and settings</p>
                        </div>
                        <a href="{{ route('committees') }}"
                            class="mt-4 sm:mt-0 px-4 py-2 bg-white/20 text-white rounded-lg hover:bg-white/30 text-sm font-medium flex items-center transition-colors duration-200">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Back to Committees
                        </a>
                    </div>
                </div>
            </div>

            <!-- Committee Information -->
            <div class="bg-white rounded-xl shadow overflow-hidden border border-gray-200 mb-6">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h2 class="text-xl font-bold text-gray-900">{{ $committee->name }}</h2>
                            <p class="text-gray-600">Committee ID: #{{ str_pad($committee->id, 3, '0', STR_PAD_LEFT) }}</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
                                {{ $committee->status == 'active' ? 'bg-green-100 text-green-800' : 
                                   ($committee->status == 'inactive' ? 'bg-red-100 text-red-800' : 'bg-yellow-100 text-yellow-800') }}">
                                <svg class="w-2 h-2 mr-1.5" fill="currentColor" viewBox="0 0 8 8">
                                    <circle cx="4" cy="4" r="3" />
                                </svg>
                                {{ ucfirst($committee->status) }}
                            </span>
                            <span class="text-gray-500">•</span>
                            <span class="text-sm text-gray-600">
                                Created {{ $committee->created_at->diffForHumans() }}
                            </span>
                        </div>
                    </div>

                    <!-- Edit Form -->
                    <form id="editCommitteeForm" method="POST" action="{{ route('committee.positions.store') }}">
                        @csrf
                        
                        <input type="hidden" name="id" value="{{ $committee->id }}">
                        <div class="space-y-8">
                            <!-- Basic Information -->
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4 pb-2 border-b border-gray-200">Basic Information</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Committee Name <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" 
                                               name="name" 
                                               value="{{ old('name', $committee->name) }}"
                                               required
                                               class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors duration-200">
                                        @error('name')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                                        <select name="status"
                                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors duration-200">
                                            <option value="active" {{ $committee->status == 'active' ? 'selected' : '' }}>Active</option>
                                            <option value="inactive" {{ $committee->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                            <option value="pending" {{ $committee->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        </select>
                                        @error('status')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Description -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                                <textarea name="description" 
                                          rows="4"
                                          class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors duration-200"
                                          placeholder="Describe the purpose, responsibilities, and objectives of this committee">{{ old('description', $committee->description) }}</textarea>
                                @error('description')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Election Settings -->
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4 pb-2 border-b border-gray-200">Election Settings</h3>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Is Electionable
                                        </label>
                                        <select name="is_electionable" 
                                                onchange="toggleElectionDate(this.value)"
                                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors duration-200">
                                            <option value="1" {{ $committee->is_electionable ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ !$committee->is_electionable ? 'selected' : '' }}>No</option>
                                        </select>
                                    </div>

                                    <div id="electionDateField">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Election Date <span class="text-red-500">*</span>
                                        </label>
                                        <input type="date" 
                                               name="election_date" 
                                               value="{{ old('election_date', $committee->election_date ? \Carbon\Carbon::parse($committee->election_date)->format('Y-m-d') : '') }}"
                                               min="{{ date('Y-m-d') }}"
                                               class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors duration-200">
                                        @error('election_date')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    
                                </div>
                            </div>

                            <!-- Committee Positions -->
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4 pb-2 border-b border-gray-200">Committee Positions</h3>
                                <p class="text-sm text-gray-600 mb-6">
                                    Select which positions are available for this committee. Members can be assigned to these positions.
                                </p>
                                
                                @if($positions->isEmpty())
                                    <div class="text-center py-8 bg-gray-50 rounded-lg border border-gray-200">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                            </path>
                                        </svg>
                                        <h3 class="mt-2 text-sm font-medium text-gray-900">No positions created yet</h3>
                                        <p class="mt-1 text-sm text-gray-500">Create positions first to assign them to committees.</p>
                                        <div class="mt-6">
                                            <a href="{{ route('positions.create') }}"
                                                class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                                <svg class="-ml-1 mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                                </svg>
                                                Create Positions
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                        @foreach($positions as $position)
                                            <div class="position-card {{ in_array($position->id, $selectedPositions) ? 'bg-green-50 border-green-200' : 'bg-gray-50 border-gray-200' }} border rounded-lg p-4 transition-colors duration-200 hover:border-green-300">
                                                <div class="flex items-start justify-between">
                                                    <div class="flex items-start space-x-3">
                                                        <div class="relative">
                                                            <input type="checkbox" 
                                                                   id="position_{{ $position->id }}" 
                                                                   name="positions[]" 
                                                                   value="{{ $position->id }}"
                                                                   {{ in_array($position->id, $selectedPositions) ? 'checked' : '' }}
                                                                   class="absolute h-5 w-5 opacity-0 cursor-pointer position-checkbox">
                                                            <div class="position-checkbox-display h-5 w-5 border-2 {{ in_array($position->id, $selectedPositions) ? 'bg-green-500 border-green-500' : 'bg-white border-gray-300' }} rounded flex items-center justify-center transition-colors duration-200">
                                                                @if(in_array($position->id, $selectedPositions))
                                                                    <svg class="h-3 w-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                                                    </svg>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <label for="position_{{ $position->id }}" class="block">
                                                                <span class="font-medium text-gray-900 cursor-pointer">{{ $position->name }}</span>
                                                                <div class="flex items-center space-x-2 mt-1">
                                                                    @if($position->is_electionable)
                                                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">
                                                                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                            </svg>
                                                                            Electionable
                                                                        </span>
                                                                    @endif
                                                                    <span class="text-xs text-gray-500">
                                                                        ID: #{{ str_pad($position->id, 3, '0', STR_PAD_LEFT) }}
                                                                    </span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="{{ in_array($position->id, $selectedPositions) ? 'text-green-500' : 'text-gray-300' }} transition-colors duration-200">
                                                        @if($position->is_electionable)
                                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                            </svg>
                                                        @else
                                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                                                </path>
                                                            </svg>
                                                        @endif
                                                    </div>
                                                </div>
                                                
                                                <!-- Position Statistics -->
                                                @php
                                                    $positionMemberCount = 0;
                                                @endphp
                                                @if($positionMemberCount > 0 && in_array($position->id, $selectedPositions))
                                                    <div class="mt-3 pt-3 border-t border-gray-200">
                                                        <p class="text-xs text-gray-600">
                                                            Currently assigned: <span class="font-medium">{{ $positionMemberCount }} member(s)</span>
                                                        </p>
                                                    </div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                    
                                    <!-- Position Management Info -->
                                    <div class="mt-6 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                                        <div class="flex items-start">
                                            <svg class="h-5 w-5 text-blue-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <div>
                                                <p class="text-sm text-blue-800 font-medium">Position Management</p>
                                                <p class="text-xs text-blue-600 mt-1">
                                                    • Electionable positions can be filled through elections<br>
                                                    • Non-electionable positions are appointed by committee leadership<br>
                                                    • Each position can have multiple members (except leadership roles)<br>
                                                    • Changes here affect current and future committee members
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @error('positions')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                @endif
                            </div>

                            <!-- Committee Settings -->
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4 pb-2 border-b border-gray-200">Committee Settings</h3>
                                <div class="space-y-6">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                                Maximum Members
                                            </label>
                                            <input type="number" 
                                                   name="max_members" 
                                                   value="{{ old('max_members', $committee->max_members ?? 15) }}"
                                                   min="1"
                                                   max="50"
                                                   class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors duration-200">
                                            <p class="mt-1 text-xs text-gray-500">Maximum number of members allowed (including all roles)</p>
                                            @error('max_members')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                                Voting Required (%)
                                            </label>
                                            <input type="number" 
                                                   name="voting_threshold" 
                                                   value="{{ old('voting_threshold', $committee->voting_threshold ?? 75) }}"
                                                   min="50"
                                                   max="100"
                                                   class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors duration-200">
                                            <p class="mt-1 text-xs text-gray-500">Percentage required for committee decisions</p>
                                            @error('voting_threshold')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                                Meeting Frequency
                                            </label>
                                            <select name="meeting_frequency"
                                                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors duration-200">
                                                <option value="weekly" {{ $committee->meeting_frequency == 'weekly' ? 'selected' : '' }}>Weekly</option>
                                                <option value="biweekly" {{ $committee->meeting_frequency == 'biweekly' ? 'selected' : '' }}>Bi-weekly</option>
                                                <option value="monthly" {{ $committee->meeting_frequency == 'monthly' ? 'selected' : '' }}>Monthly</option>
                                                <option value="quarterly" {{ $committee->meeting_frequency == 'quarterly' ? 'selected' : '' }}>Quarterly</option>
                                                <option value="as_needed" {{ $committee->meeting_frequency == 'as_needed' ? 'selected' : '' }}>As Needed</option>
                                            </select>
                                            @error('meeting_frequency')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                                Term Duration (Months)
                                            </label>
                                            <input type="number" 
                                                   name="term_duration" 
                                                   value="{{ old('term_duration', $committee->term_duration ?? 12) }}"
                                                   min="1"
                                                   max="36"
                                                   class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors duration-200">
                                            <p class="mt-1 text-xs text-gray-500">Committee term duration in months</p>
                                            @error('term_duration')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Permissions -->
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4 pb-2 border-b border-gray-200">Permissions</h3>
                                <div class="space-y-4">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div class="space-y-3">
                                            <div class="flex items-center">
                                                <input type="checkbox" 
                                                       id="allow_self_nomination" 
                                                       name="allow_self_nomination"
                                                       value="1"
                                                       {{ $committee->allow_self_nomination ? 'checked' : '' }}
                                                       class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                                                <label for="allow_self_nomination" class="ml-2 block text-sm text-gray-900">
                                                    Allow self-nomination for positions
                                                </label>
                                            </div>
                                            
                                            <div class="flex items-center">
                                                <input type="checkbox" 
                                                       id="require_approval" 
                                                       name="require_approval"
                                                       value="1"
                                                       {{ $committee->require_approval ? 'checked' : '' }}
                                                       class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                                                <label for="require_approval" class="ml-2 block text-sm text-gray-900">
                                                    Require approval for new members
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <div class="space-y-3">
                                            <div class="flex items-center">
                                                <input type="checkbox" 
                                                       id="allow_voting" 
                                                       name="allow_voting"
                                                       value="1"
                                                       {{ $committee->allow_voting ? 'checked' : '' }}
                                                       class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                                                <label for="allow_voting" class="ml-2 block text-sm text-gray-900">
                                                    Allow members to vote on decisions
                                                </label>
                                            </div>
                                            
                                            <div class="flex items-center">
                                                <input type="checkbox" 
                                                       id="send_notifications" 
                                                       name="send_notifications"
                                                       value="1"
                                                       {{ $committee->send_notifications ? 'checked' : '' }}
                                                       class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                                                <label for="send_notifications" class="ml-2 block text-sm text-gray-900">
                                                    Send email notifications for committee updates
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex flex-col sm:flex-row items-center justify-between mt-8 pt-6 border-t border-gray-200">
                            <div class="mb-4 sm:mb-0">
                                <button type="button" 
                                        onclick="window.location.href='{{ route('committees') }}'"
                                        class="px-5 py-2.5 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 text-sm font-medium transition-colors duration-200">
                                    Cancel
                                </button>
                            </div>
                            
                            <div class="flex space-x-3">
                                <button type="button"
                                        onclick="previewChanges()"
                                        class="px-5 py-2.5 border border-blue-300 bg-blue-50 text-blue-700 rounded-lg hover:bg-blue-100 text-sm font-medium transition-colors duration-200 flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg>
                                    Preview Changes
                                </button>
                                
                                <button type="submit"
                                        class="px-5 py-2.5 bg-gradient-to-r from-green-600 to-emerald-600 text-white rounded-lg hover:from-green-700 hover:to-emerald-700 text-sm font-medium transition-colors duration-200 flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Update Committee
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Danger Zone -->
            <div class="bg-white rounded-xl shadow overflow-hidden border border-red-200">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-red-800 mb-4">Danger Zone</h3>
                    <p class="text-gray-600 mb-6">
                        These actions are irreversible. Please proceed with caution.
                    </p>
                    
                    <div class="space-y-4">
                        <!-- Delete Committee -->
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between p-4 bg-red-50 rounded-lg">
                            <div class="mb-3 sm:mb-0">
                                <h4 class="font-medium text-red-800">Delete Committee</h4>
                                <p class="text-sm text-red-600">
                                    Permanently delete this committee and all its data. This action cannot be undone.
                                    @if($committee->members_count > 0)
                                        <br><span class="font-medium">Warning: This committee has {{ $committee->members_count }} members.</span>
                                    @endif
                                </p>
                            </div>
                            <button type="button"
                                    onclick="deleteCommittee()"
                                    class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 text-sm font-medium transition-colors duration-200">
                                Delete Committee
                            </button>
                        </div>

                        <!-- Transfer Ownership -->
                        @if($committee->members_count > 1)
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between p-4 bg-yellow-50 rounded-lg">
                                <div class="mb-3 sm:mb-0">
                                    <h4 class="font-medium text-yellow-800">Transfer Ownership</h4>
                                    <p class="text-sm text-yellow-600">Transfer committee ownership to another member.</p>
                                </div>
                                <button type="button"
                                        onclick="transferOwnership()"
                                        class="px-4 py-2 bg-white text-yellow-600 border border-yellow-300 rounded-lg hover:bg-yellow-50 text-sm font-medium transition-colors duration-200">
                                    Transfer Ownership
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Preview Modal -->
    <div id="previewModal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 overflow-y-auto z-50">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                                Preview Changes
                            </h3>
                            <div class="mt-2">
                                <div id="previewContent" class="text-gray-700">
                                    <!-- Preview content will be loaded here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" 
                            onclick="submitForm()"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Looks Good, Update Now
                    </button>
                    <button type="button" 
                            onclick="closePreviewModal()"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Make More Changes
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize election date visibility
        document.addEventListener('DOMContentLoaded', function() {
            const isElectionable = document.querySelector('select[name="is_electionable"]').value;
            toggleElectionDate(isElectionable);
            
            // Position checkbox interaction
            const positionCards = document.querySelectorAll('.position-card');
            
            positionCards.forEach(card => {
                const checkbox = card.querySelector('.position-checkbox');
                const display = card.querySelector('.position-checkbox-display');
                
                // Toggle card style on click
                card.addEventListener('click', function(e) {
                    if (!checkbox.disabled) {
                        checkbox.checked = !checkbox.checked;
                        updateCardStyle(card, checkbox.checked);
                    }
                });
                
                // Update initial style
                updateCardStyle(card, checkbox.checked);
                
                // Prevent checkbox click from triggering card click twice
                checkbox.addEventListener('click', function(e) {
                    e.stopPropagation();
                    updateCardStyle(card, checkbox.checked);
                });
            });
            
            function updateCardStyle(card, isChecked) {
                const display = card.querySelector('.position-checkbox-display');
                const icon = card.querySelector('svg.text-gray-300, svg.text-green-500');
                
                if (isChecked) {
                    card.classList.remove('bg-gray-50', 'border-gray-200');
                    card.classList.add('bg-green-50', 'border-green-200');
                    
                    display.classList.remove('bg-white', 'border-gray-300');
                    display.classList.add('bg-green-500', 'border-green-500');
                    
                    if (icon) {
                        icon.classList.remove('text-gray-300');
                        icon.classList.add('text-green-500');
                    }
                } else {
                    card.classList.remove('bg-green-50', 'border-green-200');
                    card.classList.add('bg-gray-50', 'border-gray-200');
                    
                    display.classList.remove('bg-green-500', 'border-green-500');
                    display.classList.add('bg-white', 'border-gray-300');
                    
                    if (icon) {
                        icon.classList.remove('text-green-500');
                        icon.classList.add('text-gray-300');
                    }
                }
            }
        });

        // Toggle election date visibility
        function toggleElectionDate(value) {
            const electionDateField = document.getElementById('electionDateField');
            const electionDateInput = electionDateField.querySelector('input[name="election_date"]');
            
            if (value === '1') {
                electionDateField.style.display = 'block';
                electionDateInput.required = true;
            } else {
                electionDateField.style.display = 'none';
                electionDateInput.required = false;
                electionDateInput.value = '';
            }
        }

        // Preview Changes
        function previewChanges() {
            const form = document.getElementById('editCommitteeForm');
            const formData = new FormData(form);
            const isElectionable = formData.get('is_electionable');
            
            // Get selected positions
            const selectedPositions = [];
            const positionCheckboxes = document.querySelectorAll('input[name="positions[]"]:checked');
            positionCheckboxes.forEach(cb => selectedPositions.push(cb.value));
            
            // Get position names
            let positionsHTML = '';
            if (selectedPositions.length > 0) {
                positionsHTML = '<div class="mt-3"><strong class="text-gray-900">Selected Positions:</strong><div class="flex flex-wrap gap-2 mt-2">';
                
                selectedPositions.forEach(positionId => {
                    const positionCard = document.querySelector(`#position_${positionId}`).closest('.position-card');
                    const positionName = positionCard.querySelector('.font-medium').textContent;
                    const isElectionablePos = positionCard.querySelector('.bg-blue-100') !== null;
                    
                    positionsHTML += `<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ${isElectionablePos ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800'}">${positionName}</span>`;
                });
                positionsHTML += '</div></div>';
            } else {
                positionsHTML = '<div class="mt-3"><strong class="text-gray-900">Selected Positions:</strong><p class="text-gray-600 italic">No positions selected</p></div>';
            }
            
            // Format election date and time for display
            let electionDateHTML = '';
            if (isElectionable === '1') {
                const electionDate = formData.get('election_date');
                const electionTime = formData.get('election_time');
                const formattedDate = electionDate ? new Date(electionDate).toLocaleDateString('en-US', { 
                    weekday: 'long', 
                    year: 'numeric', 
                    month: 'long', 
                    day: 'numeric' 
                }) : 'Not set';
                
                electionDateHTML = `
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <strong class="text-gray-900">Election Date:</strong>
                            <p class="text-gray-600">${formattedDate}</p>
                        </div>
                        <div>
                            <strong class="text-gray-900">Election Time:</strong>
                            <p class="text-gray-600">${electionTime ? electionTime + ' hrs' : 'Not set'}</p>
                        </div>
                    </div>
                `;
            }
            
            let previewHTML = `
                <div class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <strong class="text-gray-900">Committee Name:</strong>
                            <p class="text-gray-600">${formData.get('name') || 'No change'}</p>
                        </div>
                        <div>
                            <strong class="text-gray-900">Status:</strong>
                            <p class="text-gray-600">${formData.get('status')}</p>
                        </div>
                    </div>
                    
                    <div>
                        <strong class="text-gray-900">Description:</strong>
                        <p class="text-gray-600">${formData.get('description') || 'No description'}</p>
                    </div>
                    
                    <div>
                        <strong class="text-gray-900">Is Electionable:</strong>
                        <p class="text-gray-600">${isElectionable == '1' ? 'Yes' : 'No'}</p>
                    </div>
                    
                    ${electionDateHTML}
                    
                    ${positionsHTML}
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <strong class="text-gray-900">Max Members:</strong>
                            <p class="text-gray-600">${formData.get('max_members')}</p>
                        </div>
                        <div>
                            <strong class="text-gray-900">Voting Threshold:</strong>
                            <p class="text-gray-600">${formData.get('voting_threshold')}%</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <strong class="text-gray-900">Meeting Frequency:</strong>
                            <p class="text-gray-600">${formData.get('meeting_frequency').charAt(0).toUpperCase() + formData.get('meeting_frequency').slice(1).replace('_', ' ')}</p>
                        </div>
                        <div>
                            <strong class="text-gray-900">Term Duration:</strong>
                            <p class="text-gray-600">${formData.get('term_duration')} months</p>
                        </div>
                    </div>
                    
                    <div>
                        <strong class="text-gray-900">Permissions:</strong>
                        <ul class="list-disc pl-5 text-gray-600 mt-2">
                            ${formData.get('allow_self_nomination') ? '<li>Allow self-nomination</li>' : ''}
                            ${formData.get('require_approval') ? '<li>Require approval for new members</li>' : ''}
                            ${formData.get('allow_voting') ? '<li>Allow members to vote</li>' : ''}
                            ${formData.get('send_notifications') ? '<li>Send email notifications</li>' : ''}
                        </ul>
                    </div>
                </div>
            `;
            
            document.getElementById('previewContent').innerHTML = previewHTML;
            document.getElementById('previewModal').classList.remove('hidden');
        }

        function closePreviewModal() {
            document.getElementById('previewModal').classList.add('hidden');
        }

        function submitForm() {
            // Validate election date if committee is electionable
            const isElectionable = document.querySelector('select[name="is_electionable"]').value;
            if (isElectionable === '1') {
                const electionDate = document.querySelector('input[name="election_date"]').value;
                if (!electionDate) {
                    alert('Please select an election date for electionable committees.');
                    return;
                }
            }
            
            document.getElementById('editCommitteeForm').submit();
        }

        // Delete Committee
        function deleteCommittee() {
            const confirmation = confirm('WARNING: This will permanently delete the committee and all its data. This action cannot be undone.\n\nAre you absolutely sure?');
            
            if (confirmation) {
                // Implement delete functionality
                alert('Delete functionality would be implemented here');
            }
        }

        // Transfer Ownership
        function transferOwnership() {
            alert('Transfer ownership functionality would be implemented here');
        }

        // Form submission
        document.getElementById('editCommitteeForm').addEventListener('submit', function(e) {
            const isElectionable = document.querySelector('select[name="is_electionable"]').value;
            if (isElectionable === '1') {
                const electionDate = document.querySelector('input[name="election_date"]').value;
                if (!electionDate) {
                    e.preventDefault();
                    alert('Please select an election date for electionable committees.');
                    return;
                }
            }
            
            const submitBtn = this.querySelector('button[type="submit"]');
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <svg class="animate-spin w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                    </path>
                </svg>
                Updating...
            `;
        });
    </script>

    <style>
        .transition-colors {
            transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            ring: 2px;
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

        .position-card {
            cursor: pointer;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .position-card:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .position-checkbox {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .position-checkbox-display {
            transition: all 0.2s ease-in-out;
        }
    </style>
</x-app-layout>
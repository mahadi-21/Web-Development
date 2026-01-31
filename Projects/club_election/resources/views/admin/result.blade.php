<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 border border-gray-200 rounded-xl bg-gray-50 p-6">
            <!-- Header -->
            <div class="mb-8">
                <div class="bg-gradient-to-r from-purple-600 to-indigo-600 rounded-xl p-6 shadow-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h1 class="text-3xl font-bold text-white">Election Results</h1>
                            <p class="text-purple-100 mt-2">Comprehensive overview of election outcomes by committee</p>
                        </div>
                        <a href="{{ route('admin.dashboard') }}"
                            class="px-4 py-2 bg-white/20 hover:bg-white/30 backdrop-blur-sm text-white rounded-lg transition-colors flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Back to Dashboard
                        </a>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <!-- Total Candidates -->
                <div class="bg-white rounded-xl shadow p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Total Candidates</p>
                            <p class="text-2xl font-bold text-gray-900 mt-2">{{ $totalCandidates }}</p>
                        </div>
                        <div class="h-12 w-12 bg-purple-100 rounded-full flex items-center justify-center">
                            <svg class="h-6 w-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Total Voters -->
                <div class="bg-white rounded-xl shadow p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Total Voters</p>
                            <p class="text-2xl font-bold text-gray-900 mt-2">{{ $totalVoters }}</p>
                        </div>
                        <div class="h-12 w-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-8.5v1a6 6 0 01-6 6m6-7v1a6 6 0 01-6 6" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Vote Turnout -->
                <div class="bg-white rounded-xl shadow p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Vote Turnout</p>
                            <p class="text-2xl font-bold text-gray-900 mt-2">{{ $votePercentage }}%</p>
                            <p class="text-xs text-gray-500">{{ $totalVotes }} votes cast</p>
                        </div>
                        <div class="h-12 w-12 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Committees -->
                <div class="bg-white rounded-xl shadow p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Active Committees</p>
                            <p class="text-2xl font-bold text-gray-900 mt-2">{{ $totalCommittees }}</p>
                        </div>
                        <div class="h-12 w-12 bg-yellow-100 rounded-full flex items-center justify-center">
                            <svg class="h-6 w-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Export & Action Buttons -->
            <div class="flex space-x-3 mb-6">
                <button onclick="exportResults()"
                    class="px-4 py-2 bg-gradient-to-r from-green-600 to-emerald-600 text-white rounded-lg hover:from-green-700 hover:to-emerald-700 text-sm font-medium flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Export Results
                </button>
                <button onclick="printResults()"
                    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                    </svg>
                    Print Results
                </button>
            </div>

            <!-- Committee Tabs -->
            <div class="mb-8">
                <div class="border-b border-gray-200">
                    <nav class="-mb-px flex space-x-8">
                        @foreach($committees as $index => $committee)
                            <button onclick="showCommitteeResults({{ $committee->id }})"
                                class="committee-tab whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm {{ $index === 0 ? 'border-purple-500 text-purple-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }}"
                                data-committee-id="{{ $committee->id }}">
                                {{ $committee->name }}
                            </button>
                        @endforeach
                    </nav>
                </div>
            </div>

            <!-- Results Container -->
            <div id="resultsContainer">
                @foreach($committees as $index => $committee)
                    <div id="committee-{{ $committee->id }}-results"
                        class="committee-results {{ $index === 0 ? 'block' : 'hidden' }}">
                        
                        <!-- Committee Header -->
                        <div class="bg-white rounded-xl shadow p-6 mb-6 border border-gray-200">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h2 class="text-2xl font-bold text-gray-900">{{ $committee->name }} Results</h2>
                                    <p class="text-gray-600 mt-2">{{ $committee->description ?? 'Committee election results' }}</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm text-gray-500">Total Votes in Committee</p>
                                    <p class="text-2xl font-bold text-purple-600">{{ $committeeVotes[$committee->id] ?? 0 }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Positions Results -->
                        @foreach($committee->positions as $position)
                            <div class="bg-white rounded-xl shadow p-6 mb-6 border border-gray-200">
                                <div class="mb-6">
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $position->name }}</h3>
                                    <p class="text-gray-600">{{ $position->description ?? 'Position election results' }}</p>
                                </div>

                                <!-- Candidates List -->
                                <div class="space-y-4">
                                    @php
                                        $candidates = \APP\Models\Candidate::with('applicant.member')->where('committee_id', $committee->id)->where('position_id', $position->id)->get();
                                        $maxVotes = $candidates->max('votes_received') ?? 0;
                                    @endphp
                                    
                                    @forelse($candidates as $candidate)
                                        @php
                                            $votePercentage = $candidate->votes_received > 0 ? ($candidate->votes_received/ $maxVotes) * 100 : 0;
                                            $isWinner = $candidate->votes_received == $maxVotes && $maxVotes > 0;
                                        @endphp
                                        
                                        <div class="candidate-card border border-gray-200 rounded-lg p-4 hover:bg-gray-50 transition-colors {{ $isWinner ? 'bg-gradient-to-r from-green-50 to-emerald-50 border-green-200' : '' }}">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center space-x-4">
                                                    <!-- Candidate Photo -->
                                                    <div class="relative">
                                                        @if($candidate->applicant->recent_photo)
                                                            <img class="h-16 w-16 rounded-full object-cover border-2 {{ $isWinner ? 'border-green-500' : 'border-gray-200' }}"
                                                                src="{{ asset($candidate->applicant->recent_photo) }}"
                                                                alt="{{ $candidate->applicant->member->user->name }}">
                                                        @else
                                                            <div class="h-16 w-16 rounded-full bg-gradient-to-br from-blue-100 to-indigo-100 flex items-center justify-center border-2 {{ $isWinner ? 'border-green-500' : 'border-gray-200' }}">
                                                                <span class="text-blue-600 font-bold text-xl">
                                                                    {{ substr($candidate->application->user->name, 0, 1) }}
                                                                </span>
                                                            </div>
                                                        @endif
                                                        @if($isWinner)
                                                            <div class="absolute -top-1 -right-1">
                                                                <div class="h-6 w-6 bg-green-500 rounded-full flex items-center justify-center">
                                                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>

                                                    <!-- Candidate Info -->
                                                    <div>
                                                        <div class="flex items-center">
                                                            <h4 class="font-bold text-gray-900 text-lg">
                                                                {{ $candidate->applicant->member->user->name }}
                                                            </h4>
                                                            @if($isWinner)
                                                                <span class="ml-2 px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">
                                                                    Winner
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <p class="text-gray-600 text-sm">
                                                            {{ $candidate->applicant->member->user->email }}
                                                        </p>
                                                        <div class="flex items-center mt-1">
                                                            <span class="text-xs text-gray-500">
                                                                Votes: <span class="font-bold">{{ $candidate->votes_received}}</span>
                                                            </span>
                                                            
                                                          
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Vote Progress Bar -->
                                                <div class="w-64">
                                                    <div class="flex justify-between text-sm mb-1">
                                                        <span class="font-medium">Votes</span>
                                                        <span>{{ $candidate->vote_received}} votes</span>
                                                    </div>
                                                    <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                                        <div class="h-full bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full transition-all duration-500"
                                                             style="width: {{ $votePercentage }}%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="text-center py-8 text-gray-500">
                                            <svg class="w-12 h-12 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" 
                                                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <p class="mt-4">No candidates found for this position.</p>
                                        </div>
                                    @endforelse
                                </div>

                                <!-- Position Stats -->
                                @if($candidates->isNotEmpty())
                                    <div class="mt-6 pt-6 border-t border-gray-200">
                                        <div class="grid grid-cols-3 gap-4">
                                            <div class="text-center">
                                                <p class="text-sm text-gray-500">Total Votes</p>
                                                <p class="text-2xl font-bold text-gray-900">{{ $candidates->sum('votes_received') }}</p>
                                            </div>
                                            <div class="text-center">
                                                <p class="text-sm text-gray-500">Candidates</p>
                                                <p class="text-2xl font-bold text-gray-900">{{ $candidates->count() }}</p>
                                            </div>
                                            <div class="text-center">
                                                <p class="text-sm text-gray-500">Winner's Votes</p>
                                                <p class="text-2xl font-bold text-green-600">{{ $maxVotes }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>

            <!-- No Results Message -->
            @if($committees->isEmpty())
                <div class="bg-white rounded-xl shadow p-12 text-center border border-gray-200">
                    <svg class="w-16 h-16 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" 
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <h3 class="mt-4 text-xl font-medium text-gray-900">No election results available</h3>
                    <p class="mt-2 text-gray-600">Start an election or wait for votes to be cast.</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Results Summary Modal -->
    <div id="summaryModal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 overflow-y-auto z-50">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                                Election Summary Report
                            </h3>
                            <div id="summaryContent">
                                <!-- Summary content will be loaded here -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" onclick="closeSummaryModal()"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Close
                    </button>
                    <button type="button" onclick="exportSummary()"
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:w-auto sm:text-sm">
                        Export Summary
                    </button>
                </div>
            </div>
        </div>
    </div>

     

    <style>
        .committee-results {
            animation: fadeIn 0.5s ease-in-out;
        }

        .candidate-card {
            transition: all 0.3s ease;
        }

        .candidate-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</x-app-layout>
<x-app-layout class="border border-gray-200">
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-blue-50 border border-gray-100 py-8 px-4">
        <!-- Header -->
        <div class="max-w-7xl mx-auto mb-12">
            <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl shadow-xl py-8 px-6 text-center">
                <h1 class="text-3xl md:text-4xl font-bold text-white mb-3">
                    Welcome to Online Club Panel Election System
                </h1>
                
                <p class="text-blue-100 text-lg">
                    Meet your candidates and cast your vote for the future leadership
                </p>
                
                <div class="flex justify-between mt-6">
                    <a href="{{ route('apply-for-post') }}" 
                       class="inline-block px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition-all duration-300">
                        Apply to become a Committee Member
                    </a>

                    <!-- User Status Section -->
                    <div class="flex flex-wrap justify-center gap-4">
                        @auth
                            @if($is_member)
                                <!-- Already a member -->
                                <div class="px-6 py-3 bg-gradient-to-r from-green-500 to-emerald-600 text-white font-semibold rounded-lg flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Member Since: {{ auth()->user()->created_at->format('M d, Y') }}
                                </div>
                            @else
                                <!-- Not a member yet -->
                                <a href="{{ route('become') }}"
                                   class="px-6 py-3 bg-gradient-to-r from-emerald-500 to-green-600 text-white font-semibold rounded-lg hover:from-emerald-600 hover:to-green-700 transition-all duration-300 transform hover:scale-105 shadow-md flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                    </svg>
                                    Become a Member to Vote
                                </a>
                            @endif
                        @else
                            <!-- Not logged in -->
                            <a href="{{ route('login') }}" 
                               class="px-6 py-3 bg-gradient-to-r from-emerald-500 to-green-600 text-white font-semibold rounded-lg hover:from-emerald-600 hover:to-green-700 transition-all duration-300 transform hover:scale-105 shadow-md flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                </svg>
                                Login to Participate
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>

        <!-- Committees Section -->
        <div class="max-w-7xl mx-auto">
            @foreach ($committee_positons as $com_p)
                @php
                    // Check election date
                    $isElectionActive = $com_p->election_date && $com_p->election_date > now();
                    
                    // Check if this committee has any positions with candidates
                    $hasCandidates = false;
                    foreach ($com_p->positions as $pos) {
                        $candidateCount = \App\Models\Candidate::totalForPosition($com_p->id, $pos->id);
                        if ($candidateCount > 0) {
                            $hasCandidates = true;
                            break;
                        }
                    }
                @endphp
                
                @if($hasCandidates)
                    <div class="mb-16">
                        <div class="flex items-center w-full my-6">
                            <div class="flex-grow border-t-4 border-blue-300"></div>
                            <h2 class="mx-4 text-2xl md:text-3xl font-bold text-gray-800 flex items-center gap-3 whitespace-nowrap">
                                <div class="h-10 w-10 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                    </svg>
                                </div>
                                {{ $com_p->name }}
                                <!-- Election Date Badge -->
                                @if($com_p->election_date)
                                    <span class="text-sm font-normal bg-gradient-to-r {{ $isElectionActive ? 'from-green-100 to-emerald-100 text-green-800' : 'from-red-100 to-pink-100 text-red-800' }} px-3 py-1 rounded-full flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        Election: {{ $com_p->election_date }}
                                        @if(!$isElectionActive)
                                            <span class="ml-1">(Closed)</span>
                                        @endif
                                    </span>
                                @endif
                            </h2>
                            <div class="flex-grow border-t-4 border-blue-300"></div>
                        </div>

                        <p class="text-gray-600 text-center mb-8 max-w-3xl mx-auto">
                            The {{ $com_p->name }} focuses on enhancing coding skills, organizing hackathons, and preparing members for competitive programming.
                        </p>

                        <!-- Club Positions Grid - Only show positions with candidates -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                            @foreach ($com_p->positions as $pos)
                                @php
                                    $candidateCount = \App\Models\Candidate::totalForPosition($com_p->id, $pos->id);
                                @endphp
                                
                                @if($candidateCount > 0)
                                    <div class="bg-white rounded-xl shadow-md p-6 border border-gray-200 {{ !$isElectionActive ? 'opacity-80' : '' }}">
                                        <div class="flex items-center gap-3 mb-4">
                                            <div class="h-10 w-10 bg-gradient-to-r from-blue-100 to-blue-200 rounded-lg flex items-center justify-center">
                                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                          d="M5.121 17.804L13.937 9.68a1 1 0 011.414 0l6.414 6.414a1 1 0 010 1.414l-7.586 7.586a1 1 0 01-1.414 0L5.121 17.804z"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-lg font-bold text-gray-800">{{ $pos->name }}</h3>
                                        </div>
                                        <p class="text-gray-600 text-sm mb-4">
                                            Leads the club, represents members, and oversees all activities and events.
                                        </p>
                                      
                                        <div class="flex items-center justify-between">
                                            <span class="text-sm text-gray-500">
                                                {{ $candidateCount }} Candidate{{ $candidateCount !== 1 ? 's' : '' }}
                                            </span>
                                            @if($candidateCount > 0)
                                                <a href="#{{ Str::slug($com_p->name . ' ' . $pos->name) }}" 
                                                   class="text-blue-600 hover:text-blue-800 font-medium text-sm flex items-center gap-1">
                                                    View Candidates
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                    </svg>
                                                </a>
                                            @endif
                                        </div>
                                        
                                        <!-- Election Status -->
                                        @if(!$isElectionActive && $com_p->election_date)
                                            <div class="mt-4 p-2 bg-red-50 border border-red-200 rounded-lg">
                                                <p class="text-sm text-red-700 text-center">
                                                    <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    Voting closed on {{ $com_p->election_date}}
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        <!-- Candidates for each position - Only show if there are candidates -->
                        @foreach ($com_p->positions as $pos)
                            @php
                                $candidates = \App\Models\Candidate::with('applicant.member.user')
                                    ->where('committee_id', $com_p->id)
                                    ->where('position_id', $pos->id)
                                    ->get();
                            @endphp
                            
                            @if($candidates->count() > 0)
                                <div id="{{ Str::slug($com_p->name . ' ' . $pos->name) }}" class="mb-12">
                                    <div class="flex items-center mb-6">
                                        <h3 class="text-xl font-bold text-gray-800">{{ $pos->name }} Candidates</h3>
                                        <div class="ml-4 px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">
                                            {{ $com_p->name }}
                                        </div>
                                        @if(!$isElectionActive)
                                            <div class="ml-4 px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm font-medium flex items-center gap-1">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                Voting Closed
                                            </div>
                                        @endif
                                    </div>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                        @foreach($candidates as $candidate)
                                            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 {{ !$isElectionActive ? 'opacity-90' : '' }}">
                                                <div class="p-6">
                                                    <div class="flex items-center justify-center mb-4">
                                                        <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-blue-100">
                                                            <img src="{{ asset($candidate->applicant->recent_photo) }}"
                                                                alt="Candidate" class="w-full h-full object-cover">
                                                        </div>
                                                    </div>

                                                    <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $candidate->applicant->member->user->name }}</h3>

                                                    <div class="space-y-2 mb-4">
                                                        <div class="flex items-center gap-2">
                                                            <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                                            </svg>
                                                            <span class="text-sm text-gray-700">{{ $candidate->applicant->member->department }}</span>
                                                        </div>
                                                        <div class="flex items-center gap-2">
                                                            <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                            </svg>
                                                            <span class="text-sm text-gray-700">Year of Study : {{ $candidate->applicant->member->year_of_study }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-6">
                                                        <h4 class="font-semibold text-gray-700 mb-2">Manifesto:</h4>
                                                        <p class="text-gray-600 text-sm">
                                                            {{ $candidate->applicant->manifesto ?? 'No manifesto provided.' }}
                                                        </p>
                                                    </div>

                                                    @if($is_member)
                                                        @if($isElectionActive)
                                                            <form action="{{ route('vote', ['candidate' => $candidate->id]) }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="position_id" value="{{ $pos->id }}">
                                                                <input type="hidden" name="committee_id" value="{{ $com_p->id }}">
                                                                
                                                                @php
                                                                    $position_id = $pos->id;
                                                                    $committee_id = $com_p->id;
                                                                @endphp
                                                                
                                                                @if (isset($voted_candidates[$position_id][$committee_id]) && $voted_candidates[$position_id][$committee_id] == true)
                                                                    <button type="submit" disabled
                                                                        class="w-full py-2 bg-gray-400 text-white font-semibold rounded-lg cursor-not-allowed opacity-70">
                                                                        Already Voted
                                                                    </button>
                                                                @else
                                                                    <button type="submit"
                                                                        class="w-full py-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-indigo-700 transition-all duration-300">
                                                                        Vote Now
                                                                    </button>
                                                                @endif
                                                            </form>
                                                        @else
                                                            <button disabled
                                                                class="w-full py-2 bg-gradient-to-r from-gray-400 to-gray-500 text-white font-semibold rounded-lg cursor-not-allowed">
                                                                <div class="flex items-center justify-center gap-2">
                                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                    </svg>
                                                                    Election Closed
                                                                </div>
                                                            </button>
                                                        @endif
                                                    @else
                                                        <button onclick="openMembershipModal()"
                                                            class="w-full py-2 bg-gradient-to-r from-gray-400 to-gray-500 text-white font-semibold rounded-lg cursor-not-allowed opacity-70">
                                                            Become Member to Vote
                                                        </button>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
            @endforeach
            
            <!-- Show message if no committees have candidates -->
            @php
                $anyCommitteeHasCandidates = false;
                foreach ($committee_positons as $com_p) {
                    foreach ($com_p->positions as $pos) {
                        if (\App\Models\Candidate::totalForPosition($com_p->id, $pos->id) > 0) {
                            $anyCommitteeHasCandidates = true;
                            break 2;
                        }
                    }
                }
            @endphp
            
            @if(!$anyCommitteeHasCandidates)
                <div class="text-center py-16">
                    <div class="bg-white rounded-2xl shadow-lg p-8 max-w-2xl mx-auto">
                        <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-full flex items-center justify-center">
                            <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">No Active Elections</h3>
                        <p class="text-gray-600 mb-6">
                            There are currently no active elections. Check back later or apply to become a candidate.
                        </p>
                        <a href="{{ route('apply-for-post') }}" 
                           class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-indigo-700 transition-all duration-300">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                            Apply as Candidate
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <script>
        // Membership Modal Functions
        function openMembershipModal() {
            document.getElementById('membershipModal').classList.remove('hidden');
        }

        function closeMembershipModal() {
            document.getElementById('membershipModal').classList.add('hidden');
        }
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</x-app-layout>
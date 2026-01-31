<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 border border-gray-200 rounded-xl bg-gray-50 p-6">
            <!-- Header -->
            <div class="mb-8">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 rounded-xl p-6 shadow-lg">
                    <div>
                        <nav class="text-sm font-medium text-green-200 mb-2" aria-label="Breadcrumb">
                            <ol class="list-none p-0 inline-flex space-x-2">
                                <li class="inline-flex items-center">
                                    <a href="{{ route('admin.dashboard') }}" class="hover:underline">Dashboard</a>
                                    <svg class="w-4 h-4 mx-2 text-green-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </li>
                                <li class="inline-flex items-center text-white">
                                    Committees
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="flex justify-between">
                        <div>
                            <h1 class="text-3xl font-bold text-white">Committees Management</h1>
                            <p class="text-green-100 mt-2">Create and manage election committees and their members</p>
                        </div>
                        <div>
                            <a href="{{ route('admin.dashboard') }}"
                                class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 text-sm font-medium flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                Back to Dashboard
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <!-- Total Committees -->
                <div class="bg-white rounded-xl shadow p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Total Committees</p>
                            <p class="text-2xl font-bold text-gray-900 mt-2">{{ $total_committees ?? 0 }}</p>
                        </div>
                        <div class="h-12 w-12 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Active Committees -->
                <div class="bg-white rounded-xl shadow p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Active Committees</p>
                            <p class="text-2xl font-bold text-gray-900 mt-2">{{ $total_active_committees ?? 0 }}</p>
                        </div>
                        <div class="h-12 w-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Total Members -->
                <div class="bg-white rounded-xl shadow p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Total Applications</p>
                            <p class="text-2xl font-bold text-gray-900 mt-2">{{ $totalApplications ?? 0 }}</p>
                        </div>
                        <div class="h-12 w-12 bg-purple-100 rounded-full flex items-center justify-center">
                            <svg class="h-6 w-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-3.5a6 6 0 11-12 0 6 6 0 0112 0z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Pending Applications -->
                <div class="bg-white rounded-xl shadow p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Pending Applications</p>
                            <p class="text-2xl font-bold text-gray-900 mt-2">{{ $pendingApplications ?? 0 }}</p>
                        </div>
                        <div class="h-12 w-12 bg-yellow-100 rounded-full flex items-center justify-center">
                            <svg class="h-6 w-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-between flex-wrap gap-3 mb-6">
                <button onclick="openCreateCommitteeModal()"
                    class="px-4 py-2 bg-gradient-to-r from-green-600 to-emerald-600 text-white rounded-lg hover:from-green-700 hover:to-emerald-700 text-sm font-medium flex items-center">
                    Create New Committee
                </button>
                <a href="{{ route('positions') }}"
                    class="px-4 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-lg hover:from-indigo-700 hover:to-purple-700 text-sm font-medium flex items-center">
                    Manage Position
                </a>
            </div>

            <!-- Committees List -->
            <div class="bg-white rounded-xl shadow overflow-hidden border border-gray-200">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Committee
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Position
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Type
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Applicants
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Election Date
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($committees as $committee)
                                @php
                                    $positionCount = $committee->positions->count();
                                    $showCommitteeRow = true;
                                @endphp
                                
                                @if($positionCount > 0)
                                    @foreach($committee->positions as $positionIndex => $position)
                                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                                            <!-- Committee Name - Show only for first position -->
                                            @if($positionIndex === 0)
                                                <td class="px-6 py-4" rowspan="{{ $positionCount }}">
                                                    <div class="flex items-center">
                                                        <div
                                                            class="flex-shrink-0 h-10 w-10 bg-gradient-to-r from-green-100 to-emerald-100 rounded-lg flex items-center justify-center">
                                                            <span class="text-emerald-600 font-bold">
                                                                {{ substr($committee->name, 0, 1) }}
                                                            </span>
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">{{ $committee->name }}</div>
                                                            <div class="text-sm text-gray-500 truncate max-w-xs">
                                                                {{ $committee->description ?? 'No description' }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            @endif

                                            <!-- Position -->
                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    <span class="text-sm font-medium text-gray-900">{{ $position->name }}</span>
                                                </div>
                                                @if($position->description)
                                                    <div class="text-xs text-gray-500 mt-1">{{ $position->description }}</div>
                                                @endif
                                            </td>

                                            <!-- Position Type -->
                                            <td class="px-6 py-4">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                                    {{ $position->is_electionable ? 'bg-green-100 text-green-800' : 'bg-blue-100 text-blue-800' }}">
                                                    {{ $position->is_electionable ? 'Electionable' : 'Appointed' }}
                                                </span>
                                            </td>
                                         
                                            <!-- Applications -->
                                            <td class="px-6 py-4">
                                                <div class="flex flex-col">
                                                    @php
                                                        $applications = \App\Models\Applicant::where('position_id', $position->id)
                                                            ->where('committee_id', $committee->id)
                                                            ->get();

                                                        $totalApps = $applications->count();
                                                        $pendingApps = $applications->where('status', 'pending')->count();
                                                        $approvedApps = $applications->where('is_approved', true)->count();
                                                        $rejectedApps = $applications->where('is_rejected', true)->count();
                                                    @endphp

                                                    @if($totalApps > 0)
                                                        <div class="text-xs font-medium text-gray-900 mb-1">{{ $totalApps }} total</div>
                                                        <div class="flex items-center space-x-2 text-xs">
                                                            <span class="text-green-600">
                                                                {{ $approvedApps }} approved
                                                            </span>
                                                            <span class="text-yellow-600">
                                                                {{ $pendingApps }} pending
                                                            </span>
                                                            <span class="text-red-600">
                                                                {{ $rejectedApps }} rejected
                                                            </span>
                                                        </div>
                                                    @else
                                                        <span class="text-xs text-gray-500">No applications</span>
                                                    @endif
                                                </div>
                                            </td>

                                            <!-- Status - Show only for first position -->
                                            @if($positionIndex === 0)
                                                <td class="px-6 py-4 whitespace-nowrap" rowspan="{{ $positionCount }}">
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                                        {{ $committee->status == 'active' ? 'bg-green-100 text-green-800' :
                                                        ($committee->status == 'inactive' ? 'bg-red-100 text-red-800' :
                                                        'bg-yellow-100 text-yellow-800') }}">
                                                        <svg class="w-2 h-2 mr-1" fill="currentColor" viewBox="0 0 8 8">
                                                            <circle cx="4" cy="4" r="3" />
                                                        </svg>
                                                        {{ ucfirst($committee->status) }}
                                                    </span>
                                                </td>
                                            @endif

                                            <!-- Election Date - Show only for first position -->
                                            @if($positionIndex === 0)
                                                <td class="px-6 py-4" rowspan="{{ $positionCount }}">
                                                    @if($committee->election_date)
                                                        {{ \Carbon\Carbon::parse($committee->election_date)->format('M d, Y') }}
                                                        @if($committee->election_time)
                                                            <div class="text-xs text-gray-500">
                                                                {{ \Carbon\Carbon::parse($committee->election_time)->format('h:i A') }}
                                                            </div>
                                                        @endif
                                                    @else
                                                        <span class="text-xs text-gray-500">No election date</span>
                                                    @endif
                                                </td>
                                            @endif

                                            <!-- Actions - Show only for first position -->
                                            @if($positionIndex === 0)
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium" rowspan="{{ $positionCount }}">
                                                    <div class="flex items-center space-x-3">
                                                        <a href="{{ route('committees.edit', $committee) }}"
                                                            class="text-green-600 hover:text-green-900 transition-colors underline"
                                                            title="Edit Committee">
                                                            Edit
                                                        </a>
                                                    </div>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @else
                                    <!-- Show a single row for committees with no positions -->
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex-shrink-0 h-10 w-10 bg-gradient-to-r from-green-100 to-emerald-100 rounded-lg flex items-center justify-center">
                                                    <span class="text-emerald-600 font-bold">
                                                        {{ substr($committee->name, 0, 1) }}
                                                    </span>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $committee->name }}</div>
                                                    <div class="text-sm text-gray-500 truncate max-w-xs">
                                                        {{ $committee->description ?? 'No description' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4" colspan="2">
                                            <span class="text-sm text-gray-500">No positions available</span>
                                        </td>

                                        <td class="px-6 py-4">
                                            <span class="text-sm text-gray-500">No applications</span>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                                {{ $committee->status == 'active' ? 'bg-green-100 text-green-800' :
                                                ($committee->status == 'inactive' ? 'bg-red-100 text-red-800' :
                                                'bg-yellow-100 text-yellow-800') }}">
                                                <svg class="w-2 h-2 mr-1" fill="currentColor" viewBox="0 0 8 8">
                                                    <circle cx="4" cy="4" r="3" />
                                                </svg>
                                                {{ ucfirst($committee->status) }}
                                            </span>
                                        </td>

                                        <td class="px-6 py-4">
                                            @if($committee->election_date)
                                                {{ \Carbon\Carbon::parse($committee->election_date)->format('M d, Y') }}
                                                @if($committee->election_time)
                                                    <div class="text-xs text-gray-500">
                                                        {{ \Carbon\Carbon::parse($committee->election_time)->format('h:i A') }}
                                                    </div>
                                                @endif
                                            @else
                                                <span class="text-xs text-gray-500">No election date</span>
                                            @endif
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex items-center space-x-3">
                                                <a href="{{ route('committees.edit', $committee) }}"
                                                    class="text-green-600 hover:text-green-900 transition-colors underline"
                                                    title="Edit Committee">
                                                    Edit
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($committees->hasPages())
                <div class="px-6 py-4 border-t border-gray-200">
                    {{ $committees->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Create Committee Modal -->
    <div id="createCommitteeModal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 overflow-y-auto z-50">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                                Create New Committee
                            </h3>
                            <form id="committeeForm" method="POST" action="{{ route('committees.store') }}">
                                @csrf
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Committee Name *</label>
                                        <input type="text" name="name" required
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500"
                                            placeholder="E.g., Election Committee 2024">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                                        <textarea name="description" rows="3"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500"
                                            placeholder="Describe the committee's purpose and responsibilities"></textarea>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                                        <select name="status"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500">
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                            <option value="pending">Pending</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse mt-4">
                                    <button type="submit"
                                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                                        Create Committee
                                    </button>
                                    <button type="button" onclick="closeCreateCommitteeModal()"
                                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Open create committee modal
        function openCreateCommitteeModal() {
            document.getElementById('createCommitteeModal').classList.remove('hidden');
        }

        // Close create committee modal
        function closeCreateCommitteeModal() {
            document.getElementById('createCommitteeModal').classList.add('hidden');
        }
    </script>

    <style>
        .transition-colors {
            transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        table tbody tr {
            transition: all 0.2s ease-in-out;
        }

        table tbody tr:hover {
            background-color: #f9fafb;
            transform: translateY(-1px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
    </style>
</x-app-layout>
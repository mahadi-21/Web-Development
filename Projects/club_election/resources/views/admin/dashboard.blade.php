<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 border border-gray-200 rounded-xl bg-gray-50 p-6">
            <!-- Header -->
            <div class="mb-8">
                <div
                    class="bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl p-6 shadow-lg relative overflow-hidden">
                    <!-- Background Pattern -->
                    <div class="absolute top-0 right-0 w-32 h-32 transform translate-x-16 -translate-y-8 opacity-10">
                        <svg class="w-full h-full" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                        </svg>
                    </div>

                    <div>
                        <h1 class="text-3xl font-bold text-white">Admin Dashboard</h1>
                        <p class="text-blue-100 mt-2">Overview of club election applications and management</p>
                    </div>

                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ route('make.admin') }}"
                            class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm text-white rounded-lg hover:bg-white/30 transition-colors border border-white/30">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                            Add Admin
                        </a>

                        <a href="{{ route('election.result') }}"
                            class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-purple-500/80 to-pink-500/80 text-white rounded-lg hover:from-purple-500 hover:to-pink-500 transition-all duration-300 backdrop-blur-sm">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            View Results
                        </a>
                    </div>
                </div>
            </div>


            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <!-- Total Applications -->
                <div class="bg-white rounded-xl shadow p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Total Applications</p>
                            <p class="text-2xl font-bold text-gray-900 mt-2">{{ $totalApplications }}</p>
                        </div>
                        <div class="h-12 w-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Pending Review -->
                <div class="bg-white rounded-xl shadow p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Pending Review</p>
                            <p class="text-2xl font-bold text-gray-900 mt-2">{{ $pendingApplications }}</p>
                        </div>
                        <div class="h-12 w-12 bg-yellow-100 rounded-full flex items-center justify-center">
                            <svg class="h-6 w-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Approved -->
                <div class="bg-white rounded-xl shadow p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Approved</p>
                            <p class="text-2xl font-bold text-gray-900 mt-2">{{ $approvedApplications }}</p>
                        </div>
                        <div class="h-12 w-12 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Rejected -->
                <div class="bg-white rounded-xl shadow p-6 border border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Rejected</p>
                            <p class="text-2xl font-bold text-gray-900 mt-2">{{ $rejectedApplications }}</p>
                        </div>
                        <div class="h-12 w-12 bg-red-100 rounded-full flex items-center justify-center">
                            <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex space-x-3 justify-between mb-6">
                <a href="{{ route('positions') }}"
                    class="px-4 py-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-lg hover:from-blue-700 hover:to-indigo-700 text-sm font-medium flex items-center">

                    Manage Position
                </a>
                <a href="{{ route('committees') }}"
                    class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition-colors flex items-center">

                    Manage Committee
                </a>
            </div>


            <!-- Applications Table -->
            <div class="bg-white rounded-xl shadow overflow-hidden border border-gray-200">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Applicant
                                </th>
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
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($applications as $id => $application)
                                <tr class="group hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 transition-all duration-300 ease-in-out application-row border-b border-gray-100"
                                    data-id="{{ $application->id }}"
                                    data-name="{{ $application->user->name ?? $application->name }}"
                                    data-email="{{ $application->user->email ?? $application->email }}"
                                    data-committee="{{ $application->committee->name ?? 'N/A' }}"
                                    data-position="{{ $application->position->name ?? 'N/A' }}"
                                    data-photo="{{ $application->recent_photo }}"
                                    data-status="{{ $application->is_approved ? 'approved' : ($application->is_rejected ? 'rejected' : 'pending') }}">

                                    <!-- ID Column -->
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div
                                                class="h-9 w-9 rounded-lg bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center shadow-sm">
                                                <span class="text-white font-bold text-sm">
                                                    {{ $id + 1 }}
                                                </span>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Applicant Info Column -->
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="relative">
                                                @if($application->recent_photo)
                                                    <div
                                                        class="h-12 w-12 rounded-xl overflow-hidden ring-2 ring-white shadow-md">
                                                        <img class="h-full w-full object-cover"
                                                            src="{{ asset($application->recent_photo) }}"
                                                            alt="{{ $application->user->name ?? 'Applicant' }}">
                                                    </div>
                                                    <div
                                                        class="absolute -bottom-1 -right-1 h-4 w-4 rounded-full border-2 border-white bg-green-400">
                                                    </div>
                                                @else
                                                    <div
                                                        class="h-12 w-12 rounded-xl bg-gradient-to-br from-blue-100 to-indigo-100 flex items-center justify-center shadow-md ring-2 ring-white">
                                                        <span class="text-blue-600 font-bold text-lg">
                                                            {{ substr(($application->user->name ?? $application->name), 0, 1) }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="ml-4">
                                                <div class="flex items-center">
                                                    <div
                                                        class="text-sm font-semibold text-gray-900 group-hover:text-indigo-700 transition-colors">
                                                        {{ $application->user->name ?? $application->name }}
                                                    </div>
                                                </div>
                                                <div class="text-xs text-gray-500 mt-1 flex items-center">
                                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                    </svg>
                                                    {{ Str::limit($application->user->email ?? $application->email, 20) }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Academic Info Column -->
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $application->committee->name ?? 'N/A' }}
                                    </td>

                                    <!-- Committee & Position Column -->
                                    <td class="px-6 py-4 whitespace-nowrap">

                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full bg-gradient-to-r from-indigo-50 to-blue-50 border border-indigo-100">
                                            <svg class="w-3 h-3 text-indigo-500 mr-1" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                                            </svg>
                                            <span class="text-xs font-semibold text-indigo-700">
                                                {{ $application->position->name ?? 'N/A' }}
                                            </span>

                                        </div>
                                    </td>




                                    <!-- Status Column -->
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($application->is_approved)
                                            <div class="flex items-center">
                                                <div class="relative">
                                                    <div class="h-3 w-3 rounded-full bg-green-400 animate-pulse mr-2"></div>
                                                    <div
                                                        class="h-3 w-3 rounded-full bg-green-400 absolute top-0 left-0 animate-ping">
                                                    </div>
                                                </div>
                                                <span
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gradient-to-r from-green-100 to-emerald-100 text-green-800 border border-green-200">
                                                    Approved
                                                </span>
                                            </div>
                                        @elseif($application->is_rejected)
                                            <div class="flex items-center">
                                                <div class="h-3 w-3 rounded-full bg-red-400 mr-2"></div>
                                                <span
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gradient-to-r from-red-100 to-pink-100 text-red-800 border border-red-200">
                                                    Rejected
                                                </span>
                                            </div>
                                        @else
                                            <div class="flex items-center">
                                                <div class="h-3 w-3 rounded-full bg-yellow-400 animate-bounce mr-2"></div>
                                                <span
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gradient-to-r from-yellow-100 to-amber-100 text-yellow-800 border border-yellow-200">
                                                    Pending
                                                </span>
                                            </div>
                                        @endif
                                    </td>

                                    <!-- Actions Column - FIXED HOVER ISSUE -->
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center space-x-2">
                                            <!-- View Button -->
                                            <div class="relative">
                                                <a href="{{ route('applicant.show', $application) }}"
                                                    class="p-2 rounded-lg bg-gradient-to-r from-blue-50 to-indigo-50 text-blue-600 hover:from-blue-100 hover:to-indigo-100 hover:text-blue-800 hover:shadow-md transition-all duration-200"
                                                    title="View Details">
                                                    show
                                                </a>

                                            </div>
                                            @if ($application->is_rejected)
                                            @elseif(!$application->is_approved)
                                                <!-- Approve Button -->
                                                <div class="relative">
                                                    <form action="{{ route('application.approve', $application) }}"
                                                        method="POST" class="inline">
                                                        @csrf
                                                        <button type="submit"
                                                            class="p-2 rounded-lg bg-gradient-to-r from-green-50 to-emerald-50 text-green-600 hover:from-green-100 hover:to-emerald-100 hover:text-green-800 hover:shadow-md transition-all duration-200"
                                                            title="Approve">
                                                            approve
                                                        </button>
                                                    </form>

                                                </div>

                                                <!-- Reject Button -->
                                                <div class="relative">
                                                    <a href="{{ route('application.reject', $application) }}"
                                                        class="p-2 rounded-lg bg-gradient-to-r from-red-50 to-pink-50 text-red-600 hover:from-red-100 hover:to-pink-100 hover:text-red-800 hover:shadow-md transition-all duration-200"
                                                        title="Reject">
                                                        reject
                                                    </a>

                                                </div>

                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                    <div class="flex-1 flex justify-between sm:hidden">
                        @if($applications->onFirstPage())
                            <button disabled
                                class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-300 bg-white">
                                Previous
                            </button>
                        @else
                            <a href="{{ $applications->previousPageUrl() }}"
                                class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Previous
                            </a>
                        @endif

                        @if($applications->hasMorePages())
                            <a href="{{ $applications->nextPageUrl() }}"
                                class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Next
                            </a>
                        @else
                            <button disabled
                                class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-300 bg-white">
                                Next
                            </button>
                        @endif
                    </div>
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Showing <span class="font-medium">{{ $applications->firstItem() }}</span> to
                                <span class="font-medium">{{ $applications->lastItem() }}</span> of
                                <span class="font-medium">{{ $applications->total() }}</span> results
                            </p>
                        </div>
                        <div>
                            {{ $applications->links() }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Application Details Modal -->
            <div id="applicationModal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 overflow-y-auto z-50">
                <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div
                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                                        Application Details
                                    </h3>
                                    <div class="mt-2">
                                        <div id="modalContent">
                                            <!-- Content will be loaded here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button type="button" onclick="closeModal()"
                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script>
        // Open add position modal


        // Close modal
        function closeModal() {
            document.getElementById('applicationModal').classList.add('hidden');
        }



        // Show all details
        function showAllDetails() {
            const rows = document.querySelectorAll('.application-row');
            let allDetails = '<div class="space-y-6">';

            rows.forEach(row => {
                allDetails += `
                    <div class="border-b pb-6">
                        <h4 class="font-bold text-lg mb-2">${row.dataset.name}</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="text-sm text-gray-500">Department:</label>
                                <p>${row.dataset.department}</p>
                            </div>
                            <div>
                                <label class="text-sm text-gray-500">Reason:</label>
                                <p>${row.dataset.reason ? row.dataset.reason.substring(0, 100) + '...' : 'N/A'}</p>
                            </div>
                        </div>
                    </div>
                `;
            });

            allDetails += '</div>';
            document.getElementById('modalContent').innerHTML = allDetails;
            document.getElementById('applicationModal').classList.remove('hidden');
        }
    </script>

    <style>
        .hover\:bg-gray-50:hover {
            transition: background-color 0.2s ease-in-out;
        }

        table tbody tr {
            transition: all 0.2s ease-in-out;
        }

        table tbody tr:hover {
            background-color: #f9fafb;
            transform: translateY(-1px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .transition-colors {
            transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }
    </style>
</x-app-layout>
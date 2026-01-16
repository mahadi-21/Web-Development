<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Enhanced Header with Gradient -->
            <div class="mb-8 rounded-2xl overflow-hidden bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 shadow-2xl">
                <div class="relative px-8 py-10">
                    <div class="absolute inset-0 bg-grid-white/[0.05] bg-[size:20px_20px]"></div>
                    <div class="relative">
                        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-6 mb-6">
                            <div class="space-y-4">
                                <h1 class="text-3xl md:text-4xl font-bold text-white">
                                    Manage Positions
                                </h1>
                                <p class="text-blue-100 text-lg font-light max-w-2xl">
                                    Create, edit, and manage positions for the CPC Club elections
                                </p>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-3">
                                <a href="{{ route('admin.dashboard') }}" 
                                   class="inline-flex items-center justify-center px-5 py-3 bg-white/10 backdrop-blur-sm text-white rounded-xl border border-white/20 hover:bg-white/20 transition-all duration-300 group">
                                    <svg class="w-4 h-4 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                    </svg>
                                    Back to Dashboard
                                </a>
                                <button onclick="openCreateModal()"
                                        class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-white to-blue-50 text-blue-700 font-bold rounded-xl hover:shadow-lg hover:scale-[1.02] transform transition-all duration-300 group">
                                    <svg class="w-5 h-5 mr-2 group-hover:rotate-90 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    Create Position
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Search and Filter Section -->
            <div class="mb-6">
                <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-lg border border-gray-200/50 p-6">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                        <div class="flex-1">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="relative group">
                                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/5 to-indigo-500/5 rounded-xl blur group-hover:blur-lg transition duration-300"></div>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg>
                                        </div>
                                        <input type="text" placeholder="Search positions..." 
                                               class="pl-10 pr-4 py-3 bg-white/50 backdrop-blur-sm border border-gray-300/50 rounded-xl focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500 w-full shadow-sm transition-all duration-300">
                                    </div>
                                </div>
                                
                                <div class="relative group">
                                    <select class="w-full px-4 py-3 bg-white/50 backdrop-blur-sm border border-gray-300/50 rounded-xl focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500 shadow-sm transition-all duration-300 appearance-none">
                                        <option value="">All Status</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                        <option value="filled">Filled</option>
                                        <option value="open">Open for Election</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </div>
                                
                                <div class="relative group">
                                    <select class="w-full px-4 py-3 bg-white/50 backdrop-blur-sm border border-gray-300/50 rounded-xl focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500 shadow-sm transition-all duration-300 appearance-none">
                                        <option value="">All Departments</option>
                                        <option value="president">President</option>
                                        <option value="vice">Vice President</option>
                                        <option value="secretary">Secretary</option>
                                        <option value="treasurer">Treasurer</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <button onclick="openBulkActions()"
                                    class="px-4 py-3 bg-gradient-to-r from-gray-100 to-gray-50 border border-gray-300/50 rounded-xl hover:shadow-md hover:bg-white transform hover:-translate-y-0.5 transition-all duration-300 text-gray-700 font-medium">
                                Bulk Actions
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Positions Table -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-gray-200/50 mb-8">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200/30">
                        <thead class="bg-gradient-to-r from-gray-50 to-gray-100/50 backdrop-blur-sm">
                            <tr>
                                <th scope="col" class="px-8 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                    <div class="flex items-center space-x-2">
                                        <span>Position ID</span>
                                    </div>
                                </th>
                                <th
                             scope="col" class="px-8 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                             Position Name
                            </th>
                                <th scope="col" class="px-8 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                    Position Details
                                </th>
                                <th scope="col" class="px-8 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                    Status
                                </th>
                                
                               
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200/20 bg-white/50">
                            @foreach($positions as $id => $position)
                            <tr class="group hover:bg-gradient-to-r hover:from-blue-50/30 hover:to-indigo-50/30 transition-all duration-300">
                                <td class="px-8 py-5 whitespace-nowrap">
                                    <div class="text-sm font-mono font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                                       {{ $id+1 }}
                                    </div>
                                </td>
                                <td class="px-8 py-5">
                                    <div class="flex items-center">
                                        
                                        <div>
                                            <div class="text-base font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">
                                                {{ $position->name }}
                                            </div>
                                           
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-sm text-gray-700 line-clamp-2">
                                        {{ $position->description ?? 'No description provided.' }}
                                    </div>
                                </td>
                               
                                <td class="px-8 py-5 whitespace-nowrap">
                                    @if($position->is_electionable === 1)
                                        <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-bold bg-gradient-to-r from-emerald-100 to-green-50 text-emerald-800 border border-emerald-200 shadow-sm">
                                            <span class="h-2 w-2 rounded-full bg-emerald-500 mr-2 animate-pulse"></span>
                                            Active
                                        </span>
                                    @elseif($position->is_electionable === 0)
                                        <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-bold bg-gradient-to-r from-blue-100 to-indigo-50 text-blue-800 border border-blue-200 shadow-sm">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                            </svg>
                                            Inactive
                                        </span>
                                    
                                    @else
                                        <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-bold bg-gradient-to-r from-gray-100 to-gray-50 text-gray-600 border border-gray-200 shadow-sm">
                                            <span class="h-2 w-2 rounded-full bg-gray-400 mr-2"></span>
                                            Inactive
                                        </span>
                                    @endif
                                </td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($positions->hasPages())
                <div class="bg-white/50 backdrop-blur-sm px-8 py-6 border-t border-gray-200/30">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="mb-4 md:mb-0">
                            <p class="text-sm text-gray-700 font-medium">
                                Showing <span class="font-bold text-gray-900">{{ $positions->firstItem() }}</span> to 
                                <span class="font-bold text-gray-900">{{ $positions->lastItem() }}</span> of 
                                <span class="font-bold text-gray-900">{{ $positions->total() }}</span> positions
                            </p>
                        </div>
                        <div class="flex items-center space-x-2">
                            {{ $positions->links() }}
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <!-- No Positions State -->
            @if($positions->isEmpty())
            <div class="text-center py-16">
                <div class="inline-block p-6 rounded-2xl bg-gradient-to-br from-blue-50 to-indigo-50 mb-6 shadow-lg">
                    <svg class="w-16 h-16 text-blue-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">No Positions Yet</h3>
                <p class="text-gray-600 mb-8 max-w-md mx-auto">
                    Start by creating your first position to organize your club elections
                </p>
                <button onclick="openCreateModal()"
                        class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-700 text-white font-bold rounded-xl hover:shadow-xl hover:scale-[1.02] transform transition-all duration-300 shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Create Your First Position
                </button>
            </div>
            @endif

            <!-- Help Card -->
            <div class="mt-8 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl border border-blue-200/50 p-8">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="h-12 w-12 rounded-xl bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-6">
                        <h4 class="text-lg font-bold text-gray-900 mb-3">Position Management Guide</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="space-y-2">
                                <p class="text-sm font-medium text-gray-700">✓ Define clear requirements</p>
                                <p class="text-xs text-gray-600">Set eligibility criteria for each position</p>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm font-medium text-gray-700">✓ Assign responsibilities</p>
                                <p class="text-xs text-gray-600">Outline duties and expectations clearly</p>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm font-medium text-gray-700">✓ Set election dates</p>
                                <p class="text-xs text-gray-600">Schedule voting periods for each position</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Position Modal -->
    <div id="createPositionModal" class="fixed inset-0 bg-gray-900/50 backdrop-blur-sm hidden z-50 items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b border-gray-200 px-8 py-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900">Create New Position</h3>
                        <p class="text-gray-600 mt-1">Add a new position for the club elections</p>
                    </div>
                    <button onclick="closeCreateModal()"
                            class="p-2 rounded-lg hover:bg-gray-100 text-gray-400 hover:text-gray-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
            
            <form action="{{ route('positions.store') }}" method="POST" class="p-8">
                @csrf
                <div class="space-y-6">
                    <!-- Position Name -->
                    <div class="relative group">
                        <label class="block text-sm font-bold text-gray-700 mb-2">
                            Position Name
                        </label>
                        <input type="text" 
                               name="name"
                               required
                               class="w-full px-4 py-3 border border-gray-300/50 rounded-xl focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500 bg-white/50 backdrop-blur-sm shadow-sm transition-all duration-300"
                               placeholder="e.g., Club President, Treasurer">
                    </div>

                    <!-- Department -->
                

                    <!-- Description -->
                    <div class="relative group">
                        <label class="block text-sm font-bold text-gray-700 mb-2">
                            Position Description
                        </label>
                        <textarea name="description"
                                  rows="3"
                                  class="w-full px-4 py-3 border border-gray-300/50 rounded-xl focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500 bg-white/50 backdrop-blur-sm shadow-sm transition-all duration-300"
                                  placeholder="Brief description of responsibilities and duties"></textarea>
                    </div>

                 

                    <!-- Status -->
                    <div class="relative group">
                        <label class="block text-sm font-bold text-gray-700 mb-2">
                            Initial Status
                        </label>
                        <div class="grid grid-cols-2 gap-4">
                            <label class="flex items-center p-4 border border-gray-300/50 rounded-xl hover:border-blue-500 cursor-pointer">
                                <input type="radio" name="status" value="1" class="h-4 w-4 text-blue-600" checked>
                                <div class="ml-3">
                                    <span class="block text-sm font-medium text-gray-900">Active</span>
                                    <span class="block text-xs text-gray-600">Open for applications</span>
                                </div>
                            </label>
                            <label class="flex items-center p-4 border border-gray-300/50 rounded-xl hover:border-blue-500 cursor-pointer">
                                <input type="radio" name="status" value="0" class="h-4 w-4 text-blue-600">
                                <div class="ml-3">
                                    <span class="block text-sm font-medium text-gray-900">Inactive</span>
                                    <span class="block text-xs text-gray-600">Not available yet</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Modal Actions -->
                <div class="mt-8 pt-6 border-t border-gray-200 flex justify-end space-x-4">
                    <button type="button"
                            onclick="closeCreateModal()"
                            class="px-6 py-3 border border-gray-300 text-gray-700 font-medium rounded-xl hover:bg-gray-50 transition-colors duration-300">
                        Cancel
                    </button>
                    <button type="submit"
                            class="px-8 py-3 bg-gradient-to-r from-blue-600 to-indigo-700 text-white font-bold rounded-xl hover:shadow-lg hover:scale-[1.02] transform transition-all duration-300 shadow-md">
                        Create Position
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openCreateModal() {
            document.getElementById('createPositionModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeCreateModal() {
            document.getElementById('createPositionModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

       

        // Close modal on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeCreateModal();
            }
        });

        // Close modal on outside click
        document.getElementById('createPositionModal').addEventListener('click', (e) => {
            if (e.target.id === 'createPositionModal') {
                closeCreateModal();
            }
        });
    </script>

    <style>
        .bg-grid-white\/\[0\.05\] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='32' height='32' fill='none' stroke='white' stroke-opacity='0.05'%3e%3cpath d='M0 .5H31.5V32'/%3e%3c/svg%3e");
        }
        
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
</x-app-layout>
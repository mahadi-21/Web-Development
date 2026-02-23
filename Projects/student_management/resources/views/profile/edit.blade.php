<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent">
                {{ __('Change Password') }}
            </h2>
            <a href="{{ route('student.profile') }}"
                class="inline-flex items-center px-5 py-2.5 bg-white border-2 border-gray-200 rounded-xl text-sm font-semibold text-gray-700 hover:border-blue-500 hover:bg-blue-50 hover:text-blue-600 focus:ring-4 focus:ring-blue-100 focus:outline-none transition-all duration-300 ease-in-out transform hover:-translate-x-1 shadow-sm hover:shadow group">
                <i
                    class="fas fa-arrow-left mr-2 text-sm transition-transform duration-300 group-hover:-translate-x-1"></i>
                Back to Profile
            </a>
        </div>


    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            {{-- <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div> --}}

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            {{-- <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div> --}}
        </div>

    </div>
</x-app-layout>
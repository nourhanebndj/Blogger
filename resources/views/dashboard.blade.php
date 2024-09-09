<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome back, Admin! You’re now in control of the dashboard") }}
                </div>

                <!-- Image and Link Section -->
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="http://127.0.0.1:8001" target="_blank">
                        <img src="{{ asset('mainassets/images/home.png') }}" alt="Site Preview" class="rounded-lg shadow-md mx-auto" style="width: 1000px; max-width: 100%;">
                    </a>
                    <p>
                        <a href="http://127.0.0.1:8001" target="_blank" class="text-blue-500 hover:underline">
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

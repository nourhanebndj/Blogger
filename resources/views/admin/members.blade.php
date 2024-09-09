<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black dark:text-gray-200 leading-tight">
            {{ __('Members') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div x-data="{ open: false }">
                    <!-- Add New User Button -->
                    <div class="mb-4 flex justify-end"> 
                        <x-primary-button @click="open = true" class="bg-[#D4A373] hover:bg-opacity-90 text-white font-bold py-2 px-4 rounded">
                            Add New User
                        </x-primary-button>
                    </div>

                    <!-- Modal for Adding New User -->
                    <div x-show="open" class="fixed z-12 inset-0 overflow-y-auto flex items-center justify-center">
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>
                        
                        <!-- Modal Content -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg px-3 pt-5 pb-3 text-left overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6">
                            <div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">
                                    Add New User
                                </h3>
                                <form action="{{ route('admin.members.store') }}" method="POST">
                                    @csrf
                                    <div class="mt-2">
                                        <!-- Name Field -->
                                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
                                        <input type="text" name="name" id="name" class="mt-1 p-2 w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>

                                        <!-- Email Field -->
                                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mt-3">Email</label>
                                        <input type="email" name="email" id="email" class="mt-1 p-2 w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>

                                        <!-- Password Field -->
                                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mt-3">Password</label>
                                        <input type="password" name="password" id="password" class="mt-1 p-2 w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    </div>
                                    
                                    <div class="mt-4 flex justify-end">
                                        <button type="button" @click="open = false" class="text-white font-bold py-2 px-3 rounded mr-2" style="background-color: red;">
                                            Cancel
                                        </button>                                            
                                        
                                        <x-primary-button type="submit" class="hover:bg-opacity-90 text-white font-bold py-2 px-3 rounded ml-2">
                                            Add User
                                        </x-primary-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- User Table -->
                <table class="min-w-full bg-white dark:bg-gray-800">
                    <thead class="h-12">
                        <tr>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-black dark:text-gray-200 tracking-wider">Creation account</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-black dark:text-gray-200 tracking-wider">Update account</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-black dark:text-gray-200 tracking-wider">Name</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-black dark:text-gray-200 tracking-wider">Email</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-black dark:text-gray-200 tracking-wider">Role</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-black dark:text-gray-200 tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700">{{ $user->created_at }}</td>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700">{{ $user->updated_at }}</td>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700">{{ $user->name }}</td>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700">{{ $user->email }}</td>
                                
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700">Admin</td>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700">
                                    <form action="{{ route('admin.members.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this member?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="red" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M1 7h22M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

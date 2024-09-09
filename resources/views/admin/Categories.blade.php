<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div x-data="{ openAdd: false, openEdit: false, category: {id: '', category_name: '', title_meta: '', content_meta: '', keyword_meta: ''} }">
                    <!-- Add New Category Button -->
                    <div class="mb-4 flex justify-end"> 
                        <x-primary-button @click="openAdd = true" class="bg-[#D4A373] hover:bg-opacity-90 text-white font-bold py-2 px-4 rounded">
                            Add New Category
                        </x-primary-button>
                    </div>

                    <!-- Modal for Adding New Category -->
                    <div x-show="openAdd" class="fixed z-12 inset-0 overflow-y-auto flex items-center justify-center">
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                        <!-- Modal Content for Add -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg px-3 pt-5 pb-3 text-left overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6">
                            <div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">
                                    Add New Category
                                </h3>
                                <form action="{{ route('admin.Categories.store') }}" method="POST">
                                    @csrf
                                    <div class="mt-2">
                                        <!-- Category Name Field -->
                                        <label for="category_name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Category Name</label>
                                        <input type="text" name="category_name" id="category_name" class="mt-1 p-2 w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm" required>

                                        <!-- SEO Fields -->
                                        <label for="title_meta" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mt-3">SEO Title</label>
                                        <input type="text" name="title_meta" id="title_meta" class="mt-1 p-2 w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm" required>

                                        <label for="content_meta" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mt-3">SEO Content</label>
                                        <textarea name="content_meta" id="content_meta" class="mt-1 p-2 w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm" required></textarea>

                                        <label for="keyword_meta" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mt-3">SEO Keywords</label>
                                        <input type="text" name="keyword_meta" id="keyword_meta" class="mt-1 p-2 w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm" required>
                                    </div>

                                    <div class="mt-4 flex justify-end">
                                        <button type="button" @click="openAdd = false" class="text-white font-bold py-2 px-3 rounded mr-2" style="background-color: red;">
                                            Cancel
                                        </button>                                            
                                        <x-primary-button type="submit" class="hover:bg-opacity-90 text-white font-bold py-2 px-3 rounded ml-2">
                                            Add Category
                                        </x-primary-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Editing Category -->
                    <div x-show="openEdit" class="fixed z-12 inset-0 overflow-y-auto flex items-center justify-center">
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                        <!-- Modal Content for Edit -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg px-3 pt-5 pb-3 text-left overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6">
                            <div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">
                                    Edit Category
                                </h3>
                                <form :action="'/admin/Categories/' + category.id" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="mt-2">
                                        <!-- Category Name Field -->
                                        <label for="category_name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Category Name</label>
                                        <input type="text" name="category_name" id="edit_category_name" x-model="category.category_name" class="mt-1 p-2 w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm" required>

                                        <!-- SEO Fields -->
                                        <label for="title_meta" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mt-3">SEO Title</label>
                                        <input type="text" name="title_meta" id="edit_title_meta" x-model="category.title_meta" class="mt-1 p-2 w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm" required>

                                        <label for="content_meta" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mt-3">SEO Content</label>
                                        <textarea name="content_meta" id="edit_content_meta" x-model="category.content_meta" class="mt-1 p-2 w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm" required></textarea>

                                        <label for="keyword_meta" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mt-3">SEO Keywords</label>
                                        <input type="text" name="keyword_meta" id="edit_keyword_meta" x-model="category.keyword_meta" class="mt-1 p-2 w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm" required>
                                    </div>

                                    <div class="mt-4 flex justify-end">
                                        <button type="button" @click="openEdit = false" class="text-white font-bold py-2 px-3 rounded mr-2" style="background-color: red;">
                                            Cancel
                                        </button>                                            
                                        <x-primary-button type="submit" class="hover:bg-opacity-90 text-white font-bold py-2 px-3 rounded ml-2">
                                            Save Changes
                                        </x-primary-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Categories Table -->
                <table class="min-w-full bg-white dark:bg-gray-800 mt-6">
                    <thead class="h-12">
                        <tr>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-black dark:text-gray-200 tracking-wider">Creation Date</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-black dark:text-gray-200 tracking-wider">Update Date</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-black dark:text-gray-200 tracking-wider">Category Name</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-black dark:text-gray-200 tracking-wider">SEO Title</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-black dark:text-gray-200 tracking-wider">SEO Content</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-black dark:text-gray-200 tracking-wider">SEO Keywords</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-black dark:text-gray-200 tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700">{{ $category->created_at }}</td>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700">{{ $category->updated_at }}</td>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700">{{ $category->category_name }}</td>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700">{{ $category->title_meta }}</td>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700">{{ $category->content_meta }}</td>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700">{{ $category->keyword_meta }}</td>
                                <td class="px-6 py-4 border-b border-gray-300 dark:border-gray-700 flex space-x-3">
                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.Categories.edit', $category->id) }}" class="text-gray-500 hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232a1 1 0 011.768.768l-1.036 6.21a.75.75 0 01-.732.68h-5.42a.75.75 0 01-.732-.682l-.732-4.394a.75.75 0 01.684-.846h1.5a.75.75 0 01.682.5l.182.455h1.564l-.682-4.046z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.75l.682 4.046m0 0l-3.5 4.206m2.636-1.182l3.5-4.206M8.25 18.25l5.25 5.25M12.5 20.5L17 16m-8 2.25L3 21.75" />
                                    </svg>
                                </a>


                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.Categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
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

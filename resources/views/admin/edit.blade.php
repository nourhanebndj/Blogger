<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black dark:text-gray-200 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100 mb-6">
                    Edit Category: {{ $category->category_name }}
                </h3>

                <form action="{{ route('admin.Categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="mt-2">
                        <!-- Category Name Field -->
                        <label for="category_name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Category Name</label>
                        <input type="text" name="category_name" id="category_name" value="{{ old('category_name', $category->category_name) }}" class="mt-1 p-2 w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm" required>

                        <!-- SEO Fields -->
                        <label for="title_meta" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mt-3">SEO Title</label>
                        <input type="text" name="title_meta" id="title_meta" value="{{ old('title_meta', $category->title_meta) }}" class="mt-1 p-2 w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm" required>

                        <label for="content_meta" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mt-3">SEO Content</label>
                        <textarea name="content_meta" id="content_meta" class="mt-1 p-2 w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm" required>{{ old('content_meta', $category->content_meta) }}</textarea>

                        <label for="keyword_meta" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mt-3">SEO Keywords</label>
                        <input type="text" name="keyword_meta" id="keyword_meta" value="{{ old('keyword_meta', $category->keyword_meta) }}" class="mt-1 p-2 w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm" required>
                    </div>

                    <div class="mt-4 flex justify-end">
                        <a href="{{ route('admin.Categories') }}" class="text-white font-bold py-2 px-3 rounded mr-2" style="background-color: red;">
                            Cancel
                        </a>
                        <x-primary-button type="submit" class="hover:bg-opacity-90 text-white font-bold py-2 px-3 rounded ml-2">
                            Save Changes
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800">
                    <form method="POST" action="{{ route('admin.articles.update', $article->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 dark:text-gray-300">Title</label>
                            <input type="text" name="title" id="title" value="{{ $article->title }}" class="w-full p-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600" required>
                        </div>

                        <!-- Category -->
                        <div class="mb-4">
                            <label for="category_id" class="block text-gray-700 dark:text-gray-300">Category</label>
                            <select name="category_id" id="category_id" class="w-full p-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600" required>
                                <option value="">Select a category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @if($article->category_id == $category->id) selected @endif>{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Content -->
                        <div class="mb-4">
                            <label for="content" class="block text-gray-700 dark:text-gray-300">Content</label>
                            <textarea name="content" id="content" rows="6" class="w-full p-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600" required>{{ $article->content }}</textarea>
                        </div>

                        <!-- Front Image -->
                        <div class="mb-4">
                            <label for="front_image" class="block text-gray-700 dark:text-gray-300">Front Image</label>
                            <input type="file" name="front_image" id="front_image" class="w-full p-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600">
                            @if($article->front_image)
                                <img src="{{ asset('images/' . $article->front_image) }}" alt="{{ $article->title }}" class="mt-2" width="100">
                            @endif
                        </div>

                        <!-- SEO Meta Title -->
                        <div class="mb-4">
                            <label for="meta_title" class="block text-gray-700 dark:text-gray-300">Meta Title</label>
                            <input type="text" name="meta_title" id="meta_title" value="{{ $article->meta_title }}" class="w-full p-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600">
                        </div>

                        <!-- SEO Meta Content -->
                        <div class="mb-4">
                            <label for="meta_content" class="block text-gray-700 dark:text-gray-300">Meta Content</label>
                            <textarea name="meta_content" id="meta_content" rows="3" class="w-full p-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600">{{ $article->meta_content }}</textarea>
                        </div>
                        <button type="submit" style="background-color: #D4A373; color: white; padding: 8px 16px; border: none; border-radius: 4px; font-weight: bold;">
                            Update Article
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.tiny.cloud/1/40hk5l6l66nvp0p9zunmv6n88i1e36nvk84d4hwhcucgbddo/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: [
                'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
                'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown',
            ],
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            forced_root_block: '', 
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
        });
    </script>
</x-app-layout>

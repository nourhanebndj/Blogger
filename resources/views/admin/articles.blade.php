<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Id</th>
                                <th class="border px-4 py-2">Creation Date</th>
                                <th class="border px-4 py-2">Update Date</th>
                                <th class="border px-4 py-2">Images</th>
                                <th class="border px-4 py-2">Title</th>
                                <th class="border px-4 py-2">Content </th>
                                <th class="border px-4 py-2">Category</th>
                                <th class="border px-4 py-2">Title meta</th>
                                <th class="border px-4 py-2">Content meta </th>
                                <th class="border px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td class="border px-4 py-2">{{ $article->id }}</td>
                                    <td class="border px-4 py-2">{{ $article->created_at}}</td>
                                    <td class="border px-4 py-2">{{ $article->updated_at}}</td>
                                    <td class="border px-4 py-2">
                                        <img src="{{ asset('images/' . $article->front_image) }}" alt="{{ $article->title }}" width="100" height="100">
                                    </td>
                                                                        <td class="border px-4 py-2">{{ $article->title }}</td>
                                    <td class="border px-4 py-2">{{ \Illuminate\Support\Str::limit($article->content, 50, '...') }}</td>     
                                    <td class="border px-4 py-2">{{ $article->category_id}}</td>
                                    <td class="border px-4 py-2">{{ $article->meta_title}}</td>
                                    <td class="border px-4 py-2">{{ \Illuminate\Support\Str::limit($article->meta_content, 50, '...') }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('admin.articles.edit', $article->id) }}" class="text-blue-500 hover:text-blue-600">Edit</a>
                                        <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-600">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

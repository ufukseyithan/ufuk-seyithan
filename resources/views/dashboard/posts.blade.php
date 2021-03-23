<x-dashboard.layouts.app>
    <x-slot name="header">
        {{ __('Posts') }}
    </x-slot>

    <div class="flex justify-end">
        <a href="{{ route('dashboard.posts.create') }}" class="underline">Create a Post</a>
    </div>
    <hr class="my-4">
    <table class="min-w-max w-full table-auto mb-4">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Title</th>
                <th class="py-3 px-6 text-left">Content</th>
                <th class="py-3 px-6 text-center">Date</th>
                <th class="py-3 px-6 text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            @foreach ($posts as $post)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">
                        {{ $post->title }}
                    </td>
                    <td class="py-3 px-6 text-left whitespace-nowrap">
                        <p>{{ Str::limit(strip_tags($post->content), 40, '...') }}</p>  
                    </td>
                    <td class="py-3 px-6 text-center" title="{{ $post->created_at }}">
                        {{ $post->created_at->diffForHumans() }}
                    </td>
                    <td class="py-3 px-6 text-right">
                        <div class="flex items-center justify-end space-x-2">
                            <a href="{{ route('dashboard.posts.edit', $post) }}" class="underline">Edit</a>
                            <form action="{{ route('dashboard.posts.destroy', $post) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <x-button>Delete</x-button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</x-dashboard.layouts.app>

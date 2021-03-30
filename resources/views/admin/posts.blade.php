<x-admin.layouts.app>
    <x-slot name="header">
        {{ __('Posts') }}
    </x-slot>

    <div class="flex justify-end">
        <a href="{{ route('admin.posts.create') }}" class="underline"><i class="fas fa-edit"></i> Create a Post</a>
    </div>
    <hr class="my-4">
    <div class="w-full overflow-x-auto">
        <table class="min-w-max w-full">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm font-mono">
                    <th class="py-3 px-6 text-left">Title</th>
                    <th class="py-3 px-6 text-center">Date</th>
                    <th class="py-3 px-6 text-center">Status</th>
                    <th class="py-3 px-6 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm">
            @forelse ($posts as $post)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">
                        {{ $post->title }}
                    </td>
                    <td class="py-3 px-6 text-center whitespace-nowrap">
                        <time datetime="{{ $post->created_at }}" title="{{ $post->created_at }}">{{ $post->created_at->diffForHumans() }}</div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <form action="{{ route('admin.posts.update-status', $post) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="checkbox" onchange="$(this).closest('form').submit();" name="status" {{ $post->status ? "checked" : ""}}>
                        </form>
                    </td>
                    <td class="py-3 px-6 text-right">
                        <div class="flex items-center justify-end space-x-2">
                            <a href="{{ route('admin.posts.edit', $post) }}" class="underline">Edit</a>
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-button class="ring-red-300 bg-red-600 hover:bg-red-500 active:bg-red-700 focus:border-red-900"><i class="fas fa-trash-alt"></i></x-button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="py-3 px-6">There are no posts</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    
    {{ $posts->links() }}
</x-admin.layouts.app>

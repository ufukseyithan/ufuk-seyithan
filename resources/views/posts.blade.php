<x-layouts.app title="Posts">
    <section class="container py-8 sm:py-16 sm:w-1/2">
        <div class="grid gap-8 mb-4">
            @forelse ($posts as $post)
                <article class="flex flex-col space-y-2 text-lg">
                    <img src="{{ asset('storage/'.$post->image_path) }}" alt="{{ $post->title }}">
                    <ul class="text-gray-500 text-sm flex space-x-2">
                        <li><time datetime="{{ $post->created_at }}" title="{{ $post->created_at }}">{{ $post->created_at->diffForHumans() }}</time></li>
                    </ul>
                    <h2 class="font-mono text-5xl">{{ $post->title }}</h2>
                    <a href="{{ route('posts.show', $post) }}" class="underline">Read</a>
                </article>
            @empty
                <p class="text-gray-500">There are currently no posts</p>
            @endforelse
        </div>

        {{ $posts->links() }}
    </section>
</x-layouts.app>
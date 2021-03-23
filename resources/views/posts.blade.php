<x-layouts.app>
    <section class="container py-8 sm:py-16">
        <div class="grid gap-8 mb-4">
            @foreach ($posts as $post)
                <div>
                    <article class="flex flex-col space-y-2 text-lg">
                        <h2 class="font-mono text-5xl">{{ $post->title }}</h2>
                        <ul class="text-gray-500 text-sm flex space-x-2">
                            <li><time datetime="{{ $post->created_at }}" title="{{ $post->created_at }}">{{ $post->created_at->diffForHumans() }}</time></li>
                        </ul>
                        <a href="{{ route('posts.show', $post) }}" class="underline">Read</a>
                    </article>
                </div>
            @endforeach
        </div>
        {{ $posts->links() }}
    </section>
</x-layouts.app>
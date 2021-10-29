<x-layouts.app :title="$post->title" :description="$post->description" :keywords="$post->keywords">
    <section class="container pt-8">
        <img src="{{ asset('storage/'.$post->image_path) }}" alt="{{ $post->title }}" class="mb-4 w-full">
        <article class="flex flex-col space-y-8">
            <ul class="text-gray-500 text-sm flex space-x-2 whitespace-nowrap overflow-x-auto">
                <li><time datetime="{{ $post->created_at }}" title="{{ $post->created_at }}">Posted {{ $post->created_at->diffForHumans() }}</time></li>
                @if ($post->created_at != $post->updated_at)
                    <span>|</span>
                    <li><time datetime="{{ $post->created_at }}"></time>Last updated on {{ $post->updated_at->format('M d Y') }}</li>
                @endif
            </ul>
            <h2 class="font-mono text-4xl">{{ $post->title }}</h2>
            <p class="solid-shadow border-2 border-black p-4 text-lg sm:p-8">{{ $post->description }}</p>
            <div>{!! $post->content !!}</div>
        </article>
    </section>
</x-layouts.app>
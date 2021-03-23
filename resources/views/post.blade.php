<x-layouts.app>
    <section class="container py-8 sm:py-16">
        <article class="flex flex-col space-y-8 text-xl">
            <h2 class="font-mono text-6xl">{{ $post->title }}</h2>
            <ul class="text-gray-500 text-sm flex space-x-2">
                <li><time datetime="{{ $post->created_at }}" title="{{ $post->created_at }}">Posted {{ $post->created_at->diffForHumans() }}</time></li>
                @if ($post->created_at != $post->updated_at)
                    <span>|</span>
                    <li><time datetime="{{ $post->created_at }}"></time>Last updated on {{ $post->updated_at->format('M d Y') }}</li>
                @endif
            </ul>
            <div>{!! $post->content !!}</div>
        </article>
    </section>
</x-layouts.app>
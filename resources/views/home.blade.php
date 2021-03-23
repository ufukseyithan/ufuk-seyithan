<x-layouts.app>
    <section class="container flex flex-col justify-between items-center text-2xl py-8 sm:flex-row sm:py-16">
        <article class="max-w-sm">
            <h2 class="font-mono text-4xl mb-4">
                Studies English Language and Literature. 
                <br> 
                Deals with video games.
            </h2>
            <p>Drew Half-Life chapters on papers as a kid. Modded the hell of <a href="https://www.cs2d.com/" class="underline">CS2D</a>. And now his ultimate goal is to develop a game from scratch.</p>
        </article>
        <figure class="py-8">
            <img src="images/me.png" alt="Me" class="max-w-sm w-full">
            <figcaption class="py-2 text-center text-sm text-gray-500">Taken by Özgür Narşap</figcaption>
        </figure>
    </section>
    <section class="bg-black text-white text-center py-8">
        <h2 class="font-mono border-b-2 inline-block">Projects</h2>
    </section>
    <section class="py-8 sm:py-32 container">
        <x-project>
            <x-slot name="name">Center</x-slot>
            <x-slot name="what">Mobile Game</x-slot>
            <x-slot name="date">TBA</x-slot>
            <x-slot name="desc">A hyper-casual mobile game where player try to reach the center by breaking the surrounding obstacles with balls.</x-slot>
            <x-slot name="image">
                <img src="images/projects/center/center.gif" alt="Center" class="w-full max-w-sm">
            </x-slot>
            <x-slot name="images">
                <img src="images/projects/center/1.png" alt="" class="w-2/3">
                <img src="images/projects/center/2.png" alt="" class="w-2/3">
                <img src="images/projects/center/3.png" alt="" class="w-2/3">
                <img src="images/projects/center/4.png" alt="" class="w-2/3">
                <img src="images/projects/center/5.png" alt="" class="w-2/3">
                <img src="images/projects/center/6.png" alt="" class="w-2/3">
            </x-slot>
        </x-project>
    </section>
    <div class="text-center">&#9913;</div>
    <section class="container py-8 sm:py-32">
        <x-project>
            <x-slot name="name">Zaman Makinası</x-slot>
            <x-slot name="what">Web Platform</x-slot>
            <x-slot name="date">10 Nov 2018 &mdash; 2019</x-slot>
            <x-slot name="desc">A local countdown platform which had been published for a year and then closed.</x-slot>
            <x-slot name="image">
                <div class="flex items-center justify-center w-full h-full sm:w-1/2">
                    <i class="fas fa-cog fa-spin text-9xl"></i>
                </div>
            </x-slot>
            <x-slot name="images">
                <img src="images/projects/zaman-makinasi/1.png" alt="" class="w-2/3">
                <img src="images/projects/zaman-makinasi/2.png" alt="" class="w-2/3">
                <img src="images/projects/zaman-makinasi/3.png" alt="" class="w-2/3">
                <img src="images/projects/zaman-makinasi/4.png" alt="" class="w-2/3">
            </x-slot>
        </x-project>
    </section>
    <section class="bg-black text-white text-center py-8">
        <h2 class="font-mono border-b-2 inline-block">Posts</h2>
    </section>
    <section class="container py-16 text-xl">
        <div class="grid gap-8 sm:grid-cols-3 mb-16">
            @foreach ($posts as $post)
                <article class="flex flex-col space-y-2">
                    <h3 class="font-mono text-2xl">{{ $post->title }}</h3>
                    <ul class="text-gray-500 text-sm flex space-x-2">
                        <li><time datetime="{{ $post->created_at }}" title="{{ $post->created_at }}">{{ $post->created_at->diffForHumans() }}</time></li>
                    </ul>
                    <a href="{{ route('posts.show', $post) }}" class="underline">Read</a>
                </article>
            @endforeach
        </div>
        <a href="{{ route('posts.index') }}" class="block text-center underline text-xl">View all</a>
    </section>
    <section class="bg-yellow-300 text-center text-xl py-16 shadow-2xl">
        <div class="container flex flex-col items-center justify-between space-y-4">
            <h3 class="text-xl font-mono">Everyone needs to do something for a living...</h3>
            <a href="mailto:me@ufukseyithanerdem.com" class="bg-black text-white px-2 py-1 font-mono uppercase">Talk Business</a>
        </div>
    </section>
</x-layouts.app>
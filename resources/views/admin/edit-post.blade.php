<x-admin.layouts.app>
    <x-slot name="header">
        {{ __('Edit Post \''.$post->title.'\'') }}
    </x-slot>

    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form action="{{ route('admin.posts.update', $post) }}" method="post" class="flex flex-col space-y-4" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div>
            <x-label for="title" :value="__('Title')" />
            <p class="text-gray-500 text-sm">This will also be used for the document title.</p>
            <x-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ $post->title }}" required autofocus/>
        </div>

        <div>
            <x-label for="description" :value="__('Description')" />
            <p class="text-gray-500 text-sm">Summarize your post with a few sentences. This will also be used for the meta description.</p>
            <x-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{ $post->description }}"/>
        </div>

        <div>
            <x-label for="keywords" :value="__('Keywords')" />
            <p class="text-gray-500 text-sm">Support your post with keywords (tags), so readers will find it easier. This will also be used for the meta keywords.</p>
            <x-input id="keywords" class="block mt-1 w-full" type="text" name="keywords" placeholder="John Doe, computer, apple" value="{{ $post->keywords }}"/>
        </div>

        <div>
            <x-label for="image" :value="__('Image')" />
            <p class="text-gray-500 text-sm">Skip uploading a new image if you want to keep the current one.</p>
            <div class="flex space-x-2 items-end">
                <img src="{{ asset('storage/'.$post->image_path) }}" alt="Image" class="w-1/3">
                <input id="image" class="block mt-1 w-full" type="file" name="image">
            </div>
        </div>

        <div>
            <x-label for="content" :value="__('Content')" />
            <x-textarea class="block mt-1 w-full resize-vertical h-32" name="content" required>{{ $post->content }}</x-textarea>
        </div>

        <div>
            <x-button>Update</x-button>
        </div>
    </form>
</x-admin.layouts.app>
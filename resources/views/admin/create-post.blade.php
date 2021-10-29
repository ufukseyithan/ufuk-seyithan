<x-admin.layouts.app>
    <x-slot name="header">
        {{ __('Create a Post') }}
    </x-slot>

    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form action="{{ route('admin.posts.store') }}" method="post" class="flex flex-col space-y-4" enctype="multipart/form-data">
        @csrf

        <div>
            <x-label for="title" :value="__('Title')" />
            <p class="text-gray-500 text-sm">This will also be used for the document title.</p>
            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus/>
        </div>

        <div>
            <x-label for="description" :value="__('Description')" />
            <p class="text-gray-500 text-sm">Summarize your post with a few sentences. This will also be used for the meta description.</p>
            <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')"/>
        </div>

        <div>
            <x-label for="keywords" :value="__('Keywords')" />
            <p class="text-gray-500 text-sm">Support your post with keywords (tags), so readers will find it easier. This will also be used for the meta keywords.</p>
            <x-input id="keywords" class="block mt-1 w-full" type="text" name="keywords" placeholder="John Doe, computer, apple" :value="old('keywords')"/>
        </div>

        <div>
            <x-label for="image" :value="__('Image')" />
            <p class="text-gray-500 text-sm">Preferably, choose horizontal images.</p>
            <input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required>
        </div>

        <div>
            <x-label for="content" :value="__('Content')" />
            <x-textarea class="block mt-1 w-full resize-vertical h-32" name="content">{{ old('content') }}</x-textarea>
        </div>

        <div>
            <x-button>Submit</x-button>
        </div>
    </form>
</x-admin.layouts.app>

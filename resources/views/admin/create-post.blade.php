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
            <x-textarea class="block mt-1 w-full resize-vertical h-32" name="content" required>{{ old('content') }}</x-textarea>
        </div>

        <div>
            <x-button>Submit</x-button>
        </div>
    </form>
    
    {{-- @push('scripts')
        <script type="text/javascript">
            $('#summernote').summernote({
                height: 400,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear', 'strikethrough', 'superscript', 'subscript']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video', 'table', 'hr']]
                ],
                styleTags: [
                    'p',
                    { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
                    'pre', 
                    { title: 'Heading 1', tag: 'h2', className: 'text-2xl font-mono', value: 'h2' },
                    { title: 'Heading 2', tag: 'h3', className: 'text-xl font-mono', value: 'h3' },
                    { title: 'Heading 3', tag: 'h4', className: 'text-lg font-mono', value: 'h4' },
                    { title: 'Heading 4', tag: 'h5', className: 'text-md font-mono', value: 'h5' },
                    { title: 'Heading 5', tag: 'h6', className: 'text-sm font-mono', value: 'h6' }
	            ],
            });
        </script>
    @endpush --}}
</x-admin.layouts.app>

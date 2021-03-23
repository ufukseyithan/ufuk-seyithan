<x-dashboard.layouts.app>
    <x-slot name="header">
        {{ __('Create a Post') }}
    </x-slot>

    <form action="{{ route('dashboard.posts.store') }}" method="post" class="flex flex-col space-y-4">
        @csrf

        <div>
            <x-label for="title" :value="__('Title')" />
            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
        </div>

        <div>
            <x-label for="content" :value="__('Content')" />
            <x-textarea id="summernote" class="block mt-1 w-full resize-vertical h-32" name="content" required>{{ old('content') }}</x-textarea>
        </div>

        <div>
            <x-button>Submit</x-button>
        </div>
    </form>
    
    @push('scripts')
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
                    { title: 'Heading 1', tag: 'h2', className: 'text-4xl font-mono', value: 'h2' },
                    { title: 'Heading 2', tag: 'h3', className: 'text-3xl font-mono', value: 'h3' },
                    { title: 'Heading 3', tag: 'h4', className: 'text-2xl font-mono', value: 'h4' },
                    { title: 'Heading 4', tag: 'h5', className: 'text-xl font-mono', value: 'h5' },
                    { title: 'Heading 5', tag: 'h6', className: 'text-lg font-mono', value: 'h6' }
	            ],
            });
        </script>
    @endpush
</x-dashboard.layouts.app>

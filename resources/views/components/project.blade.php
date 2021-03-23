<div class="flex flex-col space-y-8">
    <div class="flex flex-col flex-col-reverse justify-between space-y-4 space-y-reverse sm:flex-row sm:space-y-0">
        <div class="flex flex-col space-y-2">
            <div>
                <h2 class="font-mono text-3xl">{{ $name }}</h2>
                <span class="text-gray-500">{{ $what }}</span>
            </div>
            <ul>
                <li><b>Date:</b> {{ $date }}</li>
            </ul>
            <p class="max-w-sm text-gray-500">{{ $desc }}</p>
        </div>
        <div>
            {{ $image }}
        </div>
    </div>
    <div class="flex space-x-4 overflow-x-auto">
        {{ $images }}
    </div>
</div>
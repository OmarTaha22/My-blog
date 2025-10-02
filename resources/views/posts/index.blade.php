<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot:header>

    <x-slot:content>

       @if(session('success'))
            <div class="flex justify-center mb-6">
                <div class="bg-yellow-100 border border-yellow-400 text-yellow-800 px-6 py-4 rounded-lg shadow-md max-w-lg w-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z"/>
                    </svg>
                    <span class="font-semibold">{{ session('success') }}</span>
                </div>
            </div>
        @endif


        <a href="{{ route('posts.create') }}"
           class="bg-blue-600 text-white px-3 py-2 rounded hover:bg-blue-700 transition">
            + Add Post
        </a>

        <div class="mt-6 space-y-4">
            @foreach($posts as $post)
                <div class="bg-white p-4 shadow rounded">
                    <h3 class="text-xl font-extrabold mb-2">
                        <a href="{{ route('posts.show', $post->id) }}"
                            class="inline-block px-3 py-1.5 bg-blue-600 text-white text-base rounded hover:bg-blue-700 transition">
                            {{ $post->title }}
                        </a>
                    </h3>
                    <p>{{ Str::limit($post->content, 100) }}</p>

                    <p class="text-gray-500 text-sm mb-2">
                    Published on {{ $post->created_at->format('M d, Y') }}</p>
                </div>
            @endforeach
        </div>
    </x-slot:content>
</x-app-layout>

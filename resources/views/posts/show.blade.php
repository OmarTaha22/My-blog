<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot:header>

    <x-slot:content>
        <div class="bg-white p-6 rounded shadow-sm">
            <a href="{{ route('posts.show', $post->id) }}"
               class="inline-block px-3 py-1.5 bg-blue-600 text-white text-base rounded hover:bg-blue-700 transition">
                {{ $post->title }}
            </a>

            <p class="text-gray-500 text-sm mt-2 mb-4">
                Published on {{ $post->created_at->format('M d, Y') }}
            </p>

            <p class="text-gray-800">{{ $post->content }}</p>
        </div>

        <a href="{{ route('posts.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">
            ← Back to Posts
        </a>
    </x-slot:content>
</x-app-layout>

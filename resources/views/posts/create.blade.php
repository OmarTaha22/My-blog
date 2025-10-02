<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot:header>

    <x-slot:content>
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block font-medium">Title</label>
                <input type="text" name="title" class="border rounded w-full p-2" required>
            </div>

            <div class="mb-4">
                <label class="block font-medium">Content</label>
                <textarea name="content" rows="5" class="border rounded w-full p-2" required></textarea>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
            <a href="{{ route('posts.index') }}" class="ml-2 text-gray-600">Cancel</a>
        </form>
    </x-slot:content>
</x-app-layout>

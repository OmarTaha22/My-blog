<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot:header>

    <x-slot:content>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-900 text-lg font-medium">
                        {{ __("You're logged in!") }}
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('posts.index') }}"
                           class="inline-block px-5 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                           📄 Show Posts
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:content>
</x-app-layout>

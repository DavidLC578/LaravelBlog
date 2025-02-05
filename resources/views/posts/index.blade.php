<x-app-layout>
    <div class="flex flex-col space-y-4 p-6">
        @foreach ($posts as $post)
            <div
                class="flex justify-between items-center p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <a href="{{ route('posts.show', $post->id) }}" class="block flex-grow">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $post->title }}</h2>
                    <p class="text-gray-600 mt-2">{{ $post->description }}</p>
                </a>
                @auth
                    @can('admin.post.destroy')
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="ml-4">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="cursor-pointer bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300">Delete</button>
                        </form>
                    @endcan
                    {{-- @endforeach --}}
                @endauth
            </div>
        @endforeach
        {{ $posts->links() }}
    </div>
</x-app-layout>

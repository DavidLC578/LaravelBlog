<x-app-layout>
    <div class="flex flex-col bg-white mt-10 mb-5 mx-auto max-w-5xl p-10 rounded-md shadow-lg space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl md:text-4xl font-bold text-gray-800 mb-4">{{ $post->title }}</h1>
            <h1 class="text-lg font-bold text-gray-800">{{ $user->name }}</h1>
        </div>
        <div class="space-y-4">
            <span class="inline-block bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full">
                {{ $post->category }}
            </span>
            <p class="text-lg leading-relaxed text-gray-700 font-serif text-justify">
                {!! nl2br(e($post->content)) !!}
            </p>
            <div class="flex justify-end space-x-3">
                @auth
                    @if (Auth::user()->id == $user->id)
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="text-end">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="cursor-pointer bg-red-500 text-white font-semibold px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300">Delete</button>
                        </form>
                        <form action="{{ route('posts.edit', $post->id) }}" method="GET" class="text-end">
                            @csrf
                            @method('GET')
                            <button type="submit"
                                class="cursor-pointer bg-yellow-300 text-gray-900 font-semibold px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">Editar</button>
                        </form>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</x-app-layout>

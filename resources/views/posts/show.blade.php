<x-app-layout>
    <div class="flex flex-col bg-white mt-10 mb-5 mx-auto max-w-5xl p-10 rounded-md shadow-lg space-y-6">
        <h1 class="text-2xl md:text-4xl font-bold text-gray-800 mb-4">{{ $post->title }}</h1>
        <div class="space-y-4">
            <span class="inline-block bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full">
                {{ $post->category }}
            </span>
            <p class="text-lg leading-relaxed text-gray-700 font-serif text-justify">
                {!! nl2br(e($post->content)) !!}
            </p>
        </div>
    </div>
</x-app-layout>

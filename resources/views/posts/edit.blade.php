<x-app-layout>
    <div class="flex justify-center items-center w-full mt-10">
        <div class="w-3/4 flex justify-center py-18 rounded-xl">
            <form action="{{ route('posts.update', $post->id) }}" method="post"
                class="bg-white shadow-xl rounded-lg p-6 w-full max-w-2xl space-y-4">
                @csrf
                @method('PUT')
                <h2 class="text-2xl font-semibold text-gray-700 text-center">Edit a Post</h2>

                <div>
                    <label class="block text-gray-600 font-medium">Title:</label>
                    <input type="text" name="title" value="{{ old('title', $post->title) }}"
                        class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-blue-400">
                </div>

                <div>
                    <label class="block text-gray-600 font-medium">Description:</label>
                    <input type="text" name="description" value="{{ old('description', $post->description) }}"
                        class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-blue-400">
                </div>

                <div>
                    <label class="block text-gray-600 font-medium">Category:</label>
                    <input type="text" name="category" value="{{ old('category', $post->category) }}"
                        class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-blue-400">
                </div>

                <div>
                    <label class="block text-gray-600 font-medium">Content:</label>
                    <textarea name="content" rows="10"
                        class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-blue-400 resize-y">{{ old('content', $post->content) }}
                    </textarea>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700 cursor-pointer">
                    Submit
                </button>
            </form>
        </div>
    </div>
</x-app-layout>

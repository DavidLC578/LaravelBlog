<x-app-layout>
    <div class="flex justify-center items-center w-full mt-10">
        <div class="w-3/4 flex justify-center py-18 rounded-xl">
            <form action="{{ route('posts.store') }}" method="post"
                class="bg-white shadow-xl rounded-lg p-6 w-full max-w-2xl space-y-4">
                @csrf
                <h2 class="text-2xl font-semibold text-gray-700 text-center">Create a Post</h2>

                <div>
                    <label class="block text-gray-600 font-medium">Title:</label>
                    <input type="text" name="title"
                        class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-blue-400">
                </div>

                <div>
                    <label class="block text-gray-600 font-medium">Description:</label>
                    <input type="text" name="description"
                        class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-blue-400">
                </div>

                <div>
                    <label class="block text-gray-600 font-medium">Category:</label>
                    <input type="text" name="category"
                        class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-blue-400">
                </div>

                <div>
                    <label class="block text-gray-600 font-medium">Content:</label>
                    <textarea name="content" rows="10"
                        class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-blue-400 resize-y"></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700 cursor-pointer">
                    Submit
                </button>
            </form>
        </div>
    </div>
</x-app-layout>

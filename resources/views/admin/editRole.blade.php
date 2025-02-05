<x-app-layout>
    <div class="flex items-center justify-center md:h-screen mt-22 md:mt-0">
        <form action="{{ route('admin.user.editRole', $user->id) }}" method="post"
            class="w-full max-w-md bg-white shadow-xl rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2 text-xl">
                    Name: <span class="text-black">
                        {{ $user->name }}
                    </span>
                </label>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-4 text-xl">
                    @foreach ($user->getRoleNames() as $role)
                        Role: <span class="text-black">
                            {{ ucfirst($role) }}
                        </span>
                    @endforeach
                </label>
                <select name="role" class="text-lg font-semibold w-full">
                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}">{{ ucfirst($role->name) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition-all cursor-pointer"
                    type="submit">
                    Change role
                </button>
            </div>
        </form>
    </div>
</x-app-layout>

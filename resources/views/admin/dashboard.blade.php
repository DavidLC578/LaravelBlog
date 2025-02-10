<x-app-layout>
    <div class="flex flex-col space-y-10 p-6 w-full max-w-3xl mx-auto">
        <div class="space-y-3">
            @foreach ($users as $user)
                <div
                    class="flex flex-col md:flex-row justify-between items-center p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 w-full">
                    <div class="text-center md:text-left">
                        <h1 class="text-xl font-semibold text-gray-800">
                            {{ $user->name }}
                        </h1>
                        @if ($user->getRoleNames()->isEmpty())
                            <p class="text-gray-600">User</p>
                        @else
                            @foreach ($user->getRoleNames() as $role)
                                <p class="text-gray-600">{{ ucfirst($role) }}</p>
                            @endforeach
                        @endif
                    </div>
                    <div
                        class="flex flex-col md:flex-row md:items-center gap-y-4 md:gap-x-16 mt-4 md:mt-0 text-center md:text-left">
                        <div>
                            <h1 class="text-gray-800 font-semibold">{{ $user->email }}</h1>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-y-2 sm:gap-x-5">
                            <form action="{{ route('admin.user.roleView', $user->id) }}" method="get">
                                @csrf
                                <button type="submit"
                                    class="w-full sm:w-auto cursor-pointer bg-sky-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-sky-800 transition duration-300">
                                    Edit Role
                                </button>
                            </form>
                            <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="w-full sm:w-auto cursor-pointer bg-red-500 text-white font-semibold px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="mt-4">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</x-app-layout>

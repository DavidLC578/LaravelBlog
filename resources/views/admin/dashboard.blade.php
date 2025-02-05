<x-app-layout>
    <div class="flex flex-col space-y-10 p-6 w-3/4 mx-auto">
        <div class="space-y-3">
            @foreach ($users as $user)
                <div
                    class="flex justify-between items-center p-4 bg-white rounded-lg shadow-md 
            hover:shadow-lg transition-shadow duration-300 w-full">
                    <div>
                        <h1 class="text-xl font-semibold text-gray-800">
                            {{ $user->name }}
                        </h1>
                        @if ($user->getRoleNames()->isEmpty())
                            <p>User</p>
                        @else
                            @foreach ($user->getRoleNames() as $role)
                                <p>{{ ucfirst($role) }}</p>
                            @endforeach
                        @endif
                    </div>
                    <div class="flex items-center gap-x-16">
                        <div>
                            <h1 class="text-gray-800 font-semibold">{{ $user->email }}</h1>
                        </div>
                        <div class="flex gap-x-5">
                            <form action="{{ route('admin.user.roleView', $user->id) }}" method="get" class="">
                                @csrf
                                <button type="submit"
                                    class="cursor-pointer bg-sky-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-sky-800 transition duration-300">
                                    Edit Role
                                </button>
                            </form>
                            <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="cursor-pointer bg-red-500 text-white font-semibold px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $users->links() }}
        </div>
    </div>
</x-app-layout>

<nav class="flex bg-sky-800 py-4 items-center font-semibold">
    <div class="flex-grow flex justify-center space-x-8 text-white text-xl">
        {{-- <div class="">
            @auth
                <p>{{ Auth::user()->name }}</p>
            @endauth
        </div> --}}
        <a href="/">Home</a>
        <a href="{{ route('posts.index') }}">Posts</a>
        @auth
            @can('admin.dashboard')
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            @endcan
            <a href="{{ route('posts.create') }}">Create post</a>
            <a href="{{ route('logout') }}">Logout</a>
        @endauth
        @guest
            <a href="{{ route('auth.register') }}">Register</a>
            <a href="{{ route('auth.login') }}">Log in</a>
        @endguest
    </div>
</nav>

<nav class="flex bg-sky-800 py-4 items-center justify-between">
    <div class="flex-grow flex justify-center space-x-8 text-white text-xl ps-52">
        <a href="/">Home</a>
        <a href="{{ route('posts.index') }}">Posts</a>
        <a href="{{ route('posts.create') }}">Create post</a>
    </div>
    @guest
        <div class="flex space-x-8 text-white text-xl pe-14">
            <a href="{{ route('auth.register') }}">Register</a>
            <a href="{{ route('auth.register') }}">Log in</a>
        </div>
    @endguest
    @auth
        <div class="flex space-x-8 text-white text-xl pe-14">
            <a href="{{ route('auth.register') }}">Logout</a>
        </div>
    @endauth
</nav>

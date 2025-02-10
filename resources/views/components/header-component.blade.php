<nav class="bg-sky-800 py-4 px-6 text-white font-semibold">
    <div class="flex justify-between items-center">
        @auth
            <div class="text-xl">{{ Auth::user()->name }}</div>
        @endauth

        <!-- Botón del menú hamburguesa -->
        <button id="menu-button" class="md:hidden focus:outline-none">
            <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
            <svg id="close-icon" class="hidden w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Menú en desktop -->
        <div class="hidden md:flex space-x-8 text-xl">
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
    </div>

    <!-- Menú en móvil -->
    <div id="mobile-menu" class="hidden md:hidden flex flex-col space-y-4 mt-4 text-center">
        <a href="/" class="block">Home</a>
        <a href="{{ route('posts.index') }}" class="block">Posts</a>
        @auth
            @can('admin.dashboard')
                <a href="{{ route('admin.dashboard') }}" class="block">Dashboard</a>
            @endcan
            <a href="{{ route('posts.create') }}" class="block">Create post</a>
            <a href="{{ route('logout') }}" class="block">Logout</a>
        @endauth
        @guest
            <a href="{{ route('auth.register') }}" class="block">Register</a>
            <a href="{{ route('auth.login') }}" class="block">Log in</a>
        @endguest
    </div>
</nav>

<script>
    document.getElementById('menu-button').addEventListener('click', function() {
        let menu = document.getElementById('mobile-menu');
        let menuIcon = document.getElementById('menu-icon');
        let closeIcon = document.getElementById('close-icon');

        menu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });
</script>

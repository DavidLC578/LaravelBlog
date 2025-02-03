<x-app-layout>
    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Bienvenido a Nuestra Aplicación</h1>
            <p class="text-lg text-gray-600 mb-8">Explora las opciones disponibles para comenzar.</p>
            <div class="space-x-4">
                <a href="/posts"
                    class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Ver
                    Publicaciones</a>
                <a href="/posts/create"
                    class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 transition duration-300">Crear
                    Publicación</a>
            </div>
        </div>
    </div>
</x-app-layout>

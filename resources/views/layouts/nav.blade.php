<nav class="mb-12">
    <div class="mx-auto max-w-6xl flex justify-center items-center text-3xl h-16">
        <a href="/" class="text-gray-300 hover:bg-zinc-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Home</a>
        <a href="/portfolio/" class="text-gray-300 hover:bg-zinc-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Portfolio</a>
        <a href="/resume" class="text-gray-300 hover:bg-zinc-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Resume</a>

        @auth
        <a href="/resume" class="text-gray-300 hover:bg-zinc-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Documents</a>
        @endauth

        @guest
            <a href="/login" class="text-gray-300 hover:bg-zinc-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Login</a>
        @endguest

        @auth
            <a href="/portfolio/create" class="text-gray-300 hover:bg-zinc-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Create New</a>
        @endauth
    </div>
</nav>

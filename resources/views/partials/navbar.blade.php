<nav class="fixed top-0 w-full z-50 bg-white/70 backdrop-blur-md shadow-sm">
    <div class="flex items-center justify-between px-6 h-16 max-w-7xl mx-auto">
        <span class="text-2xl font-bold text-sky-700">Wanderly</span>

        <div class="hidden md:flex gap-8">
            <a href="#" class="text-slate-500 hover:text-sky-600">Explore</a>
            <a href="#" class="text-slate-500 hover:text-sky-600">Destinations</a>
            <a href="#" class="text-slate-500 hover:text-sky-600">Journals</a>
            @guest
            <a href="register" class="bg-sky-600 text-white px-4 py-2 rounded-full">Sign In</a>
            @endguest
            @auth
            <a href="logout" class="bg-sky-600 text-white px-4 py-2 rounded-full">Log out</a>
            @endauth
        </div>
    </div>
</nav>
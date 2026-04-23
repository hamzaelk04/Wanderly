<nav
    class="fixed top-0 w-full z-50 bg-white/70 backdrop-blur-md shadow-sm shadow-sky-900/5 flex justify-between items-center px-8 h-20 max-w-full">
    <div class="flex items-center gap-12">
        <span class="text-2xl font-extrabold text-sky-800 font-headline tracking-tight">
            Wanderly
        </span>
        <div class="hidden md:flex gap-8 items-center h-full">
            <a class="font-headline tracking-tight font-semibold text-slate-600 hover:text-sky-600 transition-colors duration-300"
                href="/">
                Home
            </a>
            <a class="font-headline tracking-tight font-semibold text-slate-600 hover:text-sky-600 transition-colors duration-300"
                href="">
                Evénements
            </a>
            <a class="font-headline tracking-tight font-semibold text-slate-600 hover:text-sky-600 transition-colors duration-300"
                href="/monument">
                Monuments
            </a>
        </div>
    </div>
    <!-- Adding the search bar later -->
    <div class="flex items-center gap-6">
            @stack('favorite')
            @guest
            <a class="px-5 py-2 text-sm font-semibold text-slate-600 hover:bg-slate-50 rounded-full transition-all active:scale-95" href="login">
                Login
            </a>
            <a class="px-5 py-2 text-sm font-bold bg-primary text-on-primary rounded-full shadow-lg shadow-primary/20 hover:bg-primary-container transition-all active:scale-95" href="register">
                Sign Up
            </a> 
            @endguest
            @auth
            <a class="px-5 py-2 text-sm font-bold bg-primary text-on-primary rounded-full shadow-lg shadow-primary/20 hover:bg-primary-container transition-all active:scale-95" href="logout">
                Log Out
            </a>
            @endauth
    </div>
</nav>
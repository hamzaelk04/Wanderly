<header
    class="w-full sticky top-0 z-40 bg-white/70 backdrop-blur-md shadow-sm flex justify-between items-center px-8 py-4">
    <div class="flex items-center gap-4">
        <h2 class="text-2xl font-bold text-sky-800  font-headline tracking-tight">Dashboard Overview
        </h2>
    </div>
    <div class="flex items-center gap-6">
        <div class="relative hidden lg:block">
            <input
                class="pl-10 pr-4 py-2 rounded-full border-0 bg-surface-container text-sm w-64 focus:ring-2 focus:ring-primary/20 transition-all"
                placeholder="Search events..." type="text" />
            <span class="material-symbols-outlined absolute left-3 top-2.5 text-slate-400 text-sm"
                data-icon="search">search</span>
        </div>
        <div class="flex items-center gap-4">
            <span class="material-symbols-outlined text-slate-500 cursor-pointer hover:text-primary transition-colors"
                data-icon="notifications">notifications</span>
        </div>
        <div class="flex items-center gap-3 pl-6 border-l border-slate-200">
            <div class="text-right hidden sm:block">
                <p class="text-sm font-bold text-on-surface leading-tight">{{ auth()->user()->firstname }}</p>
                <p class="text-[10px] text-slate-500 uppercase tracking-widest font-semibold">{{ auth()->user()->role->name }}</p>
            </div>
            @if (auth()->user() && auth()->user()->role && auth()->user()->role->name !== 'admin')
                <a href="{{ route('profile.show', auth()->id()) }}" class="w-10 h-10 flex items-center">
                    @if (auth()->user()->image)
                        <img alt=" Admin Avatar" class="w-10 h-10 rounded-full object-cover border-2 border-white shadow-sm"
                            src="{{ asset('storage/' . optional(auth()->user()->image)->path) }}" />
                    @else
                        <span class="material-symbols-outlined text-sky-700 dark:text-sky-700 text-8xl">
                            account_circle
                        </span>
                    @endif
                </a>
            @endif
        </div>
    </div>
</header>
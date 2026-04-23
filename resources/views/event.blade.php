    @extends('layouts.app')

    @push('favorite')
        <a href="javascript:void(0)" id="toggle-favorites"
            class="flex items-center gap-2 text-primary font-semibold hover:opacity-80">
            <span class="material-symbols-outlined">favorite</span>
            Favorites
        </a>
    @endpush

    @section('content')
        <section class="max-w-7xl mx-auto px-6 py-12 pb-32 md:pb-12">
            <div class="mb-12">
                <h1 class="font-headline font-extrabold text-5xl md:text-6xl text-on-surface tracking-tighter mb-4">Curated
                    Events
                </h1>
                <p class="text-on-surface-variant text-lg max-w-2xl font-medium leading-relaxed mb-10">Discover the heartbeat of
                    the city through our hand-picked selection of cultural festivals, concerts, and exclusive local gatherings.
                </p>
                <!-- Sticky Search Bar -->
                <div class="sticky top-24 z-40">
                    <div
                        class="bg-surface-container-lowest shadow-[0px_4px_32px_rgba(0,0,0,0.06)] rounded-full p-2 flex items-center gap-2 max-w-3xl">
                        <div class="flex-1 flex items-center px-4 gap-3">
                            <span class="material-symbols-outlined text-outline">search</span>
                            <input
                                class="w-full bg-transparent border-none focus:ring-0 text-on-surface placeholder:text-outline py-3 font-medium"
                                placeholder="Search events or locations..." type="text" />
                        </div>
                        <button
                            class="bg-linear-to-br from-primary to-[#0077B6] text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition-all scale-100 active:scale-95">Search</button>
                    </div>
                </div>
            </div>
            <!-- Filters Section -->
            <div class="flex flex-col md:flex-row gap-4 mb-12 overflow-x-auto hide-scrollbar">
                <div class="flex items-center gap-4 min-w-max">
                    <div class="relative group">
                        <button
                            class="flex items-center gap-2 bg-surface-container-lowest px-6 py-3 rounded-full text-on-surface font-semibold shadow-sm hover:bg-surface-container-low transition-colors">
                            Category: All
                            <span class="material-symbols-outlined text-outline">expand_more</span>
                        </button>
                    </div>
                    <div class="relative group">
                        <button
                            class="flex items-center gap-2 bg-surface-container-lowest px-6 py-3 rounded-full text-on-surface font-semibold shadow-sm hover:bg-surface-container-low transition-colors">
                            Date range
                            <span class="material-symbols-outlined text-outline">calendar_today</span>
                        </button>
                    </div>
                    <div class="relative group">
                        <button
                            class="flex items-center gap-2 bg-surface-container-lowest px-6 py-3 rounded-full text-on-surface font-semibold shadow-sm hover:bg-surface-container-low transition-colors">
                            Price range
                            <span class="material-symbols-outlined text-outline">payments</span>
                        </button>
                    </div>
                </div>
                <div class="flex items-center gap-2 md:ml-auto min-w-max">
                    <span class="text-label-sm font-semibold text-outline px-4">QUICK FILTERS:</span>
                    <button
                        class="px-5 py-2 rounded-full border border-outline-variant text-on-surface-variant font-medium hover:bg-surface-container-low transition-all">Sport</button>
                    <button
                        class="px-5 py-2 rounded-full border border-outline-variant text-on-surface-variant font-medium hover:bg-surface-container-low transition-all">Cultural</button>
                    <button
                        class="px-5 py-2 rounded-full border border-outline-variant text-on-surface-variant font-medium hover:bg-surface-container-low transition-all">Artistic</button>
                </div>
            </div>
            <!-- Events Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Event 1 -->
                @foreach ($events as $event)
                    <div data-event-id="{{ $event->id }}"
                        class="event-card bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
                        <div class="relative h-64 overflow-hidden">
                            <img alt="Neon Horizon Jazz Nights"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                src="{{ asset('storage/' . optional($event->images->first())->path) }}" />
                            <div
                                class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
                                {{ optional($event->categories->first())->name }}
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-headline font-bold text-2xl text-on-surface">{{ $event->title }}</h3>
                                <span class="text-secondary font-bold">
                                    @if ($event->tickets->count() > 0)
                                        Paid
                                    @else
                                        Free
                                    @endif
                                </span>
                            </div>
                            <div class="flex items-center gap-1 text-outline mb-4">
                                <span class="material-symbols-outlined text-sm">location_on</span>
                                <span class="text-xs font-semibold tracking-wide uppercase">{{ $event->address }}</span>
                            </div>
                            <div class="flex items-center justify-between mt-auto">
                                <div class="flex flex-col">
                                    <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Date &amp; Time</span>
                                    <span
                                        class="text-sm font-semibold">{{ \Carbon\Carbon::parse($event->date)->format('M d • h:i A') }}</span>
                                </div>
                            </div>
                            <div class="mt-6 flex gap-3">
                                <button
                                    class="flex-1 py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-surface-container-high transition-all duration-300">View
                                    Details
                                </button>
                                <button
                                    class="favorite-btn w-10 h-10 mt-2 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center text-[#0077B6] hover:bg-white transition-all shadow-sm"
                                    data-event-id="{{ $event->id }}">
                                    <span class="material-symbols-outlined favorite-icon">
                                        favorite_border
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <div id="favorites-modal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">

            <div class="bg-white w-full max-w-4xl max-h-[80vh] overflow-y-auto rounded-2xl p-6 relative">

                <button id="close-favorites" class="absolute top-3 right-3 text-xl">
                    ✕
                </button>

                <h2 class="text-2xl font-bold mb-4">Your Favorites</h2>

                <div id="favorites-container" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                </div>

            </div>
        </div>
    @endsection

    @push('scripts')
        @vite('resources/js/event.js')
    @endpush
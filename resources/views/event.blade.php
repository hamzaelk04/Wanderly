@extends('layouts.app')

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
                        class="bg-gradient-to-br from-[#005d90] to-[#0077B6] text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition-all scale-100 active:scale-95">Search</button>
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
                <div
                    class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
                    <div class="relative h-64 overflow-hidden">
                        <img alt="Neon Horizon Jazz Nights"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            src="{{ asset('storage/' . optional($event->images->first())->path) }}" />
                        <div class="absolute top-4 right-4 flex flex-col gap-2">
                            <button
                                class="w-10 h-10 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center text-[#0077B6] hover:bg-white transition-all shadow-sm">
                                <span class="material-symbols-outlined">favorite</span>
                            </button>
                        </div>
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
                            {{ optional($event->categories->first())->name }}    </div>
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
                            <span class="text-xs font-semibold tracking-wide uppercase">The Grand Pavilion, City Center</span>
                        </div>
                        <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">Experience an unforgettable
                            evening of contemporary jazz under the city lights with world-renowned musicians.</p>
                        <div class="flex items-center justify-between mt-auto">
                            <div class="flex flex-col">
                                <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Date &amp; Time</span>
                                <span class="text-sm font-semibold">Aug 24 • 8:00 PM</span>
                            </div>
                        </div>
                        <div class="mt-6 flex gap-3">
                            <button
                                class="flex-1 py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-surface-container-high transition-all duration-300">View
                                Details</button>
                            <button
                                class="flex-1 py-4 rounded-xl bg-primary text-white font-bold hover:bg-primary-container shadow-md hover:shadow-lg transition-all duration-300">Buy
                                Tickets</button>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Event 2 -->
            <div
                class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
                <div class="relative h-64 overflow-hidden">
                    <img alt="Contemporary Soul Exhibition"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnA2WFVahqPO5XWGTRIhfQApGWSoKFb90849oG2QR3d2x9NvymQRG7XtaV8ZeXih1CPHfO3Qs_UxqgG8n12fbaWY7r6n93PgI73tjn2Py7pcUHpzCGBdKEkb-UaSYD8pDRfeZnrttTWG2rMD_FUQ1p8rv4un1nb2620s0TfuV9zcBoUGhIK7KQ24EnRtcSuXE9Z0ThUPDuUkQq6zfjMOkojrpGGZ2NcTZEB-4pLsYSrOrJoT6tRA_9vllhmFRJvRYLp818Oe_Jguc" />
                    <div class="absolute top-4 right-4 flex flex-col gap-2">
                        <button
                            class="w-10 h-10 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center text-[#0077B6] hover:bg-white transition-all shadow-sm">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">favorite</span>
                        </button>
                    </div>
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
                        Art</div>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-headline font-bold text-2xl text-on-surface">Contemporary Soul</h3>
                        <span class="text-secondary font-bold">Free</span>
                    </div>
                    <div class="flex items-center gap-1 text-outline mb-4">
                        <span class="material-symbols-outlined text-sm">location_on</span>
                        <span class="text-xs font-semibold tracking-wide uppercase">Museo d'Arte Moderna</span>
                    </div>
                    <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">A curated collection
                        exploring
                        the intersections of identity and modern society through diverse media.</p>
                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Date Range</span>
                            <span class="text-sm font-semibold">Sep 02 - Sep 15</span>
                        </div>
                    </div>
                    <div class="mt-6 flex gap-3">
                        <button
                            class="flex-1 py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-surface-container-high transition-all duration-300">View
                            Details</button>
                        <button
                            class="flex-1 py-4 rounded-xl bg-primary text-white font-bold hover:bg-primary-container shadow-md hover:shadow-lg transition-all duration-300">Get
                            Entry</button>
                    </div>
                </div>
            </div>
            <!-- Event 3 -->
            <div
                class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
                <div class="relative h-64 overflow-hidden">
                    <img alt="Taste of the Heritage Festival"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9VV92LxF4izNjPWus4xQcmMWJ8xwaJ5bZgb8DTAqsWg84yoiOPn8D_yL68dou183s-dhgs2-RghsvUjBRKEWp1f6Irzx-dirqlcXa6tHdYsr5IY1DD8t7jaEuioLtyl4dtfy6PrJWp1noCAimP1wceCIkrTMUh7T7TKKtFaFwiq-3WMxoFAswy9pl8ps0I_tz75502y-uo0MuixSRTRlsUJ3pmq1XJu5cK_WAYd0iJlnE2j8A6eWOvbVRbqOLEzY83eb_XpT8lw8" />
                    <div class="absolute top-4 right-4 flex flex-col gap-2">
                        <button
                            class="w-10 h-10 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center text-[#0077B6] hover:bg-white transition-all shadow-sm">
                            <span class="material-symbols-outlined">favorite</span>
                        </button>
                    </div>
                    <div
                        class="absolute top-4 left-4 bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest uppercase">
                        Culinary</div>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-headline font-bold text-2xl text-on-surface">Heritage Festival</h3>
                        <span class="text-secondary font-bold">$15.00</span>
                    </div>
                    <div class="flex items-center gap-1 text-outline mb-4">
                        <span class="material-symbols-outlined text-sm">location_on</span>
                        <span class="text-xs font-semibold tracking-wide uppercase">Old Town Square Park</span>
                    </div>
                    <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">Savor traditional recipes
                        and
                        street food favorites from across the region in this vibrant outdoor market.</p>
                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Time</span>
                            <span class="text-sm font-semibold">Oct 12 • 11:00 AM</span>
                        </div>
                    </div>
                    <div class="mt-6 flex gap-3">
                        <button
                            class="flex-1 py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-surface-container-high transition-all duration-300">View
                            Details</button>
                        <button
                            class="flex-1 py-4 rounded-xl bg-secondary-container text-on-secondary-container font-bold hover:opacity-90 shadow-md hover:shadow-lg transition-all duration-300">Buy
                            Tickets</button>
                    </div>
                </div>
            </div>
            <!-- Event 4 -->
            <div
                class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
                <div class="relative h-64 overflow-hidden">
                    <img alt="Starlight Shakespeare Series"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDE_DD0wt5H-zYPwKN31nReZb36AxwBWJU_EVriKja5pY4Uh9GCGKFaVpcRo_0Fl6wEb3a7Ckah_VnfrX6TnefFSM03AiYOegkIS9oYnbEfVA5U4YLPOjjgsi90ir62gUg-PKc_QgrRR0YJm9WvuIW3n0CV6Gt4zdSsIRqPAdpGl0Mc7lXZIah5A_EDLhXxnPUsc9fBdeFB8VrxIAykJ-MrnyK4FCBDvWTX1DemvlKP-H_yRIMTzpfw_6T0Ny7vP4pAR_ldQLlKDMA" />
                    <div class="absolute top-4 right-4 flex flex-col gap-2">
                        <button
                            class="w-10 h-10 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center text-[#0077B6] hover:bg-white transition-all shadow-sm">
                            <span class="material-symbols-outlined">favorite</span>
                        </button>
                    </div>
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
                        Theater</div>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-headline font-bold text-2xl text-on-surface">Starlight Shakespeare</h3>
                        <span class="text-secondary font-bold">$30.00</span>
                    </div>
                    <div class="flex items-center gap-1 text-outline mb-4">
                        <span class="material-symbols-outlined text-sm">location_on</span>
                        <span class="text-xs font-semibold tracking-wide uppercase">Open Air Amphitheatre</span>
                    </div>
                    <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">An enchanting night of
                        classical
                        theater performed under the stars by an award-winning ensemble.</p>
                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Time</span>
                            <span class="text-sm font-semibold">Aug 30 • 9:30 PM</span>
                        </div>
                    </div>
                    <div class="mt-6 flex gap-3">
                        <button
                            class="flex-1 py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-surface-container-high transition-all duration-300">View
                            Details</button>
                        <button
                            class="flex-1 py-4 rounded-xl bg-primary text-white font-bold hover:bg-primary-container shadow-md hover:shadow-lg transition-all duration-300">Buy
                            Tickets</button>
                    </div>
                </div>
            </div>
            <!-- Event 5 -->
            <div
                class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
                <div class="relative h-64 overflow-hidden">
                    <img alt="The Royal Medieval Faire"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIkI19p5JTYEf5EPJWtbOSZGfeUcc9yxtQOBHRDQG-B71wKXFT4kfQy7MufFUfAYHcwQX7eQxj3GToLmeYs3qXfE8WQ7E0GYpQu5e238r8FApNwoo9wqepR5ScZbFeI5-iIWudXG4ZNoDRy9VrR-kj1ZUgj_cp1fHDk3twDiRJ1OrfZZkioGe7zboB_qu8JyHtaAIrAo6djNZP2PeIkYcfATiUvO5mVQhlyCGxIF7gDy61ZquT2TxDddahy8ugu2xYKDfQ5Zyccq0" />
                    <div class="absolute top-4 right-4 flex flex-col gap-2">
                        <button
                            class="w-10 h-10 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center text-[#0077B6] hover:bg-white transition-all shadow-sm">
                            <span class="material-symbols-outlined">favorite</span>
                        </button>
                    </div>
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
                        Heritage</div>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-headline font-bold text-2xl text-on-surface">The Royal Medieval Faire</h3>
                        <span class="text-secondary font-bold">$25.00</span>
                    </div>
                    <div class="flex items-center gap-1 text-outline mb-4">
                        <span class="material-symbols-outlined text-sm">location_on</span>
                        <span class="text-xs font-semibold tracking-wide uppercase">Old Fortress Grounds</span>
                    </div>
                    <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">Step back in time for a
                        weekend
                        of jousting, artisan crafts, and historic reenactments at the castle.</p>
                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Dates</span>
                            <span class="text-sm font-semibold">Sep 18 - Sep 20</span>
                        </div>
                    </div>
                    <div class="mt-6 flex gap-3">
                        <button
                            class="flex-1 py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-surface-container-high transition-all duration-300">View
                            Details</button>
                        <button
                            class="flex-1 py-4 rounded-xl bg-primary text-white font-bold hover:bg-primary-container shadow-md hover:shadow-lg transition-all duration-300">Buy
                            Tickets</button>
                    </div>
                </div>
            </div>
            <!-- Event 6 -->
            <div
                class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
                <div class="relative h-64 overflow-hidden">
                    <img alt="Digital Horizon Summit 2024"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_72Psmtic6YJ3CqyfKDoS3TPHLDQVTWZ-hSaQWB-n2HtyAzAZI1GBWMEJjEhZIuKFuwil3EvBtUNoaHQSHKeQpvOlNwzP4uhyk8ZLJhRzhxry9g4II8wS7niNjT27dCNjdg7IEffoj7YKg5kp4qZxSxu5MLQHAiTkcdoKWQoM_V4WPYvsHFpysTQbS6MTTP4VUCLLRU11cy3IBuAZFuZOKbT8GojyN326GVUfo2HGI7p5RxkUxMepo3bBPY9itLK3HaNE949IXCQ" />
                    <div class="absolute top-4 right-4 flex flex-col gap-2">
                        <button
                            class="w-10 h-10 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center text-[#0077B6] hover:bg-white transition-all shadow-sm">
                            <span class="material-symbols-outlined">favorite</span>
                        </button>
                    </div>
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
                        Summit</div>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-headline font-bold text-2xl text-on-surface">Digital Horizon Summit</h3>
                        <span class="text-secondary font-bold">$199.00</span>
                    </div>
                    <div class="flex items-center gap-1 text-outline mb-4">
                        <span class="material-symbols-outlined text-sm">location_on</span>
                        <span class="text-xs font-semibold tracking-wide uppercase">Innovation Tech Center</span>
                    </div>
                    <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">Connect with industry
                        leaders and
                        explore the future of technology, AI, and digital transformation.</p>
                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Time</span>
                            <span class="text-sm font-semibold">Nov 05 • 09:00 AM</span>
                        </div>
                    </div>
                    <div class="mt-6 flex gap-3">
                        <button
                            class="flex-1 py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-surface-container-high transition-all duration-300">View
                            Details</button>
                        <button
                            class="flex-1 py-4 rounded-xl bg-primary text-white font-bold hover:bg-primary-container shadow-md hover:shadow-lg transition-all duration-300">Buy
                            Tickets</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
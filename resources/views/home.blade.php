@extends('layouts.app')

@section('content')
    <main>
        <section class="relative h-217.5 flex items-center justify-center overflow-hidden px-6">
            <div class="absolute inset-0 z-0">
                <img class="w-full h-full object-cover" src="{{ asset('images/home.png') }}" alt="">
                <div class="absolute inset-0 bg-linear-to-b from-black/40 via-transparent to-background"></div>
            </div>
            <div class="relative z-10 max-w-5xl w-full text-center space-y-8">
                <div class="space-y-4">
                    <h1 class="text-5xl md:text-7xl font-extrabold font-headline text-white tracking-tight">
                        Organiser Votre Prochain <br />
                        <span class="text-secondary-container">Grande Aventure</span>
                    </h1>
                    <p class="text-lg md:text-xl text-white/90 font-body max-w-2xl mx-auto">
                        Découvrez des événements culturels exclusifs, des monuments cachés et des rassemblements artistiques
                        adaptés à votre curiosité.
                    </p>
                </div>
            </div>
        </section>

        <section class="bg-surface-container-low py-24">
            <div class="max-w-360 mx-auto px-8">
                <div class="text-center mb-16 space-y-4">
                    <h2 class="text-4xl font-extrabold font-headline tracking-tight">Explore by Interest</h2>
                    <p class="text-outline max-w-xl mx-auto">From silent monuments to roaring stadiums, find the rhythm that
                        matches your soul.</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="group cursor-pointer">
                        <div
                            class="aspect-square bg-surface-container-lowest rounded-2xl flex flex-col items-center justify-center gap-4 shadow-sm group-hover:shadow-xl group-hover:-translate-y-2 transition-all duration-300">
                            <div class="p-6 bg-sky-50 rounded-full text-primary">
                                <span class="material-symbols-outlined text-4xl" data-weight="fill">temple_hindu</span>
                            </div>
                            <span class="font-headline font-bold text-xl">Culture</span>
                        </div>
                    </div>
                    <div class="group cursor-pointer">
                        <div
                            class="aspect-square bg-surface-container-lowest rounded-2xl flex flex-col items-center justify-center gap-4 shadow-sm group-hover:shadow-xl group-hover:-translate-y-2 transition-all duration-300">
                            <div class="p-6 bg-sky-50 rounded-full text-primary">
                                <span class="material-symbols-outlined text-4xl" data-weight="fill">sports_basketball</span>
                            </div>
                            <span class="font-headline font-bold text-xl">Sports</span>
                        </div>
                    </div>
                    <div class="group cursor-pointer">
                        <div
                            class="aspect-square bg-surface-container-lowest rounded-2xl flex flex-col items-center justify-center gap-4 shadow-sm group-hover:shadow-xl group-hover:-translate-y-2 transition-all duration-300">
                            <div class="p-6 bg-sky-50 rounded-full text-primary">
                                <span class="material-symbols-outlined text-4xl" data-weight="fill">palette</span>
                            </div>
                            <span class="font-headline font-bold text-xl">Arts</span>
                        </div>
                    </div>
                    <div class="group cursor-pointer">
                        <div
                            class="aspect-square bg-surface-container-lowest rounded-2xl flex flex-col items-center justify-center gap-4 shadow-sm group-hover:shadow-xl group-hover:-translate-y-2 transition-all duration-300">
                            <div class="p-6 bg-sky-50 rounded-full text-primary">
                                <span class="material-symbols-outlined text-4xl" data-weight="fill">castle</span>
                            </div>
                            <span class="font-headline font-bold text-xl">Monuments</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-360 mx-auto py-24 px-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-16">
                <div class="space-y-2">
                    <h2 class="text-4xl font-extrabold font-headline tracking-tight">Trending Discoveries</h2>
                    <p class="text-outline font-body">What's capturing everyone's attention right now.</p>
                </div>
                <div class="flex bg-surface-container rounded-full p-1">
                    <button class="px-6 py-2 bg-white rounded-full text-sm font-bold text-primary shadow-sm">This
                        Week</button>
                    <button class="px-6 py-2 text-sm font-semibold text-outline hover:text-on-surface transition-all">This
                        Month</button>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($monuments as $monument)
                    <div
                        class="group flex flex-col h-full bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-transparent hover:border-primary/5">
                        <div class="relative h-64 overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                data-alt="dramatic wide angle of a dark industrial techno club with laser beams and silhouettes of a crowd"
                                src="{{ asset('storage/' . optional($monument->images->first())->path) }}" />
                            <div
                                class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-[10px] font-bold text-primary flex items-center gap-1">
                                <span class="material-symbols-outlined text-xs">local_fire_department</span> POPULAR
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h4 class="font-headline font-bold text-xl text-on-surface mb-1">{{ $monument->name }}
                                    </h4>
                                    <p class="text-sm text-outline flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm">location_on</span> {{$monument->city}}
                                    </p>
                                </div>
                                <div class="text-right">
                                    <p class="text-xs text-outline font-bold">From</p>
                                    <p class="text-lg font-black text-primary">$45</p>
                                </div>
                            </div>
                            <p class="text-sm text-outline font-body line-clamp-2 mb-6">{{ \Illuminate\Support\Str::limit($monument->description, 100) }}</p>
                            <div class="mt-auto pt-6 border-t border-surface-container flex items-center justify-between">
                                <span class="text-xs font-bold text-secondary uppercase tracking-widest">{{ optional($monument->categories->first())->name }}</span>
                                <a href="{{ route('monument.detail', $monument->id) }}"
                                    class="text-primary font-bold text-sm flex items-center gap-1 hover:gap-2 transition-all">
                                    View Details <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-16 text-center">
                <a href="/monument"
                    class="bg-surface-container-lowest cursor-pointer border border-outline-variant text-on-surface font-bold px-12 py-4 rounded-full hover:bg-surface-container transition-all">
                    Load More Discoveries
                </a>
            </div>
        </section>

        <section class="max-w-360 mx-auto px-8 mb-24">
            <div
                class="bg-primary rounded-4xl p-12 md:p-20 relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-12">
                <div
                    class="absolute top-0 right-0 w-1/2 h-full bg-linear-to-l from-white/10 to-transparent pointer-events-none">
                </div>
                <div class="relative z-10 max-w-xl space-y-6">
                    <h2 class="text-4xl md:text-5xl font-extrabold font-headline text-white leading-tight">Never Miss a
                        <br /><span class="text-secondary-fixed">Cultural Moment</span>
                    </h2>
                    <p class="text-primary-fixed text-lg">Join 50,000+ explorers who receive weekly curated guides to the
                        world's
                        most interesting events.</p>
                </div>
                <div class="relative z-10 w-full max-w-md">
                    <div class="bg-white p-2 rounded-2xl flex flex-col sm:flex-row gap-2">
                        <input class="flex-1 px-6 py-4 bg-transparent border-none focus:ring-0 font-body"
                            placeholder="Your email address" type="email" />
                        <button
                            class="bg-secondary-container text-on-secondary-container font-black px-8 py-4 rounded-xl hover:brightness-110 transition-all">Subscribe</button>
                    </div>
                    <p class="text-xs text-white/60 mt-4 px-4">We respect your privacy. Unsubscribe at any time.</p>
                </div>
            </div>
        </section>
    </main>
@endsection
@extends('layouts.app')

@section('content')
    <main class="max-w-7xl mx-auto px-6 py-12 pb-32 md:pb-12">
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
                        Opening Hours
                        <span class="material-symbols-outlined text-outline">schedule</span>
                    </button>
                </div>
                <div class="relative group">
                    <button
                        class="flex items-center gap-2 bg-surface-container-lowest px-6 py-3 rounded-full text-on-surface font-semibold shadow-sm hover:bg-surface-container-low transition-colors">
                        Price Range
                        <span class="material-symbols-outlined text-outline">payments</span>
                    </button>
                </div>
            </div>
            <div class="flex items-center gap-2 md:ml-auto min-w-max">
                <span class="text-label-sm font-semibold text-outline px-4">QUICK FILTERS:</span>
                <button
                    class="px-5 py-2 rounded-full border border-outline-variant text-on-surface-variant font-medium hover:bg-surface-container-low transition-all">Historical
                    Site</button>
                <button
                    class="px-5 py-2 rounded-full border border-outline-variant text-on-surface-variant font-medium hover:bg-surface-container-low transition-all">Museum</button>
                <button
                    class="px-5 py-2 rounded-full border border-outline-variant text-on-surface-variant font-medium hover:bg-surface-container-low transition-all">Religious</button>
            </div>
        </div>
        <!-- Bento Grid of Monument Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1: Parthenon -->
            @foreach ($monuments as $monument)
                <div
                    class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
                    <div class="relative h-64 overflow-hidden">
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            data-alt="the ancient parthenon temple in athens at sunset with golden light hitting the marble columns"
                            src="{{ asset('storage/' . optional($monument->images->first())->path) }}" />
                        <div
                            class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
                            {{ optional($monument->categories->first())->name }}</div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-headline font-bold text-2xl text-on-surface">{{ $monument->name }}</h3>
                            <span class="text-secondary font-bold">{{ $monument->fees }} MAD</span>
                        </div>
                        <div class="flex items-center gap-1 text-outline mb-4">
                            <span class="material-symbols-outlined text-sm">location_on</span>
                            <span class="text-xs font-semibold tracking-wide uppercase">{{ $monument->city }}, Maroc</span>
                        </div>
                        <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">{{ $monument->description }}</p>
                        <div class="flex items-center justify-between mt-auto">
                            <div class="flex flex-col">
                                <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Hours</span>
                                <span class="text-sm font-semibold">{{ \Carbon\Carbon::parse($monument->openning)->format('H:i') }} - 
                                    {{ \Carbon\Carbon::parse($monument->closing)->format('H:i') }} - </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-3">
                            <button
                                class="mt-6 w-full py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-primary hover:text-white transition-all duration-300">View
                                Details
                            </button>
                            <button
                                class="mt-6 p-4 rounded-xl hover:text-red-500 transition-all duration-300">
                                <span class="material-symbols-outlined">favorite</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
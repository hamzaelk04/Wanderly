@extends('layouts.app')

@section('content')
    <section class="pt-32 pb-20 px-4 md:px-8 max-w-7xl mx-auto">
        <div class="mb-12">
            <a class="inline-flex items-center gap-2 text-primary hover:gap-3 transition-all mb-6 group" href="#">
                <span class="material-symbols-outlined text-sm">arrow_back</span>
                <span class="text-sm font-medium">User Profile Settings</span>
            </a>
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div>
                    <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-on-background mb-3">Order History
                    </h1>
                    <p class="text-on-surface-variant max-w-2xl text-lg leading-relaxed">Manage and track your past
                        event bookings and adventures across the globe.</p>
                </div>
                <div class="flex gap-2">
                    <button
                        class="px-6 py-3 bg-surface-container-high rounded-full font-semibold text-sm hover:bg-surface-dim transition-colors flex items-center gap-2">
                        <span class="material-symbols-outlined text-lg">download</span> Export CSV
                    </button>
                </div>
            </div>
        </div>
        <!-- Orders Layout (Asymmetric/Bento Style) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <!-- Main List -->
            @if ($orders == null)
                <p>
                    No Order yet
                </p>
            @else
                <div class="lg:col-span-8 space-y-4">
                    @foreach($orders as $order)
                        @foreach($order->orderItem as $item)

                            <div
                                class="bg-surface-container-lowest p-6 rounded-xl transition-all hover:shadow-lg hover:shadow-on-surface/5 group border border-transparent hover:border-outline-variant/30">

                                <div class="flex flex-col md:flex-row gap-6">

                                    {{-- IMAGE --}}
                                    <div class="w-full md:w-40 h-32 rounded-lg overflow-hidden shrink-0">

                                        @if($item->ticket->event->images?->count())
                                            <img class="w-full h-full object-cover"
                                                src="{{ asset('storage/' . optional($item->ticket->event->images->first())->path) }}"
                                                alt="{{ $item->ticket->event->name }}">
                                        @else
                                            <img class="w-full h-full object-cover"
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBWPRtRp447zEh-PqPp9ZS2eWehB7a7r8KjI7ezhmj5cZKEepoE94dG5W83A5hY3LZqCO1rITncY_iR4UToV_c8UWc4r-Ls56b8_NCgU8s_apxTd47iXZMeNa5tlaf5ImsI8LZHhkSE5QEmXDEOuDK_nOIIT6Zr7Bo-mvT4M324x-K0LvQ9fGY00BGe6_FiyKIIK9Ty3oJkZT46mW3n3h3BThTYw9qCmt_vSrY4yaVySsjeA5L8euQnw-MMFLZqyIn6ZghNjj6NAow"
                                                alt="No image">
                                        @endif

                                    </div>

                                    {{-- CONTENT --}}
                                    <div class="grow">

                                        <div class="flex justify-between items-start mb-2">

                                            <div>
                                                <span class="text-xs font-bold text-outline uppercase tracking-widest mb-1 block">
                                                    {{ $order->created_at->format('M d, Y') }}
                                                </span>

                                                <h3
                                                    class="text-xl font-bold text-on-surface group-hover:text-primary transition-colors">
                                                    {{ $item->ticket->name }}
                                                </h3>
                                            </div>

                                            <span
                                                class="bg-tertiary-container text-on-tertiary-container px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider">
                                                Paid
                                            </span>

                                        </div>

                                        <div class="flex flex-wrap items-center gap-x-6 gap-y-2 mt-4 text-sm text-on-surface-variant">

                                            <span class="flex items-center gap-1.5">
                                                <span class="material-symbols-outlined text-base">confirmation_number</span>
                                                #{{ $order->id }}-{{ $item->ticket_id }}
                                            </span>

                                            <span class="flex items-center gap-1.5">
                                                <span class="material-symbols-outlined text-base">person</span>
                                                {{ $item->quantity }} Ticket(s)
                                            </span>

                                            <span class="text-lg font-extrabold text-on-surface ml-auto">
                                                ${{ number_format($item->price * $item->quantity, 2) }}
                                            </span>

                                        </div>

                                    </div>
                                </div>

                                {{-- ACTIONS --}}
                                <div class="mt-6 pt-6 border-t border-surface-container flex justify-end gap-3">

                                    <a href="{{ route('tickets.download', $order->id) }}"
                                        class="px-5 py-2 text-primary font-bold text-sm hover:underline underline-offset-4 transition-all">
                                        Download Ticket
                                    </a>

                                </div>
                            </div>

                        @endforeach
                    @endforeach
                </div>
            @endif
            <!-- Sidebar / Stats -->
            <div class="lg:col-span-4 space-y-6">
                <!-- Stat Card -->
                <div class="bg-primary text-white p-8 rounded-3xl relative overflow-hidden">
                    <div class="relative z-10">
                        <h4 class="text-primary-fixed/60 font-black uppercase tracking-widest text-xs mb-4">Nomad
                            Loyalty Status</h4>
                        <div class="text-4xl font-extrabold mb-2">Explorer Plus</div>
                        <p class="text-primary-fixed text-sm mb-6 opacity-90">You've unlocked 15% off your next booking
                            in the Japanese Alps!</p>
                        <div class="w-full bg-white/20 h-2 rounded-full mb-2">
                            <div class="bg-secondary-container h-full w-3/4 rounded-full"></div>
                        </div>
                        <div class="flex justify-between text-xs font-bold text-primary-fixed">
                            <span>750 Points</span>
                            <span>1000 Points to PRO</span>
                        </div>
                    </div>
                    <!-- Decorative element -->
                    <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>
                </div>
                <!-- Summary Section -->
                <div class="bg-surface-container-low p-8 rounded-3xl">
                    <h4 class="text-on-surface font-extrabold mb-6">Adventure Summary</h4>
                    <ul class="space-y-4">
                        <li class="flex justify-between items-center pb-4 border-b border-surface-variant">
                            <span class="text-on-surface-variant text-sm">Total Bookings</span>
                            <span class="font-bold">{{ $totalBookings }}</span>
                        </li>
                        <li class="flex justify-between items-center pb-4 border-b border-surface-variant">
                            <span class="text-on-surface-variant text-sm">Active Trips</span>
                            <span class="font-bold text-primary">{{ $activeTrips }}</span>
                        </li>
                        <li class="flex justify-between items-center pb-4 border-b border-surface-variant">
                            <span class="text-on-surface-variant text-sm">Countries Visited</span>
                            <span class="font-bold">{{ $countriesVisited }}</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span class="text-on-surface-variant text-sm">Lifetime Spend</span>
                            <span class="font-bold">${{ number_format($lifetimeSpend, 2) }}</span>
                        </li>
                    </ul>

                    <button
                        class="w-full mt-8 py-4 bg-secondary-container text-on-secondary-container font-black uppercase tracking-widest text-xs rounded-xl hover:shadow-lg transition-all active:scale-[0.98]">
                        Book Your Next Trip
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
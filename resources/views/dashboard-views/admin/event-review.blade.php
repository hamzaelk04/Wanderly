@extends('layouts.dashboard')

@section('content')
    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Main Content Area -->
        <div class="p-8 pb-32 max-w-7xl mx-auto w-full">
            <!-- Header Section -->
            <div class="flex items-center justify-between mb-10">
                <div class="flex items-center gap-4">
                    <div>
                        <h2 class="text-3xl font-['Plus_Jakarta_Sans'] font-extrabold tracking-tight text-on-background">
                            Moderate
                            Event: Summit Music Fest</h2>
                        <p class="text-on-surface-variant font-medium flex items-center gap-2 mt-1">
                            Reviewing submission from <span class="font-bold text-primary">Peak Productions</span>
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center gap-3 px-4 py-2 bg-secondary-fixed text-on-secondary-fixed rounded-full text-[10px] font-bold uppercase tracking-widest shadow-sm">
                    <span class="material-symbols-outlined text-sm"
                        style="font-variation-settings: 'FILL' 1;">pending_actions</span>
                    {{ $event->status }}
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Left Column: Editable Details -->
                <div class="lg:col-span-7 space-y-8">
                    <section
                        class="bg-surface-container-lowest rounded-3xl p-8 shadow-[0_4px_24px_rgba(25,28,29,0.02)] border border-white/50">
                        <h3 class="text-xl font-bold text-on-surface flex items-center gap-3 mb-8">
                            <span class="material-symbols-outlined text-primary">info</span>
                            Event Core Details
                        </h3>
                        <div class="space-y-6">
                            <!-- Title -->
                            <div
                                class="group flex items-start justify-between p-4 rounded-2xl hover:bg-surface-container-low transition-colors">
                                <div class="flex-1">
                                    <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">Title</p>
                                    <input name="title"
                                        class="w-full bg-transparent border-none p-0 text-lg font-semibold text-on-surface focus:ring-0"
                                        type="text" value="{{ $event->title }}" />
                                </div>
                                <span
                                    class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors cursor-pointer p-2">edit</span>
                            </div>
                            <!-- Description -->
                            <div
                                class="group flex items-start justify-between p-4 rounded-2xl hover:bg-surface-container-low transition-colors">
                                <div class="flex-1">
                                    <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">Description
                                    </p>
                                    <textarea
                                        class="w-full bg-transparent border-none p-0 text-on-surface-variant leading-relaxed focus:ring-0 resize-none h-20">{{ $event->description }}</textarea>
                                </div>
                                <span
                                    class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors cursor-pointer p-2">edit</span>
                            </div>
                            <!-- Category & Capacity -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="p-4 rounded-2xl bg-surface-container-low">
                                    <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-2">Category
                                    </p>
                                    <select name="category_id"
                                        class="w-full bg-transparent border-none text-on-surface font-semibold focus:ring-0 p-0 cursor-pointer appearance-none">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div
                                    class="group flex items-start justify-between p-4 rounded-2xl hover:bg-surface-container-low transition-colors">
                                    <div>
                                        <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">
                                            Capacity
                                        </p>
                                        <input
                                            class="w-full bg-transparent border-none p-0 font-semibold text-on-surface focus:ring-0"
                                            type="text" value="{{$event->capacity}}" />
                                    </div>
                                    <span
                                        class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors cursor-pointer p-1">edit</span>
                                </div>
                            </div>
                            <!-- Date & Duration -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div
                                    class="group flex items-start justify-between p-4 rounded-2xl hover:bg-surface-container-low transition-colors">
                                    <div>
                                        <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">Date
                                        </p>
                                        <input name="date"
                                            class="w-full bg-transparent border-none p-0 font-semibold text-on-surface focus:ring-0"
                                            type="text" value="{{ $event->date }}" />
                                    </div>
                                    <span
                                        class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors cursor-pointer p-1">edit</span>
                                </div>
                                <div
                                    class="group flex items-start justify-between p-4 rounded-2xl hover:bg-surface-container-low transition-colors">
                                    <div>
                                        <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">
                                            Duration
                                        </p>
                                        <input name="duration"
                                            class="w-full bg-transparent border-none p-0 font-semibold text-on-surface focus:ring-0"
                                            type="text" value="{{ $event->duration }}" />
                                    </div>
                                    <span
                                        class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors cursor-pointer p-1">edit</span>
                                </div>
                            </div>
                            <!-- Address -->
                            <div
                                class="group flex items-start justify-between p-4 rounded-2xl hover:bg-surface-container-low transition-colors">
                                <div class="flex-1">
                                    <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">Address</p>
                                    <input name="address"
                                        class="w-full bg-transparent border-none p-0 font-semibold text-on-surface focus:ring-0"
                                        type="text" value="{{ $event->address }}" />
                                </div>
                                <span
                                    class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors cursor-pointer p-2">edit</span>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Right Column: Media & Tickets -->
                <div class="lg:col-span-5 space-y-8">
                    <!-- Media Preview -->
                    <div x-data="{
                                            images: @js($event->images->pluck('path')),
                                            index: 0,
                                            get current() {
                                            return this.images.length ? this.images[this.index] : null;
                                        },
                                        next() {
                                            this.index = (this.index + 1) % this.images.length;
                                        },
                                        prev() {
                                            this.index = (this.index - 1 + this.images.length) % this.images.length;
                                        }
                                    }"
                        class="rounded-3xl overflow-hidden relative group aspect-video shadow-lg ring-1 ring-black/5">

                        <!-- Image -->
                        <template x-if="current">
                            <img :src="`/storage/${current}`" alt="Event image"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                        </template>

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-linear-to-t from-black/60 to-transparent"></div>

                        <!-- Label -->
                        <div class="absolute bottom-4 left-4">
                            <span
                                class="px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-white text-[10px] font-bold tracking-widest uppercase">
                                Hero Image Preview
                            </span>
                        </div>

                        <!-- Left arrow -->
                        <button x-show="images.length > 1" @click="prev"
                            class="absolute left-3 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/60 text-white p-2 rounded-full backdrop-blur">
                            ‹
                        </button>

                        <!-- Right arrow -->
                        <button x-show="images.length > 1" @click="next"
                            class="absolute right-3 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/60 text-white p-2 rounded-full backdrop-blur">
                            ›
                        </button>

                    </div>
                    @if ($event->tickets->isNotEmpty())
                        <section
                            class="bg-surface-container-lowest rounded-3xl p-8 shadow-[0_4px_24px_rgba(25,28,29,0.02)] border border-white/50">
                            <h3 class="text-xl font-bold text-on-surface flex items-center gap-3 mb-6">
                                <span class="material-symbols-outlined text-primary">confirmation_number</span>
                                Ticket Tiers
                            </h3>
                            <div class="space-y-4">
                                <!-- Ticket Tier 1 -->
                                @foreach ($event->tickets as $ticket)
                                    <div
                                        class="p-5 rounded-2xl border border-outline-variant/20 bg-surface-container-low/30 relative">
                                        <div class="flex items-center justify-between mb-4">
                                            <p
                                                class="bg-transparent border-none p-0 text-on-surface font-bold text-lg focus:ring-0 w-2/3">
                                                {{ $ticket->name }}
                                            </p>
                                            <div class="text-right">
                                                <p class="text-[10px] font-bold text-outline uppercase tracking-widest">In Stock</p>
                                                <p class="text-on-surface font-bold">{{ $ticket->quantity }}</p>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 gap-4 pt-4 border-t border-outline-variant/10">
                                            <div>
                                                <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">Base
                                                    Price
                                                </p>
                                                <p class="text-on-surface font-bold text-xl">{{ $ticket->price }}</p>
                                            </div>
                                            <div>
                                                <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">%
                                                    Increase
                                                </p>
                                                <div class="flex items-center gap-2">
                                                    <input type="hidden" name="tickets[{{ $loop->index }}][id]"
                                                        value="{{ $ticket->id }}">
                                                    <input name="tickets[{{ $loop->index }}][percent]"
                                                        class="w-16 bg-white border border-outline-variant/30 rounded-lg px-2 py-1 text-sm text-primary font-bold focus:ring-primary/20"
                                                        type="number" value="20" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endif
                </div>
            </div>
        </div>
        <!-- Sticky Bottom Action Bar -->
        <footer
            class="fixed bottom-0 right-0 left-64 bg-white/90 backdrop-blur-xl border-t border-outline-variant/20 px-12 py-6 flex items-center justify-between z-50 shadow-[0_-10px_40px_rgba(0,0,0,0.03)]">
            <div class="flex items-center gap-4">
                <span class="material-symbols-outlined text-outline">verified_user</span>
                <p class="text-sm text-outline font-medium">Finalizing this action will notify the event organizer.</p>
            </div>
            <div class="flex items-center gap-4">
                <button type="submit" name="status" value="rejected"
                    class="px-8 py-3 rounded-full border-2 border-error text-error font-bold text-sm tracking-wide hover:bg-error/5 transition-all active:scale-95">
                    Reject Event
                </button>
                <button type="submit" name="status" value="accepted"
                    class="px-10 py-3.5 rounded-full bg-[#0077B6] text-white font-bold text-sm tracking-wide shadow-lg shadow-primary/20 hover:shadow-[#0077B6]/40 transition-all active:scale-95 flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">check_circle</span>
                    Accept Event
                </button>
            </div>
        </footer>
    </form>
@endsection
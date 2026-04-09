@extends('layouts.dashboard')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <span class="text-primary font-bold text-sm tracking-widest uppercase mb-2 block">Curation
                    Portal</span>
                <h2 class="text-4xl font-extrabold tracking-tight text-on-surface">Design New Journey</h2>
                <p class="text-on-surface-variant mt-2 text-lg">Every great adventure begins with a single detail.
                </p>
            </div>
            <div class="flex items-center gap-3">
                <button
                    class="px-6 py-2.5 rounded-full border border-outline-variant font-semibold text-on-surface-variant hover:bg-surface-container transition-all">Save
                    Draft</button>
                <button
                    class="px-8 py-2.5 rounded-full bg-linear-to-br from-primary to-primary-container text-white font-bold shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all">Publish
                    Experience</button>
            </div>
        </div>
        <form action="{{ route('create-event') }}" method="post">
            @csrf
            
            <div class="space-y-8 pb-20">
                <!-- Section 1: Basic Information -->
                <section class="bg-surface-container-lowest rounded-3xl p-8 shadow-sm">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined" data-icon="edit_note">edit_note</span>
                        </div>
                        <h3 class="text-xl font-bold">Basic Information</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2 md:col-span-2">
                            <label class="text-sm font-semibold text-slate-700 ml-1">Event Title</label>
                            <input
                                class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                                placeholder="e.g., Midnight Gastronomy in Tokyo" type="text" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-slate-700 ml-1">Category</label>
                            <select
                                class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface appearance-none">
                                <option>Cultural</option>
                                <option>Sport</option>
                                <option>Artistic</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="space-y-2 opacity-50 pointer-events-none">
                            <label class="text-sm font-semibold text-slate-700 ml-1">New Category (Optional)</label>
                            <input
                                class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                                placeholder="Custom label" type="text" />
                        </div>
                        <div class="space-y-2 md:col-span-2">
                            <label class="text-sm font-semibold text-slate-700 ml-1">The Destination</label>
                            <input
                                class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                                placeholder="Enter venue name or street..." type="text" />
                        </div>
                        <div class="space-y-2 md:col-span-2">
                            <label class="text-sm font-semibold text-slate-700 ml-1">Description</label>
                            <textarea
                                class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                                placeholder="Describe the soul of this experience..." rows="5"></textarea>
                        </div>
                    </div>
                </section>
                <!-- Section 2: Media Upload -->
                <section class="bg-surface-container-lowest rounded-3xl p-8 shadow-sm">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined" data-icon="image">image</span>
                        </div>
                        <h3 class="text-xl font-bold">Visual Storytelling</h3>
                    </div>
                    <div
                        class="border-2 border-dashed border-outline-variant rounded-2xl p-10 text-center hover:bg-slate-50 transition-colors cursor-pointer group">
                        <span
                            class="material-symbols-outlined text-5xl text-slate-300 group-hover:text-primary transition-colors"
                            data-icon="cloud_upload">cloud_upload</span>
                        <p class="mt-4 text-on-surface-variant font-medium">Drag and drop high-resolution images here
                        </p>
                        <p class="text-xs text-slate-400 mt-1 uppercase tracking-widest">Recommended: 1920x1080px (Max
                            10MB)</p>
                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 gap-4 mt-6">
                        <div class="aspect-square rounded-xl overflow-hidden relative group shadow-md">
                            <img alt="Gallery item" class="w-full h-full object-cover"
                                data-alt="atmospheric photo of a dark moody cocktail bar with warm glowing Edison bulbs and crystal glassware on a marble bar"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCA-zxM_4y9pNTW8cbT0RVS-gVKunfczW2inoo8cshkbvYmg5izxO8QboeXI4WOi3eQf4_BrODKhFa1sglm92sG3Xv0PMNdi2KQdCd471FK9pgAAGVICosv1nGpFEVV92c5bC0Dseom01ipbs12jCgVUQXxXYd6xAn_I9wzqpllCAhehBVngsmxNum-Q603KsAA8U1MH7v2me4DBgPcgmVArYXN42rQEeCoRXFDtjijUKWtaIaF_DI8zKm9HuSMq0wLaDUMRklp-wk" />
                            <button
                                class="absolute top-2 right-2 w-7 h-7 bg-white/90 backdrop-blur rounded-full flex items-center justify-center text-error opacity-0 group-hover:opacity-100 transition-opacity">
                                <span class="material-symbols-outlined text-sm" data-icon="close">close</span>
                            </button>
                        </div>
                        <div class="aspect-square rounded-xl overflow-hidden relative group shadow-md">
                            <img alt="Gallery item" class="w-full h-full object-cover"
                                data-alt="majestic high-altitude mountain peak shrouded in light mist under a clear deep blue morning sky"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPGiEgUc3eZklalP-GaOypRq87Z3tExGCDXLTXYjANcCHnzUV367NCMD3plmIp6YDm43ogGgPPFjqK8aL-nrBHtPmO6qQaxZiTYJM3ydOEB2JALauB2-ji3N-X7BP91hiGhM-8WgkVR2yL_BOjo5aM1UtcaoAQ0KSP5Oxa-LKsUYtI9T_oMoOK7Q_3g2KwzUN1p1Xx-2dqpfDAhUA0gj8g11xifQvy2ruukzqlYWwVyPCPmSHQXJcnqVMq3t6tWTH2WZTrG1fdkUY" />
                            <button
                                class="absolute top-2 right-2 w-7 h-7 bg-white/90 backdrop-blur rounded-full flex items-center justify-center text-error opacity-0 group-hover:opacity-100 transition-opacity">
                                <span class="material-symbols-outlined text-sm" data-icon="close">close</span>
                            </button>
                        </div>
                        <div
                            class="aspect-square rounded-xl border-2 border-slate-100 bg-slate-50 flex items-center justify-center text-slate-300">
                            <span class="material-symbols-outlined text-3xl" data-icon="add">add</span>
                        </div>
                    </div>
                </section>
                <!-- Section 4: Schedule -->
                <section class="bg-surface-container-lowest rounded-3xl p-8 shadow-sm">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined" data-icon="calendar_today">calendar_today</span>
                        </div>
                        <h3 class="text-xl font-bold">Schedule</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-end">
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-slate-700 ml-1">Event Date</label>
                            <input
                                class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                                type="date" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-slate-700 ml-1">Estimated Duration</label>
                            <div class="relative">
                                <input
                                    class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface pr-12"
                                    placeholder="3 hours" type="text" />
                                <span
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-xs font-bold text-slate-400">HRS</span>
                            </div>
                        </div>
                        <div class="pb-4">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <div
                                    class="w-6 h-6 rounded-md bg-surface-container-low flex items-center justify-center text-white transition-colors group-hover:bg-slate-200">
                                    <input class="hidden" type="checkbox" />
                                    <span class="material-symbols-outlined text-sm hidden" data-icon="check">check</span>
                                </div>
                                <span class="text-sm font-medium text-slate-600">Date to be announced</span>
                            </label>
                        </div>
                    </div>
                </section>
                <!-- Section 5: Tickets & Pricing -->
                <section class="bg-surface-container-lowest rounded-3xl p-8 shadow-sm">
                    <div class="flex items-center justify-between mb-8">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined" data-icon="payments">payments</span>
                            </div>
                            <h3 class="text-xl font-bold">Tickets &amp; Pricing</h3>
                        </div>
                        <button class="flex items-center gap-2 text-primary font-bold text-sm hover:underline">
                            <span class="material-symbols-outlined text-lg" data-icon="add_circle">add_circle</span>
                            Add Ticket Type
                        </button>
                    </div>
                    <div class="space-y-4">
                        <!-- Ticket Row 1 -->
                        <div class="flex flex-col md:flex-row gap-4 p-5 bg-surface-container-low rounded-2xl relative">
                            <div class="flex-1 space-y-2">
                                <label class="text-xs font-bold text-slate-500 uppercase ml-1">Tier Name</label>
                                <input
                                    class="w-full bg-white border-none rounded-xl p-3 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                                    type="text" value="Standard Pass" />
                            </div>
                            <div class="w-full md:w-32 space-y-2">
                                <label class="text-xs font-bold text-slate-500 uppercase ml-1">Price (USD)</label>
                                <input
                                    class="w-full bg-white border-none rounded-xl p-3 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                                    type="number" value="45" />
                            </div>
                            <div class="w-full md:w-32 space-y-2">
                                <label class="text-xs font-bold text-slate-500 uppercase ml-1">Quantity</label>
                                <input
                                    class="w-full bg-white border-none rounded-xl p-3 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                                    type="number" value="100" />
                            </div>
                            <div class="flex items-end pb-1">
                                <button
                                    class="w-10 h-10 flex items-center justify-center text-error/40 hover:text-error transition-colors">
                                    <span class="material-symbols-outlined" data-icon="delete">delete</span>
                                </button>
                            </div>
                        </div>
                        <!-- Ticket Row 2 -->
                        <div class="flex flex-col md:flex-row gap-4 p-5 bg-surface-container-low rounded-2xl relative">
                            <div class="flex-1 space-y-2">
                                <label class="text-xs font-bold text-slate-500 uppercase ml-1">Tier Name</label>
                                <input
                                    class="w-full bg-white border-none rounded-xl p-3 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                                    placeholder="e.g. VIP Access" type="text" />
                            </div>
                            <div class="w-full md:w-32 space-y-2">
                                <label class="text-xs font-bold text-slate-500 uppercase ml-1">Price (USD)</label>
                                <input
                                    class="w-full bg-white border-none rounded-xl p-3 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                                    placeholder="0" type="number" />
                            </div>
                            <div class="w-full md:w-32 space-y-2">
                                <label class="text-xs font-bold text-slate-500 uppercase ml-1">Quantity</label>
                                <input
                                    class="w-full bg-white border-none rounded-xl p-3 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                                    placeholder="0" type="number" />
                            </div>
                            <div class="flex items-end pb-1">
                                <button
                                    class="w-10 h-10 flex items-center justify-center text-error/40 hover:text-error transition-colors">
                                    <span class="material-symbols-outlined" data-icon="delete">delete</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section 6: Submission -->
                <section
                    class="bg-surface-container-low rounded-3xl p-8 border-2 border-dashed border-outline-variant/30 text-center">
                    <div class="max-w-md mx-auto space-y-6">
                        <div
                            class="inline-flex items-center gap-2 bg-secondary-fixed px-4 py-2 rounded-full text-on-secondary-container">
                            <span class="material-symbols-outlined text-lg" data-icon="security"
                                data-weight="fill">security</span>
                            <span class="text-xs font-bold uppercase tracking-wider">Quality Review Pending</span>
                        </div>
                        <p class="text-on-surface-variant leading-relaxed">Your event will be curated and reviewed by a
                            Wanderly
                            administrator before publication to ensure it meets our "Elevated Experience" standards.</p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                            <button type="submit"
                                class="w-full sm:w-auto px-10 py-4 bg-linear-to-r from-primary to-primary-container text-white rounded-full font-bold shadow-2xl shadow-primary/30 hover:-translate-y-1 transition-all active:translate-y-0">
                                Submit for Review
                            </button>
                            <button
                                class="w-full sm:w-auto px-10 py-4 font-bold text-on-surface-variant hover:text-on-surface transition-colors">
                                Cancel
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/dashboard/create-event.js')
@endpush
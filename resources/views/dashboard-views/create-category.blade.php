@extends('layouts.dashboard')

@section('content')
    <div class="max-w-6xl mx-auto">
        <!-- Page Header -->
        <div class="mb-12 mt-4">
            <h2 class="text-4xl font-extrabold tracking-tight text-slate-900 mb-2">Gestion des Catégories</h2>
            <p class="text-slate-500 font-medium text-lg">Organiser et sélectionner les expériences de voyage en définissant
                une taxonomie de haut niveau.</p>
        </div>
        <!-- Content Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            <!-- Add New Category Form (Left Column) -->
            <div class="lg:col-span-4 bg-white rounded-4xl p-8 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-4 mb-10">
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 flex items-center justify-center text-amber-600">
                        <span class="material-symbols-outlined text-2xl" data-icon="add_box">add_box</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-slate-900 tracking-tight">Ajouter de nouvelles</h3>
                        <p class="text-xs text-slate-400 font-bold uppercase tracking-widest">Créer une catégorie</p>
                    </div>
                </div>
                <form class="space-y-6" method="post" action="">
                    <div class="space-y-3">
                        <label class="text-xs font-bold uppercase tracking-[0.15em] text-slate-500 ml-1">Nom De Catégorie</label>
                        <input name="name"
                            class="w-full px-6 py-4 bg-slate-50 rounded-[20px] focus:ring-2 focus:ring-primary-container/20 placeholder:text-slate-400 font-semibold text-slate-800 transition-all border border-transparent focus:border-primary-container/20"
                            placeholder="e.g. Mountain Treks" type="text" />
                    </div>
                    <div class="space-y-3">
                        <label class="text-xs font-bold uppercase tracking-[0.15em] text-slate-500 ml-1">Slug</label>
                        <div class="relative">
                            <span class="absolute left-6 top-1/2 -translate-y-1/2 text-slate-400 font-mono text-sm">/</span>
                            <input name="slug"
                                class="w-full pl-10 pr-6 py-4 bg-slate-50 border-transparent rounded-[20px] focus:ring-2 focus:ring-primary-container/20 placeholder:text-slate-400 font-mono text-sm text-slate-600 transition-all border focus:border-primary-container/20"
                                placeholder="mountain-treks" type="text" />
                        </div>
                    </div>
                    <button
                        class="w-full py-4.5 bg-primary-container text-white rounded-[20px] font-bold shadow-lg shadow-blue-500/25 hover:bg-primary transition-all active:scale-[0.98] mt-6 flex items-center justify-center gap-2"
                        type="submit">
                        <span class="material-symbols-outlined text-xl" data-icon="publish">publish</span>
                        Créer la catégorie
                    </button>
                </form>
            </div>
            <!-- Existing Categories (Right Column) -->
            <div class="lg:col-span-8 space-y-8">
                <div class="bg-white rounded-4xl p-10 border border-slate-100 shadow-sm">
                    <div class="flex items-center justify-between mb-10">
                        <div class="flex items-center gap-4">
                            <div class="w-2 h-10 bg-primary-container rounded-full"></div>
                            <h3 class="text-2xl font-bold tracking-tight text-slate-900">Taxonomies actives</h3>
                        </div>
                        <span
                            class="text-xs font-extrabold text-primary-container px-5 py-2 bg-[#f0f9ff] rounded-full border border-blue-100">Total des catégories: 24</span>
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <!-- Category Chips with delete marks -->
                        <div
                            class="flex items-center gap-2 pl-6 pr-2 py-3 bg-slate-50 rounded-full border border-slate-100 hover:border-blue-200 hover:bg-white transition-all group">
                            <span class="text-sm font-bold text-slate-700">Adventure</span>
                            <button
                                class="w-8 h-8 rounded-full flex items-center justify-center text-slate-300 hover:bg-red-50 hover:text-red-500 transition-all">
                                <span class="material-symbols-outlined text-[18px]" data-icon="cancel">cancel</span>
                            </button>
                        </div>
                        <div
                            class="flex items-center gap-2 pl-6 pr-2 py-3 bg-slate-50 rounded-full border border-slate-100 hover:border-blue-200 hover:bg-white transition-all group">
                            <span class="text-sm font-bold text-slate-700">Beach Clubs</span>
                            <button
                                class="w-8 h-8 rounded-full flex items-center justify-center text-slate-300 hover:bg-red-50 hover:text-red-500 transition-all">
                                <span class="material-symbols-outlined text-[18px]" data-icon="cancel">cancel</span>
                            </button>
                        </div>
                        <div
                            class="flex items-center gap-2 pl-6 pr-2 py-3 bg-slate-50 rounded-full border border-slate-100 hover:border-blue-200 hover:bg-white transition-all group">
                            <span class="text-sm font-bold text-slate-700">Cultural Heritage</span>
                            <button
                                class="w-8 h-8 rounded-full flex items-center justify-center text-slate-300 hover:bg-red-50 hover:text-red-500 transition-all">
                                <span class="material-symbols-outlined text-[18px]" data-icon="cancel">cancel</span>
                            </button>
                        </div>
                        <div
                            class="flex items-center gap-2 pl-6 pr-2 py-3 bg-slate-50 rounded-full border border-slate-100 hover:border-blue-200 hover:bg-white transition-all group">
                            <span class="text-sm font-bold text-slate-700">Luxury Stays</span>
                            <button
                                class="w-8 h-8 rounded-full flex items-center justify-center text-slate-300 hover:bg-red-50 hover:text-red-500 transition-all">
                                <span class="material-symbols-outlined text-[18px]" data-icon="cancel">cancel</span>
                            </button>
                        </div>
                        <div
                            class="flex items-center gap-2 pl-6 pr-2 py-3 bg-slate-50 rounded-full border border-slate-100 hover:border-blue-200 hover:bg-white transition-all group">
                            <span class="text-sm font-bold text-slate-700">Ecotourism</span>
                            <button
                                class="w-8 h-8 rounded-full flex items-center justify-center text-slate-300 hover:bg-red-50 hover:text-red-500 transition-all">
                                <span class="material-symbols-outlined text-[18px]" data-icon="cancel">cancel</span>
                            </button>
                        </div>
                        <div
                            class="flex items-center gap-2 pl-6 pr-2 py-3 bg-slate-50 rounded-full border border-slate-100 hover:border-blue-200 hover:bg-white transition-all group">
                            <span class="text-sm font-bold text-slate-700">Foodie Tours</span>
                            <button
                                class="w-8 h-8 rounded-full flex items-center justify-center text-slate-300 hover:bg-red-50 hover:text-red-500 transition-all">
                                <span class="material-symbols-outlined text-[18px]" data-icon="cancel">cancel</span>
                            </button>
                        </div>
                        <div
                            class="flex items-center gap-2 pl-6 pr-2 py-3 bg-slate-50 rounded-full border border-slate-100 hover:border-blue-200 hover:bg-white transition-all group">
                            <span class="text-sm font-bold text-slate-700">Wellness</span>
                            <button
                                class="w-8 h-8 rounded-full flex items-center justify-center text-slate-300 hover:bg-red-50 hover:text-red-500 transition-all">
                                <span class="material-symbols-outlined text-[18px]" data-icon="cancel">cancel</span>
                            </button>
                        </div>
                        <div
                            class="flex items-center gap-2 pl-6 pr-2 py-3 bg-slate-50 rounded-full border border-slate-100 hover:border-blue-200 hover:bg-white transition-all group">
                            <span class="text-sm font-bold text-slate-700">Nightlife</span>
                            <button
                                class="w-8 h-8 rounded-full flex items-center justify-center text-slate-300 hover:bg-red-50 hover:text-red-500 transition-all">
                                <span class="material-symbols-outlined text-[18px]" data-icon="cancel">cancel</span>
                            </button>
                        </div>
                        <!-- Add New Placeholder -->
                        <button
                            class="flex items-center gap-2 px-8 py-3 border-2 border-dashed border-slate-200 rounded-full text-slate-400 hover:border-primary-container hover:text-primary-container transition-all font-bold text-xs uppercase tracking-widest">
                            <span class="material-symbols-outlined text-lg" data-icon="add">add</span>
                            Add Tag
                        </button>
                    </div>
                    <!-- Footer metadata -->
                    <div
                        class="mt-16 pt-8 border-t border-slate-50 flex items-center justify-between text-[11px] text-slate-400 font-bold uppercase tracking-widest">
                        <div class="flex items-center gap-6">
                            <span class="flex items-center gap-2"><span
                                    class="material-symbols-outlined text-[16px] text-emerald-500"
                                    data-icon="check_circle">check_circle</span> Live Synced</span>
                            <span class="flex items-center gap-2"><span class="material-symbols-outlined text-[16px]"
                                    data-icon="update">update</span> Edited 2m ago</span>
                        </div>
                        <button
                            class="text-primary-container hover:text-primary transition-colors flex items-center gap-1">
                            <span class="material-symbols-outlined text-base" data-icon="list_alt">list_alt</span>
                            Bulk Edit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
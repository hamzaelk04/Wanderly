@extends('layouts.dashboard')

@section('content')
    <div class="p-8 max-w-6xl mx-auto w-full">
        <!-- Header Section -->
        <div class="mb-10 flex justify-between items-end">
            <div>
                <h1 class="text-4xl font-extrabold text-on-surface tracking-tight mb-2">Ajouter un nouveau monument</h1>
                <p class="text-on-surface-variant max-w-xl">Documentez un nouveau morceau d’histoire. Chaque détail aide
                    nos explorateurs à trouver leur prochain éveil culturel..</p>
            </div>
        </div>
        <form action="{{ route('create-monument') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-12 gap-8">
                <!-- Section 1: Basic Information -->
                <div class="col-span-12 md:col-span-7 space-y-8">
                    <section class="bg-surface-container-lowest p-8 rounded-3xl shadow-sm">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary">info</span>
                            <h3 class="text-xl font-bold tracking-tight">Informations de base</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">Nom
                                    du monument</label>
                                <input name="name"
                                    class="w-full bg-surface-container-low border-none rounded-xl py-3 px-4 text-on-surface focus:ring-2 focus:ring-primary/20"
                                    placeholder="e.g. The Gilded Observatory" type="text" />
                            </div>
                            <div>
                                <label
                                    class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">Catégorie</label>
                                <select name="category"
                                    class="w-full bg-surface-container-low border-none rounded-xl py-3 px-4 text-on-surface focus:ring-2 focus:ring-primary/20 appearance-none">
                                    <option>Historical Site</option>
                                    <option>Museum</option>
                                    <option>Religious Monument</option>
                                    <option>Statue</option>
                                    <option>Archaeological Site</option>
                                </select>
                            </div>
                            <div>
                                <label
                                    class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">Ville</label>
                                <input name="city"
                                    class="w-full bg-surface-container-low border-none rounded-xl py-3 px-4 text-on-surface focus:ring-2 focus:ring-primary/20"
                                    placeholder="e.g. Florence" type="text" />
                            </div>
                            <div class="md:col-span-2">
                                <label
                                    class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">Addresse</label>
                                <input name="address"
                                    class="w-full bg-surface-container-low border-none rounded-xl py-3 px-4 text-on-surface focus:ring-2 focus:ring-primary/20"
                                    placeholder="Full street address" type="text" />
                            </div>
                        </div>
                    </section>
                    <!-- Section 2: Content & Context -->
                    <section class="bg-surface-container-lowest p-8 rounded-3xl shadow-sm">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary">history_edu</span>
                            <h3 class="text-xl font-bold tracking-tight">Contenu et Contexte</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">L'âme
                                    (Description)</label>
                                <textarea name="description"
                                    class="w-full bg-surface-container-low border-none rounded-xl py-3 px-4 text-on-surface focus:ring-2 focus:ring-primary/20"
                                    placeholder="Décrivez l'atmosphère, le sentiment et le « pourquoi »..."
                                    rows="4"></textarea>
                            </div>
                            <div>
                                <label
                                    class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">Contexte
                                    Historique</label>
                                <textarea name="history"
                                    class="w-full bg-surface-container-low border-none rounded-xl py-3 px-4 text-on-surface focus:ring-2 focus:ring-primary/20"
                                    placeholder="Dates clés, importance historique et style architectural..."
                                    rows="4"></textarea>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Right Column -->
                <div class="col-span-12 md:col-span-5 space-y-8">
                    <!-- Section 4: Visual Storytelling -->
                    <section
                        class="bg-surface-container-lowest p-8 rounded-3xl shadow-sm border-2 border-dashed border-outline-variant/30">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary">photo_camera</span>
                            <h3 class="text-xl font-bold tracking-tight">Narration Visuelle</h3>
                        </div>
                        <div id="upload-image"
                            class="bg-surface-container-low cursor-pointer rounded-2xl p-8 flex flex-col items-center justify-center border-2 border-dashed border-outline-variant/50 text-center mb-6">
                            <span class="material-symbols-outlined text-4xl text-slate-300 mb-4">cloud_upload</span>
                            <input type="file" id="image-input" name="images[]" multiple accept="image/*" class="hidden" />
                            <p class="text-sm font-semibold text-slate-700">Déposez vos photos haute résolution ici</p>
                            <p class="text-xs text-slate-400 mt-1">PNG, JPG jusqu'à 10 Mo chacun</p>
                            <button type="button"
                                class="mt-4 px-4 py-2 cursor-pointer bg-white rounded-lg text-xs font-bold text-primary shadow-sm border border-slate-100">Parcourir
                                les fichiers
                            </button>
                        </div>
                        <div id="image-grid" class="grid grid-cols-3 gap-3">

                            <div
                                class="aspect-square bg-surface-container-low rounded-xl border border-dashed border-outline-variant flex items-center justify-center text-slate-300">
                                <span class="material-symbols-outlined">add</span>
                            </div>
                        </div>
                    </section>
                    <section class="bg-surface-container-lowest p-8 rounded-3xl shadow-sm">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary">analytics</span>
                            <h3 class="text-xl font-bold tracking-tight">Logistique</h3>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div>
                                <label
                                    class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Ouverture</label>
                                <input name="openning"
                                    class="w-full bg-surface-container-low border-none rounded-xl py-3 px-4 text-sm focus:ring-2 focus:ring-primary/20"
                                    type="time" />
                            </div>
                            <div>
                                <label
                                    class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Fermeture</label>
                                <input name="closing"
                                    class="w-full bg-surface-container-low border-none rounded-xl py-3 px-4 text-sm focus:ring-2 focus:ring-primary/20"
                                    type="time" />
                            </div>
                            <div class="col-span-2">
                                <label
                                    class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Frais
                                    d'entrée (MAD)</label>
                                <div class="relative">
                                    <span class="absolute end pr-4 top-1/2 -translate-y-1/2 text-slate-400">MAD</span>
                                    <input name="fees"
                                        class="w-full bg-surface-container-low border-none rounded-xl py-3 pl-8 pr-4 text-sm focus:ring-2 focus:ring-primary/20"
                                        placeholder="0.00" type="number" />
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- Mobile Action Bar -->
            <div class="mt-12 pt-8 border-t border-slate-200 flex items-center justify-between">
                <div class="flex items-center gap-2 text-slate-400 italic text-sm">
                    <span class="material-symbols-outlined text-sm">auto_awesome</span>
                    <span>Draft autosaved 2 minutes ago</span>
                </div>
                <div class="flex gap-4">
                    <button type="button"
                        class="px-6 py-3 rounded-full text-slate-600 font-semibold hover:bg-slate-100 transition-all">Annuler
                    </button>
                    <button type="submit"
                        class="px-8 py-3 rounded-full bg-linear-to-br from-primary to-primary-container text-white font-bold shadow-lg shadow-primary/20 hover:scale-[1.02] transition-all">Soumettre
                        un monument</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/dashboard/create-monument.js')
@endpush
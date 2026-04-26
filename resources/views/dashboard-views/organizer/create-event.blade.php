@extends('layouts.dashboard')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div class="mt-4">
                <span class="text-primary font-bold text-sm tracking-widest uppercase mb-2 block">Portail de curation</span>
                <h2 class="text-4xl font-extrabold tracking-tight text-on-surface">Concevoir un nouveau parcours</h2>
                <p class="text-on-surface-variant mt-2 text-lg">Toute grande aventure commence par un seul détail.
                </p>
            </div>
        </div>
        <form action="{{ route('create-event') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="space-y-8 pb-20">
                <!-- Section 1: Basic Information -->
                <section class="bg-surface-container-lowest rounded-3xl p-8 shadow-sm">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined" data-icon="edit_note">edit_note</span>
                        </div>
                        <h3 class="text-xl font-bold">Information De Base</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2 md:col-span-2">
                            <label class="text-sm font-semibold text-slate-700 ml-1">Titre de L'événement</label>
                            <input name="title"
                                class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                                placeholder="e.g., Midnight Gastronomy in Tokyo" type="text" />
                        </div>
                        <div class="space-y-2 md:col-span-2">
                            <label class="text-sm font-semibold text-slate-700 ml-1">Ville</label>
                            <input name="city"
                                class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                                placeholder="Ex: Youssoufia" type="text" />
                        </div>
                        <div class="space-y-2 md:col-span-2">
                            <label class="text-sm font-semibold text-slate-700 ml-1">La Destination</label>
                            <input name="address"
                                class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                                placeholder="Entrez le nom du lieu ou la rue..." type="text" />
                        </div>
                        <div class="space-y-2 md:col-span-2">
                            <label class="text-sm font-semibold text-slate-700 ml-1">Description</label>
                            <textarea name="description"
                                class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                                placeholder="Décrivez l’âme de cette expérience..." rows="5"></textarea>
                        </div>
                    </div>
                </section>
                <!-- Section 2: Media Upload -->
                <section class="bg-surface-container-lowest rounded-3xl p-8 shadow-sm">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined" data-icon="image">image</span>
                        </div>
                        <h3 class="text-xl font-bold">Narration visuelle</h3>
                    </div>
                    <div id="upload-image"
                        class="border-2 border-dashed border-outline-variant rounded-2xl p-10 text-center hover:bg-slate-50 transition-colors cursor-pointer group">
                        <input type="file" id="image-input" name="images[]" multiple accept="image/*" class="hidden" />
                        <span
                            class="material-symbols-outlined text-5xl text-slate-300 group-hover:text-primary transition-colors"
                            data-icon="cloud_upload">cloud_upload</span>
                        <p class="mt-4 text-on-surface-variant font-medium">Glissez ou déposez ici des images haute
                            résolution
                        </p>
                        <p class="text-xs text-slate-400 mt-1 uppercase tracking-widest">Recommandé: 1920x1080px (Max
                            10MB)</p>
                    </div>
                    <div id="image-grid" class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 gap-4 mt-6">

                    </div>
                </section>
                <!-- Section 4: Schedule -->
                <section class="bg-surface-container-lowest rounded-3xl p-8 shadow-sm">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined" data-icon="calendar_today">calendar_today</span>
                        </div>
                        <h3 class="text-xl font-bold">Calendrier</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-end">
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-slate-700 ml-1">Date de l'événement</label>
                            <input name="date"
                                class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                                type="datetime-local" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-slate-700 ml-1">Durée estimée</label>
                            <div class="relative">
                                <input name="duration"
                                    class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface pr-12"
                                    placeholder="90 minutes" type="number" />
                                <span
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-xs font-bold text-slate-400">MIN</span>
                            </div>
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
                            <h3 class="text-xl font-bold">Billets &amp; Tarification</h3>
                        </div>
                        <button id="ticket-button" type="button"
                            class="flex items-center gap-2 text-primary font-bold text-sm hover:underline">
                            <span class="material-symbols-outlined text-lg" data-icon="add_circle">add_circle</span>
                            Ajouter un type
                        </button>
                    </div>
                    <div id="ticket-container">
                        <!-- pour l'ajout des billets  -->
                    </div>
                </section>
                <!-- section 6: capacity -->
                <section id="capacity-section" class="bg-surface-container-lowest rounded-3xl p-8 shadow-sm">
                    <div class="flex items-center justify-between mb-8">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined" data-icon="groups">groups</span>
                            </div>
                            <h3 class="text-xl font-bold">Capacité</h3>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4">
                        <label for="capacity" class="text-sm font-semibold text-slate-700 ml-1">
                            Nombre maximum de participants
                        </label>
                        <input id="capacity" name="capacity" type="number" min="1" placeholder="Ex: 100"
                            class="w-full bg-surface-container-low border-none rounded-xl p-4 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface">
                    </div>
                </section>
                <!-- Section 7: Submission -->
                <section
                    class="bg-surface-container-low rounded-3xl p-8 border-2 border-dashed border-outline-variant/30 text-center">
                    <div class="max-w-md mx-auto space-y-6">
                        <div
                            class="inline-flex items-center gap-2 bg-secondary-fixed px-4 py-2 rounded-full text-on-secondary-container">
                            <span class="material-symbols-outlined text-lg" data-icon="security"
                                data-weight="fill">security</span>
                            <span class="text-xs font-bold uppercase tracking-wider">Quality Review Pending</span>
                        </div>
                        <p class="text-on-surface-variant leading-relaxed">Votre événement sera sélectionné et examiné par
                            un
                            administrateur Wanderly avant sa publication afin de garantir qu'il réponde à nos normes d'«
                            Expérience de qualité supérieure ».</p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                            <button type="submit"
                                class="w-full sm:w-auto px-10 py-4 bg-linear-to-r from-primary to-primary-container text-white rounded-full font-bold shadow-2xl shadow-primary/30 hover:-translate-y-1 transition-all active:translate-y-0">
                                Submit for Review
                            </button>
                            <a class="w-full sm:w-auto px-10 py-4 font-bold text-on-surface-variant hover:text-on-surface transition-colors"
                                href="/organizer">
                                Cancel
                            </a>
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
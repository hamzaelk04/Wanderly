@extends('layouts.app')

@section('content')
    <main class="grow flex items-center justify-center pt-24 pb-16 px-6">
        <div
            class="grid lg:grid-cols-2 max-w-6xl w-full bg-surface-container-lowest rounded-3xl overflow-hidden shadow-2xl shadow-on-surface/5">
            <div class="relative hidden lg:block overflow-hidden">
                <img class="absolute inset-0 w-full h-full object-cover" src="{{ asset('./images/register.png') }}" alt="">
                <div class="absolute inset-0 bg-primary/20 backdrop-blur-[2px]"></div>
                <div class="absolute bottom-12 left-12 right-12 text-white">
                    <h1 class="text-4xl font-extrabold font-headline mb-4 leading-tight tracking-tight">Commencez votre
                        aventure organisée.</h1>
                    <p class="text-lg opacity-90 font-medium">Rejoignez une communauté d’explorateurs et de conservateurs
                        culturels.
                        Découvrez les expériences de voyage les plus personnalisées au monde.</p>
                </div>
                <div>

                </div>
            </div>
            <!-- form -->
            <div class="p-8 md:p-12 lg:p-16 flex flex-col justify-center relative">
                <div class="mb-10">
                    <h2 class="text-3xl font-bold font-headline text-on-background mb-2 tracking-tight">
                        Créer un compte
                    </h2>
                    <p class="text-on-surface-variant">
                        Rejoignez Wanderly et commencez à planifier votre prochain voyage.
                    </p>
                </div>
                <p id="error" class="absolute top-0 left-0 right-0 mx-8 mt-4 h-12 rounded-md border-2 border-red-500 bg-red-100 text-red-500
                        flex items-center justify-center opacity-0 transition-opacity duration-300">
                </p>
                <form id="register_form" class="space-y-6" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-sm font-semibold font-label text-on-surface-variant ml-1"
                                for="first_name">Prénom</label>
                            <input
                                class="w-full px-5 py-4 bg-surface-container rounded-xl border-none focus:ring-2 focus:ring-primary/20 transition-all placeholder:text-outline-variant"
                                id="firstname" name="firstname" placeholder="Ex: prenom" type="text" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold font-label text-on-surface-variant ml-1"
                                for="last_name">Nom</label>
                            <input
                                class="w-full px-5 py-4 bg-surface-container rounded-xl border-none focus:ring-2 focus:ring-primary/20 transition-all placeholder:text-outline-variant"
                                id="lastname" name="lastname" placeholder="Ex: nom" type="text" />
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-semibold font-label text-on-surface-variant ml-1" for="email">Adresse
                            E-mail</label>
                        <input
                            class="w-full px-5 py-4 bg-surface-container rounded-xl border-none focus:ring-2 focus:ring-primary/20 transition-all placeholder:text-outline-variant"
                            id="email" name="email" placeholder="prenom.nom@email.com" type="email" />
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-sm font-semibold font-label text-on-surface-variant ml-1" for="password">Mot
                                de passe</label>
                            <input
                                class="w-full px-5 py-4 bg-surface-container rounded-xl border-none focus:ring-2 focus:ring-primary/20 transition-all"
                                id="password" name="password" placeholder="••••••••" type="password" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold font-label text-on-surface-variant ml-1"
                                for="confirm_password">Confirmer le mot de passe</label>
                            <input
                                class="w-full px-5 py-4 bg-surface-container rounded-xl border-none focus:ring-2 focus:ring-primary/20 transition-all"
                                id="password_confirmation" name="password_confirmation" placeholder="••••••••"
                                type="password" />
                        </div>
                    </div>
                    <div
                        class="flex items-start bg-surface-container-low p-4 rounded-xl border border-outline-variant/10 group cursor-pointer transition-colors hover:bg-surface-container">
                        <div class="flex items-center h-5">
                            <input
                                class="h-5 w-5 rounded-md border-outline-variant text-primary focus:ring-primary/30 cursor-pointer"
                                id="organizer" name="organizer" type="checkbox" />
                        </div>
                        <div class="ml-4 text-sm leading-6">
                            <label class="font-bold text-on-surface cursor-pointer select-none" for="organizer">Je veux
                                m’inscrire en tant qu’organisateur d’événements</label>
                            <p class="text-on-surface-variant text-xs mt-1">Host bespoke tours, cultural workshops, or
                                Aventures Organisées.</p>
                        </div>
                    </div>
                    <div class="pt-4">
                        <button
                            class="w-full adventure-gradient text-white py-4 rounded-full font-bold text-lg shadow-lg shadow-primary/20 transition-all hover:shadow-xl hover:-translate-y-0.5 active:translate-y-0 active:scale-[0.98]"
                            type="submit">
                            Compléter L'inscription
                        </button>
                    </div>
                    <p class="text-center text-sm text-on-surface-variant mt-8">
                        Avez déjà un compte ?
                        <a class="text-primary font-bold hover:underline ml-1" href="login">Connectez Ici</a>
                    </p>
                </form>

            </div>
        </div>
    </main>
@endsection

@push('scripts')
    @vite('resources/js/register.js')
@endpush
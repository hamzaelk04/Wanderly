@extends('layouts.app')

@section('content')
    <main class="grow flex items-center justify-center px-4 pt-24 pb-12">
        <div class="grid lg:grid-cols-2 max-w-6xl w-full bg-surface-container-lowest rounded-3xl overflow-hidden shadow-2xl shadow-on-surface/5">
            <div class="hidden md:block relative h-full min-h-150 overflow-hidden">
                <img class="absolute inset-0 w-full h-full object-cover"
                    data-alt="Stunning aerial view of a turquoise alpine lake surrounded by pine forests and snow-capped peaks in soft morning light"
                    src="{{ asset('./images/login.png') }}" />
                <div
                    class="absolute inset-0 bg-linear-to-t from-primary/60 to-transparent flex flex-col justify-end p-12">
                    <h2 class="font-headline text-4xl font-extrabold text-white leading-tight mb-4 tracking-tight">Organiser votre prochain<br />grande aventure.</h2>
                    <p class="text-white/90 text-lg font-medium max-w-md">Accédez à vos itinéraires de voyage personnalisés et aux trésors cachés découverts par notre communauté mondiale.</p>
                </div>
            </div>
            <div class="p-8 md:p-16 flex flex-col justify-center bg-surface-container-lowest">
                <div class="mb-10">
                    <h1 class="font-headline text-3xl font-bold text-on-background mb-2 tracking-tight">Bienvenue
                    </h1>
                    <p class="text-on-surface-variant">Veuillez entrer vos identifiants pour accéder à votre compte.</p>
                </div>
                <form class="space-y-6" id="login_form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <p id="error" class="absolute top-0 left-0 right-0 mx-8 mt-4 h-12 rounded-md border-2 border-red-500 bg-red-100 text-red-500
                                flex items-center justify-center opacity-0 transition-opacity duration-300">
                    </p>
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-on-surface-variant ml-1" for="email">Email
                            address</label>
                        <div class="relative group">
                            <div
                                class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-primary transition-colors">
                                <span class="material-symbols-outlined text-xl">mail</span>
                            </div>
                            <input
                                class="block w-full pl-11 pr-4 py-3.5 bg-surface-variant/50 border-none rounded-xl focus:ring-2 focus:ring-primary/20 focus:bg-white transition-all text-on-surface placeholder:text-outline-variant/70"
                                id="email" type="email" name="email" placeholder="name@example.com" type="email" />
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between items-center ml-1">
                            <label class="block text-sm font-semibold text-on-surface-variant" for="password">Mot de
                                passe</label>
                        </div>
                        <div class="relative group">
                            <div
                                class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-primary transition-colors">
                                <span class="material-symbols-outlined text-xl">lock</span>
                            </div>
                            <input
                                class="block w-full pl-11 pr-4 py-3.5 bg-surface-variant/50 border-none rounded-xl focus:ring-2 focus:ring-primary/20 focus:bg-white transition-all text-on-surface placeholder:text-outline-variant/70"
                                id="password" name="password" placeholder="••••••••" type="password" />
                        </div>
                    </div>
                    <!-- <div class="flex items-center gap-3 py-2">
                                        <input
                                            class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary/20 cursor-pointer"
                                            id="remember" type="checkbox" />
                                        <label class="text-sm font-medium text-on-surface-variant cursor-pointer select-none"
                                            for="remember">Keep me
                                            signed in for 30 days</label>
                                    </div> -->
                    <!-- Add the forget password if I have a free time -->
                    <button
                        class="w-full bg-linear-to-r from-primary to-primary-container text-white font-bold py-4 rounded-full shadow-lg shadow-primary/20 hover:shadow-primary/30 active:scale-95 transition-all duration-200"
                        type="submit">
                        Connectez-vous à Wanderly
                    </button>
                </form>
                <div class="mt-8 flex items-center gap-4">
                    <div class="h-px grow bg-outline-variant/30"></div>
                    <span class="text-xs font-bold text-outline uppercase tracking-widest"></span>
                    <div class="h-px grow bg-outline-variant/30"></div>
                </div>
                <p class="mt-12 text-center text-sm text-on-surface-variant">
                    Vous n'avez pas de compte ?
                    <a class="text-primary font-bold hover:underline" href="#">S'inscrire</a>
                </p>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    @vite('resources/js/login.js')
@endpush
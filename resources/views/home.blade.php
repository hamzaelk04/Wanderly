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
                    Organiser Votre Prochain <br/>
                    <span class="text-secondary-container">Grande Aventure</span>
                </h1>
                <p class="text-lg md:text-xl text-white/90 font-body max-w-2xl mx-auto">
                    Découvrez des événements culturels exclusifs, des monuments cachés et des rassemblements artistiques adaptés à votre curiosité.
                </p>
            </div>
        </div>
    </section>
</main>
@endsection
@extends('layouts.app')

@section('content')
<main>
    <section class="relative h-217.5 flex items-center justify-center overflow-hidden px-6">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover" src="{{ asset('images/home.png') }}" alt="">
            <div class="absolute inset-0 bg-linear-to-b from-black/40 via-transparent to-background"></div>
        </div>
    </section>
</main>
@endsection
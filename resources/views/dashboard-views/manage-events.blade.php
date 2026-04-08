@extends('layouts.dashboard')

@section('content')
    <div class="p-8 max-w-7xl mx-auto">
        <div class="flex justify-between items-end mb-10">
            <div>
                <h1 class="text-4xl font-extrabold text-on-background tracking-tight mb-2">Adventure Dashboard</h1>
                <p class="text-on-surface-variant max-w-md">Overview of your upcoming curated experiences and organizer
                    insights.</p>
            </div>
            <button
                class="bg-primary-gradient text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition-all flex items-center space-x-2"
                id="openModalBtn">
                <span class="material-symbols-outlined" data-icon="add">add</span>
                <span>New Event</span>
            </button>
        </div>
    </div>
@endsection
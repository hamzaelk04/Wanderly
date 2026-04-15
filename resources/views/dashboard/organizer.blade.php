@extends('layouts.dashboard')

@section('content')
  <section class="p-8 max-w-7xl mx-auto space-y-10">
    <div class="flex flex-col md:flex-row justify-between items-end gap-4">
      <div>
        <h1 class="text-4xl font-extrabold headline tracking-tight text-on-surface">Welcome back, Alex.</h1>
        <p class="text-on-surface-variant mt-2 text-lg font-light">Your curated experiences are reaching new
          heights today.</p>
      </div>
      <button
        class="bg-linear-to-br from-primary to-primary-container text-on-primary px-6 py-3 rounded-full font-semibold shadow-lg shadow-primary/20 hover:scale-105 active:scale-95 transition-all flex items-center gap-2">
        <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
        Create New Event
      </button>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Total -->
      <div class="bg-surface-container-lowest p-6 rounded-xl border-l-4 border-primary transition-all hover:shadow-md">
        <div class="flex items-center justify-between mb-4">
          <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Total
            Events</span>
          <span class="material-symbols-outlined text-primary" data-icon="layers">layers</span>
        </div>
        <div class="text-3xl font-bold headline">24</div>
      </div>
      <!-- Pending -->
      <div
        class="bg-surface-container-lowest p-6 rounded-xl border-l-4 border-secondary-container transition-all hover:shadow-md">
        <div class="flex items-center justify-between mb-4">
          <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Pending</span>
          <div class="w-2 h-2 rounded-full bg-secondary-container animate-pulse"></div>
        </div>
        <div class="text-3xl font-bold headline">4</div>
      </div>
      <!-- Approved -->
      <div class="bg-surface-container-lowest p-6 rounded-xl border-l-4 border-tertiary transition-all hover:shadow-md">
        <div class="flex items-center justify-between mb-4">
          <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Approved</span>
          <span class="material-symbols-outlined text-tertiary" data-icon="check_circle">check_circle</span>
        </div>
        <div class="text-3xl font-bold headline">18</div>
      </div>
      <!-- Rejected -->
      <div class="bg-surface-container-lowest p-6 rounded-xl border-l-4 border-error transition-all hover:shadow-md">
        <div class="flex items-center justify-between mb-4">
          <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Rejected</span>
          <span class="material-symbols-outlined text-error" data-icon="error_outline">error_outline</span>
        </div>
        <div class="text-3xl font-bold headline">2</div>
      </div>
    </div>
  </section>
@endsection
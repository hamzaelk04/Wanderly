@extends('layouts.dashboard')

@section('content')
  <section class="p-8 max-w-7xl mx-auto space-y-10">
    <div class="flex flex-col md:flex-row justify-between items-end gap-4">
      <div>
        <h1 class="text-4xl font-extrabold headline tracking-tight text-on-surface">Welcome back,
          {{ $organizer->firstname }}.
        </h1>
        <p class="text-on-surface-variant mt-2 text-lg font-light">Your curated experiences are reaching new
          heights today.</p>
      </div>
      <a href="/create/event"
        class="bg-linear-to-br from-primary to-primary-container text-on-primary px-6 py-3 rounded-full font-semibold shadow-lg shadow-primary/20 hover:scale-105 active:scale-95 transition-all flex items-center gap-2">
        <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
        Create New Event
      </a>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Total -->
      <div class="bg-surface-container-lowest p-6 rounded-xl border-l-4 border-primary transition-all hover:shadow-md">
        <div class="flex items-center justify-between mb-4">
          <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Total
            Events</span>
          <span class="material-symbols-outlined text-primary" data-icon="layers">layers</span>
        </div>
        <div class="text-3xl font-bold headline">{{ $statistics->count() }}</div>
      </div>
      <!-- Pending -->
      <div
        class="bg-surface-container-lowest p-6 rounded-xl border-l-4 border-secondary-container transition-all hover:shadow-md">
        <div class="flex items-center justify-between mb-4">
          <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Pending</span>
          <div class="w-2 h-2 rounded-full bg-secondary-container animate-pulse"></div>
        </div>
        <div class="text-3xl font-bold headline">{{ $statistics->where('status', 'pending')->count() }}</div>
      </div>
      <!-- Approved -->
      <div class="bg-surface-container-lowest p-6 rounded-xl border-l-4 border-tertiary transition-all hover:shadow-md">
        <div class="flex items-center justify-between mb-4">
          <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Approved</span>
          <span class="material-symbols-outlined text-tertiary" data-icon="check_circle">check_circle</span>
        </div>
        <div class="text-3xl font-bold headline">{{ $statistics->where('status', 'accepted')->count() }}</div>
      </div>
      <!-- Rejected -->
      <div class="bg-surface-container-lowest p-6 rounded-xl border-l-4 border-error transition-all hover:shadow-md">
        <div class="flex items-center justify-between mb-4">
          <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Rejected</span>
          <span class="material-symbols-outlined text-error" data-icon="error_outline">error_outline</span>
        </div>
        <div class="text-3xl font-bold headline">{{ $statistics->where('status', 'rejected')->count() }}</div>
      </div>
    </div>

    <!-- Financial Summary Row -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-surface-container-low p-8 rounded-2xl relative overflow-hidden group">
        <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
          <span class="material-symbols-outlined text-6xl" data-icon="payments">payments</span>
        </div>
        <h3 class="text-sm font-medium text-on-surface-variant">Total Revenue</h3>
        <div class="mt-4 flex items-baseline gap-2">
          <span class="text-4xl font-extrabold headline text-primary">{{ $stats['totalRevenue'] }}</span>
          <span class="text-on-surface-variant text-sm">MAD</span>
        </div>
      </div>
      <div class="bg-surface-container-low p-8 rounded-2xl relative overflow-hidden group">
        <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
          <span class="material-symbols-outlined text-6xl" data-icon="equalizer">equalizer</span>
        </div>
        <h3 class="text-sm font-medium text-on-surface-variant">Avg. Revenue per Event</h3>
        <div class="mt-4 flex items-baseline gap-2">
          <span class="text-4xl font-extrabold headline text-secondary">{{ $stats['avgRevenuePerEvent'] }}</span>
          <span class="text-on-surface-variant text-sm">MAD</span>
        </div>
      </div>
      <div class="bg-surface-container-low p-8 rounded-2xl relative overflow-hidden group">
        <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
          <span class="material-symbols-outlined text-6xl" data-icon="confirmation_number">confirmation_number</span>
        </div>
        <h3 class="text-sm font-medium text-on-surface-variant">Total Tickets Sold</h3>
        <div class="mt-4 flex items-baseline gap-2">
          <span class="text-4xl font-extrabold headline text-tertiary">{{ $stats['totalTicketsSold'] }}</span>
          <span class="text-on-surface-variant text-sm">Tickets</span>
        </div>
      </div>
    </div>



    @if ($events->count() == 0)
      <p class="mt-12">
        No event exist
      </p>
    @else
      <div class="bg-surface-container-lowest rounded-xl shadow-[0_4px_24px_rgba(25,28,29,0.04)] overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full text-left border-collapse">
            <thead>
              <tr class="bg-surface-container-low">
                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Event Name</th>
                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Date &amp; Time</th>
                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">City</th>
                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Location</th>
                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Status</th>
                @if ($statistics->where('status', 'pending')->count() > 0)
                  <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Actions</th>
                @endif
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              @foreach ($events as $event)
                <tr class="hover:bg-slate-50/50 transition-colors group">
                  <td class="px-6 py-4">
                    <div class="flex items-center gap-3">
                      <div class="w-10 h-10 rounded-lg overflow-hidden shrink-0 bg-slate-200">
                        <img alt="Music Event" class="w-full h-full object-cover"
                          data-alt="energetic crowd with raised hands at a music festival with dramatic blue stage lighting and smoke effects"
                          src="{{ asset('storage/' . optional($event->images->first())->path) }}" />
                      </div>
                      <div>
                        <p class="text-sm font-bold text-on-background">{{ $event->title }}</p>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4">
                    <p class="text-sm text-on-surface font-medium">
                      {{ \Carbon\Carbon::parse($event->date)->format('d M, Y') }}
                    </p>
                    <p class="text-xs text-slate-500">{{ \Carbon\Carbon::parse($event->date)->format('h:i A') }}
                    </p>
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center gap-2">
                      <p class="text-sm text-on-surface-variant font-medium">{{ $event->city }}
                      </p>
                    </div>
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center gap-1 text-sm text-slate-600">
                      <span class="material-symbols-outlined text-xs" data-icon="location_on">location_on</span>
                      {{ $event->address }}
                    </div>
                  </td>
                  <td class="px-6 py-4">
                    <span @class([
                      'inline-flex items-center gap-1 px-3 py-1 rounded-full font-bold tracking-wider uppercase text-[10px]',
                      'bg-secondary-fixed text-on-secondary-fixed' => $event->status === 'pending',
                      'bg-green-100 text-green-700' => $event->status === 'accepted',
                      'bg-error-container text-on-error-container' => $event->status === 'rejected'
                    ])>
                      @if($event->status === 'pending')
                        <span class="w-1.5 h-1.5 bg-yellow-500 rounded-full animate-pulse"></span>
                      @endif
                      {{ $event->status }}
                    </span>
                  </td>
                  @if ($event->status === 'pending')
                    <td class="px-6 py-4 ">
                      <form action="{{ route('edit.event', $event->id) }}" method="POST">
                        @csrf
                        @method('put')
                          <button
                            class="p-1.5 hover:bg-slate-100 rounded-lg text-slate-400 hover:text-primary transition-colors"><span
                              class="material-symbols-outlined text-lg" data-icon="edit">edit</span></button>

                      </form>
                    </td>
                  @endif
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    @endif
  </section>

  <div class="p-8 flex flex-wrap gap-12">
    <div class="space-y-1">
      <div class="text-xs text-on-surface-variant font-bold uppercase tracking-tight">Net Income</div>
      <div class="text-2xl font-bold headline text-primary">{{ $stats['totalRevenueWithoutFee'] }}MAD</div>
    </div>
  </div>
@endsection

@push('scripts')
  @vite('resources/js/dashboard/organizer-dashboard.js')
@endpush
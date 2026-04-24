@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
  <section class="relative h-179 w-full overflow-hidden">
    <img class="w-full h-full object-cover"
      data-alt="Stunning architectural detail of a historical gothic cathedral during sunset with golden light hitting the intricate stone carvings and stained glass."
      src="{{ asset('storage/' . optional($event->images->first())->path) }}" />
    <div class="absolute inset-0 bg-linear-to-t from-black/60 via-transparent to-transparent"></div>
    <div
      class="absolute bottom-12 left-12 right-12 max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-end gap-6">
      <div class="text-white max-w-2xl">
        <nav class="flex gap-2 text-sm font-medium mb-4 opacity-90">
          <span
            class="bg-white/20 backdrop-blur-md px-3 py-1 rounded-full">{{ optional($event->categories->first())->name }}</span>
        </nav>
        <h1 class="text-5xl md:text-7xl font-extrabold font-headline leading-tight tracking-tight">{{ $event->title }}
        </h1>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-8 py-16 grid grid-cols-1 lg:grid-cols-12 gap-12">
    <div class="lg:col-span-8 space-y-12">
      <div class="space-y-6">
        <h2 class="text-3xl font-bold font-headline text-primary">A Journey Through Time</h2>
        <p class="text-lg text-on-surface-variant leading-relaxed font-body">{{ $event->description }}
        </p>
        <p class="text-lg text-on-surface-variant leading-relaxed font-body">
          Today, it serves not only as a place of quiet reflection but as a vibrant cultural hub, hosting
          international organ festivals and evening candlelight tours that reveal hidden gargoyles and secret passages
          rarely seen by the casual observer.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div
          class="bg-surface-container-lowest p-8 rounded-xl shadow-sm border border-outline-variant/10 flex items-start gap-4">
          <span class="material-symbols-outlined text-primary text-3xl">calendar_today</span>
          <div>
            <span class="block text-sm font-bold text-outline uppercase tracking-widest mb-1">Date &amp; Time</span>
            <span
              class="text-xl font-semibold text-on-background">{{ \Carbon\Carbon::parse($event->date)->format('M d • h:i A') }}</span>
          </div>
        </div>
        <div
          class="bg-surface-container-lowest p-8 rounded-xl shadow-sm border border-outline-variant/10 flex items-start gap-4">
          <span class="material-symbols-outlined text-primary text-3xl">schedule</span>
          <div>
            <span class="block text-sm font-bold text-outline uppercase tracking-widest mb-1">Avg. Duration</span>
            <span class="text-xl font-semibold text-on-background">{{ $event->duration }} MIN</span>
          </div>
        </div>
        <div
          class="bg-surface-container-lowest p-8 rounded-xl shadow-sm border border-outline-variant/10 flex items-start gap-4 md:col-span-2">
          <div class="flex-1">
            <span class="block text-sm font-bold text-outline uppercase tracking-widest mb-1">Crowd Level</span>
            <div class="flex items-center gap-4 mt-2">
              <span class="text-xl font-semibold text-on-background">{{ strtoupper($event->crowd_level) }}</span>
              <div class="flex-1 bg-surface-container h-3 rounded-full overflow-hidden">
                <div class="bg-secondary-container h-full w-[65%]" title="65% capacity"></div>
              </div>
            </div>
            <p class="text-xs text-outline mt-2 italic">Peak hours are usually between 11:00 AM and 2:00 PM.</p>
          </div>
          <span class="material-symbols-outlined text-secondary text-3xl">groups</span>
        </div>
      </div>
      <!-- Location Section -->
      <div class="space-y-6">
        <div class="flex justify-between items-center">
          <h3 class="text-2xl font-bold font-headline">Location &amp; Access</h3>
        </div>
        <div class="rounded-xl overflow-hidden h-75 relative bg-surface-container">
          <img class="w-full h-full object-cover grayscale opacity-60"
            data-alt="A stylized minimalist map view showing a historic European city center with a prominent cathedral icon in the middle."
            data-location="Strasbourg, France"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWuCZ-m2WR9E4jDs9gtoWFwVw9iQsVMjhDq5UZdTIl-JTpdbRU4Oe4DneN-TZH80Lx98kGJZn_wX0pZrYJY4_nKDKoBH5cOMlX_y98VSTXw7_hdDJVAHZVaCbTqnd5sx8nBt6mbLxouPFL8qaLvAdYD_K7N2lKXYoBzQ-Zw7psWMIwE42UKPK_YFgREU2qjxORERD_bcPjS8iFeOfeo12c0liU62hWD1QHuO5fC7cdlUc0czdiCpka0Th_wsk1R9O3GGU7STbEaWw" />
          <div class="absolute inset-0 flex items-center justify-center">
            <div class="bg-white p-4 rounded-xl shadow-xl flex items-center gap-3">
              <div class="bg-primary p-2 rounded-lg text-white">
                <span class="material-symbols-outlined">location_on</span>
              </div>
              <div>
                <p class="font-bold text-sm">{{ $event->address }}</p>
                <p class="text-xs text-outline">{{$event->city}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sidebar / Booking Card -->
    <div class="lg:col-span-4">
      <div
        class="sticky top-28 bg-surface-container-lowest p-8 rounded-2xl shadow-xl shadow-sky-900/5 border border-outline-variant/10 space-y-8">
        @foreach ($event->tickets as $ticket)
          <div class="flex justify-between items-center">
            <div>
              <span class="text-sm font-medium text-outline">Starting from</span>
              <div class="flex items-baseline gap-1">
                <span
                  class="text-3xl font-extrabold text-on-background font-headline">{{ $ticket->price + $ticket->price * $ticket->service_fee / 100 }}
                  MAD</span>
                <span class="text-outline text-sm">/ person</span>
              </div>
            </div>
            <div class="bg-tertiary-container/10 px-3 py-1 rounded-lg">
              <span class="text-tertiary font-bold text-sm">Fast Track</span>
            </div>
          </div>
          <div class="space-y-4">
            <div class="p-4 bg-surface rounded-xl border border-outline-variant/30 flex justify-between items-center">
              <div class="flex flex-col">
                <span class="text-xs font-bold text-outline uppercase tracking-tighter">Tickets</span>
                <span class="font-semibold">{{$ticket->name}}</span>
              </div>
              <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
              <div class="flex items-center gap-4">
                <button onclick="this.nextElementSibling.stepDown()"
                  class="w-8 h-8 rounded-full border border-outline-variant flex items-center justify-center hover:bg-surface-variant transition-colors">
                  -
                </button>

                <input type="number" value="1" min="0" max="{{ $ticket->quantity }}" name="tickets[{{ $ticket->id }}]"
                  class="w-12 text-center font-bold bg-transparent border-none focus:outline-none appearance-none" />

                <button onclick="this.previousElementSibling.stepUp()"
                  class="w-8 h-8 rounded-full border border-outline-variant flex items-center justify-center hover:bg-surface-variant transition-colors">
                  +
                </button>
              </div>
            </div>
            <div class="p-4 bg-surface rounded-xl border border-outline-variant/30 flex justify-between items-center">
              <div class="flex flex-col">
                <span class="text-xs font-bold text-outline uppercase tracking-tighter">Date</span>
                <span class="font-semibold">{{ \Carbon\Carbon::parse($event->date)->format('M d') }}</span>
              </div>
            </div>
          </div>
        @endforeach
        <button
          class="w-full py-4 bg-secondary-container text-on-secondary-container font-extrabold rounded-full shadow-lg shadow-secondary-container/20 hover:scale-95 active:scale-100 transition-transform">
          Book Ticket Now
        </button>
      </div>
    </div>
  </section>
  <!-- Related Section -->
  <section class="bg-surface-container-low py-20 mt-12">
    <div class="max-w-7xl mx-auto px-8">
      <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
        <div class="max-w-xl">
          <h2 class="text-4xl font-extrabold font-headline mb-4">People also visited</h2>
          <p class="text-outline">Continue your architectural journey with these nearby landmarks and curated cultural
            experiences.</p>
        </div>
        <button
          class="px-8 py-3 rounded-full border border-outline-variant font-bold text-primary hover:bg-white transition-all">View
          All Destinations</button>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Related Card 1 -->
        <div class="group cursor-pointer">
          <div class="relative h-64 rounded-2xl overflow-hidden mb-4 shadow-sm">
            <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
              data-alt="Modern art museum exterior with glass walls reflecting a blue sky and people walking around a minimalist courtyard."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuCiHa21DLwb23AMMGP7IQdD6pfS7ZXyCgMYKP19hvfkHcLrAfcpi0JSxiZdECs7EhhBmRfgsFI1CMo_2CGZ84BD1sG1iRYIRZ8t7iqyrff_nID_5CGTFhnnWr8huJ3dcqi1-a04QNqM8lD-OBnB5TFhB6oK1nUFpdcwIb8GP5On-lygHVoHC4fht9dKpjB_pRIzau2JZrwu9Y0gy0DvQNOx2Bx5eNLMafvw1ip7A9XwNDdVKAJxJHOG9PUtcQY5Fjhyvjqn2T2yHq4" />
            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-lg shadow-sm">
              <span class="font-bold text-primary text-sm">€12.00</span>
            </div>
          </div>
          <h3 class="text-xl font-bold font-headline mb-1 group-hover:text-primary transition-colors">The Glass
            Pavilion</h3>
          <p class="text-sm text-outline flex items-center gap-1">
            <span class="material-symbols-outlined text-sm">location_on</span> Modern District • 1.2km away
          </p>
        </div>
        <!-- Related Card 2 -->
        <div class="group cursor-pointer">
          <div class="relative h-64 rounded-2xl overflow-hidden mb-4 shadow-sm">
            <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
              data-alt="Quiet cobblestone street in an old European town with hanging flower baskets and warm lantern lighting at dusk."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjPfh9ph0bGXTzdMCLTRmvOnn25IlPfZ3fA0Q-0RllRzo8ISOYw5GMzoXw9ep9UmBL46GVj8GMe_6ehKN6z3cIxeUlWzKUkk2PysePaQv3teoLcfWmRSCU_C7wiSnFYHr4GxyIBzbffHzi_2lWD7IgboyTE6x8VpAuOKvNaIAbI7ErRDZ2D7mOZ6TMr4sLY2x6vViTXLBj_wXrDe3n6U7wx5xkIpBQvtkFh1Gfc2GGkfDSbW7SMWtY7oZrTXeLIQp-pr0ZU4RENhU" />
            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-lg shadow-sm">
              <span class="font-bold text-primary text-sm">Free</span>
            </div>
          </div>
          <h3 class="text-xl font-bold font-headline mb-1 group-hover:text-primary transition-colors">Old Town Night
            Walk</h3>
          <p class="text-sm text-outline flex items-center gap-1">
            <span class="material-symbols-outlined text-sm">location_on</span> Historic Center • 0.5km away
          </p>
        </div>
        <!-- Related Card 3 -->
        <div class="group cursor-pointer">
          <div class="relative h-64 rounded-2xl overflow-hidden mb-4 shadow-sm">
            <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
              data-alt="Lively street market with colorful fruit stalls, local vendors, and a busy crowd in the morning light."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdsm5cxBJn-R9HktpUs3tINGMcRmFfb1o87cFZQ9GLveEIgmhUgDIuKCAUyhm5XebkMApaIE2dxywR-bUAFvy_JE_1ltelvP77F4S37ASLwpZnriofRqFa57Qh980CPBDpczyDkqwpP0jN7vMPfm0w3E7bahzurLxhL4rzsVsRY_eYXUqthEXuedVyIrSj3lfnFoBvqJtiVmF9-yC67pesEN0emDo7g9-i5darAVWW_i-r7stSnZBG8XuqNr2utDPG1Wb5-FtFma4" />
            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-lg shadow-sm">
              <span class="font-bold text-primary text-sm">Free</span>
            </div>
          </div>
          <h3 class="text-xl font-bold font-headline mb-1 group-hover:text-primary transition-colors">Artisan Market
            Square</h3>
          <p class="text-sm text-outline flex items-center gap-1">
            <span class="material-symbols-outlined text-sm">location_on</span> Market Square • 0.8km away
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection
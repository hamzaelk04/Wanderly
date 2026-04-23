<!DOCTYPE html>

<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Events | Wanderly</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600;700&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "surface-container-low": "#f3f4f5",
            "inverse-on-surface": "#f0f1f2",
            "surface-container-highest": "#e1e3e4",
            "on-tertiary-container": "#ecf9ff",
            "on-surface": "#191c1d",
            "on-primary": "#ffffff",
            "on-secondary-fixed": "#281800",
            "surface-bright": "#f8f9fa",
            "on-surface-variant": "#404850",
            "secondary-fixed-dim": "#ffba3f",
            "tertiary-container": "#007c95",
            "surface-dim": "#d9dadb",
            "on-secondary": "#ffffff",
            "primary": "#005d90",
            "surface-tint": "#006399",
            "surface-container-high": "#e7e8e9",
            "on-primary-container": "#f3f7ff",
            "surface-variant": "#e1e3e4",
            "on-tertiary-fixed": "#001f27",
            "primary-fixed": "#cde5ff",
            "error": "#ba1a1a",
            "background": "#f8f9fa",
            "on-primary-fixed-variant": "#004b74",
            "on-tertiary": "#ffffff",
            "on-error": "#ffffff",
            "on-background": "#191c1d",
            "outline-variant": "#bfc7d1",
            "secondary-container": "#f9ad00",
            "error-container": "#ffdad6",
            "outline": "#707881",
            "on-tertiary-fixed-variant": "#004e5f",
            "tertiary-fixed-dim": "#4cd6fb",
            "secondary-fixed": "#ffdeae",
            "on-secondary-fixed-variant": "#604100",
            "on-secondary-container": "#664500",
            "surface-container-lowest": "#ffffff",
            "surface": "#f8f9fa",
            "primary-container": "#0077b6",
            "tertiary-fixed": "#b3ebff",
            "on-primary-fixed": "#001d32",
            "tertiary": "#006176",
            "on-error-container": "#93000a",
            "primary-fixed-dim": "#94ccff",
            "inverse-primary": "#94ccff",
            "inverse-surface": "#2e3132",
            "secondary": "#7f5600",
            "surface-container": "#edeeef"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          "fontFamily": {
            "headline": ["Plus Jakarta Sans"],
            "body": ["Inter"],
            "label": ["Inter"]
          }
        },
      },
    }
  </script>
  <style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      display: inline-block;
      vertical-align: middle;
    }

    .hide-scrollbar::-webkit-scrollbar {
      display: none;
    }

    .hide-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
  </style>
</head>

<body class="bg-background text-on-surface font-body selection:bg-primary-fixed selection:text-on-primary-fixed">
  <!-- Top Navigation Shell -->
  <header
    class="bg-white/70 backdrop-blur-xl docked full-width top-0 sticky z-50 shadow-[0px_4px_24px_rgba(0,0,0,0.04)]">
    <nav class="flex justify-between items-center w-full px-6 py-4 max-w-7xl mx-auto">
      <div class="flex items-center gap-8">
        <a class="text-2xl font-extrabold tracking-tighter text-[#0077B6] font-headline" href="#">Wanderly</a>
        <div class="hidden md:flex items-center gap-6">
          <a class="text-slate-500 font-medium hover:text-[#0077B6] transition-all duration-300 rounded-lg font-headline tracking-tight"
            href="#">Monuments</a>
          <a class="text-[#0077B6] font-bold border-b-2 border-[#0077B6] pb-1 font-headline tracking-tight"
            href="#">Events</a>
          <a class="text-slate-500 font-medium hover:text-[#0077B6] transition-all duration-300 rounded-lg font-headline tracking-tight"
            href="#">Culture</a>
          <a class="text-slate-500 font-medium hover:text-[#0077B6] transition-all duration-300 rounded-lg font-headline tracking-tight"
            href="#">Journal</a>
        </div>
      </div>
      <div class="flex items-center gap-4">
        <button class="p-2 transition-all duration-300 hover:bg-slate-100 rounded-lg scale-95 active:opacity-80">
          <span class="material-symbols-outlined text-[#0077B6]">notifications</span>
        </button>
        <button class="p-2 transition-all duration-300 hover:bg-slate-100 rounded-lg scale-95 active:opacity-80">
          <span class="material-symbols-outlined text-[#0077B6]">favorite</span>
        </button>
        <div class="h-10 w-10 rounded-full overflow-hidden border-2 border-surface-container-high">
          <img alt="User profile" class="w-full h-full object-cover"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNXU0JvjxHCo3HqVja03qwRdou8HzAl8A1yM_KsK6Qn9MbbFYoyRAEsZgAhZFIamNf3j46GqB-QqNJomgdWn6pzWdn56eIHrrWGiWsZgcSeYz2ka-Lu-azgFxLYyFMWYf9kjzpKLjjve1bfelGYOjozwURubagjhWWDKlh3IzTSykf3ebDxIWJuWN6lf8yhkXyfkbeJiKyPgOTJOzzAJaFkOwvO8Xbr7eBZQhoJJ6ieNdbJPxkr5lcJ9bJX3KT8I07ey61PnMsoKE" />
        </div>
      </div>
    </nav>
  </header>
  <main class="max-w-7xl mx-auto px-6 py-12 pb-32 md:pb-12">
    <div class="mb-12">
      <h1 class="font-headline font-extrabold text-5xl md:text-6xl text-on-surface tracking-tighter mb-4">Curated Events
      </h1>
      <p class="text-on-surface-variant text-lg max-w-2xl font-medium leading-relaxed mb-10">Discover the heartbeat of
        the city through our hand-picked selection of cultural festivals, concerts, and exclusive local gatherings.</p>
      <!-- Sticky Search Bar -->
      <div class="sticky top-24 z-40">
        <div
          class="bg-surface-container-lowest shadow-[0px_4px_32px_rgba(0,0,0,0.06)] rounded-full p-2 flex items-center gap-2 max-w-3xl">
          <div class="flex-1 flex items-center px-4 gap-3">
            <span class="material-symbols-outlined text-outline">search</span>
            <input
              class="w-full bg-transparent border-none focus:ring-0 text-on-surface placeholder:text-outline py-3 font-medium"
              placeholder="Search events or locations..." type="text" />
          </div>
          <button
            class="bg-gradient-to-br from-[#005d90] to-[#0077B6] text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition-all scale-100 active:scale-95">Search</button>
        </div>
      </div>
    </div>
    <!-- Filters Section -->
    <div class="flex flex-col md:flex-row gap-4 mb-12 overflow-x-auto hide-scrollbar">
      <div class="flex items-center gap-4 min-w-max">
        <div class="relative group">
          <button
            class="flex items-center gap-2 bg-surface-container-lowest px-6 py-3 rounded-full text-on-surface font-semibold shadow-sm hover:bg-surface-container-low transition-colors">
            Category: All
            <span class="material-symbols-outlined text-outline">expand_more</span>
          </button>
        </div>
        <div class="relative group">
          <button
            class="flex items-center gap-2 bg-surface-container-lowest px-6 py-3 rounded-full text-on-surface font-semibold shadow-sm hover:bg-surface-container-low transition-colors">
            Date range
            <span class="material-symbols-outlined text-outline">calendar_today</span>
          </button>
        </div>
        <div class="relative group">
          <button
            class="flex items-center gap-2 bg-surface-container-lowest px-6 py-3 rounded-full text-on-surface font-semibold shadow-sm hover:bg-surface-container-low transition-colors">
            Price range
            <span class="material-symbols-outlined text-outline">payments</span>
          </button>
        </div>
      </div>
      <div class="flex items-center gap-2 md:ml-auto min-w-max">
        <span class="text-label-sm font-semibold text-outline px-4">QUICK FILTERS:</span>
        <button
          class="px-5 py-2 rounded-full border border-outline-variant text-on-surface-variant font-medium hover:bg-surface-container-low transition-all">Sport</button>
        <button
          class="px-5 py-2 rounded-full border border-outline-variant text-on-surface-variant font-medium hover:bg-surface-container-low transition-all">Cultural</button>
        <button
          class="px-5 py-2 rounded-full border border-outline-variant text-on-surface-variant font-medium hover:bg-surface-container-low transition-all">Artistic</button>
      </div>
    </div>
    <!-- Events Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Event 1 -->
      <div
        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
        <div class="relative h-64 overflow-hidden">
          <img alt="Neon Horizon Jazz Nights"
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8zcDjrzHBUBQbs-7h7uqlMkHX1ZMrV__kP7s08iT9zqhbkE_fUjMJ3WaVfi_c0rJB23CG-pZmube7uqa5uE03h1Q9KlhtYfPzcp9pK-2v7C0ukWrO2RpQj9RROaQ3TPslKX-JZRhpPoCxdhisZyNwyljfjXZYYM1RIBR0OLUBVdhbPJWMqDwmtsLCdaZSOD-oo4aSLP9yLrFhCOoO58FbHZ1Tco-OcmTbh6WopSLGnzRImb14RLbNVoyoWKyaPbraKpHlw9layLA" />
          <div class="absolute top-4 right-4 flex flex-col gap-2">
            <button
              class="w-10 h-10 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center text-[#0077B6] hover:bg-white transition-all shadow-sm">
              <span class="material-symbols-outlined">favorite</span>
            </button>
          </div>
          <div
            class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
            Music</div>
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-headline font-bold text-2xl text-on-surface">Neon Horizon Jazz Nights</h3>
            <span class="text-secondary font-bold">$45.00</span>
          </div>
          <div class="flex items-center gap-1 text-outline mb-4">
            <span class="material-symbols-outlined text-sm">location_on</span>
            <span class="text-xs font-semibold tracking-wide uppercase">The Grand Pavilion, City Center</span>
          </div>
          <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">Experience an unforgettable
            evening of contemporary jazz under the city lights with world-renowned musicians.</p>
          <div class="flex items-center justify-between mt-auto">
            <div class="flex flex-col">
              <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Date &amp; Time</span>
              <span class="text-sm font-semibold">Aug 24 • 8:00 PM</span>
            </div>
          </div>
          <div class="mt-6 flex gap-3">
            <button
              class="flex-1 py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-surface-container-high transition-all duration-300">View
              Details</button>
            <button
              class="flex-1 py-4 rounded-xl bg-primary text-white font-bold hover:bg-primary-container shadow-md hover:shadow-lg transition-all duration-300">Buy
              Tickets</button>
          </div>
        </div>
      </div>
      <!-- Event 2 -->
      <div
        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
        <div class="relative h-64 overflow-hidden">
          <img alt="Contemporary Soul Exhibition"
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnA2WFVahqPO5XWGTRIhfQApGWSoKFb90849oG2QR3d2x9NvymQRG7XtaV8ZeXih1CPHfO3Qs_UxqgG8n12fbaWY7r6n93PgI73tjn2Py7pcUHpzCGBdKEkb-UaSYD8pDRfeZnrttTWG2rMD_FUQ1p8rv4un1nb2620s0TfuV9zcBoUGhIK7KQ24EnRtcSuXE9Z0ThUPDuUkQq6zfjMOkojrpGGZ2NcTZEB-4pLsYSrOrJoT6tRA_9vllhmFRJvRYLp818Oe_Jguc" />
          <div class="absolute top-4 right-4 flex flex-col gap-2">
            <button
              class="w-10 h-10 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center text-[#0077B6] hover:bg-white transition-all shadow-sm">
              <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">favorite</span>
            </button>
          </div>
          <div
            class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
            Art</div>
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-headline font-bold text-2xl text-on-surface">Contemporary Soul</h3>
            <span class="text-secondary font-bold">Free</span>
          </div>
          <div class="flex items-center gap-1 text-outline mb-4">
            <span class="material-symbols-outlined text-sm">location_on</span>
            <span class="text-xs font-semibold tracking-wide uppercase">Museo d'Arte Moderna</span>
          </div>
          <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">A curated collection exploring
            the intersections of identity and modern society through diverse media.</p>
          <div class="flex items-center justify-between mt-auto">
            <div class="flex flex-col">
              <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Date Range</span>
              <span class="text-sm font-semibold">Sep 02 - Sep 15</span>
            </div>
          </div>
          <div class="mt-6 flex gap-3">
            <button
              class="flex-1 py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-surface-container-high transition-all duration-300">View
              Details</button>
            <button
              class="flex-1 py-4 rounded-xl bg-primary text-white font-bold hover:bg-primary-container shadow-md hover:shadow-lg transition-all duration-300">Get
              Entry</button>
          </div>
        </div>
      </div>
      <!-- Event 3 -->
      <div
        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
        <div class="relative h-64 overflow-hidden">
          <img alt="Taste of the Heritage Festival"
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9VV92LxF4izNjPWus4xQcmMWJ8xwaJ5bZgb8DTAqsWg84yoiOPn8D_yL68dou183s-dhgs2-RghsvUjBRKEWp1f6Irzx-dirqlcXa6tHdYsr5IY1DD8t7jaEuioLtyl4dtfy6PrJWp1noCAimP1wceCIkrTMUh7T7TKKtFaFwiq-3WMxoFAswy9pl8ps0I_tz75502y-uo0MuixSRTRlsUJ3pmq1XJu5cK_WAYd0iJlnE2j8A6eWOvbVRbqOLEzY83eb_XpT8lw8" />
          <div class="absolute top-4 right-4 flex flex-col gap-2">
            <button
              class="w-10 h-10 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center text-[#0077B6] hover:bg-white transition-all shadow-sm">
              <span class="material-symbols-outlined">favorite</span>
            </button>
          </div>
          <div
            class="absolute top-4 left-4 bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest uppercase">
            Culinary</div>
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-headline font-bold text-2xl text-on-surface">Heritage Festival</h3>
            <span class="text-secondary font-bold">$15.00</span>
          </div>
          <div class="flex items-center gap-1 text-outline mb-4">
            <span class="material-symbols-outlined text-sm">location_on</span>
            <span class="text-xs font-semibold tracking-wide uppercase">Old Town Square Park</span>
          </div>
          <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">Savor traditional recipes and
            street food favorites from across the region in this vibrant outdoor market.</p>
          <div class="flex items-center justify-between mt-auto">
            <div class="flex flex-col">
              <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Time</span>
              <span class="text-sm font-semibold">Oct 12 • 11:00 AM</span>
            </div>
          </div>
          <div class="mt-6 flex gap-3">
            <button
              class="flex-1 py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-surface-container-high transition-all duration-300">View
              Details</button>
            <button
              class="flex-1 py-4 rounded-xl bg-secondary-container text-on-secondary-container font-bold hover:opacity-90 shadow-md hover:shadow-lg transition-all duration-300">Buy
              Tickets</button>
          </div>
        </div>
      </div>
      <!-- Event 4 -->
      <div
        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
        <div class="relative h-64 overflow-hidden">
          <img alt="Starlight Shakespeare Series"
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDE_DD0wt5H-zYPwKN31nReZb36AxwBWJU_EVriKja5pY4Uh9GCGKFaVpcRo_0Fl6wEb3a7Ckah_VnfrX6TnefFSM03AiYOegkIS9oYnbEfVA5U4YLPOjjgsi90ir62gUg-PKc_QgrRR0YJm9WvuIW3n0CV6Gt4zdSsIRqPAdpGl0Mc7lXZIah5A_EDLhXxnPUsc9fBdeFB8VrxIAykJ-MrnyK4FCBDvWTX1DemvlKP-H_yRIMTzpfw_6T0Ny7vP4pAR_ldQLlKDMA" />
          <div class="absolute top-4 right-4 flex flex-col gap-2">
            <button
              class="w-10 h-10 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center text-[#0077B6] hover:bg-white transition-all shadow-sm">
              <span class="material-symbols-outlined">favorite</span>
            </button>
          </div>
          <div
            class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
            Theater</div>
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-headline font-bold text-2xl text-on-surface">Starlight Shakespeare</h3>
            <span class="text-secondary font-bold">$30.00</span>
          </div>
          <div class="flex items-center gap-1 text-outline mb-4">
            <span class="material-symbols-outlined text-sm">location_on</span>
            <span class="text-xs font-semibold tracking-wide uppercase">Open Air Amphitheatre</span>
          </div>
          <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">An enchanting night of classical
            theater performed under the stars by an award-winning ensemble.</p>
          <div class="flex items-center justify-between mt-auto">
            <div class="flex flex-col">
              <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Time</span>
              <span class="text-sm font-semibold">Aug 30 • 9:30 PM</span>
            </div>
          </div>
          <div class="mt-6 flex gap-3">
            <button
              class="flex-1 py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-surface-container-high transition-all duration-300">View
              Details</button>
            <button
              class="flex-1 py-4 rounded-xl bg-primary text-white font-bold hover:bg-primary-container shadow-md hover:shadow-lg transition-all duration-300">Buy
              Tickets</button>
          </div>
        </div>
      </div>
      <!-- Event 5 -->
      <div
        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
        <div class="relative h-64 overflow-hidden">
          <img alt="The Royal Medieval Faire"
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIkI19p5JTYEf5EPJWtbOSZGfeUcc9yxtQOBHRDQG-B71wKXFT4kfQy7MufFUfAYHcwQX7eQxj3GToLmeYs3qXfE8WQ7E0GYpQu5e238r8FApNwoo9wqepR5ScZbFeI5-iIWudXG4ZNoDRy9VrR-kj1ZUgj_cp1fHDk3twDiRJ1OrfZZkioGe7zboB_qu8JyHtaAIrAo6djNZP2PeIkYcfATiUvO5mVQhlyCGxIF7gDy61ZquT2TxDddahy8ugu2xYKDfQ5Zyccq0" />
          <div class="absolute top-4 right-4 flex flex-col gap-2">
            <button
              class="w-10 h-10 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center text-[#0077B6] hover:bg-white transition-all shadow-sm">
              <span class="material-symbols-outlined">favorite</span>
            </button>
          </div>
          <div
            class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
            Heritage</div>
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-headline font-bold text-2xl text-on-surface">The Royal Medieval Faire</h3>
            <span class="text-secondary font-bold">$25.00</span>
          </div>
          <div class="flex items-center gap-1 text-outline mb-4">
            <span class="material-symbols-outlined text-sm">location_on</span>
            <span class="text-xs font-semibold tracking-wide uppercase">Old Fortress Grounds</span>
          </div>
          <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">Step back in time for a weekend
            of jousting, artisan crafts, and historic reenactments at the castle.</p>
          <div class="flex items-center justify-between mt-auto">
            <div class="flex flex-col">
              <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Dates</span>
              <span class="text-sm font-semibold">Sep 18 - Sep 20</span>
            </div>
          </div>
          <div class="mt-6 flex gap-3">
            <button
              class="flex-1 py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-surface-container-high transition-all duration-300">View
              Details</button>
            <button
              class="flex-1 py-4 rounded-xl bg-primary text-white font-bold hover:bg-primary-container shadow-md hover:shadow-lg transition-all duration-300">Buy
              Tickets</button>
          </div>
        </div>
      </div>
      <!-- Event 6 -->
      <div
        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-[0px_4px_24px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-500 group flex flex-col">
        <div class="relative h-64 overflow-hidden">
          <img alt="Digital Horizon Summit 2024"
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_72Psmtic6YJ3CqyfKDoS3TPHLDQVTWZ-hSaQWB-n2HtyAzAZI1GBWMEJjEhZIuKFuwil3EvBtUNoaHQSHKeQpvOlNwzP4uhyk8ZLJhRzhxry9g4II8wS7niNjT27dCNjdg7IEffoj7YKg5kp4qZxSxu5MLQHAiTkcdoKWQoM_V4WPYvsHFpysTQbS6MTTP4VUCLLRU11cy3IBuAZFuZOKbT8GojyN326GVUfo2HGI7p5RxkUxMepo3bBPY9itLK3HaNE949IXCQ" />
          <div class="absolute top-4 right-4 flex flex-col gap-2">
            <button
              class="w-10 h-10 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center text-[#0077B6] hover:bg-white transition-all shadow-sm">
              <span class="material-symbols-outlined">favorite</span>
            </button>
          </div>
          <div
            class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-extrabold tracking-widest text-primary uppercase">
            Summit</div>
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex justify-between items-start mb-2">
            <h3 class="font-headline font-bold text-2xl text-on-surface">Digital Horizon Summit</h3>
            <span class="text-secondary font-bold">$199.00</span>
          </div>
          <div class="flex items-center gap-1 text-outline mb-4">
            <span class="material-symbols-outlined text-sm">location_on</span>
            <span class="text-xs font-semibold tracking-wide uppercase">Innovation Tech Center</span>
          </div>
          <p class="text-on-surface-variant text-sm mb-6 leading-relaxed line-clamp-2">Connect with industry leaders and
            explore the future of technology, AI, and digital transformation.</p>
          <div class="flex items-center justify-between mt-auto">
            <div class="flex flex-col">
              <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Time</span>
              <span class="text-sm font-semibold">Nov 05 • 09:00 AM</span>
            </div>
          </div>
          <div class="mt-6 flex gap-3">
            <button
              class="flex-1 py-4 rounded-xl bg-surface-container-low text-primary font-bold hover:bg-surface-container-high transition-all duration-300">View
              Details</button>
            <button
              class="flex-1 py-4 rounded-xl bg-primary text-white font-bold hover:bg-primary-container shadow-md hover:shadow-lg transition-all duration-300">Buy
              Tickets</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Map Preview Section -->
    <section class="mt-24 mb-12">
      <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-4">
        <div>
          <h2 class="font-headline font-extrabold text-3xl text-on-surface tracking-tight mb-2">Event Map</h2>
          <p class="text-on-surface-variant font-medium">Find happenings near you in real-time.</p>
        </div>
        <button class="flex items-center gap-2 text-primary font-bold hover:underline underline-offset-4">
          Open Interactive View
          <span class="material-symbols-outlined">map</span>
        </button>
      </div>
      <div class="h-[500px] w-full bg-surface-container rounded-[32px] relative overflow-hidden group shadow-inner">
        <img alt="Stylized topographical map"
          class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-[20s] ease-linear"
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJscgCRNPyYtGSYHyEZ5v637793DYsf-BKg8JNxD8zBcYLYwX4AvOfRDAaxJI3FDrhNfzc41sscG_hTomoeYS4D9DhtKu6EkVEp2-8AzYTg-HSJINhMZdmyf8QNUzTnuDof82sWg6bt0f1L-GlQ86IwVPpg0Ec4bf5W_hapjNpqQl-9uZZuPPbc8cbRfNh3Xmk_pRO6uPV65ic5s5zmsJEeii6i67HPXCQg9S4RTeKMSlQvfe67at186IOGQEMDimVOeYvJlAq6Sc" />
        <!-- Floating Info Card on Map -->
        <div
          class="absolute bottom-8 left-8 bg-white/80 backdrop-blur-xl p-6 rounded-2xl shadow-2xl max-w-sm border border-white/50">
          <div class="flex items-center gap-4 mb-4">
            <div class="h-12 w-12 rounded-xl bg-primary/10 flex items-center justify-center">
              <span class="material-symbols-outlined text-primary">event_upcoming</span>
            </div>
            <div>
              <p class="text-xs font-bold text-outline uppercase tracking-widest">Happening Soon</p>
              <h4 class="font-bold text-on-surface">Street Art Workshop</h4>
            </div>
          </div>
          <p class="text-sm text-on-surface-variant leading-relaxed mb-4">Starts in 2 hours at the Downtown Cultural
            Hub, just 1.5 miles away.</p>
          <button class="w-full py-3 bg-primary text-white rounded-xl font-bold shadow-lg shadow-primary/20">Navigate
            Now</button>
        </div>
        <!-- Mock Map Pins -->
        <div
          class="absolute top-1/4 left-1/3 p-2 bg-white rounded-full shadow-lg border-2 border-primary animate-pulse">
        </div>
        <div class="absolute top-1/2 right-1/4 p-2 bg-white rounded-full shadow-lg border-2 border-secondary"></div>
        <div class="absolute bottom-1/3 left-1/2 p-2 bg-white rounded-full shadow-lg border-2 border-primary"></div>
      </div>
    </section>
  </main>
  <!-- Footer -->
  <footer class="bg-slate-50 dark:bg-slate-900 w-full py-12 px-8 mt-12 border-t border-slate-100">
    <div
      class="flex flex-col md:flex-row justify-between items-center max-w-screen-2xl mx-auto gap-4 font-headline text-xs font-medium">
      <div class="text-lg font-bold text-[#0077B6]">Wanderly</div>
      <div class="flex flex-wrap justify-center gap-6 text-slate-500 dark:text-slate-400">
        <a class="hover:underline decoration-2 underline-offset-4 transition-opacity" href="#">Curated Trips</a>
        <a class="hover:underline decoration-2 underline-offset-4 transition-opacity" href="#">Privacy Policy</a>
        <a class="hover:underline decoration-2 underline-offset-4 transition-opacity" href="#">Terms of Adventure</a>
        <a class="hover:underline decoration-2 underline-offset-4 transition-opacity" href="#">Contact Support</a>
      </div>
      <div class="text-slate-500 dark:text-slate-400">© 2024 Wanderly. The Digital Curator.</div>
    </div>
  </footer>
  <!-- Bottom Navigation Shell (Mobile) -->
  <nav
    class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-6 pt-3 bg-white shadow-[0_-10px_40px_rgba(0,0,0,0.05)] rounded-t-[32px]">
    <div class="flex flex-col items-center justify-center text-slate-400 p-3 hover:text-[#0077B6] transition-colors">
      <span class="material-symbols-outlined">explore</span>
      <span class="font-['Inter'] text-[11px] font-semibold uppercase tracking-widest mt-1">Explore</span>
    </div>
    <div
      class="flex flex-col items-center justify-center bg-gradient-to-br from-[#005d90] to-[#0077B6] text-white rounded-full p-3 shadow-lg scale-110 duration-200 ease-out">
      <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">calendar_month</span>
      <span class="font-['Inter'] text-[11px] font-semibold uppercase tracking-widest mt-1">Events</span>
    </div>
    <div class="flex flex-col items-center justify-center text-slate-400 p-3 hover:text-[#0077B6] transition-colors">
      <span class="material-symbols-outlined">favorite</span>
      <span class="font-['Inter'] text-[11px] font-semibold uppercase tracking-widest mt-1">Saved</span>
    </div>
    <div class="flex flex-col items-center justify-center text-slate-400 p-3 hover:text-[#0077B6] transition-colors">
      <span class="material-symbols-outlined">person</span>
      <span class="font-['Inter'] text-[11px] font-semibold uppercase tracking-widest mt-1">Profile</span>
    </div>
  </nav>
  <!-- Contextual FAB -->
  <button
    class="fixed bottom-24 right-6 md:bottom-12 md:right-12 h-16 w-16 rounded-full bg-secondary-container text-on-secondary-container shadow-2xl flex items-center justify-center hover:scale-110 active:scale-95 transition-all z-40">
    <span class="material-symbols-outlined text-3xl">add_alert</span>
  </button>
</body>

</html>
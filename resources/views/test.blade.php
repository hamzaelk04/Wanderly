<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Moderate Event: Summit Music Fest | Wanderly Admin</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "surface-dim": "#d9dadb",
            "on-tertiary-container": "#ecf9ff",
            "error": "#ba1a1a",
            "on-secondary-container": "#664500",
            "surface-tint": "#006399",
            "secondary": "#7f5600",
            "inverse-surface": "#2e3132",
            "primary-fixed-dim": "#94ccff",
            "on-secondary": "#ffffff",
            "on-background": "#191c1d",
            "outline-variant": "#bfc7d1",
            "primary": "#005d90",
            "tertiary-fixed-dim": "#4cd6fb",
            "surface-container-high": "#e7e8e9",
            "outline": "#707881",
            "surface-variant": "#e1e3e4",
            "background": "#f8f9fa",
            "surface-container-highest": "#e1e3e4",
            "on-tertiary-fixed-variant": "#004e5f",
            "on-surface": "#191c1d",
            "error-container": "#ffdad6",
            "surface-container-lowest": "#ffffff",
            "surface-container-low": "#f3f4f5",
            "on-secondary-fixed-variant": "#604100",
            "on-secondary-fixed": "#281800",
            "on-tertiary": "#ffffff",
            "surface": "#f8f9fa",
            "inverse-on-surface": "#f0f1f2",
            "primary-container": "#0077b6",
            "on-primary-container": "#f3f7ff",
            "tertiary": "#006176",
            "tertiary-fixed": "#b3ebff",
            "tertiary-container": "#007c95",
            "on-primary": "#ffffff",
            "secondary-fixed-dim": "#ffba3f",
            "secondary-container": "#f9ad00",
            "on-surface-variant": "#404850",
            "on-primary-fixed-variant": "#004b74",
            "on-error-container": "#93000a",
            "primary-fixed": "#cde5ff",
            "on-tertiary-fixed": "#001f27",
            "on-error": "#ffffff",
            "inverse-primary": "#94ccff",
            "surface-bright": "#f8f9fa",
            "secondary-fixed": "#ffdeae",
            "on-primary-fixed": "#001d32",
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
    }

    body {
      font-family: 'Inter', sans-serif;
    }

    h1,
    h2,
    h3,
    .headline {
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
  </style>
</head>

<body class="bg-background text-on-background min-h-screen">
  <!-- SideNavBar (Exact copy from SCREEN_7) -->
  <aside
    class="fixed left-0 top-0 h-screen w-64 z-50 bg-white dark:bg-slate-950 flex flex-col p-6 border-r-0 font-['Inter'] font-medium text-sm">
    <div class="flex items-center gap-3 mb-10 px-2">
      <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center text-white">
        <span class="material-symbols-outlined">explore</span>
      </div>
      <div>
        <h1 class="font-['Plus_Jakarta_Sans'] font-bold text-[#0077B6] text-xl px-2">Wanderly</h1>
        <p class="text-[10px] text-slate-500 uppercase tracking-widest px-2">Admin Portal</p>
      </div>
    </div>
    <nav class="flex-1 space-y-1">
      <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-[#0077B6] hover:translate-x-1 transition-all scale-100 hover:scale-[1.02] duration-300"
        href="#">
        <span class="material-symbols-outlined">dashboard</span>
        <span>Dashboard</span>
      </a>
      <a class="flex items-center gap-3 px-4 py-3 text-[#0077B6] bg-slate-50 dark:bg-slate-900 font-bold rounded-lg scale-100 hover:scale-[1.02] duration-300"
        href="#">
        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">event_available</span>
        <span>Event Management</span>
      </a>
      <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-[#0077B6] hover:translate-x-1 transition-all scale-100 hover:scale-[1.02] duration-300"
        href="#">
        <span class="material-symbols-outlined">group</span>
        <span>User Moderation</span>
      </a>
      <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-[#0077B6] hover:translate-x-1 transition-all scale-100 hover:scale-[1.02] duration-300"
        href="#">
        <span class="material-symbols-outlined">insights</span>
        <span>Analytics</span>
      </a>
      <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-[#0077B6] hover:translate-x-1 transition-all scale-100 hover:scale-[1.02] duration-300"
        href="#">
        <span class="material-symbols-outlined">settings_ethernet</span>
        <span>System Logs</span>
      </a>
    </nav>
    <div class="mt-auto pt-6 space-y-1">
      <button
        class="w-full bg-[#0077B6] text-white py-3 rounded-xl font-bold mb-6 shadow-lg shadow-primary/20 flex items-center justify-center gap-2 active:scale-95 duration-200">
        <span class="material-symbols-outlined text-sm">add</span>
        Create New Event
      </button>
      <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-[#0077B6] transition-all"
        href="#">
        <span class="material-symbols-outlined">help</span>
        <span>Support</span>
      </a>
      <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-error transition-all"
        href="#">
        <span class="material-symbols-outlined">logout</span>
        <span>Logout</span>
      </a>
    </div>
  </aside>
  <main class="ml-64 min-h-screen flex flex-col">
    <!-- TopAppBar (Exact copy from SCREEN_7) -->
    <header
      class="w-full sticky top-0 z-40 bg-white/70 dark:bg-slate-900/70 backdrop-blur-md flex justify-between items-center px-8 py-3 shadow-[0_4px_24px_rgba(25,28,29,0.04)]">
      <div class="flex items-center gap-4 flex-1">
        <div class="relative w-full max-w-md">
          <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
          <input
            class="w-full pl-10 pr-4 py-2 bg-surface-container rounded-full border-none focus:ring-2 focus:ring-primary/20 text-sm"
            placeholder="Search events, organizers, or locations..." type="text" />
        </div>
      </div>
      <div class="flex items-center gap-6">
        <div class="flex items-center gap-2">
          <button
            class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-full transition-colors relative">
            <span class="material-symbols-outlined">notifications</span>
            <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
          </button>
          <button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-full transition-colors">
            <span class="material-symbols-outlined">settings</span>
          </button>
        </div>
        <div class="h-8 w-[1px] bg-outline-variant/30"></div>
        <div class="flex items-center gap-3">
          <div class="text-right hidden sm:block">
            <p class="text-sm font-bold text-on-background">Admin User</p>
            <p class="text-[10px] text-slate-500 font-medium">Super Admin</p>
          </div>
          <img alt="Admin Avatar" class="w-10 h-10 rounded-full object-cover border-2 border-white shadow-sm"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHTGKs8c_sM1561a5ar4dj1VwruQ-4QdNUVqRGb_0Okg8gca4Fb9YQ4hkBAB3m5EWLgFy4UJmJysUgEbhKdvIJGkTtD06MCB4xUS8IToTBiWj6VjpctoX1bFGSNYcw2_rOr-pLVsWLiW6nriLqpqrGu1Ukp0iMaIGasXkeSF1r4GymIA5zBOZxPuRo9NUnLPYCUJ-pJ-NJemtB3zZWA11bmQDD9yM-ppMzWGlgbs2FGoQw60lxSN4RnctLYOrTyRiYqkuLSAIjdCk" />
        </div>
      </div>
    </header>
    <!-- Main Content Area -->
    <div class="p-8 pb-32 max-w-7xl mx-auto w-full">
      <!-- Header Section -->
      <div class="flex items-center justify-between mb-10">
        <div class="flex items-center gap-4">
          <button
            class="w-10 h-10 rounded-xl bg-white shadow-sm flex items-center justify-center text-primary hover:bg-surface-container-low transition-colors">
            <span class="material-symbols-outlined">arrow_back</span>
          </button>
          <div>
            <h2 class="text-3xl font-['Plus_Jakarta_Sans'] font-extrabold tracking-tight text-on-background">Moderate
              Event: Summit Music Fest</h2>
            <p class="text-on-surface-variant font-medium flex items-center gap-2 mt-1">
              Reviewing submission from <span class="font-bold text-primary">Peak Productions</span>
            </p>
          </div>
        </div>
        <div
          class="flex items-center gap-3 px-4 py-2 bg-secondary-fixed text-on-secondary-fixed rounded-full text-[10px] font-bold uppercase tracking-widest shadow-sm">
          <span class="material-symbols-outlined text-sm"
            style="font-variation-settings: 'FILL' 1;">pending_actions</span>
          Pending Approval
        </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        <!-- Left Column: Editable Details -->
        <div class="lg:col-span-7 space-y-8">
          <section
            class="bg-surface-container-lowest rounded-3xl p-8 shadow-[0_4px_24px_rgba(25,28,29,0.02)] border border-white/50">
            <h3 class="text-xl font-bold text-on-surface flex items-center gap-3 mb-8">
              <span class="material-symbols-outlined text-primary">info</span>
              Event Core Details
            </h3>
            <div class="space-y-6">
              <!-- Title -->
              <div
                class="group flex items-start justify-between p-4 rounded-2xl hover:bg-surface-container-low transition-colors">
                <div class="flex-1">
                  <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">Title</p>
                  <input
                    class="w-full bg-transparent border-none p-0 text-lg font-semibold text-on-surface focus:ring-0"
                    type="text" value="Summit Music Fest 2024" />
                </div>
                <span
                  class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors cursor-pointer p-2">edit</span>
              </div>
              <!-- Description -->
              <div
                class="group flex items-start justify-between p-4 rounded-2xl hover:bg-surface-container-low transition-colors">
                <div class="flex-1">
                  <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">Description</p>
                  <textarea
                    class="w-full bg-transparent border-none p-0 text-on-surface-variant leading-relaxed focus:ring-0 resize-none h-20">A high-altitude acoustic music festival featuring independent artists from across the Pacific Northwest. Three days of music, mountain air, and local cuisine.</textarea>
                </div>
                <span
                  class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors cursor-pointer p-2">edit</span>
              </div>
              <!-- Category & Capacity -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="p-4 rounded-2xl bg-surface-container-low">
                  <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-2">Category</p>
                  <select
                    class="w-full bg-transparent border-none text-on-surface font-semibold focus:ring-0 p-0 cursor-pointer appearance-none">
                    <option selected="">Music &amp; Concerts</option>
                    <option>Outdoor &amp; Adventure</option>
                    <option>Food &amp; Drink</option>
                    <option>Art &amp; Culture</option>
                  </select>
                </div>
                <div
                  class="group flex items-start justify-between p-4 rounded-2xl hover:bg-surface-container-low transition-colors">
                  <div>
                    <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">Capacity</p>
                    <input class="w-full bg-transparent border-none p-0 font-semibold text-on-surface focus:ring-0"
                      type="text" value="1,500 Attendees" />
                  </div>
                  <span
                    class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors cursor-pointer p-1">edit</span>
                </div>
              </div>
              <!-- Date & Duration -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div
                  class="group flex items-start justify-between p-4 rounded-2xl hover:bg-surface-container-low transition-colors">
                  <div>
                    <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">Date</p>
                    <input class="w-full bg-transparent border-none p-0 font-semibold text-on-surface focus:ring-0"
                      type="text" value="Aug 15 - Aug 17, 2024" />
                  </div>
                  <span
                    class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors cursor-pointer p-1">edit</span>
                </div>
                <div
                  class="group flex items-start justify-between p-4 rounded-2xl hover:bg-surface-container-low transition-colors">
                  <div>
                    <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">Duration</p>
                    <input class="w-full bg-transparent border-none p-0 font-semibold text-on-surface focus:ring-0"
                      type="text" value="72 Hours" />
                  </div>
                  <span
                    class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors cursor-pointer p-1">edit</span>
                </div>
              </div>
              <!-- Address -->
              <div
                class="group flex items-start justify-between p-4 rounded-2xl hover:bg-surface-container-low transition-colors">
                <div class="flex-1">
                  <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">Address</p>
                  <input class="w-full bg-transparent border-none p-0 font-semibold text-on-surface focus:ring-0"
                    type="text" value="Skyline Ridge, Alpine Valley, Washington" />
                </div>
                <span
                  class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors cursor-pointer p-2">edit</span>
              </div>
            </div>
          </section>
        </div>
        <!-- Right Column: Media & Tickets -->
        <div class="lg:col-span-5 space-y-8">
          <!-- Media Preview -->
          <div class="rounded-3xl overflow-hidden relative group aspect-video shadow-lg ring-1 ring-black/5">
            <img alt="Summit Music Fest"
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZJ9hkgGf26n2KmTYtspWxJhTKJlEktp2xRJS87J8PA-M_HVREQyQf8Qv2W9sBCspyGgEw0Urb2aALjhQ1OHlN17pAYSdaJV2GEC0Smv-crEnQO3P-qABKtpsSeD4E0PLft4LkfWhw2JNZis2ftdiRv2QokZzBn7n8oLt3-wxYNutK375xcCGu7cDlILv2QznJQowzHNkFgdi00KV-aYEvVh5GisBCbYz4ajUt0eTQMX1s7KDYsakt6kEy2oySTJ3t4oka7Q9LYpA" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            <div class="absolute bottom-4 left-4">
              <span
                class="px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-white text-[10px] font-bold tracking-widest uppercase">Hero
                Image Preview</span>
            </div>
          </div>
          <!-- Ticket Tiers -->
          <section
            class="bg-surface-container-lowest rounded-3xl p-8 shadow-[0_4px_24px_rgba(25,28,29,0.02)] border border-white/50">
            <h3 class="text-xl font-bold text-on-surface flex items-center gap-3 mb-6">
              <span class="material-symbols-outlined text-primary">confirmation_number</span>
              Ticket Tiers
            </h3>
            <div class="space-y-4">
              <!-- Ticket Tier 1 -->
              <div class="p-5 rounded-2xl border border-outline-variant/20 bg-surface-container-low/30 relative">
                <div class="flex items-center justify-between mb-4">
                  <input class="bg-transparent border-none p-0 text-on-surface font-bold text-lg focus:ring-0 w-2/3"
                    type="text" value="Standard Pass" />
                  <div class="text-right">
                    <p class="text-[10px] font-bold text-outline uppercase tracking-widest">In Stock</p>
                    <p class="text-on-surface font-bold">1,200</p>
                  </div>
                </div>
                <div class="grid grid-cols-2 gap-4 pt-4 border-t border-outline-variant/10">
                  <div>
                    <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">Base Price</p>
                    <p class="text-on-surface font-bold text-xl">$50.00</p>
                  </div>
                  <div>
                    <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">% Increase</p>
                    <div class="flex items-center gap-2">
                      <input
                        class="w-16 bg-white border border-outline-variant/30 rounded-lg px-2 py-1 text-sm text-primary font-bold focus:ring-primary/20"
                        type="number" value="20" />
                      <span class="text-xs font-bold text-primary">→ $60.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Ticket Tier 2 -->
              <div class="p-5 rounded-2xl border border-outline-variant/20 bg-surface-container-low/30 relative">
                <div class="flex items-center justify-between mb-4">
                  <input class="bg-transparent border-none p-0 text-on-surface font-bold text-lg focus:ring-0 w-2/3"
                    type="text" value="VIP Backstage" />
                  <div class="text-right">
                    <p class="text-[10px] font-bold text-outline uppercase tracking-widest">In Stock</p>
                    <p class="text-on-surface font-bold">300</p>
                  </div>
                </div>
                <div class="grid grid-cols-2 gap-4 pt-4 border-t border-outline-variant/10">
                  <div>
                    <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">Base Price</p>
                    <p class="text-on-surface font-bold text-xl">$150.00</p>
                  </div>
                  <div>
                    <p class="text-[10px] font-bold text-outline uppercase tracking-widest mb-1">% Increase</p>
                    <div class="flex items-center gap-2">
                      <input
                        class="w-16 bg-white border border-outline-variant/30 rounded-lg px-2 py-1 text-sm text-primary font-bold focus:ring-primary/20"
                        type="number" value="15" />
                      <span class="text-xs font-bold text-primary">→ $172.50</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <!-- Sticky Bottom Action Bar -->
    <footer
      class="fixed bottom-0 right-0 left-64 bg-white/90 backdrop-blur-xl border-t border-outline-variant/20 px-12 py-6 flex items-center justify-between z-50 shadow-[0_-10px_40px_rgba(0,0,0,0.03)]">
      <div class="flex items-center gap-4">
        <span class="material-symbols-outlined text-outline">verified_user</span>
        <p class="text-sm text-outline font-medium">Finalizing this action will notify the event organizer.</p>
      </div>
      <div class="flex items-center gap-4">
        <button
          class="px-8 py-3 rounded-full border-2 border-error text-error font-bold text-sm tracking-wide hover:bg-error/5 transition-all active:scale-95">
          Reject Event
        </button>
        <button
          class="px-10 py-3.5 rounded-full bg-[#0077B6] text-white font-bold text-sm tracking-wide shadow-lg shadow-primary/20 hover:shadow-[#0077B6]/40 transition-all active:scale-95 flex items-center gap-2">
          <span class="material-symbols-outlined text-sm">check_circle</span>
          Accept Event
        </button>
      </div>
    </footer>
  </main>
</body>

</html>
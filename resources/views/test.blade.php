<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Wanderly Admin - Event Management</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
  <!-- SideNavBar -->
  <aside
    class="fixed left-0 top-0 h-screen w-64 z-50 bg-white dark:bg-slate-950 flex flex-col h-full p-6 border-r-0 font-['Inter'] font-medium text-sm">
    <div class="flex items-center gap-3 mb-10 px-2">
      <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center text-white">
        <span class="material-symbols-outlined" data-icon="explore">explore</span>
      </div>
      <div>
        <h1 class="font-['Plus_Jakarta_Sans'] font-bold text-[#0077B6] text-xl px-2">Wanderly</h1>
        <p class="text-[10px] text-slate-500 uppercase tracking-widest px-2">Admin Portal</p>
      </div>
    </div>
    <nav class="flex-1 space-y-1">
      <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-[#0077B6] hover:translate-x-1 transition-all scale-100 hover:scale-[1.02] duration-300"
        href="#">
        <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
        <span>Dashboard</span>
      </a>
      <a class="flex items-center gap-3 px-4 py-3 text-[#0077B6] bg-slate-50 dark:bg-slate-900 font-bold rounded-lg scale-100 hover:scale-[1.02] duration-300"
        href="#">
        <span class="material-symbols-outlined" data-icon="event_available">event_available</span>
        <span>Event Management</span>
      </a>
      <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-[#0077B6] hover:translate-x-1 transition-all scale-100 hover:scale-[1.02] duration-300"
        href="#">
        <span class="material-symbols-outlined" data-icon="group">group</span>
        <span>User Moderation</span>
      </a>
      <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-[#0077B6] hover:translate-x-1 transition-all scale-100 hover:scale-[1.02] duration-300"
        href="#">
        <span class="material-symbols-outlined" data-icon="insights">insights</span>
        <span>Analytics</span>
      </a>
      <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-[#0077B6] hover:translate-x-1 transition-all scale-100 hover:scale-[1.02] duration-300"
        href="#">
        <span class="material-symbols-outlined" data-icon="settings_ethernet">settings_ethernet</span>
        <span>System Logs</span>
      </a>
    </nav>
    <div class="mt-auto pt-6 space-y-1">
      <button
        class="w-full bg-[#0077B6] text-white py-3 rounded-xl font-bold mb-6 shadow-lg shadow-primary/20 flex items-center justify-center gap-2 active:scale-95 duration-200">
        <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
        Create New Event
      </button>
      <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-[#0077B6] transition-all"
        href="#">
        <span class="material-symbols-outlined" data-icon="help">help</span>
        <span>Support</span>
      </a>
      <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-error transition-all"
        href="#">
        <span class="material-symbols-outlined" data-icon="logout">logout</span>
        <span>Logout</span>
      </a>
    </div>
  </aside>
  <main class="ml-64 min-h-screen">
    <!-- TopAppBar -->
    <header
      class="w-full sticky top-0 z-40 bg-white/70 dark:bg-slate-900/70 backdrop-blur-md flex justify-between items-center px-8 py-3 w-full shadow-[0_4px_24px_rgba(25,28,29,0.04)]">
      <div class="flex items-center gap-4 flex-1">
        <div class="relative w-full max-w-md">
          <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"
            data-icon="search">search</span>
          <input
            class="w-full pl-10 pr-4 py-2 bg-surface-container rounded-full border-none focus:ring-2 focus:ring-primary/20 text-sm"
            placeholder="Search events, organizers, or locations..." type="text" />
        </div>
      </div>
      <div class="flex items-center gap-6">
        <div class="flex items-center gap-2">
          <button
            class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-full transition-colors relative">
            <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
            <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
          </button>
          <button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-full transition-colors">
            <span class="material-symbols-outlined" data-icon="settings">settings</span>
          </button>
        </div>
        <div class="h-8 w-[1px] bg-outline-variant/30"></div>
        <div class="flex items-center gap-3">
          <div class="text-right hidden sm:block">
            <p class="text-sm font-bold text-on-background">Admin User</p>
            <p class="text-[10px] text-slate-500 font-medium">Super Admin</p>
          </div>
          <img alt="Admin Avatar" class="w-10 h-10 rounded-full object-cover border-2 border-white shadow-sm"
            data-alt="professional headshot of a smiling male administrator in a light blue shirt with a clean minimalist office background"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHTGKs8c_sM1561a5ar4dj1VwruQ-4QdNUVqRGb_0Okg8gca4Fb9YQ4hkBAB3m5EWLgFy4UJmJysUgEbhKdvIJGkTtD06MCB4xUS8IToTBiWj6VjpctoX1bFGSNYcw2_rOr-pLVsWLiW6nriLqpqrGu1Ukp0iMaIGasXkeSF1r4GymIA5zBOZxPuRo9NUnLPYCUJ-pJ-NJemtB3zZWA11bmQDD9yM-ppMzWGlgbs2FGoQw60lxSN4RnctLYOrTyRiYqkuLSAIjdCk" />
        </div>
      </div>
    </header>
    <div class="p-8 max-w-7xl mx-auto">
      <!-- Header Section -->
      <div class="mb-10">
        <h2 class="text-3xl font-['Plus_Jakarta_Sans'] font-extrabold tracking-tight text-on-background mb-2">Event
          Management</h2>
        <p class="text-on-surface-variant font-medium">Review and moderate submitted events to maintain platform
          quality.</p>
      </div>
      <!-- Bento Stats Grid -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div
          class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_4px_24px_rgba(25,28,29,0.04)] border border-white/50">
          <div class="flex items-center justify-between mb-4">
            <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
              <span class="material-symbols-outlined" data-icon="calendar_today">calendar_today</span>
            </div>
            <span class="text-xs font-bold text-primary bg-primary-fixed px-2 py-1 rounded-full">+12%</span>
          </div>
          <p class="text-sm font-medium text-slate-500 mb-1">Total Events</p>
          <h3 class="text-2xl font-bold">1,284</h3>
        </div>
        <div
          class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_4px_24px_rgba(25,28,29,0.04)] border border-white/50 border-l-4 border-l-secondary-container">
          <div class="flex items-center justify-between mb-4">
            <div
              class="w-10 h-10 rounded-lg bg-secondary-container/10 flex items-center justify-center text-secondary-container">
              <span class="material-symbols-outlined" data-icon="pending_actions">pending_actions</span>
            </div>
            <span class="animate-pulse w-2 h-2 bg-secondary-container rounded-full"></span>
          </div>
          <p class="text-sm font-medium text-slate-500 mb-1">Pending Approval</p>
          <h3 class="text-2xl font-bold">42</h3>
        </div>
        <div
          class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_4px_24px_rgba(25,28,29,0.04)] border border-white/50">
          <div class="flex items-center justify-between mb-4">
            <div class="w-10 h-10 rounded-lg bg-green-500/10 flex items-center justify-center text-green-600">
              <span class="material-symbols-outlined" data-icon="verified">verified</span>
            </div>
          </div>
          <p class="text-sm font-medium text-slate-500 mb-1">Accepted</p>
          <h3 class="text-2xl font-bold">1,198</h3>
        </div>
        <div
          class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_4px_24px_rgba(25,28,29,0.04)] border border-white/50">
          <div class="flex items-center justify-between mb-4">
            <div class="w-10 h-10 rounded-lg bg-error/10 flex items-center justify-center text-error">
              <span class="material-symbols-outlined" data-icon="cancel">cancel</span>
            </div>
          </div>
          <p class="text-sm font-medium text-slate-500 mb-1">Rejected</p>
          <h3 class="text-2xl font-bold">44</h3>
        </div>
      </div>
      <!-- Filters Section -->
      <div class="bg-surface-container-low p-4 rounded-xl mb-6 flex flex-wrap items-center justify-between gap-4">
        <div class="flex items-center gap-2 p-1 bg-surface-container-highest rounded-lg">
          <button class="px-6 py-2 rounded-md bg-white shadow-sm text-sm font-bold text-primary">All</button>
          <button
            class="px-6 py-2 rounded-md text-sm font-medium text-slate-500 hover:bg-white/50 transition-colors">Pending</button>
          <button
            class="px-6 py-2 rounded-md text-sm font-medium text-slate-500 hover:bg-white/50 transition-colors">Accepted</button>
          <button
            class="px-6 py-2 rounded-md text-sm font-medium text-slate-500 hover:bg-white/50 transition-colors">Rejected</button>
        </div>
        <div class="flex items-center gap-3">
          <button
            class="flex items-center gap-2 px-4 py-2 bg-white rounded-lg border border-outline-variant/30 text-sm font-medium text-slate-600 hover:shadow-sm transition-all">
            <span class="material-symbols-outlined text-sm" data-icon="filter_list">filter_list</span>
            More Filters
          </button>
          <button
            class="flex items-center gap-2 px-4 py-2 bg-white rounded-lg border border-outline-variant/30 text-sm font-medium text-slate-600 hover:shadow-sm transition-all">
            <span class="material-symbols-outlined text-sm" data-icon="download">download</span>
            Export
          </button>
        </div>
      </div>
      <!-- Events Table -->
      <div class="bg-surface-container-lowest rounded-xl shadow-[0_4px_24px_rgba(25,28,29,0.04)] overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full text-left border-collapse">
            <thead>
              <tr class="bg-surface-container-low">
                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Event Name</th>
                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Organizer</th>
                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Date &amp; Time</th>
                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Location</th>
                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Status</th>
                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 text-right">Actions</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <!-- Row 1 -->
              <tr class="hover:bg-slate-50/50 transition-colors group">
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg overflow-hidden flex-shrink-0 bg-slate-200">
                      <img alt="Music Event" class="w-full h-full object-cover"
                        data-alt="energetic crowd with raised hands at a music festival with dramatic blue stage lighting and smoke effects"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBgtP5zBE958GNV0F9i0u8yGe7fPaVY3-OYY9IDmKAx9Nfz4l6VGbwu33oI2d-cwlV0EipBcLoRryoxT3ViNg2vgSkdjYfQmv9JzIZUtq2DebAFL6iAm1cA1PtH9xOrIbcp9oMOG9bxidBqoj16_kwGjvP6bistPKyYEq60smno97qC7r-W4eUUWR6mTXgZCZrWYDp1cUIj_dfMWqKvMQZ8JNkm8gLw9vuqMIVmNLau9LlBJy0AK3PI9WCBvkYsxJ16DwmdzSexyU" />
                    </div>
                    <div>
                      <p class="text-sm font-bold text-on-background">Summit Music Fest</p>
                      <p class="text-xs text-slate-500">Arts &amp; Culture</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <div
                      class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center text-[10px] font-bold text-primary">
                      EA</div>
                    <p class="text-sm text-on-surface-variant font-medium">Echo Agency</p>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-on-surface font-medium">Oct 12, 2024</p>
                  <p class="text-xs text-slate-500">07:00 PM - 11:30 PM</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-1 text-sm text-slate-600">
                    <span class="material-symbols-outlined text-xs" data-icon="location_on">location_on</span>
                    Denver, CO
                  </div>
                </td>
                <td class="px-6 py-4">
                  <span
                    class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed text-[10px] font-bold tracking-wider uppercase shadow-sm">
                    <span class="w-1.5 h-1.5 bg-secondary-container rounded-full animate-pulse"></span>
                    Pending
                  </span>
                </td>
                <td class="px-6 py-4 text-right">
                  <div class="flex items-center justify-end gap-2">
                    <button
                      class="px-3 py-1.5 text-xs font-bold text-primary hover:bg-primary/10 rounded-lg transition-all">View
                      Details</button>
                    <button
                      class="w-8 h-8 rounded-full bg-green-500/10 text-green-600 hover:bg-green-500 hover:text-white transition-all flex items-center justify-center">
                      <span class="material-symbols-outlined text-sm" data-icon="check">check</span>
                    </button>
                    <button
                      class="w-8 h-8 rounded-full bg-error/10 text-error hover:bg-error hover:text-white transition-all flex items-center justify-center">
                      <span class="material-symbols-outlined text-sm" data-icon="close">close</span>
                    </button>
                  </div>
                </td>
              </tr>
              <!-- Row 2 -->
              <tr class="hover:bg-slate-50/50 transition-colors group">
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg overflow-hidden flex-shrink-0 bg-slate-200">
                      <img alt="Food Event" class="w-full h-full object-cover"
                        data-alt="top-down shot of a beautifully arranged mediterranean spread with hummus, pita, and grilled vegetables on a rustic table"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbTfvRyYAtbR1ghzGMwtNmb6hhucgbBHFkj5kNMrmTCnL_YD6hWX0nBOdX8Ad3w1AQBWncKwT5uoNn7nJF-lCKjBW2LRIZGz3Fe6xcJo9Iw7txEPRnupQSihPEmQo60AfxKn4KI5wceOkY__gzTvWrJcArfvICbj2QCaM7XWIx9OoxddptTzfA31KGhKLcvlwOjLIfXe-JTev49iBxbwehZCmJRXzoBP7JYq5RJerN717b39kdXWenY-4Vb37VBNGP9YLcFkO3BwM" />
                    </div>
                    <div>
                      <p class="text-sm font-bold text-on-background">Mediterranean Food Tour</p>
                      <p class="text-xs text-slate-500">Food &amp; Drink</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <div
                      class="w-6 h-6 rounded-full bg-secondary/10 flex items-center justify-center text-[10px] font-bold text-secondary">
                      GC</div>
                    <p class="text-sm text-on-surface-variant font-medium">Gourmet Curators</p>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-on-surface font-medium">Nov 05, 2024</p>
                  <p class="text-xs text-slate-500">11:00 AM - 04:00 PM</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-1 text-sm text-slate-600">
                    <span class="material-symbols-outlined text-xs" data-icon="location_on">location_on</span>
                    Rome, Italy
                  </div>
                </td>
                <td class="px-6 py-4">
                  <span
                    class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-green-100 text-green-700 text-[10px] font-bold tracking-wider uppercase">
                    Accepted
                  </span>
                </td>
                <td class="px-6 py-4 text-right">
                  <div
                    class="flex items-center justify-end gap-2 opacity-60 group-hover:opacity-100 transition-opacity">
                    <button class="px-3 py-1.5 text-xs font-bold text-primary hover:bg-primary/10 rounded-lg">View
                      Details</button>
                    <button
                      class="w-8 h-8 rounded-full text-slate-400 hover:text-error hover:bg-error/10 transition-all flex items-center justify-center">
                      <span class="material-symbols-outlined text-sm" data-icon="delete">delete</span>
                    </button>
                  </div>
                </td>
              </tr>
              <!-- Row 3 -->
              <tr class="hover:bg-slate-50/50 transition-colors group">
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg overflow-hidden flex-shrink-0 bg-slate-200">
                      <img alt="Tech Event" class="w-full h-full object-cover"
                        data-alt="futuristic conference room with neon glowing accents and people looking at holographic displays in soft focus"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAUFr_2PStshcJWtaaeNJgcJsS3EkHlyCSX8nSBu81CvOyeAY2YhJvIkpLg_wtuTwRkBS1OZkdtD70qOUmuwGvSy8mLCO5Y5rkBOrb4GwwaNkd9mPhFMENyNixmKF3k2XW_UqzxF9M-vD0RuNOh_tt8_3Z9jIEOmXjqTePU6YBvCexCQdr3N1Fg3wSgoLfYPFKjdSd9VeHzIEv_ziArv0FdJ2x23-XaPSXZl3eNC0aAgTTJSxaCaulxzJZL8_dWDaFG3uIntgmJdCI" />
                    </div>
                    <div>
                      <p class="text-sm font-bold text-on-background">Future Tech Expo</p>
                      <p class="text-xs text-slate-500">Technology</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <div
                      class="w-6 h-6 rounded-full bg-tertiary/10 flex items-center justify-center text-[10px] font-bold text-tertiary">
                      NV</div>
                    <p class="text-sm text-on-surface-variant font-medium">NextVenture</p>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-on-surface font-medium">Dec 15, 2024</p>
                  <p class="text-xs text-slate-500">09:00 AM - 06:00 PM</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-1 text-sm text-slate-600">
                    <span class="material-symbols-outlined text-xs" data-icon="location_on">location_on</span>
                    San Francisco, CA
                  </div>
                </td>
                <td class="px-6 py-4">
                  <span
                    class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-error-container text-on-error-container text-[10px] font-bold tracking-wider uppercase">
                    Rejected
                  </span>
                </td>
                <td class="px-6 py-4 text-right">
                  <div
                    class="flex items-center justify-end gap-2 opacity-60 group-hover:opacity-100 transition-opacity">
                    <button
                      class="px-3 py-1.5 text-xs font-bold text-primary hover:bg-primary/10 rounded-lg">Appeal</button>
                    <button
                      class="w-8 h-8 rounded-full text-slate-400 hover:text-slate-600 hover:bg-slate-100 transition-all flex items-center justify-center">
                      <span class="material-symbols-outlined text-sm" data-icon="more_vert">more_vert</span>
                    </button>
                  </div>
                </td>
              </tr>
              <!-- Row 4 -->
              <tr class="hover:bg-slate-50/50 transition-colors group">
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg overflow-hidden flex-shrink-0 bg-slate-200">
                      <img alt="Wellness Event" class="w-full h-full object-cover"
                        data-alt="serene group yoga session in a bright airy studio with floor-to-ceiling windows overlooking a green forest"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB3p6l6A1vGFfj2UyNHX5vWkV45vdwZdMSl21DPD-EZBEa2NCXifa4jWFgzXGk_2pijKuxmztZwBM-PmHo1d3L3IhZC44HvT1OZL8wXKCBuv2X4h_dgIuVsy3wPMnEvkwdVP46xOHrp7Bjw2Rwba2MwlL8jjwk3JM0mO28PhvL2VagFxHg8thj36hmcjsa7mPY2qFBgBo9lmzNeY5OvH9YXnwNzEKxWZSvLvAW5bxIl2l9G0Lp9daDmJJRAgKfHuR1g0VKkkBMDZjk" />
                    </div>
                    <div>
                      <p class="text-sm font-bold text-on-background">Sunrise Yoga Retreat</p>
                      <p class="text-xs text-slate-500">Health &amp; Wellness</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <div
                      class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center text-[10px] font-bold text-primary">
                      SM</div>
                    <p class="text-sm text-on-surface-variant font-medium">Soul Movement</p>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-on-surface font-medium">Oct 20, 2024</p>
                  <p class="text-xs text-slate-500">06:00 AM - 09:00 AM</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-1 text-sm text-slate-600">
                    <span class="material-symbols-outlined text-xs" data-icon="location_on">location_on</span>
                    Bali, Indonesia
                  </div>
                </td>
                <td class="px-6 py-4">
                  <span
                    class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed text-[10px] font-bold tracking-wider uppercase shadow-sm">
                    <span class="w-1.5 h-1.5 bg-secondary-container rounded-full animate-pulse"></span>
                    Pending
                  </span>
                </td>
                <td class="px-6 py-4 text-right">
                  <div class="flex items-center justify-end gap-2">
                    <button
                      class="px-3 py-1.5 text-xs font-bold text-primary hover:bg-primary/10 rounded-lg transition-all">View
                      Details</button>
                    <button
                      class="w-8 h-8 rounded-full bg-green-500/10 text-green-600 hover:bg-green-500 hover:text-white transition-all flex items-center justify-center">
                      <span class="material-symbols-outlined text-sm" data-icon="check">check</span>
                    </button>
                    <button
                      class="w-8 h-8 rounded-full bg-error/10 text-error hover:bg-error hover:text-white transition-all flex items-center justify-center">
                      <span class="material-symbols-outlined text-sm" data-icon="close">close</span>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- Pagination -->
        <div class="px-6 py-4 bg-surface-container-low flex items-center justify-between">
          <p class="text-xs font-medium text-slate-500">Showing 1 to 10 of 42 results</p>
          <div class="flex items-center gap-2">
            <button
              class="w-8 h-8 rounded-lg flex items-center justify-center text-slate-400 hover:bg-white transition-all">
              <span class="material-symbols-outlined text-lg" data-icon="chevron_left">chevron_left</span>
            </button>
            <button
              class="w-8 h-8 rounded-lg flex items-center justify-center bg-primary text-white font-bold text-xs">1</button>
            <button
              class="w-8 h-8 rounded-lg flex items-center justify-center text-slate-600 hover:bg-white font-bold text-xs">2</button>
            <button
              class="w-8 h-8 rounded-lg flex items-center justify-center text-slate-600 hover:bg-white font-bold text-xs">3</button>
            <button
              class="w-8 h-8 rounded-lg flex items-center justify-center text-slate-400 hover:bg-white transition-all">
              <span class="material-symbols-outlined text-lg" data-icon="chevron_right">chevron_right</span>
            </button>
          </div>
        </div>
      </div>
      <!-- Moderation Tips / Floating Sidebar Card -->
      <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-[#0077B6]/5 p-8 rounded-2xl border border-[#0077B6]/10 relative overflow-hidden">
          <div class="relative z-10">
            <h4 class="text-xl font-bold text-[#0077B6] mb-3">Moderation Guidelines</h4>
            <ul class="space-y-3">
              <li class="flex items-start gap-3 text-sm text-slate-700">
                <span class="material-symbols-outlined text-primary text-lg"
                  data-icon="verified_user">verified_user</span>
                Verify organizer credentials for events with &gt;500 participants.
              </li>
              <li class="flex items-start gap-3 text-sm text-slate-700">
                <span class="material-symbols-outlined text-primary text-lg"
                  data-icon="image_not_supported">image_not_supported</span>
                Check image quality and ensure no copyrighted watermarks.
              </li>
              <li class="flex items-start gap-3 text-sm text-slate-700">
                <span class="material-symbols-outlined text-primary text-lg" data-icon="policy">policy</span>
                Ensure event descriptions comply with our community safety standards.
              </li>
            </ul>
          </div>
          <span class="material-symbols-outlined absolute -bottom-6 -right-6 text-9xl text-[#0077B6]/10"
            data-icon="gavel">gavel</span>
        </div>
        <div class="bg-surface-container-highest p-8 rounded-2xl border border-white/40 flex flex-col justify-center">
          <h4 class="text-xl font-bold text-on-surface mb-2">Need Help?</h4>
          <p class="text-sm text-on-surface-variant mb-6">If you encounter an event that requires legal review or
            higher-level approval, please escalate to the policy team.</p>
          <button
            class="w-fit px-6 py-2.5 bg-white rounded-full text-sm font-bold shadow-sm hover:shadow-md transition-all flex items-center gap-2">
            Contact Policy Team
            <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
          </button>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
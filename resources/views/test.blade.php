<!DOCTYPE html>

<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Wanderly Explorer Admin - Event Analytics</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "surface-container-lowest": "#ffffff",
            "on-secondary-fixed": "#281800",
            "surface-container-low": "#f3f4f5",
            "inverse-primary": "#94ccff",
            "surface-container": "#edeeef",
            "on-primary": "#ffffff",
            "error-container": "#ffdad6",
            "surface-dim": "#d9dadb",
            "tertiary": "#006176",
            "inverse-on-surface": "#f0f1f2",
            "on-tertiary-fixed-variant": "#004e5f",
            "on-primary-fixed": "#001d32",
            "background": "#f8f9fa",
            "tertiary-fixed": "#b3ebff",
            "outline": "#707881",
            "error": "#ba1a1a",
            "secondary": "#7f5600",
            "primary-container": "#0077b6",
            "surface-variant": "#e1e3e4",
            "on-primary-fixed-variant": "#004b74",
            "secondary-fixed-dim": "#ffba3f",
            "surface-container-high": "#e7e8e9",
            "primary-fixed-dim": "#94ccff",
            "surface-bright": "#f8f9fa",
            "on-primary-container": "#f3f7ff",
            "secondary-fixed": "#ffdeae",
            "on-secondary-container": "#664500",
            "surface-container-highest": "#e1e3e4",
            "on-tertiary": "#ffffff",
            "primary": "#005d90",
            "on-secondary-fixed-variant": "#604100",
            "on-error": "#ffffff",
            "on-background": "#191c1d",
            "on-tertiary-container": "#ecf9ff",
            "inverse-surface": "#2e3132",
            "on-tertiary-fixed": "#001f27",
            "on-surface-variant": "#404850",
            "tertiary-container": "#007c95",
            "primary-fixed": "#cde5ff",
            "on-surface": "#191c1d",
            "surface-tint": "#006399",
            "outline-variant": "#bfc7d1",
            "on-secondary": "#ffffff",
            "surface": "#f8f9fa",
            "on-error-container": "#93000a",
            "secondary-container": "#f9ad00",
            "tertiary-fixed-dim": "#4cd6fb"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          "fontFamily": {
            "headline": ["Plus Jakarta Sans"],
            "display": ["Plus Jakarta Sans"],
            "body": ["Inter"],
            "label": ["Inter"]
          }
        },
      },
    }
  </script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }

    .headline-lg {
      font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
  </style>
</head>

<body class="bg-background text-on-background min-h-screen flex flex-col lg:flex-row">
  <!-- SideNavBar (Desktop) -->
  <aside
    class="h-screen w-64 hidden lg:flex flex-col sticky top-0 bg-[#f8f9fa] dark:bg-slate-950 flex flex-col gap-2 p-4 border-r border-slate-200 dark:border-slate-800">
    <div class="mb-8 px-2">
      <h1 class="text-lg font-bold text-[#0077B6]">The Curator</h1>
      <p class="text-xs text-slate-500 font-medium">System Oversight</p>
    </div>
    <nav class="flex-1 space-y-1">
      <a class="bg-white dark:bg-slate-900 text-[#0077B6] font-bold rounded-lg shadow-sm flex items-center gap-3 px-3 py-2.5 transition-all hover:translate-x-1 duration-150"
        href="#">
        <span class="material-symbols-outlined">dashboard</span>
        <span class="font-['Plus_Jakarta_Sans'] text-sm font-medium">Dashboard</span>
      </a>
      <a class="text-slate-600 dark:text-slate-400 flex items-center gap-3 px-3 py-2.5 hover:bg-[#e7e8e9] dark:hover:bg-slate-800 transition-all hover:translate-x-1 duration-150"
        href="#">
        <span class="material-symbols-outlined">confirmation_number</span>
        <span class="font-['Plus_Jakarta_Sans'] text-sm font-medium">Sales</span>
      </a>
      <a class="text-slate-600 dark:text-slate-400 flex items-center gap-3 px-3 py-2.5 hover:bg-[#e7e8e9] dark:hover:bg-slate-800 transition-all hover:translate-x-1 duration-150"
        href="#">
        <span class="material-symbols-outlined">event_available</span>
        <span class="font-['Plus_Jakarta_Sans'] text-sm font-medium">Reservations</span>
      </a>
      <a class="text-slate-600 dark:text-slate-400 flex items-center gap-3 px-3 py-2.5 hover:bg-[#e7e8e9] dark:hover:bg-slate-800 transition-all hover:translate-x-1 duration-150"
        href="#">
        <span class="material-symbols-outlined">payments</span>
        <span class="font-['Plus_Jakarta_Sans'] text-sm font-medium">Revenue</span>
      </a>
      <a class="text-slate-600 dark:text-slate-400 flex items-center gap-3 px-3 py-2.5 hover:bg-[#e7e8e9] dark:hover:bg-slate-800 transition-all hover:translate-x-1 duration-150"
        href="#">
        <span class="material-symbols-outlined">analytics</span>
        <span class="font-['Plus_Jakarta_Sans'] text-sm font-medium">Reports</span>
      </a>
    </nav>
    <div class="mt-auto border-t border-slate-200 dark:border-slate-800 pt-4 px-2">
      <button
        class="w-full bg-[#0077b6] text-white py-2.5 rounded-xl font-semibold text-sm hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
        <span class="material-symbols-outlined text-sm">add</span>
        New Report
      </button>
    </div>
  </aside>
  <!-- TopAppBar -->
  <header
    class="fixed top-0 w-full z-50 bg-white/70 dark:bg-slate-900/70 backdrop-blur-md shadow-sm dark:shadow-none lg:pl-64">
    <div class="flex justify-between items-center px-6 py-4 w-full">
      <div class="flex items-center gap-4">
        <span class="text-xl font-extrabold text-[#0077B6] dark:text-[#0096C7]">Explorer Admin</span>
        <div class="hidden md:flex items-center bg-slate-100 dark:bg-slate-800 rounded-full px-4 py-1.5 gap-2">
          <span class="material-symbols-outlined text-slate-400 text-sm">search</span>
          <input class="bg-transparent border-none text-sm focus:ring-0 w-48 text-on-background"
            placeholder="Search analytics..." type="text" />
        </div>
      </div>
      <div class="flex items-center gap-4">
        <button
          class="p-2 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-full transition-colors active:scale-95 duration-200">
          <span class="material-symbols-outlined">notifications</span>
        </button>
        <button
          class="p-2 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-full transition-colors active:scale-95 duration-200">
          <span class="material-symbols-outlined">settings</span>
        </button>
        <div class="h-8 w-8 rounded-full bg-slate-200 overflow-hidden ml-2">
          <img alt="Administrator Profile" class="w-full h-full object-cover"
            data-alt="professional male administrator portrait in corporate setting with soft daylight and bokeh office background"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAezO9LYDeZ90yqFVQUlLh2YFZA4lT077jggeSH23XBfPnP1jguPPaQqU-eKeOX3loxP2Zj5PqjMcI4Jlqe2TYcbcPk3fOi5VPdDIkiT17DfKwXv7dq31AoOgbY1tR0v9LJ_tbqA4TqV5sDj2VNc68-xs5gVA9GsT-S5u6-64BUcfPlUBwEULQSQ8Adn7DysJu0Uxj4_1lmWdReKaLHuyi6V1yA6mNegbFXBz2O4H4d7fqq4in36UV-3E1628YkTd203w6G1cS6ag" />
        </div>
      </div>
    </div>
  </header>
  <!-- Main Content Canvas -->
  <main class="flex-1 pt-24 pb-20 lg:pb-8 px-6 lg:px-10 overflow-y-auto bg-background">
    <!-- Welcome Header -->
    <div class="mb-8">
      <h2 class="text-2xl font-bold font-['Plus_Jakarta_Sans'] tracking-tight text-on-background">Event Analytics
        Dashboard</h2>
      <p class="text-slate-500 text-sm">Reviewing Wanderly's performance for Q3 2023</p>
    </div>
    <!-- Top Summary Row -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
      <!-- Card 1 -->
      <div
        class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-transparent flex items-center gap-5">
        <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
          <span class="material-symbols-outlined">confirmation_number</span>
        </div>
        <div>
          <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Total Tickets Sold</p>
          <div class="flex items-baseline gap-2">
            <span class="text-2xl font-bold text-on-background">12,450</span>
            <span class="text-xs font-bold text-green-600">+12%</span>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div
        class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-transparent flex items-center gap-5">
        <div class="h-12 w-12 rounded-full bg-secondary/10 flex items-center justify-center text-secondary">
          <span class="material-symbols-outlined">event_available</span>
        </div>
        <div>
          <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Total Reservations</p>
          <div class="flex items-baseline gap-2">
            <span class="text-2xl font-bold text-on-background">8,920</span>
            <span class="text-xs font-bold text-green-600">+8%</span>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div
        class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-transparent flex items-center gap-5">
        <div class="h-12 w-12 rounded-full bg-tertiary/10 flex items-center justify-center text-tertiary">
          <span class="material-symbols-outlined">payments</span>
        </div>
        <div>
          <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Total Revenue</p>
          <div class="flex items-baseline gap-2">
            <span class="text-2xl font-bold text-on-background">$245,600</span>
            <span class="text-xs font-bold text-green-600">+15%</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Main Analytics Grid -->
    <div class="grid grid-cols-12 gap-8">
      <!-- Line Chart: Tickets Over Time -->
      <div
        class="col-span-12 lg:col-span-8 bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-transparent">
        <div class="flex justify-between items-center mb-6">
          <h3 class="font-bold font-['Plus_Jakarta_Sans'] text-lg">Ticket Reservations Over Time</h3>
          <select class="text-xs border-none bg-surface-container-low rounded-lg px-3 py-1 font-medium focus:ring-0">
            <option>Last 6 Months</option>
            <option>Year to Date</option>
          </select>
        </div>
        <div class="h-72 w-full">
          <canvas id="reservationsChart"></canvas>
        </div>
      </div>
      <!-- Doughnut Chart: Revenue Breakdown -->
      <div
        class="col-span-12 lg:col-span-4 bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-transparent">
        <h3 class="font-bold font-['Plus_Jakarta_Sans'] text-lg mb-6 text-center">Revenue Breakdown</h3>
        <div class="h-64 flex items-center justify-center">
          <canvas id="revenueBreakdownChart"></canvas>
        </div>
        <div class="mt-6 space-y-3">
          <div class="flex justify-between items-center">
            <div class="flex items-center gap-2">
              <span class="w-3 h-3 rounded-full bg-[#0077b6]"></span>
              <span class="text-sm font-medium text-slate-600">Ticket Revenue</span>
            </div>
            <span class="text-sm font-bold">$184,200</span>
          </div>
          <div class="flex justify-between items-center">
            <div class="flex items-center gap-2">
              <span class="w-3 h-3 rounded-full bg-[#f9ad00]"></span>
              <span class="text-sm font-medium text-slate-600">Profit Revenue</span>
            </div>
            <span class="text-sm font-bold">$61,400</span>
          </div>
        </div>
      </div>
      <!-- Bar Chart: Revenue from Events -->
      <div class="col-span-12 bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-transparent">
        <div class="flex justify-between items-center mb-8">
          <div>
            <h3 class="font-bold font-['Plus_Jakarta_Sans'] text-lg">Revenue from Events</h3>
            <p class="text-xs text-slate-400">Comparing top performing curator experiences</p>
          </div>
          <button class="text-sm text-primary font-semibold hover:underline">View Detailed Rankings</button>
        </div>
        <div class="h-80 w-full">
          <canvas id="eventRevenueChart"></canvas>
        </div>
      </div>
    </div>
    <!-- Featured Experiences (Asymmetric Bento Style) -->
    <div class="mt-10 grid grid-cols-1 md:grid-cols-4 gap-6">
      <div class="md:col-span-2 relative group overflow-hidden rounded-xl h-48">
        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
          data-alt="vibrant nightlife scene at a modern music festival with purple and blue stage lights and silhouette of a cheering crowd"
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYU0MvQDbHWHmCHqD3AkPhsS8P8HCj_t-WkWjKORQwW--5hGiYna1lT-H5r4l1-9ShiCFAWfcMrDkfL5Q_CeG_S88x6V9KQfINUCyH9Zgfo5fGBbd4tgdlCBGQ_Bvk6M9MoWzzQyiCjIA0XQEuF4t6gKIbKXwg1dLODUg-X3y9ecIvW4UgtHgKYf-hoHC_01h7e5DYgnjDWbGGYfUn6ly3iMkF2tjAZ0smKTpkNrR8wAQGSwxrIFEr3ZFb5ATnVv_fl8AVTp6ZMmM" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-5">
          <span
            class="bg-primary/80 backdrop-blur-md text-white text-[10px] uppercase font-bold tracking-widest px-2 py-1 rounded w-max mb-2">Top
            Performer</span>
          <h4 class="text-white font-bold text-lg">Neon Horizon Festival</h4>
        </div>
      </div>
      <div class="relative group overflow-hidden rounded-xl h-48">
        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
          data-alt="elegant speakeasy cocktail bar with dark wood textures and amber lighting focusing on a crystal glass drink"
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLTZvhdkh3EWONra3XOoeyStoOx7MntStvTgYnmQIsof2HMfqqbSRNdfO_pwyvTk-5HzkoP49WIYlTYkIAPLPDfJ53pj7tgVFwXFPTC-J3B2zJZEGm3zcnwvZS_Y5gqJOV7wOTXFNjxzE8UcVGZ_NT3n_nlxTkbluQzUKjWibmV4JPSstykaErBt8jEhflv-EwD89uqEti7S10097ixnVsU5EzwfewIFticJtH0Y_wieMLKyiHvvL3e4axVK-03nuv8Y92Xhl4Zjg" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-5">
          <h4 class="text-white font-bold text-sm">The Hidden Cask</h4>
        </div>
      </div>
      <div class="relative group overflow-hidden rounded-xl h-48">
        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
          data-alt="zen minimalist art gallery space with white walls and a large contemporary painting under focused spotlight"
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuAUuuw7YzM73nD_M9y-oDgt6DiI-FV4OviapoHasenuIGbboB-uAVs5BeKvfCn2GKhMG75-vQSXPcdMq5vwESnTUVJUUC7HwN-Dujjl2McMjTRbHEmruKnesdYgZog2mBcNYlUclAO7YLDkbx7qGdqrV6K9znI9c6j2YiS6si72cmHzDXvOH2iazl5q5t3T50NQbubNkgVXClRvyzBUToSa06b4tvRQw578YQELvbD14zuMqAqxkncSH9RKEyYBuHigPuKQWoB6aa0" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-5">
          <h4 class="text-white font-bold text-sm">Elysium Gallery Tour</h4>
        </div>
      </div>
    </div>
  </main>
  <!-- BottomNavBar (Mobile) -->
  <nav
    class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 py-3 pb-safe bg-white/80 dark:bg-slate-900/80 backdrop-blur-lg lg:hidden rounded-t-3xl shadow-[0_-4px_20px_rgba(0,0,0,0.05)] border-t border-slate-100 dark:border-slate-800">
    <a class="flex flex-col items-center text-[#0077B6] dark:text-[#0096C7] font-bold active:scale-90 transition-transform"
      href="#">
      <span class="material-symbols-outlined">home</span>
      <span class="font-['Plus_Jakarta_Sans'] text-[10px] uppercase tracking-wider">Home</span>
    </a>
    <a class="flex flex-col items-center text-slate-400 dark:text-slate-500 active:scale-90 transition-transform"
      href="#">
      <span class="material-symbols-outlined">sell</span>
      <span class="font-['Plus_Jakarta_Sans'] text-[10px] uppercase tracking-wider">Sales</span>
    </a>
    <a class="flex flex-col items-center text-slate-400 dark:text-slate-500 active:scale-90 transition-transform"
      href="#">
      <span class="material-symbols-outlined">calendar_month</span>
      <span class="font-['Plus_Jakarta_Sans'] text-[10px] uppercase tracking-wider">Bookings</span>
    </a>
    <a class="flex flex-col items-center text-slate-400 dark:text-slate-500 active:scale-90 transition-transform"
      href="#">
      <span class="material-symbols-outlined">person</span>
      <span class="font-['Plus_Jakarta_Sans'] text-[10px] uppercase tracking-wider">Profile</span>
    </a>
  </nav>
  <script>
    // Charts Implementation

    // Ticket Reservations Line Chart
    const resCtx = document.getElementById('reservationsChart').getContext('2d');
    const gradient = resCtx.createLinearGradient(0, 0, 0, 300);
    gradient.addColorStop(0, 'rgba(0, 93, 144, 0.2)');
    gradient.addColorStop(1, 'rgba(0, 93, 144, 0)');

    new Chart(resCtx, {
      type: 'line',
      data: {
        labels: ['Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        datasets: [{
          label: 'Reservations',
          data: [1200, 1900, 1700, 2500, 3200, 2800],
          borderColor: '#005d90',
          borderWidth: 3,
          tension: 0.4,
          fill: true,
          backgroundColor: gradient,
          pointBackgroundColor: '#005d90',
          pointRadius: 0,
          pointHoverRadius: 6
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
          x: { grid: { display: false }, ticks: { color: '#94a3b8', font: { family: 'Inter' } } },
          y: { border: { display: false }, grid: { color: '#f1f5f9' }, ticks: { color: '#94a3b8', font: { family: 'Inter' } } }
        }
      }
    });

    // Revenue Breakdown Doughnut
    const revCtx = document.getElementById('revenueBreakdownChart').getContext('2d');
    new Chart(revCtx, {
      type: 'doughnut',
      data: {
        labels: ['Tickets', 'Profit'],
        datasets: [{
          data: [75, 25],
          backgroundColor: ['#0077b6', '#f9ad00'],
          borderWidth: 0,
          hoverOffset: 10
        }]
      },
      options: {
        cutout: '75%',
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } }
      }
    });

    // Revenue from Events Bar Chart
    const eventCtx = document.getElementById('eventRevenueChart').getContext('2d');
    new Chart(eventCtx, {
      type: 'bar',
      data: {
        labels: ['Neon Horizon', 'Hidden Cask', 'Gallery Tour', 'Summit Hike', 'Coastal Sail', 'Jazz Night'],
        datasets: [{
          label: 'Revenue ($)',
          data: [65000, 42000, 38000, 29000, 51000, 20000],
          backgroundColor: [
            '#005d90', '#0077b6', '#006176', '#7f5600', '#0096c7', '#f9ad00'
          ],
          borderRadius: 8,
          barThickness: 40
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
          x: { grid: { display: false }, ticks: { color: '#94a3b8' } },
          y: { border: { display: false }, grid: { color: '#f1f5f9' }, ticks: { color: '#94a3b8' } }
        }
      }
    });
  </script>
</body>

</html>
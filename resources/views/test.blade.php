<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Wanderly Organizer Dashboard - Explorer Curator</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
                        "primary-fixed-dim": "#94ccff",
                        "surface-container-low": "#f3f4f5",
                        "surface-bright": "#f8f9fa",
                        "tertiary": "#006176",
                        "error": "#ba1a1a",
                        "secondary": "#7f5600",
                        "on-primary": "#ffffff",
                        "surface-container-high": "#e7e8e9",
                        "outline-variant": "#bfc7d1",
                        "inverse-primary": "#94ccff",
                        "on-primary-container": "#f3f7ff",
                        "surface": "#f8f9fa",
                        "surface-dim": "#d9dadb",
                        "surface-container-highest": "#e1e3e4",
                        "on-primary-fixed": "#001d32",
                        "tertiary-fixed-dim": "#4cd6fb",
                        "primary-fixed": "#cde5ff",
                        "inverse-surface": "#2e3132",
                        "inverse-on-surface": "#f0f1f2",
                        "surface-container-lowest": "#ffffff",
                        "on-surface-variant": "#404850",
                        "on-secondary-fixed-variant": "#604100",
                        "on-tertiary-fixed-variant": "#004e5f",
                        "on-error": "#ffffff",
                        "secondary-fixed": "#ffdeae",
                        "surface-variant": "#e1e3e4",
                        "on-surface": "#191c1d",
                        "tertiary-container": "#007c95",
                        "on-tertiary-fixed": "#001f27",
                        "surface-tint": "#006399",
                        "outline": "#707881",
                        "on-secondary-container": "#664500",
                        "on-primary-fixed-variant": "#004b74",
                        "on-error-container": "#93000a",
                        "on-tertiary-container": "#ecf9ff",
                        "secondary-fixed-dim": "#ffba3f",
                        "surface-container": "#edeeef",
                        "primary": "#005d90",
                        "background": "#f8f9fa",
                        "error-container": "#ffdad6",
                        "on-secondary": "#ffffff",
                        "on-background": "#191c1d",
                        "tertiary-fixed": "#b3ebff",
                        "on-secondary-fixed": "#281800",
                        "on-tertiary": "#ffffff",
                        "secondary-container": "#f9ad00",
                        "primary-container": "#0077b6"
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
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        .headline {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background text-on-background antialiased overflow-x-hidden">
    <!-- Sidebar Navigation -->
    <aside
        class="h-screen w-64 fixed left-0 top-0 bg-slate-50 flex flex-col py-8 justify-between z-50 font-['Plus_Jakarta_Sans'] font-medium text-sm">
        <div class="px-6">
            <div class="text-2xl font-black text-sky-900 mb-8">Event Hub</div>
            <nav class="space-y-1">
                <!-- Dashboard Active -->
                <a class="flex items-center gap-3 px-6 py-4 w-full text-sky-700 border-r-4 border-sky-600 bg-white font-bold transition-all duration-200 ease-in-out"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                    Dashboard
                </a>
                <a class="flex items-center gap-3 px-6 py-4 w-full text-slate-500 hover:bg-slate-100 transition-all duration-200 ease-in-out"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="event_available">event_available</span>
                    My Events
                </a>
                <a class="flex items-center gap-3 px-6 py-4 w-full text-slate-500 hover:bg-slate-100 transition-all duration-200 ease-in-out"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="leaderboard">leaderboard</span>
                    Statistics
                </a>
            </nav>
        </div>
        <div class="px-6 border-t border-slate-200 pt-6">
            <nav class="space-y-1">
                <a class="flex items-center gap-3 px-6 py-4 w-full text-slate-500 hover:bg-slate-100 transition-all duration-200 ease-in-out"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="help_outline">help_outline</span>
                    Help
                </a>
                <a class="flex items-center gap-3 px-6 py-4 w-full text-slate-500 hover:bg-slate-100 transition-all duration-200 ease-in-out"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="logout">logout</span>
                    Logout
                </a>
            </nav>
        </div>
    </aside>
    <!-- Main Content Canvas -->
    <main class="ml-64 min-h-screen">
        <!-- TopAppBar -->
        <header
            class="w-full sticky top-0 z-40 bg-white/70 backdrop-blur-md shadow-sm flex justify-between items-center px-8 py-4">
            <div class="flex items-center gap-4">
                <div class="font-['Plus_Jakarta_Sans'] tracking-tight text-xl font-bold text-sky-800">Explorer Curator
                </div>
            </div>
            <div class="flex items-center gap-6">
                <div class="relative hidden lg:block">
                    <input
                        class="bg-surface-container-low border-none rounded-full px-5 py-2 w-64 text-sm focus:ring-2 focus:ring-primary/20"
                        placeholder="Search experiences..." type="text" />
                </div>
                <div class="flex items-center gap-4">
                    <span
                        class="material-symbols-outlined text-slate-500 cursor-pointer hover:text-primary transition-colors"
                        data-icon="notifications">notifications</span>
                    <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-primary/10">
                        <img alt="Organizer profile photo"
                            data-alt="professional portrait of a young male creative director with glasses smiling in a sunlit modern office space"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDwtopJVUrmTbLIcL0Agig5EPCa06EJ5JeXR-HBBOInEH7FHmCUFwIrjpZFEXJVfB2K91m7ibwYRfTg3v9CaKCB9IDfwRV2BhH2S7khRPC_vzNtRpt_scuMrfW6RZeV3CXNVKiEqieNXOWCcSra7NhYMpP9W3bRfBDAcvq7-qo6l_ccT2ZW57v16rGL8EUsfZhizlgQdEUqOw6fcdibqC11DIzj2lLoEEpcMKFOCc3GYzu6oWTmLBtl_YIeJBH-M4U_01Nb-T_siJ0" />
                    </div>
                </div>
            </div>
        </header>
        <section class="p-8 max-w-7xl mx-auto space-y-10">
            <!-- Welcome Header -->
            <div class="flex flex-col md:flex-row justify-between items-end gap-4">
                <div>
                    <h1 class="text-4xl font-extrabold headline tracking-tight text-on-surface">Welcome back, Alex.</h1>
                    <p class="text-on-surface-variant mt-2 text-lg font-light">Your curated experiences are reaching new
                        heights today.</p>
                </div>
                <button
                    class="bg-gradient-to-br from-primary to-primary-container text-on-primary px-6 py-3 rounded-full font-semibold shadow-lg shadow-primary/20 hover:scale-105 active:scale-95 transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                    Create New Event
                </button>
            </div>
            <!-- Performance Row (Status Badges Refined) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Total -->
                <div
                    class="bg-surface-container-lowest p-6 rounded-xl border-l-4 border-primary transition-all hover:shadow-md">
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
                <div
                    class="bg-surface-container-lowest p-6 rounded-xl border-l-4 border-tertiary transition-all hover:shadow-md">
                    <div class="flex items-center justify-between mb-4">
                        <span
                            class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Approved</span>
                        <span class="material-symbols-outlined text-tertiary"
                            data-icon="check_circle">check_circle</span>
                    </div>
                    <div class="text-3xl font-bold headline">18</div>
                </div>
                <!-- Rejected -->
                <div
                    class="bg-surface-container-lowest p-6 rounded-xl border-l-4 border-error transition-all hover:shadow-md">
                    <div class="flex items-center justify-between mb-4">
                        <span
                            class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Rejected</span>
                        <span class="material-symbols-outlined text-error"
                            data-icon="error_outline">error_outline</span>
                    </div>
                    <div class="text-3xl font-bold headline">2</div>
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
                        <span class="text-4xl font-extrabold headline text-primary">$42,850</span>
                        <span class="text-green-600 text-sm font-bold flex items-center">
                            <span class="material-symbols-outlined text-sm" data-icon="trending_up">trending_up</span>
                            12%
                        </span>
                    </div>
                </div>
                <div class="bg-surface-container-low p-8 rounded-2xl relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="material-symbols-outlined text-6xl" data-icon="equalizer">equalizer</span>
                    </div>
                    <h3 class="text-sm font-medium text-on-surface-variant">Avg. Revenue per Event</h3>
                    <div class="mt-4 flex items-baseline gap-2">
                        <span class="text-4xl font-extrabold headline text-secondary">$2,142</span>
                    </div>
                </div>
                <div class="bg-surface-container-low p-8 rounded-2xl relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="material-symbols-outlined text-6xl"
                            data-icon="confirmation_number">confirmation_number</span>
                    </div>
                    <h3 class="text-sm font-medium text-on-surface-variant">Total Tickets Sold</h3>
                    <div class="mt-4 flex items-baseline gap-2">
                        <span class="text-4xl font-extrabold headline text-tertiary">1,248</span>
                        <span class="text-on-surface-variant text-sm">Tickets</span>
                    </div>
                </div>
            </div>
            <!-- Visual Insight Section -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Most Popular Event Card -->
                <div
                    class="lg:col-span-8 bg-surface-container-lowest rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-500">
                    <div class="h-80 w-full relative">
                        <img alt="Santorini Sunset Sailing" class="w-full h-full object-cover"
                            data-alt="breath-taking aerial view of a luxury catamaran sailing through turquoise Aegean waters near Santorini's white caldera cliffs at golden hour"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBWWmpZtk8XdCEr-qdjWf5gxvotY_E8KJBUFcRiliuRZliOTy7LyJedsX_-4ILMZgxQjO2il6FbovlS-ISxZp-g9L8shIlANR7FQPIjbnNQDYfjxQQXJzAyW0GY6Ym15uEH_zLwQRnHMR1hWx01C3nTBjdLjCPeps9FvQq1Q73OvFtKRl0OrQtLgoBRUswWR6zLAFKtphgzRE4ZyTFmrcwxHnqsWTpP2Cs34wGoIEhnerzKCk-lFAzMTsiJIXfgXoxqIclkO-MlrTw" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-on-surface/80 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-6 left-8 right-8 flex justify-between items-end">
                            <div>
                                <span
                                    class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-xs font-bold tracking-widest uppercase mb-3 inline-block">Top
                                    Performer</span>
                                <h2 class="text-3xl font-bold text-white headline">Santorini Sunset Sailing</h2>
                                <p class="text-white/80 flex items-center gap-1 text-sm mt-1">
                                    <span class="material-symbols-outlined text-sm"
                                        data-icon="location_on">location_on</span> Oia, Greece
                                </p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 text-white border border-white/20">
                                <div class="text-xs uppercase opacity-70">Occupancy</div>
                                <div class="text-2xl font-black">98%</div>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 flex flex-wrap gap-12">
                        <div class="space-y-1">
                            <div class="text-xs text-on-surface-variant font-bold uppercase tracking-tight">Total
                                Bookings</div>
                            <div class="text-2xl font-bold headline">482</div>
                        </div>
                        <div class="space-y-1">
                            <div class="text-xs text-on-surface-variant font-bold uppercase tracking-tight">Net Income
                            </div>
                            <div class="text-2xl font-bold headline text-primary">$18,400</div>
                        </div>
                        <div class="space-y-1">
                            <div class="text-xs text-on-surface-variant font-bold uppercase tracking-tight">Avg. Rating
                            </div>
                            <div class="text-2xl font-bold headline flex items-center gap-2">
                                4.9 <span class="material-symbols-outlined text-secondary-container" data-icon="star"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- AI Curator Insight Panel -->
                <div class="lg:col-span-4 flex flex-col gap-6">
                    <div
                        class="bg-sky-900 text-white p-8 rounded-3xl h-full flex flex-col justify-between relative overflow-hidden">
                        <div class="relative z-10">
                            <div class="flex items-center gap-2 text-sky-300 mb-6">
                                <span class="material-symbols-outlined" data-icon="auto_awesome">auto_awesome</span>
                                <span class="font-bold text-sm tracking-widest uppercase">Curator Insight</span>
                            </div>
                            <h3 class="text-2xl font-bold headline mb-4">Optimize your Morning Sails</h3>
                            <p class="text-sky-100/70 leading-relaxed font-light">
                                Data shows a 25% surge in interest for "Morning Brunch" variants. Consider adding a
                                premium champagne breakfast option to your 8 AM departures to increase ticket yield by
                                an estimated 15%.
                            </p>
                        </div>
                        <div class="relative z-10 pt-6">
                            <button
                                class="w-full py-4 bg-white/10 hover:bg-white/20 border border-white/20 rounded-2xl transition-colors font-semibold text-sm">
                                View Full Analysis
                            </button>
                        </div>
                        <!-- Abstract AI Shape -->
                        <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-sky-400/20 blur-3xl rounded-full"></div>
                    </div>
                    <div class="bg-surface-container p-6 rounded-3xl border border-outline-variant/10">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="font-bold text-on-surface headline">Recent Activity</h4>
                            <span class="text-xs text-primary font-bold cursor-pointer hover:underline">See all</span>
                        </div>
                        <div class="space-y-4">
                            <div class="flex gap-4 items-start">
                                <div
                                    class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                    <span class="material-symbols-outlined text-sm text-primary"
                                        data-icon="edit">edit</span>
                                </div>
                                <div>
                                    <p class="text-sm text-on-surface">Updated price for <span class="font-bold">Bali
                                            Retreat</span></p>
                                    <p class="text-xs text-on-surface-variant">2 hours ago</p>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start">
                                <div
                                    class="w-8 h-8 rounded-full bg-tertiary/10 flex items-center justify-center flex-shrink-0">
                                    <span class="material-symbols-outlined text-sm text-tertiary"
                                        data-icon="shopping_cart">shopping_cart</span>
                                </div>
                                <div>
                                    <p class="text-sm text-on-surface">5 new tickets sold for <span
                                            class="font-bold">Tokyo Foodie</span></p>
                                    <p class="text-xs text-on-surface-variant">5 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
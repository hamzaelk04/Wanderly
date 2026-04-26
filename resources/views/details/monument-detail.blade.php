@extends('layouts.app')

@section('content')
    <section class="relative h-153.5 min-h-125 w-full overflow-hidden">
        <img alt="The Taj Mahal at sunrise" class="w-full h-full object-cover"
            data-alt="stunning wide angle shot of the Taj Mahal at sunrise with soft golden light reflecting on the marble and clear morning sky"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBA7kFyj-AwZnNU1IYeMOaaB6VlYkjYG7LuKzG9gnwR_PKpGq_rd1fHDsko8tO-VWIuMYlRCeGvnE3oJgie5hV9xFIxei2ctduWBiIKUXYvSmsa-gdHuBMFL8fvo_yaAmwxjnnnuIgs1yFyrcnKSJnksDKnK5NB52wqhbJ40zI7WhYobil8PNkfDmWlKZwzZrANoLuORBJvU6bPY2eYV_hhbQoQpoSIugEvhOtYvtQGAqcBwlplAJCmYn5lqgWkKQ9gb8mIpGqp57I" />
        <div class="absolute inset-0 bg-linear-to-t from-on-background/60 via-transparent to-transparent"></div>
        <div class="absolute bottom-12 left-0 w-full px-8 md:px-16">
            <div class="max-w-7xl mx-auto">
                <span
                    class="inline-block px-4 py-1.5 mb-6 rounded-full bg-secondary-container text-on-secondary-fixed-variant font-label text-xs font-bold tracking-widest uppercase">
                    {{ optional($monument->categories->first())->name }}
                </span>
                <h1
                    class="text-5xl md:text-7xl font-display font-extrabold text-white tracking-tighter max-w-3xl leading-tight">
                    {{ $monument->name }}
                </h1>
            </div>
        </div>
    </section>
    <!-- Main Content Area -->
    <section class="max-w-7xl mx-auto px-8 md:px-16 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            <!-- Left Column (Description & History) -->
            <div class="lg:col-span-8 space-y-16">
                <div>
                    <h2 class="text-3xl font-display font-bold text-primary mb-6 tracking-tight">Description</h2>
                    <div class="prose prose-slate max-w-none">
                        <p class="text-lg leading-relaxed text-on-surface-variant font-body">
                            {{ $monument->description }}
                        </p>
                    </div>
                </div>
                <div class="space-y-8">
                    <h2 class="text-3xl font-display font-bold text-primary tracking-tight">Chronicles &amp; History
                    </h2>
                    <div class="gap-8">
                        <div class="space-y-4">
                            {{ $monument->history }}
                        </div>
                    </div>
                </div>
                <!-- Asymmetric Decorative Section -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 h-96">
                    <div class="md:col-span-2 rounded-2xl overflow-hidden">
                        <img alt="Archway view" class="w-full h-full object-cover"
                            data-alt="looking through a red sandstone archway towards the white marble taj mahal in the distance under soft daylight"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDd573qZ6hhqa96XadN8BNr09fQU42hwWft2T2HZKOgOyYSrWjbeNyn11A1vgGz6Yrjdk5R1z08PziUX8z27bOEOaX00U3K5ELqBv70MntiPbCs8bZDN4d5p1roYUYo3FcnHULKbFp4mxyNWj04V1O6hjVgU6KRw-mH1MKclnHUzXJN3JoCwo3GwBTy6NKuv2p_UkFCERLIcdRsbaLuclz8rn-iosbkLMvMc2yzmGeTb4vtiyW4TaFG1nTbYGZtIJWXYpz3I7AIRT8" />
                    </div>
                    <div class="bg-surface-container-high rounded-2xl p-8 flex flex-col justify-center space-y-4">
                        <span class="material-symbols-outlined text-4xl text-primary"
                            data-icon="architecture">architecture</span>
                        <h4 class="font-display font-bold text-xl">Architectural Purity</h4>
                        <p class="text-sm text-on-surface-variant leading-snug">The site is designed with total
                            bilateral symmetry along a central axis.</p>
                    </div>
                </div>
            </div>
            <!-- Right Column (Sidebar) -->
            <aside class="lg:col-span-4 sticky top-32">
                <div
                    class="bg-surface-container-lowest rounded-4xl p-8 shadow-[0_32px_64px_-16px_rgba(0,93,144,0.08)] space-y-10">
                    <!-- Visitor Info Header -->
                    <div>
                        <h3 class="text-2xl font-display font-bold text-on-surface mb-2">Visitor Information</h3>
                        <div class="w-12 h-1.5 bg-secondary-container rounded-full"></div>
                    </div>
                    <!-- Entry Fees -->
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            @if ($monument->fees)
                                    <div class="p-3 bg-surface-container-high rounded-xl text-primary">
                                        <span class="material-symbols-outlined" data-icon="payments">payments</span>
                                    </div>
                                    <div>
                                        <span
                                            class="block text-xs font-bold text-on-surface-variant uppercase tracking-widest mb-1">Entry
                                            Fees</span>
                                        <div class="space-y-2">
                                            <div class="flex justify-between items-center gap-8">
                                                <span class="text-sm font-medium text-on-surface">Foreign Tourists</span>
                                                <span class="text-sm font-bold text-primary">{{ $monument->fees }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                    </div>
                    <!-- Opening Times -->
                     @if ($monument->openning)
                     <div class="space-y-6">
                         <div class="flex items-start gap-4">
                             <div class="p-3 bg-surface-container-high rounded-xl text-primary">
                                 <span class="material-symbols-outlined" data-icon="schedule">schedule</span>
                             </div>
                             <div>
                                 <span
                                     class="block text-xs font-bold text-on-surface-variant uppercase tracking-widest mb-1">Opening
                                     Times</span>
                                 <div class="space-y-1">
                                     <p class="text-sm font-bold text-on-surface">{{ $monument->openning }}</p>
                                     <p class="text-xs text-on-surface-variant italic">Open 30 mins before sunrise,
                                         closed 30 mins before sunset.</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     @endif
                    <!-- Location Preview -->
                    <div class="pt-6 border-t border-surface-variant">
                        <div class="rounded-2xl overflow-hidden h-40 bg-surface-container relative">
                            <img alt="Agra Map View" class="w-full h-full object-cover opacity-60"
                                data-location="Agra, India"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBYxl5NgvFqATM1GWMy_saddvlNkGtOsNnqP41OsaGLOGCXWgF-qAepXZ-HdWiH-JPmW6jOdAf4gdUrnXZPiokuiq6BS9AL9eLoFL8__hyDQzg3TxVQMzn8-7LD40O6N0CMUQy1-N9EsDjV6sAJVlOk__FHfkTmxiAKitgj63Dh2WOQeL1HH4isQR2AMFzSg6lw0pZxqrgObTF0gcctExbtnA5sZdNMB7jfJgq4TndBcYCbwMpZ092XzGAqp5QSd85NAPrXnGl3_5Q" />
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="bg-white p-2 rounded-full shadow-lg border-2 border-primary">
                                    <span class="material-symbols-outlined text-primary" data-icon="location_on"
                                        style="font-variation-settings: 'FILL' 1;">location_on</span>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-xs text-center text-on-surface-variant font-medium">{{ $monument->address }}</p>
                    </div>
                </div>
            </aside>
        </div>
    </section>
@endsection
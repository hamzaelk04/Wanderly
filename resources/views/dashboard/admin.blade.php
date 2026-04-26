@extends('layouts.dashboard')

@section('content')
    <section class="flex-1 pt-6 pb-20 lg:pb-8 px-6 lg:px-10 overflow-y-auto bg-background">
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
                        <span class="text-2xl font-bold text-on-background">{{ $totalTicketsSold }}</span>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div
                class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-transparent flex items-center gap-5">
                <div class="h-12 w-12 rounded-full bg-secondary/10 flex items-center justify-center text-secondary">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <div>
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Total Revenue</p>
                    <div class="flex items-baseline gap-2">
                        <span class="text-2xl font-bold text-on-background">{{ $totalRevenue }}</span>
                        <p>MAD</p>
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
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Net Profit</p>
                    <div class="flex items-baseline gap-2">
                        <span class="text-2xl font-bold text-on-background">{{ $netProfit }}</span>
                        <p>MAD</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=" gap-8">
            <table class="w-full text-left">
                <thead
                    class="bg-surface-container-low text-on-surface-variant uppercase text-[10px] tracking-widest font-bold">
                    <tr>
                        <th class="px-6 py-4">Role Name</th>
                        <th class="px-6 py-4">Users</th>
                        <th class="px-6 py-4">Permissions</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container text-sm">
                    <tr class="hover:bg-surface-bright transition-colors">
                        <td class="px-6 py-4">
                            <div class="font-bold text-on-surface">Admin</div>
                            <div class="text-[11px] text-slate-400">Full System Access</div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-on-surface-variant font-medium">{{ $count['admins'] }} Users</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-wrap gap-1">
                                <span
                                    class="bg-primary-fixed text-on-primary-fixed-variant px-2 py-0.5 rounded text-[10px] font-bold">ALL_ACCESS</span>
                                <span
                                    class="bg-primary-fixed text-on-primary-fixed-variant px-2 py-0.5 rounded text-[10px] font-bold">SYSTEM_CONFIG</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <button
                                    class="p-1.5 hover:bg-slate-100 rounded-lg text-slate-400 hover:text-primary transition-colors"><span
                                        class="material-symbols-outlined text-lg"
                                        data-icon="visibility">visibility</span></button>
                                <button
                                    class="p-1.5 hover:bg-slate-100 rounded-lg text-slate-400 hover:text-primary transition-colors"><span
                                        class="material-symbols-outlined text-lg" data-icon="edit">edit</span></button>
                                <button
                                    class="p-1.5 hover:bg-slate-100 rounded-lg text-slate-400 hover:text-error transition-colors"><span
                                        class="material-symbols-outlined text-lg" data-icon="delete">delete</span></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-surface-bright transition-colors">
                        <td class="px-6 py-4">
                            <div class="font-bold text-on-surface">Organizer</div>
                            <div class="text-[11px] text-slate-400">Manage Events &amp; Tours</div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-on-surface-variant font-medium">{{ $count['organizers'] }} Users</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-wrap gap-1">
                                <span
                                    class="bg-tertiary-fixed text-on-tertiary-fixed-variant px-2 py-0.5 rounded text-[10px] font-bold">EVENTS_CRUD</span>
                                <span
                                    class="bg-tertiary-fixed text-on-tertiary-fixed-variant px-2 py-0.5 rounded text-[10px] font-bold">ANALYTICS</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <button
                                    class="p-1.5 hover:bg-slate-100 rounded-lg text-slate-400 hover:text-primary transition-colors"><span
                                        class="material-symbols-outlined text-lg"
                                        data-icon="visibility">visibility</span></button>
                                <button
                                    class="p-1.5 hover:bg-slate-100 rounded-lg text-slate-400 hover:text-primary transition-colors"><span
                                        class="material-symbols-outlined text-lg" data-icon="edit">edit</span></button>
                                <button
                                    class="p-1.5 hover:bg-slate-100 rounded-lg text-slate-400 hover:text-error transition-colors"><span
                                        class="material-symbols-outlined text-lg" data-icon="delete">delete</span></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-surface-bright transition-colors">
                        <td class="px-6 py-4">
                            <div class="font-bold text-on-surface">Client</div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-on-surface-variant font-medium">{{ $count['clients'] }} Users</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-wrap gap-1">
                                <span
                                    class="bg-secondary-fixed text-on-secondary-fixed-variant px-2 py-0.5 rounded text-[10px] font-bold">BUY_TICKETS</span>
                                <span
                                    class="bg-secondary-fixed text-on-secondary-fixed-variant px-2 py-0.5 rounded text-[10px] font-bold">MEDIA_UPLOAD</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <button
                                    class="p-1.5 hover:bg-slate-100 rounded-lg text-slate-400 hover:text-primary transition-colors"><span
                                        class="material-symbols-outlined text-lg"
                                        data-icon="visibility">visibility</span></button>
                                <button
                                    class="p-1.5 hover:bg-slate-100 rounded-lg text-slate-400 hover:text-primary transition-colors"><span
                                        class="material-symbols-outlined text-lg" data-icon="edit">edit</span></button>
                                <button
                                    class="p-1.5 hover:bg-slate-100 rounded-lg text-slate-400 hover:text-error transition-colors"><span
                                        class="material-symbols-outlined text-lg" data-icon="delete">delete</span></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Featured Experiences (Asymmetric Bento Style) -->
        <div class="mt-10 grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="md:col-span-2 relative group overflow-hidden rounded-xl h-48">
                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                    data-alt="vibrant nightlife scene at a modern music festival with purple and blue stage lights and silhouette of a cheering crowd"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYU0MvQDbHWHmCHqD3AkPhsS8P8HCj_t-WkWjKORQwW--5hGiYna1lT-H5r4l1-9ShiCFAWfcMrDkfL5Q_CeG_S88x6V9KQfINUCyH9Zgfo5fGBbd4tgdlCBGQ_Bvk6M9MoWzzQyiCjIA0XQEuF4t6gKIbKXwg1dLODUg-X3y9ecIvW4UgtHgKYf-hoHC_01h7e5DYgnjDWbGGYfUn6ly3iMkF2tjAZ0smKTpkNrR8wAQGSwxrIFEr3ZFb5ATnVv_fl8AVTp6ZMmM" />
                <div class="absolute inset-0 bg-linear-to-t from-black/80 to-transparent flex flex-col justify-end p-5">
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
                <div class="absolute inset-0 bg-linear-to-t from-black/80 to-transparent flex flex-col justify-end p-5">
                    <h4 class="text-white font-bold text-sm">The Hidden Cask</h4>
                </div>
            </div>
            <div class="relative group overflow-hidden rounded-xl h-48">
                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                    data-alt="zen minimalist art gallery space with white walls and a large contemporary painting under focused spotlight"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAUuuw7YzM73nD_M9y-oDgt6DiI-FV4OviapoHasenuIGbboB-uAVs5BeKvfCn2GKhMG75-vQSXPcdMq5vwESnTUVJUUC7HwN-Dujjl2McMjTRbHEmruKnesdYgZog2mBcNYlUclAO7YLDkbx7qGdqrV6K9znI9c6j2YiS6si72cmHzDXvOH2iazl5q5t3T50NQbubNkgVXClRvyzBUToSa06b4tvRQw578YQELvbD14zuMqAqxkncSH9RKEyYBuHigPuKQWoB6aa0" />
                <div class="absolute inset-0 bg-linear-to-t from-black/80 to-transparent flex flex-col justify-end p-5">
                    <h4 class="text-white font-bold text-sm">Elysium Gallery Tour</h4>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    @vite('resources/js/dashboard/admin-dashboard.js')
@endpush
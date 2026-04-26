@extends('layouts.dashboard')

@section('content')
        <!-- Events Table -->
        <div class="bg-surface-container-lowest rounded-xl shadow-[0_4px_24px_rgba(25,28,29,0.04)] overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-surface-container-low">
                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Event Name</th>
                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Date &amp; Time
                            </th>
                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Location</th>
                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Status</th>
                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 text-right">
                                Actions</th>
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
                                    <div class="flex items-center gap-1 text-sm text-slate-600">
                                        <span class="material-symbols-outlined text-xs"
                                            data-icon="location_on">location_on</span>
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
                                <td class="px-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <a href="{{ route('events.review', $event->id) }}"
                                            class="px-3 py-1.5 text-xs font-bold text-primary hover:bg-primary/10 rounded-lg transition-all">View
                                            Details</a>
                                        @if ($event->status !== 'accepted')
                                            <form action="{{ route('events.delete', $event->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="p-1.5 hover:bg-slate-100 rounded-lg text-slate-400 hover:text-error transition-colors"><span
                                                        class="material-symbols-outlined text-lg"
                                                        data-icon="delete">delete</span></button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="px-6 py-4 bg-surface-container-low flex items-center justify-between">
                <p class="text-xs font-medium text-slate-500">
                    Showing {{ $events->firstItem() }} to {{ $events->lastItem() }} of {{ $events->total() }} results
                </p>
                <div class="flex items-center gap-2">
                    <a href="{{ $events->previousPageUrl() }}" class="w-8 h-8 rounded-lg flex items-center justify-center text-slate-400 hover:bg-white transition-all
                                    {{ !$events->onFirstPage() ? '' : 'pointer-events-none opacity-50' }}">
                        <span class="material-symbols-outlined text-lg">chevron_left</span>
                    </a>

                    @for ($i = 1; $i <= $events->lastPage(); $i++)
                        <a href="{{ $events->url($i) }}"
                            class="w-8 h-8 rounded-lg flex items-center justify-center text-xs font-bold transition-all
                                                           {{ $events->currentPage() == $i ? 'bg-primary text-white' : 'text-slate-600 hover:bg-white' }}">
                            {{ $i }}
                        </a>
                    @endfor

                    <a href="{{ $events->nextPageUrl() }}" class="w-8 h-8 rounded-lg flex items-center justify-center text-slate-400 hover:bg-white transition-all
                                    {{ $events->hasMorePages() ? '' : 'pointer-events-none opacity-50' }}">
                        <span class="material-symbols-outlined text-lg">chevron_right</span>
                    </a>

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
@endsection
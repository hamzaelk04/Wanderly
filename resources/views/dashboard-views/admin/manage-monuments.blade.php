@extends('layouts.dashboard')

@section('content')
    <div class="p-8 max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="mb-10">
            <h2 class="text-3xl font-['Plus_Jakarta_Sans'] font-extrabold tracking-tight text-on-background mb-2">Monument
                Management</h2>
            <p class="text-on-surface-variant font-medium">Review and moderate submitted monuments to maintain platform
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
                </div>
                <p class="text-sm font-medium text-slate-500 mb-1">Total Monuments</p>
                <h3 class="text-2xl font-bold">{{ $monuments->count() }}</h3>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                <strong>Success!</strong> {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        <!-- monum$monuments Table -->
        <div class="bg-surface-container-lowest rounded-xl shadow-[0_4px_24px_rgba(25,28,29,0.04)] overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-surface-container-low">
                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Monument Name
                            </th>
                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">City</th>
                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Location</th>
                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500"></th>
                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 text-right">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach ($monuments as $monument)
                            <tr class="hover:bg-slate-50/50 transition-colors group">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg overflow-hidden shrink-0 bg-slate-200">
                                            <img alt="Music monument" class="w-full h-full object-cover"
                                                data-alt="energetic crowd with raised hands at a music festival with dramatic blue stage lighting and smoke effects"
                                                src="{{ asset('storage/' . optional($monument->images->first())->path) }}" />
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-on-background">{{ $monument->name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <p class="text-sm text-on-surface-variant font-medium">{{ $monument->city }}
                                        </p>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-1 text-sm text-slate-600">
                                        <span class="material-symbols-outlined text-xs"
                                            data-icon="location_on">location_on</span>
                                        {{ $monument->address }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span @class([
                                        'inline-flex items-center gap-1 px-3 py-1 rounded-full font-bold tracking-wider uppercase text-[10px]',
                                        'bg-secondary-fixed text-on-secondary-fixed' => $monument->status === 'pending',
                                        'bg-green-100 text-green-700' => $monument->status === 'accepted',
                                        'bg-error-container text-on-error-container' => $monument->status === 'rejected'
                                    ])>
                                        @if($monument->status === 'pending')
                                            <span class="w-1.5 h-1.5 bg-yellow-500 rounded-full animate-pulse"></span>
                                        @endif
                                        {{ $monument->status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        @if ($monument->status !== 'accepted')
                                            <form action="{{ route('monuments.delete', $monument->id) }}" method="POST">
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
                            Verify organizer credentials for monum$monuments with &gt;500 participants.
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-700">
                            <span class="material-symbols-outlined text-primary text-lg"
                                data-icon="image_not_supported">image_not_supported</span>
                            Check image quality and ensure no copyrighted watermarks.
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-700">
                            <span class="material-symbols-outlined text-primary text-lg" data-icon="policy">policy</span>
                            Ensure monument descriptions comply with our community safety standards.
                        </li>
                    </ul>
                </div>
                <span class="material-symbols-outlined absolute -bottom-6 -right-6 text-9xl text-[#0077B6]/10"
                    data-icon="gavel">gavel</span>
            </div>
            <div class="bg-surface-container-highest p-8 rounded-2xl border border-white/40 flex flex-col justify-center">
                <h4 class="text-xl font-bold text-on-surface mb-2">Need Help?</h4>
                <p class="text-sm text-on-surface-variant mb-6">If you encounter an monument that requires legal review or
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

@push('scripts')
    @vite('resources/js/dashboard/manage-monuments.js')
@endpush
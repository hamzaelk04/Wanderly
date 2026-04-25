@extends('layouts.app')

@section('content')
    <section class="pt-28 pb-20 px-6 max-w-5xl mx-auto min-h-screen">
        <!-- Header Section -->
        <header class="mb-12">
            <h1 class="text-4xl font-extrabold font-headline tracking-tighter text-on-surface mb-2">Account Settings</h1>
            <p class="text-on-surface-variant body-md max-w-xl">Curate your personal travel profile, manage security, and
                review your bespoke adventure history.</p>
        </header>
        <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <!-- Sidebar: Navigation/Profile Summary -->
                <aside class="lg:col-span-4 space-y-6">
                    <div
                        class="bg-surface-container-lowest p-8 rounded-xl shadow-sm border border-outline-variant/15 flex flex-col items-center">
                        <div class="relative group cursor-pointer mb-6">
                            <div
                                class="w-32 h-32 rounded-full overflow-hidden border-4 border-surface ring-4 ring-primary/20">
                                @if (auth()->user()->image)
                                                <img alt="Profile" class="w-full h-full object-cover" data-alt="close up headshot of a handsome young man with 
                                    src=" {{ asset('storage/' . optional(auth()->user()->image)->path) }}" />
                                @else
                                    <img alt="Profile" class="w-full h-full object-cover"
                                        data-alt="close up headshot of a handsome young man with clean skin and clear eyes in a premium travel editorial style"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3e0gFtVICdq9EF_DX2enV_fFWp2jDMPdGIkk-a5lSBcZqW-6UP0QkJDlpDYNMlonX0AUxF7sLi2Rj9crTVgPydAUodkuGA0pxU2m3CcPPi-wSyOChKEPQZetUQSoWRArM_a2VANWfIfOOO46KwPCVQXCFPNYCbxOA6wq5N9xVf4GCdFt1lBiLObLiz1bySO7gyuK8FUPrgnCHLTGTY3z4kxS-DI4GdrrsI_ryF_mVIXL-oq4eb0WACTOZuuajpDHP3NGUsFWfBIo" />
                                @endif
                                <input type="file" name="image" class="mt-4 text-sm">
                            </div>
                            <div
                                class="absolute bottom-1 right-1 bg-primary text-white p-2 rounded-full shadow-lg group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-sm">edit</span>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold font-headline text-on-surface">{{ $user->firstname}}
                            {{ $user->lastname }}</h3>
                        <p class="text-on-surface-variant text-sm mb-6">{{ $user->email }}</p>
                        <button
                            class="w-full py-4 px-6 bg-secondary-container text-on-secondary-fixed font-semibold rounded-full flex items-center justify-center gap-2 hover:opacity-90 transition-all active:scale-95">
                            <span class="material-symbols-outlined">history_edu</span>
                            View Order History
                        </button>
                    </div>
                    <div class="bg-surface-container-low p-6 rounded-xl border border-outline-variant/10">
                        <h4 class="font-headline font-bold text-sm uppercase tracking-widest text-on-surface-variant mb-4">
                            Quick Links
                        </h4>
                        <nav class="space-y-3">
                            <a href="/logout" class="flex items-center gap-3 text-primary font-semibold" href="#">
                                <span class="material-symbols-outlined">logout</span> Log Out
                            </a>
                        </nav>
                    </div>
                </aside>
                <!-- Main Settings Form -->
                <div class="lg:col-span-8 space-y-8">
                    <!-- Personal Info Card -->
                    <section class="bg-surface-container-lowest p-8 rounded-xl shadow-sm border border-outline-variant/15">
                        <div class="flex items-center gap-3 mb-8">
                            <span class="material-symbols-outlined text-primary">badge</span>
                            <h2 class="text-xl font-bold font-headline">Personal Information</h2>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex flex-col space-y-2">
                                <label class="text-sm font-semibold text-on-surface-variant font-label">First Name</label>
                                <input
                                    class="bg-surface-container-high border-none rounded-lg p-4 focus:ring-2 focus:ring-primary/20 text-on-surface font-body"
                                    type="text" value="{{ $user->firstname }}" />
                            </div>
                            <div class="flex flex-col space-y-2">
                                <label class="text-sm font-semibold text-on-surface-variant font-label">Last Name</label>
                                <input
                                    class="bg-surface-container-high border-none rounded-lg p-4 focus:ring-2 focus:ring-primary/20 text-on-surface font-body"
                                    type="text" value="{{ $user->lastname }}" />
                            </div>
                            <div class="flex flex-col space-y-2 md:col-span-2">
                                <label class="text-sm font-semibold text-on-surface-variant font-label">Email
                                    Address</label>
                                <input
                                    class="bg-surface-container-high border-none rounded-lg p-4 focus:ring-2 focus:ring-primary/20 text-on-surface font-body"
                                    type="email" value="{{ $user->email }}" />
                            </div>
                        </div>
                    </section>
                    <!-- Password Management Card -->
                    <section class="bg-surface-container-lowest p-8 rounded-xl shadow-sm border border-outline-variant/15">
                        <div class="flex items-center gap-3 mb-8">
                            <span class="material-symbols-outlined text-primary">lock_reset</span>
                            <h2 class="text-xl font-bold font-headline">Password Management</h2>
                        </div>
                        <div class="space-y-6">
                            <div class="flex flex-col space-y-2">
                                <label class="text-sm font-semibold text-on-surface-variant font-label">Current
                                    Password</label>
                                <div class="relative">
                                    <input
                                        class="w-full bg-surface-container-high border-none rounded-lg p-4 focus:ring-2 focus:ring-primary/20 text-on-surface font-body"
                                        placeholder="••••••••••••" type="password" />
                                    <span
                                        class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant cursor-pointer">visibility</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="flex flex-col space-y-2">
                                    <label class="text-sm font-semibold text-on-surface-variant font-label">New
                                        Password</label>
                                    <input
                                        class="bg-surface-container-high border-none rounded-lg p-4 focus:ring-2 focus:ring-primary/20 text-on-surface font-body"
                                        type="password" />
                                </div>
                                <div class="flex flex-col space-y-2">
                                    <label class="text-sm font-semibold text-on-surface-variant font-label">Confirm New
                                        Password</label>
                                    <input
                                        class="bg-surface-container-high border-none rounded-lg p-4 focus:ring-2 focus:ring-primary/20 text-on-surface font-body"
                                        type="password" />
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Action Footer -->
                    <div class="flex flex-col sm:flex-row items-center justify-end gap-4 mt-12">
                        <button
                            class="w-full sm:w-auto px-10 py-4 text-on-surface-variant font-semibold hover:text-on-surface transition-colors">Cancel</button>
                        <button
                            class="w-full sm:w-auto px-12 py-4 bg-linear-to-br from-primary to-primary-container text-white font-bold rounded-full shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all">Save
                            Changes</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
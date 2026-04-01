@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center pt-24 pb-16 px-6">
        <div class="max-w-xl w-full bg-white rounded-2xl shadow p-8">

            <h2 class="text-2xl font-bold mb-6">Create Account</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <input type="text" name="firstname" placeholder="First Name" class="w-full mb-4 p-3 rounded bg-gray-100">
                <input type="text" name="lastname" placeholder="Last Name" class="w-full mb-4 p-3 rounded bg-gray-100">
                <input type="email" name="email" placeholder="Email" class="w-full mb-4 p-3 rounded bg-gray-100">
                <input type="password" name="password" placeholder="Password" class="w-full mb-4 p-3 rounded bg-gray-100">
                <input type="password" name="password_confirmation" placeholder="Confirm Password"
                    class="w-full mb-6 p-3 rounded bg-gray-100">

                <div class="flex items-start bg-surface-container-low p-4 rounded-xl border border-outline-variant/10 group cursor-pointer transition-colors hover:bg-surface-container">
                    <div class="flex items-center h-5">
                        <input class="h-5 w-5 rounded-md border-outline-variant text-primary focus:ring-primary/30 cursor-pointer" id="organizer" name="organizer" type="checkbox" />
                    </div>
                    <div class="ml-4 text-sm leading-6">
                        <label class="font-bold text-on-surface cursor-pointer select-none" for="organizer">I want to register as an event organizer</label>
                        <p class="text-on-surface-variant text-xs mt-1">Host bespoke tours, cultural workshops, or curated adventures.</p>
                    </div>
                </div>

                <button class="w-full bg-sky-600 text-white py-3 rounded-full">
                    Register
                </button>
            </form>

        </div>
    </div>
@endsection
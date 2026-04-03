@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center pt-24 pb-16 px-6">
        <div class="max-w-xl w-full bg-white rounded-2xl shadow p-8">

            <h2 class="text-2xl font-bold mb-6">Sign in</h2>
            <p id="error"
                class="rounded-md border-2 border-red-500 bg-red-100 text-red-500 mb-4 flex items-center justify-center">
            </p>

            <form id="login_form" method="POST" action="{{ route('login') }}">
                @csrf

                <input id="email" type="email" name="email" placeholder="Email" class="w-full mb-4 p-3 rounded bg-gray-100">
                <input id="password" type="password" name="password" placeholder="Password"
                    class="w-full mb-4 p-3 rounded bg-gray-100">

                <button type="submit" class="w-full bg-sky-600 text-white py-3 rounded-full">
                    Login
                </button>
            </form>

        </div>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/login.js')
@endpush
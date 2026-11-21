<x-guest-layout>
    <!-- Header / Brand Title -->
    <div class="text-center mb-6">
        <a href="{{ url('/') }}"
            class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-violet-600 bg-clip-text text-transparent">
            NOVA<span class="font-light text-slate-800">STORE</span>
        </a>
        <h2 class="text-xl font-bold text-slate-900 mt-3">Set New Password</h2>
        <p class="text-xs text-slate-500 mt-1">Please enter your new password below to secure your account</p>
    </div>

    <form method="POST" action="{{ route('password.store') }}" class="space-y-4">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-slate-700 font-medium text-sm" />
            <x-text-input id="email"
                class="block mt-1.5 w-full rounded-xl border-slate-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                type="email" name="email" :value="old('email', $request->email)" placeholder="you@example.com" required autofocus
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-1.5 text-xs" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="text-slate-700 font-medium text-sm" />
            <x-text-input id="password"
                class="block mt-1.5 w-full rounded-xl border-slate-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                type="password" name="password" placeholder="••••••••" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-1.5 text-xs" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-slate-700 font-medium text-sm" />
            <x-text-input id="password_confirmation"
                class="block mt-1.5 w-full rounded-xl border-slate-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                type="password" name="password_confirmation" placeholder="••••••••" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1.5 text-xs" />
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit"
                class="w-full py-2.5 px-4 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-xl shadow-sm transition focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</x-guest-layout>

<x-guest-layout>
    <!-- Header / Brand Title -->
    <div class="text-center mb-6">
        <a href="{{ url('/') }}" class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-violet-600 bg-clip-text text-transparent">
            NOVA<span class="font-light text-slate-800">STORE</span>
        </a>
        <h2 class="text-xl font-bold text-slate-900 mt-3">Welcome back</h2>
        <p class="text-xs text-slate-500 mt-1">Sign in to access your account and dashboard</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-slate-700 font-medium text-sm" />
            <x-text-input id="email" 
                          class="block mt-1.5 w-full rounded-xl border-slate-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500" 
                          type="email" 
                          name="email" 
                          :value="old('email')" 
                          placeholder="you@example.com"
                          required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-1.5 text-xs" />
        </div>

        <!-- Password -->
        <div>
            <div class="flex items-center justify-between">
                <x-input-label for="password" :value="__('Password')" class="text-slate-700 font-medium text-sm" />
                @if (Route::has('password.request'))
                    <a class="text-xs font-medium text-indigo-600 hover:text-indigo-700 transition" href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
            </div>

            <x-text-input id="password" 
                          class="block mt-1.5 w-full rounded-xl border-slate-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                          type="password"
                          name="password"
                          placeholder="••••••••"
                          required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-1.5 text-xs" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded-md border-slate-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-xs font-medium text-slate-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit" class="w-full py-2.5 px-4 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-xl shadow-sm transition focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                {{ __('Log in') }}
            </button>
        </div>

        <!-- Register Link -->
        @if (Route::has('register'))
            <div class="text-center pt-4 border-t border-slate-100">
                <p class="text-xs text-slate-500">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="font-semibold text-indigo-600 hover:text-indigo-700 transition">
                        Sign up
                    </a>
                </p>
            </div>
        @endif
    </form>
</x-guest-layout>
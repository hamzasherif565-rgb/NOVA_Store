<x-guest-layout>
    <!-- Header / Brand Title -->
    <div class="text-center mb-6">
        <a href="{{ url('/') }}" class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-violet-600 bg-clip-text text-transparent">
            NOVA<span class="font-light text-slate-800">STORE</span>
        </a>
        <h2 class="text-xl font-bold text-slate-900 mt-3">Reset Password</h2>
        <p class="text-xs text-slate-500 mt-1">Forgot your password? No problem. We've got you covered.</p>
    </div>

    <div class="mb-5 text-xs text-slate-600 bg-slate-50 p-4 rounded-xl border border-slate-200/80 leading-relaxed">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-xs font-medium text-emerald-600" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
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
                          required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-1.5 text-xs" />
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit" class="w-full py-2.5 px-4 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-xl shadow-sm transition focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>

        <!-- Back to Login Link -->
        <div class="text-center pt-4 border-t border-slate-100">
            <p class="text-xs text-slate-500">
                Remembered your password? 
                <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-700 transition">
                    Log in
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>
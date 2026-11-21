<x-guest-layout>
    <!-- Header / Brand Title -->
    <div class="text-center mb-6">
        <a href="{{ url('/') }}"
            class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-violet-600 bg-clip-text text-transparent">
            NOVA<span class="font-light text-slate-800">STORE</span>
        </a>
        <h2 class="text-xl font-bold text-slate-900 mt-3">Confirm Password</h2>
        <p class="text-xs text-slate-500 mt-1">Security check before proceeding</p>
    </div>

    <!-- Description Box -->
    <div class="mb-5 text-xs text-slate-600 bg-slate-50 p-4 rounded-xl border border-slate-200/80 leading-relaxed">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}" class="space-y-4">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="text-slate-700 font-medium text-sm" />
            <x-text-input id="password"
                class="block mt-1.5 w-full rounded-xl border-slate-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                type="password" name="password" placeholder="••••••••" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-1.5 text-xs" />
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit"
                class="w-full py-2.5 px-4 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-xl shadow-sm transition focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                {{ __('Confirm') }}
            </button>
        </div>
    </form>
</x-guest-layout>

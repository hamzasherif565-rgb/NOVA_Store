<x-guest-layout>
    <!-- Header / Brand Title -->
    <div class="text-center mb-6">
        <a href="{{ url('/') }}" class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-violet-600 bg-clip-text text-transparent">
            NOVA<span class="font-light text-slate-800">STORE</span>
        </a>
        <h2 class="text-xl font-bold text-slate-900 mt-3">Verify your email</h2>
        <p class="text-xs text-slate-500 mt-1">We've sent a verification link to your inbox</p>
    </div>

    <!-- Description Box -->
    <div class="mb-5 text-xs text-slate-600 bg-slate-50 p-4 rounded-xl border border-slate-200/80 leading-relaxed">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    <!-- Verification Link Sent Status -->
    @if (session('status') == 'verification-link-sent')
        <div class="mb-5 text-xs font-medium text-emerald-700 bg-emerald-50 p-3.5 rounded-xl border border-emerald-200/80">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <!-- Actions -->
    <div class="space-y-3 pt-2">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="w-full py-2.5 px-4 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-xl shadow-sm transition focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                {{ __('Resend Verification Email') }}
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="text-center pt-3 border-t border-slate-100">
            @csrf
            <button type="submit" class="text-xs font-semibold text-slate-500 hover:text-slate-800 transition focus:outline-none">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
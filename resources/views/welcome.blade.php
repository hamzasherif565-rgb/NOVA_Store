@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="space-y-8">
        
        <!-- Hero Banner Section -->
        <div class="bg-gradient-to-r from-indigo-600 to-violet-600 rounded-3xl p-8 md:p-12 text-white shadow-xl relative overflow-hidden">
            <div class="relative z-10 max-w-2xl">
                <span class="px-3 py-1 bg-white/20 rounded-full text-xs font-semibold tracking-wider uppercase">Welcome to NovaStore</span>
                <h1 class="text-3xl md:text-5xl font-extrabold mt-4 leading-tight">Discover Amazing Products for Your Lifestyle.</h1>
                <p class="text-indigo-100 mt-4 text-sm md:text-base leading-relaxed">
                    Explore our wide range of categories and latest products with great prices, fast shipping, and top quality.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ url('/Products') }}" class="px-6 py-3 bg-white text-indigo-600 font-semibold text-sm rounded-xl shadow-md hover:bg-indigo-50 transition">
                        Shop Products &rarr;
                    </a>
                    <a href="{{ url('/Categorys') }}" class="px-6 py-3 bg-indigo-700/60 hover:bg-indigo-700 text-white font-semibold text-sm rounded-xl border border-indigo-400/30 transition">
                        Browse Categories
                    </a>
                </div>
            </div>
            <!-- Decorative Background Shape -->
            <div class="absolute right-0 bottom-0 translate-x-10 translate-y-10 w-96 h-96 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
        </div>

        <!-- Quick Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80">
                <div class="w-10 h-10 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center font-bold mb-4">🚀</div>
                <h3 class="text-base font-bold text-slate-900">Fast Delivery</h3>
                <p class="text-xs text-slate-500 mt-1">Get your orders delivered to your doorstep quickly and safely.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80">
                <div class="w-10 h-10 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center font-bold mb-4">🔒</div>
                <h3 class="text-base font-bold text-slate-900">Secure Checkout</h3>
                <p class="text-xs text-slate-500 mt-1">Shop with confidence using our secure payment and data protection.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80">
                <div class="w-10 h-10 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center font-bold mb-4">💎</div>
                <h3 class="text-base font-bold text-slate-900">Top Quality</h3>
                <p class="text-xs text-slate-500 mt-1">We bring you hand-picked products meeting the highest quality standards.</p>
            </div>
        </div>

    </div>
@endsection
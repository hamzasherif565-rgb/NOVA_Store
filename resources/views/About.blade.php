@extends('layouts.app')

@section('title', 'About Us - NovaStore')

@section('content')
    <div class="max-w-4xl mx-auto py-6 space-y-8">
        
        <!-- Hero Section -->
        <div class="text-center bg-gradient-to-r from-indigo-600 to-violet-600 rounded-3xl p-8 md:p-12 text-white shadow-sm">
            <span class="px-3 py-1 bg-white/20 rounded-full text-xs font-semibold tracking-wide uppercase">
                Welcome to NovaStore
            </span>
            <h1 class="text-3xl md:text-4xl font-extrabold mt-4">Redefining Your Shopping Experience</h1>
            <p class="text-indigo-100 text-sm md:text-base mt-3 max-w-2xl mx-auto leading-relaxed">
                We are dedicated to bringing you the best products with exceptional quality, unbeatable prices, and a seamless online shopping journey.
            </p>
        </div>

        <!-- Our Mission & Vision -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-slate-200/80 space-y-3">
                <div class="w-10 h-10 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center font-bold text-lg">
                    🎯
                </div>
                <h3 class="text-lg font-bold text-slate-900">Our Mission</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    To empower customers by providing a wide selection of top-tier products, backed by reliable customer service and an intuitive, lightning-fast digital storefront.
                </p>
            </div>

            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-slate-200/80 space-y-3">
                <div class="w-10 h-10 bg-violet-50 text-violet-600 rounded-xl flex items-center justify-center font-bold text-lg">
                    🚀
                </div>
                <h3 class="text-lg font-bold text-slate-900">Our Vision</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    To become the most trusted and forward-thinking e-commerce destination, continuously innovating to meet the evolving needs of our global community.
                </p>
            </div>
        </div>

        <!-- Why Choose Us -->
        <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-slate-200/80">
            <h3 class="text-xl font-bold text-slate-900 text-center mb-6">Why Choose NovaStore?</h3>
            
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                <div class="space-y-2">
                    <div class="text-2xl">⭐</div>
                    <h4 class="text-sm font-bold text-slate-900">Top Quality</h4>
                    <p class="text-xs text-slate-500">Handpicked items that meet strict quality standards.</p>
                </div>

                <div class="space-y-2">
                    <div class="text-2xl">🔒</div>
                    <h4 class="text-sm font-bold text-slate-900">Secure Checkout</h4>
                    <p class="text-xs text-slate-500">Protected transactions and reliable data privacy.</p>
                </div>

                <div class="space-y-2">
                    <div class="text-2xl">⚡</div>
                    <h4 class="text-sm font-bold text-slate-900">Fast Support</h4>
                    <p class="text-xs text-slate-500">Our team is always ready to assist you anytime.</p>
                </div>
            </div>
        </div>

    </div>
@endsection

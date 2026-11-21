<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- 4. Dynamic Page Title -->
    <title>@yield('title', 'Storefront') - {{ config('app.name', 'MyStore') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Breeze Vite Assets (Tailwind CSS & Alpine.js) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-slate-50 text-slate-800 flex flex-col min-h-screen">

    <!-- 1. Navigation Bar -->
    <header class="bg-white/90 backdrop-blur-md border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                
                <!-- Brand Logo -->
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-violet-600 bg-clip-text text-transparent">
                        NOVA<span class="font-light text-slate-800">STORE</span>
                    </a>
                </div>

                <!-- Main Navigation Links -->
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ url('/') }}" class="text-sm font-medium {{ request()->is('/') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600' }} transition">
                        Home
                    </a>
                    <a href="{{ url('/Products') }}" class="text-sm font-medium {{ request()->is('Products*') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600' }} transition">
                        Products
                    </a>
                    <a href="{{ url('/Categorys') }}" class="text-sm font-medium {{ request()->is('Categorys*') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600' }} transition">
                        Categories
                    </a>
                    <a href="{{ url('/about') }}" class="text-sm font-medium {{ request()->is('about') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600' }} transition">
                        About
                    </a>
                    <a href="{{ url('/contact') }}" class="text-sm font-medium {{ request()->is('contact') ? 'text-indigo-600 font-semibold' : 'text-slate-600 hover:text-indigo-600' }} transition">
                        Contact
                    </a>
                </nav>

                <!-- Breeze Auth Links (Login / Register / Dashboard) -->
                <div class="flex items-center space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-slate-700 hover:text-indigo-600 transition">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-medium text-slate-600 hover:text-indigo-600 transition">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 shadow-sm transition">
                                    Sign up
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>

            </div>
        </div>
    </header>

    <!-- Main Container (Sidebar + Content) -->
    <div class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            
            <!-- 3. Sidebar Section (تمت تبرمجتها بشكل آمن لمنع ظهور أخطاء النصوص العشوائية) -->
            <aside class="lg:col-span-1">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 sticky top-24">
                    @hasSection('sidebar')
                        @yield('sidebar')
                    @else
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-4">Quick Navigation</h3>
                        <ul class="space-y-2.5 text-sm font-medium text-slate-600">
                            <li><a href="{{ url('/Products') }}" class="flex items-center justify-between hover:text-indigo-600 transition"><span>All Products</span> <span>&rarr;</span></a></li>
                            <li><a href="{{ url('/Categorys') }}" class="flex items-center justify-between hover:text-indigo-600 transition"><span>Browse Categories</span> <span>&rarr;</span></a></li>
                        </ul>

                        <div class="mt-6 pt-6 border-t border-slate-100">
                            <div class="bg-indigo-50 rounded-xl p-4">
                                <p class="text-xs font-semibold text-indigo-900">Free Shipping</p>
                                <p class="text-xs text-indigo-700 mt-1">On all orders over $50 this week!</p>
                            </div>
                        </div>
                    @endif
                </div>
            </aside>

            <!-- 2. Main Content Section & 5. Shared Content Area -->
            <main class="lg:col-span-3">
                @yield('content')
            </main>

        </div>
    </div>

    <!-- 6. Simple Footer -->
    <footer class="bg-white border-t border-slate-200 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex flex-col sm:flex-row justify-between items-center text-sm text-slate-500">
            <p>&copy; {{ date('Y') }} NovaStore. All rights reserved.</p>
            <div class="flex space-x-6 mt-4 sm:mt-0">
                <a href="{{ url('/about') }}" class="hover:text-slate-800 transition">About</a>
                <a href="{{ url('/contact') }}" class="hover:text-slate-800 transition">Contact</a>
                <a href="#" class="hover:text-slate-800 transition">Privacy Policy</a>
            </div>
        </div>
    </footer>

</body>
</html>
@extends('layouts.app')

@section('title', 'Dashboard - NovaStore')

@section('content')
    <div class="space-y-6">
        
        <!-- Header Bar -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 bg-white p-5 rounded-2xl shadow-sm border border-slate-200/80">
            <h2 class="font-bold text-xl text-slate-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <span class="text-xs font-medium text-slate-500">
                Welcome back, <span class="text-indigo-600 font-semibold">{{ Auth::user()->name }}</span>
            </span>
        </div>

        <!-- Welcome Banner Card -->
        <div class="bg-gradient-to-r from-indigo-600 to-violet-600 rounded-2xl p-6 md:p-8 text-white shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <div>
                <span class="px-2.5 py-1 bg-white/20 rounded-lg text-xs font-semibold tracking-wide uppercase">
                    {{ __("You're logged in!") }}
                </span>
                <h3 class="text-2xl font-bold mt-3">NovaStore Control Panel</h3>
                <p class="text-indigo-100 text-sm mt-1">
                    Manage your products, organize categories, and monitor your storefront from one place.
                </p>
            </div>
            <a href="{{ url('/') }}" class="px-5 py-2.5 bg-white text-indigo-600 text-sm font-semibold rounded-xl shadow-sm hover:bg-indigo-50 transition shrink-0">
                Visit Storefront &rarr;
            </a>
        </div>

        <!-- Quick Management Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Products Card -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Inventory</span>
                        <span class="px-2.5 py-1 bg-indigo-50 text-indigo-700 text-xs font-semibold rounded-lg">Products</span>
                    </div>
                    <h4 class="text-lg font-bold text-slate-900">Manage Store Products</h4>
                    <p class="text-sm text-slate-500 mt-1">
                        Add new items, update prices and stock quantities, or manage your inventory.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center gap-3">
                    <a href="{{ route('Products') }}" class="px-4 py-2 bg-slate-900 text-white text-xs font-semibold rounded-xl hover:bg-slate-800 transition">
                        View All Products
                    </a>
                    <a href="{{ route('addProduct') }}" class="px-4 py-2 bg-indigo-50 text-indigo-700 text-xs font-semibold rounded-xl hover:bg-indigo-100 transition">
                        + Add Product
                    </a>
                </div>
            </div>

            <!-- Categories Card -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Organization</span>
                        <span class="px-2.5 py-1 bg-violet-50 text-violet-700 text-xs font-semibold rounded-lg">Categories</span>
                    </div>
                    <h4 class="text-lg font-bold text-slate-900">Manage Categories</h4>
                    <p class="text-sm text-slate-500 mt-1">
                        Create and structure product departments to keep your store organized.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center gap-3">
                    <a href="{{ route('Categorys') }}" class="px-4 py-2 bg-slate-900 text-white text-xs font-semibold rounded-xl hover:bg-slate-800 transition">
                        View All Categories
                    </a>
                    <a href="{{ route('addCategory') }}" class="px-4 py-2 bg-violet-50 text-violet-700 text-xs font-semibold rounded-xl hover:bg-violet-100 transition">
                        + Add Category
                    </a>
                </div>
            </div>

        </div>

    </div>
@endsection
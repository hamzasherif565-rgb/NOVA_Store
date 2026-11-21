@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
    <div class="max-w-3xl mx-auto">
        
        <!-- Page Header -->
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Product Details</h1>
                <p class="text-sm text-slate-500 mt-1">Viewing information for product ID: #{{ $Product['id'] }}</p>
            </div>
            <a href="{{ route('Products') }}" class="px-4 py-2 text-xs font-semibold text-slate-600 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition shadow-sm">
                &larr; Back to Products
            </a>
        </div>

        <!-- Success Alert -->
        @if (session('success'))
            <div class="mb-6 p-4 text-xs font-medium text-emerald-700 bg-emerald-50 rounded-xl border border-emerald-200/80">
                {{ session('success') }}
            </div>
        @endif

        <!-- Details Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200/80 p-6 md:p-8 space-y-6">
            
            <!-- Image & Basic Info Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pb-6 border-b border-slate-100 items-center">
                <!-- Product Image -->
                <div class="flex justify-center md:justify-start">
                    @if (!empty($Product['image']))
                        <img src="{{ asset( $Product['image']) }}" alt="Product Image" class="w-32 h-32 object-cover rounded-xl border border-slate-200 shadow-sm">
                    @else
                        <div class="w-32 h-32 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-400 text-xs font-medium text-center p-2">
                            No Image Found
                        </div>
                    @endif
                </div>

                <div class="md:col-span-2 space-y-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Product Name</span>
                        <h3 class="text-xl font-bold text-slate-900 mt-0.5">{{ $Product['name'] }}</h3>
                    </div>

                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Category</span>
                        <div class="mt-1">
                            @php
                                $categoryName = 'Uncategorized';
                                foreach ($Catogrys as $Cat) {
                                    if ($Cat['id'] == $Product['category_id']) {
                                        $categoryName = $Cat['name'];
                                        break;
                                    }
                                }
                            @endphp
                            <span class="px-2.5 py-1 bg-indigo-50 text-indigo-700 text-xs font-semibold rounded-lg">
                                {{ $categoryName }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="pb-6 border-b border-slate-100">
                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Description</span>
                <p class="text-sm text-slate-600 mt-1 leading-relaxed">
                    {{ $Product['description'] ?: 'No description provided.' }}
                </p>
            </div>

            <!-- Price & Quantity Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pb-6 border-b border-slate-100">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Price</span>
                    <p class="text-xl font-extrabold text-indigo-600 mt-1">${{ number_format($Product['price'], 2) }}</p>
                </div>

                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Stock Quantity</span>
                    <p class="text-lg font-bold text-slate-800 mt-1">{{ $Product['quantity'] }} units</p>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between pt-2">
                <a href="{{ route('editProduct', $Product['id']) }}" class="px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-xl shadow-sm transition">
                    Edit Product
                </a>

                <form action="{{ route('destroyProduct', $Product['id']) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-5 py-2.5 bg-red-50 hover:bg-red-100 text-red-600 text-sm font-semibold rounded-xl transition">
                        Delete Product
                    </button>
                </form>
            </div>

        </div>

    </div>
@endsection
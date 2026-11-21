@extends('layouts.app')

@section('title', 'Products List')

@section('content')
    <div class="max-w-7xl mx-auto">
        
        <!-- Page Header & Action Button -->
        <div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Products Management</h1>
                <p class="text-sm text-slate-500 mt-1">View and manage all store products.</p>
            </div>
            <a href="{{ route('addProduct') }}" class="inline-flex items-center justify-center px-4 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-xl shadow-sm transition">
                + Add Product
            </a>
        </div>

        <!-- Success Message Alert -->
        @if (session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm rounded-xl shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        <!-- Products Table Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200/80 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50/75 border-b border-slate-200 text-slate-400 text-xs font-bold uppercase tracking-wider">
                            <th class="py-4 px-6"># ID</th>
                            <th class="py-4 px-6">Image</th>
                            <th class="py-4 px-6">Name</th>
                            <th class="py-4 px-6">Description</th>
                            <th class="py-4 px-6">Price</th>
                            <th class="py-4 px-6">Quantity</th>
                            <th class="py-4 px-6">Category</th>
                            <th class="py-4 px-6 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
                        @forelse ($Products as $Product)
                            <tr class="hover:bg-slate-50/50 transition items-center">
                                <!-- ID -->
                                <td class="py-4 px-6 font-semibold text-slate-900">#{{ $Product['id'] }}</td>

                                <!-- Image -->
                                <td class="py-4 px-6">
                                    @if ($Product['image'] != null)
                                        <img src="{{ asset($Product['image']) }}" alt="Product Image" class="w-12 h-12 object-cover rounded-lg border border-slate-200 shadow-sm">
                                    @else
                                        <span class="text-xs text-slate-400 italic">No Found Image ...</span>
                                    @endif
                                </td>

                                <!-- Name -->
                                <td class="py-4 px-6 font-medium text-slate-900">
                                    <a href="{{ route('Product', $Product['id']) }}" class="hover:text-indigo-600 transition">
                                        {{ $Product['name'] }}
                                    </a>
                                </td>

                                <!-- Description -->
                                <td class="py-4 px-6 text-slate-500 truncate max-w-xs">{{ $Product['description'] }}</td>

                                <!-- Price -->
                                <td class="py-4 px-6 font-semibold text-slate-900">${{ $Product['price'] }}</td>

                                <!-- Quantity -->
                                <td class="py-4 px-6">
                                    <span class="px-2.5 py-1 bg-slate-100 text-slate-700 text-xs font-medium rounded-lg">
                                        {{ $Product['quantity'] }}
                                    </span>
                                </td>

                                <!-- Category -->
                                <td class="py-4 px-6">
                                    @foreach ($Catogrys as $Cat)
                                        @if ($Cat['id'] == $Product['category_id'])
                                            <span class="px-2.5 py-1 bg-indigo-50 text-indigo-700 text-xs font-semibold rounded-lg">
                                                {{ $Cat['name'] }}
                                            </span>
                                        @endif
                                    @endforeach
                                </td>

                                <!-- Show It Action -->
                                <td class="py-4 px-6 text-right">
                                    <a href="{{ route('Product', $Product['id']) }}" class="inline-flex px-3 py-1.5 bg-indigo-50 text-indigo-700 text-xs font-medium rounded-lg hover:bg-indigo-100 transition">
                                        Show
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="py-12 text-center text-slate-400">
                                    No products found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
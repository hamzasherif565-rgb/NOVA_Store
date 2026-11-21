@extends('layouts.app')

@section('title', $Category['name'] ?? 'Category Details')

@section('content')
    <div class="max-w-3xl mx-auto">
        
        <!-- Page Header & Actions -->
        <div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Category Details</h1>
                <p class="text-sm text-slate-500 mt-1">Viewing information for category #{{ $Category['id'] }}</p>
            </div>
            <div class="flex items-center space-x-3">
                <a href="{{ route('Categorys') }}" class="px-4 py-2 text-xs font-semibold text-slate-600 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition shadow-sm">
                    &larr; Back to List
                </a>
                <a href="{{ route('editCategory', $Category['id']) }}" class="px-4 py-2 text-xs font-semibold text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 transition shadow-sm">
                    Edit Category
                </a>
            </div>
        </div>

        <!-- Details Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200/80 overflow-hidden p-6 md:p-8 space-y-6">
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- ID -->
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Category ID</span>
                    <p class="text-lg font-bold text-slate-900 mt-1">#{{ $Category['id'] }}</p>
                </div>

                <!-- Name -->
                <div class="md:col-span-2">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Category Name</span>
                    <p class="text-lg font-bold text-slate-900 mt-1">{{ $Category['name'] }}</p>
                </div>
            </div>

            <!-- Description -->
            <div class="border-t border-slate-100 pt-6">
                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Description</span>
                <p class="text-slate-600 mt-2 leading-relaxed bg-slate-50 p-4 rounded-xl border border-slate-100">
                    {{ $Category['description'] ?? 'No description provided for this category.' }}
                </p>
            </div>

            <!-- Danger Zone / Delete Form -->
            <div class="border-t border-slate-100 pt-6 flex items-center justify-between">
                <div>
                    <h4 class="text-sm font-semibold text-slate-900">Delete Category</h4>
                    <p class="text-xs text-slate-500">Once deleted, this category cannot be recovered.</p>
                </div>
                <form action="{{ route('destroyCategory', $Category['id']) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-50 text-red-600 hover:bg-red-100 text-xs font-semibold rounded-xl transition">
                        Delete Category
                    </button>
                </form>
            </div>

        </div>

    </div>
@endsection
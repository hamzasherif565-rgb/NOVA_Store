@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <div class="max-w-2xl mx-auto">
        
        <!-- Page Header -->
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Edit Product</h1>
                <p class="text-sm text-slate-500 mt-1">Update details for product: {{ $Product['name'] }}</p>
            </div>
            <a href="{{ route('Products') }}" class="px-4 py-2 text-xs font-semibold text-slate-600 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition shadow-sm">
                &larr; Back to Products
            </a>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200/80 p-6 md:p-8">
            <form action="{{ route('UpdateProduct', $Product['id']) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Current / Preview Image Section -->
                <div class="flex items-center space-x-4 p-4 bg-slate-50 rounded-xl border border-slate-200">
                    @if ($Product['image'] != null)
                        <div class="shrink-0">
                            <img src="{{ asset($Product['image']) }}" alt="Product Image" class="w-20 h-20 object-cover rounded-lg border border-slate-200 shadow-sm">
                        </div>
                    @else
                        <div class="shrink-0 w-20 h-20 bg-slate-200 rounded-lg flex items-center justify-center text-xs text-slate-400 font-medium">
                            No Image
                        </div>
                    @endif
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-1">Product Image</span>
                        <input type="hidden" name="old_image" value="{{ $Product['image'] }}">
                        <input type="file" name="image" class="block w-full text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 transition">
                    </div>
                </div>

                <!-- Name Field -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1.5">Name</label>
                    <input type="text" name="name" value="{{ old('name', $Product['name']) }}" class="w-full rounded-xl border-slate-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="mt-1.5 text-xs text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description Field -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1.5">Description</label>
                    <textarea name="description" rows="3" class="w-full rounded-xl border-slate-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description', $Product['description']) }}</textarea>
                </div>

                <!-- Price & Quantity Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1.5">Price</label>
                        <input type="text" name="price" value="{{ old('price', $Product['price']) }}" class="w-full rounded-xl border-slate-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1.5">Quantity</label>
                        <input type="text" name="quantity" value="{{ old('quantity', $Product['quantity']) }}" class="w-full rounded-xl border-slate-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                </div>

                <!-- Select Category -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1.5">Select Category</label>
                    <select name="category_id" class="w-full rounded-xl border-slate-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        @foreach ($Catogrys as $Cat)
                            <option value="{{ $Cat['id'] }}" {{ $Product['category_id'] == $Cat['id'] ? 'selected' : '' }}>
                                {{ $Cat['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Form Actions -->
                <div class="flex items-center justify-end space-x-3 pt-4 border-t border-slate-100">
                    <a href="{{ route('Products') }}" class="px-5 py-2.5 text-sm font-medium text-slate-600 hover:text-slate-800 transition">
                        Cancel
                    </a>
                    <button type="submit" class="px-6 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-xl shadow-sm transition">
                        Save
                    </button>
                </div>
            </form>
        </div>

    </div>
@endsection
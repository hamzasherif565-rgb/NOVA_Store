@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
    <div class="max-w-2xl mx-auto">

        <!-- Page Header -->
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Edit Category</h1>
                <p class="text-sm text-slate-500 mt-1">Update information for category: {{ $Category->name }}</p>
            </div>
            <a href="{{ route('Categorys') }}"
                class="px-4 py-2 text-xs font-semibold text-slate-600 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition shadow-sm">
                &larr; Back to Categories
            </a>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200/80 p-6 md:p-8">
            <form action="{{ route('updateCategory', $Category->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Edit Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-slate-700 mb-1.5">Edit Name:</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $Category->name) }}"
                        class="w-full rounded-xl border-slate-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('name') border-red-500 @enderror" />

                    @error('name')
                        <p class="mt-1.5 text-xs text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Edit Description Field -->
                <div>
                    <label for="description" class="block text-sm font-medium text-slate-700 mb-1.5">Edit
                        Description:</label>
                    <input type="text" id="description" name="description"
                        value="{{ old('description', $Category->description) }}"
                        class="w-full rounded-xl border-slate-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('description') border-red-500 @enderror" />

                    @error('description')
                        <p class="mt-1.5 text-xs text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Form Actions -->
                <div class="flex items-center justify-end space-x-3 pt-4 border-t border-slate-100">
                    <a href="{{ route('Categorys') }}"
                        class="px-5 py-2.5 text-sm font-medium text-slate-600 hover:text-slate-800 transition">
                        Cancel
                    </a>
                    <button type="submit"
                        class="px-6 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-xl shadow-sm transition">
                        Save
                    </button>
                </div>
            </form>
        </div>

    </div>
@endsection

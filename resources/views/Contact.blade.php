@extends('layouts.app')

@section('title', 'Contact Us - NovaStore')

@section('content')
    <div class="max-w-4xl mx-auto py-6">
        
        <!-- Page Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-slate-900">Get in Touch</h1>
            <p class="text-sm text-slate-500 mt-2">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
        </div>

        <!-- Success Message Alert (إذا تم إرسال الرسالة بنجاح) -->
        @if (session('success'))
            <div class="mb-6 p-4 text-xs font-medium text-emerald-700 bg-emerald-50 rounded-xl border border-emerald-200/80 text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Contact Info Cards -->
            <div class="space-y-4">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 text-center">
                    <div class="w-10 h-10 mx-auto bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center mb-3 font-bold">
                        📍
                    </div>
                    <h3 class="text-sm font-bold text-slate-900">Our Location</h3>
                    <p class="text-xs text-slate-500 mt-1">123 Nova Street, Cairo, Egypt</p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 text-center">
                    <div class="w-10 h-10 mx-auto bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center mb-3 font-bold">
                        📞
                    </div>
                    <h3 class="text-sm font-bold text-slate-900">Phone Number</h3>
                    <p class="text-xs text-slate-500 mt-1">+20 123 456 7890</p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 text-center">
                    <div class="w-10 h-10 mx-auto bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center mb-3 font-bold">
                        ✉️
                    </div>
                    <h3 class="text-sm font-bold text-slate-900">Email Address</h3>
                    <p class="text-xs text-slate-500 mt-1">support@novastore.com</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="md:col-span-2 bg-white rounded-2xl shadow-sm border border-slate-200/80 p-6 md:p-8">
                <form action="#" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-700">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="John Doe" required
                               class="block mt-1.5 w-full rounded-xl border-slate-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="you@example.com" required
                               class="block mt-1.5 w-full rounded-xl border-slate-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-slate-700">Message</label>
                        <textarea id="message" name="message" rows="4" placeholder="How can we help you?" required
                                  class="block mt-1.5 w-full rounded-xl border-slate-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full py-3 px-4 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-xl shadow-sm transition focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>

        </div>

    </div>
@endsection
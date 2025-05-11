@extends('layouts.dashboard')

@section('content')
    <main class="max-w-7xl mx-auto px-4 py-8 mt-20 md:mt-0 flex items-center justify-center min-h-[60vh]">
        <div class="w-full max-w-md bg-black/40 backdrop-blur-xl border border-white/5 rounded-2xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-white mb-6 text-center">Balance Top-Up</h2>
            @if(session('success'))
                <div class="mb-4 text-green-500 text-center">{{ session('success') }}</div>
            @endif
            @if($errors->any())
                <div class="mb-4 text-red-500 text-center">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            <form method="POST" action="{{ route('dashboard.admin.add-balance') }}" class="space-y-6">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-1">User Email</label>
                    <input type="email" name="email" id="email" required class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="user@email.com" value="{{ old('email') }}">
                </div>
                <div>
                    <label for="balance" class="block text-sm font-medium text-gray-300 mb-1">Top-Up Amount</label>
                    <input type="number" name="balance" id="balance" required min="0" step="0.01" class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter amount" value="{{ old('balance') }}">
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold py-3 rounded-xl shadow-lg hover:scale-105 transition-all duration-200">Credit</button>
            </form>
        </div>
    </main>
@endsection

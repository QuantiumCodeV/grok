@extends('layouts.app')

@section('content')
    <div class="w-full max-w-md relative">
        <div class="relative group" style="opacity: 1;">
            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600/20 via-purple-600/20 to-blue-600/20 rounded-xl blur-xl opacity-75 group-hover:opacity-100 transition-all duration-500"></div>
            <div class="relative space-y-8 bg-gray-800/50 backdrop-blur-lg p-8 rounded-xl border border-white/5 bg-gradient-to-b from-white/5 to-transparent">
                <div style="opacity: 1; transform: none;">
                    <form method="POST" action="{{ route('register') }}" class="space-y-6" style="opacity: 1;">
                        @csrf
                        <div class="space-y-4">
                            <div style="opacity: 1; transform: none;">
                                <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Full Name</label>
                                <div class="relative group/field">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user h-5 w-5 text-gray-500 group-hover/field:text-blue-400 transition-colors duration-300">
                                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                    <input id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus class="block w-full pl-10 pr-10 py-2 bg-gray-700/50 backdrop-blur-sm border border-gray-600 rounded-lg text-white shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 hover:border-gray-500 transition-all duration-300" placeholder="Enter your full name" type="text" value="">
                                </div>
                            </div>

                            @error('name')
                            <div class="bg-red-500/10 backdrop-blur-sm border border-red-500/50 text-red-500 p-3 rounded-lg flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-alert h-4 w-4">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" x2="12" y1="8" y2="12"></line>
                                    <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                </svg>
                                <span>{{ $message }}</span>
                            </div>
                            @enderror

                            <div style="opacity: 1; transform: none;">
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email Address</label>
                                <div class="relative group/field">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail h-5 w-5 text-gray-500 group-hover/field:text-blue-400 transition-colors duration-300">
                                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                        </svg>
                                    </div>
                                    <input id="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="block w-full pl-10 pr-10 py-2 bg-gray-700/50 backdrop-blur-sm border border-gray-600 rounded-lg text-white shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 hover:border-gray-500 transition-all duration-300" placeholder="Enter your email" type="email" value="">
                                </div>
                            </div>

                            @error('email')
                            <div class="bg-red-500/10 backdrop-blur-sm border border-red-500/50 text-red-500 p-3 rounded-lg flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-alert h-4 w-4">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" x2="12" y1="8" y2="12"></line>
                                    <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                </svg>
                                <span>{{ $message }}</span>
                            </div>
                            @enderror

                            <div style="opacity: 1; transform: none;">
                                <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                                <div class="relative group/field">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock h-5 w-5 text-gray-500 group-hover/field:text-blue-400 transition-colors duration-300">
                                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>
                                    <input id="password" name="password" required autocomplete="new-password" class="block w-full pl-10 pr-10 py-2 bg-gray-700/50 backdrop-blur-sm border border-gray-600 rounded-lg text-white shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 hover:border-gray-500 transition-all duration-300" placeholder="Create a password" type="password">
                                    <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye h-5 w-5 text-gray-500 hover:text-gray-400 transition-colors duration-300">
                                            <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            @error('password')
                            <div class="bg-red-500/10 backdrop-blur-sm border border-red-500/50 text-red-500 p-3 rounded-lg flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-alert h-4 w-4">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" x2="12" y1="8" y2="12"></line>
                                    <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                </svg>
                                <span>{{ $message }}</span>
                            </div>
                            @enderror

                            <div style="opacity: 1; transform: none;">
                                <label for="repeatPassword" class="block text-sm font-medium text-gray-300 mb-1">Confirm Password</label>
                                <div class="relative group/field">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye h-5 w-5 text-gray-500 hover:text-gray-400 transition-colors duration-300">
                                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>
                                    <input id="repeatPassword" name="password_confirmation" required autocomplete="new-password" class="block w-full pl-10 pr-10 py-2 bg-gray-700/50 backdrop-blur-sm border border-gray-600 rounded-lg text-white shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 hover:border-gray-500 transition-all duration-300" placeholder="Confirm your password" type="password">
                                    <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye h-5 w-5 text-gray-500 hover:text-gray-400 transition-colors duration-300">
                                            <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div style="opacity: 1; transform: none;"><label class="flex items-center text-sm text-gray-300">
                                    <input type="checkbox" class="mr-2" required>I agree with the <span class="text-blue-400 ml-2"><a href="/privacy" data-discover="true"> Privacy Policy</a></span></label></div>
                        </div>
                        <div style="opacity: 1; transform: none;"><button type="submit" class="w-full py-3 bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-lg transition-colors duration-300 ">Register</button></div>
                        <div style="opacity: 1; transform: none;">
                            <p class="text-sm text-center text-gray-400">Already have an account? <a class="text-blue-400 hover:underline" href="/login" data-discover="true">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

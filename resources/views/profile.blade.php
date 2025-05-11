@extends('layouts.dashboard')

@section('content')
    <main class="max-w-7xl mx-auto px-4 py-8 mt-20 md:mt-0">
        <div class="relative">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-600/5 to-pink-600/5 rounded-2xl blur-3xl"></div>
            <div class="relative">
                <div class="space-y-8" style="opacity: 1;">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12 lg:col-span-4 space-y-6">
                            <div class="text-card-foreground shadow bg-black/40 backdrop-blur-xl border border-white/5 rounded-3xl overflow-hidden">
                                <div class="p-8 text-center border-b border-white/5 space-y-4">
                                    <div class="relative w-24 h-24 mx-auto">
                                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full blur-xl opacity-50"></div>
                                        <div class="relative w-24 h-24 bg-black/40 rounded-full border-2 border-white/10 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-12 h-12 text-white/60">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <h2 class="text-xl font-bold text-white">{{ auth()->user()->name }}</h2>
                                        <p class="text-sm text-gray-400">{{ auth()->user()->email }}</p>
                                    </div>
                                    <div class="flex items-center justify-center gap-2 text-sm text-gray-400">
                                        <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
                                        <span>Active Account</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-card-foreground shadow bg-black/40 backdrop-blur-xl border border-white/5 rounded-3xl overflow-hidden">
                                <div class="flex flex-col space-y-1.5 p-6 px-6 py-4 border-b border-white/5">
                                    <div class="tracking-tight text-lg font-semibold text-white flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet w-5 h-5 text-blue-400">
                                            <path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path>
                                            <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                                        </svg>
                                        Coin Balance
                                    </div>
                                </div>
                                <div class="p-6 space-y-4">
                                    <div class="bg-gradient-to-r from-blue-500/10 to-purple-500/10 p-4 rounded-xl">
                                        <p class="text-sm text-gray-400">Available Balance</p>
                                        <p class="text-3xl font-bold text-white mt-1">{{ auth()->user()->balance }} $GROK</p>
                                        <p class="text-lg text-green-400 mt-1">${{ number_format(auth()->user()->balance * 4.78, 2) }}</p>
                                    </div>
                                    <div class="flex items-center justify-between text-sm p-3 bg-white/5 rounded-xl"><span class="text-gray-400">Price per Coin</span><span class="text-white font-medium">$4.78</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-8 space-y-6">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                <h1 class="text-3xl font-bold text-transparent bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text" style="transform: none;">Settings</h1>
                            </div>
                            <div class="text-card-foreground shadow bg-black/40 backdrop-blur-xl border border-white/5 rounded-3xl">
                                <div class="p-6">
                                    <form id="profile-form" class="space-y-6">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <div class="space-y-2">
                                                <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm text-gray-400" for="name">Full Name</label>
                                                <div class="relative group">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400 group-hover:text-blue-400 transition-colors">
                                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                    <input class="flex h-9 px-3 text-base shadow-sm file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 md:text-sm w-full bg-black/40 border border-white/10 rounded-xl pl-12 pr-4 py-3 text-white focus:border-blue-500/50 focus:ring-2 focus:ring-blue-500/20 transition-all" id="name" type="text" value="{{ auth()->user()->name }}">
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm text-gray-400" for="email">Email Address</label>
                                                <div class="relative group">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400 group-hover:text-blue-400 transition-colors">
                                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                                    </svg>
                                                    <input class="flex h-9 px-3 text-base shadow-sm file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 md:text-sm w-full bg-black/40 border border-white/10 rounded-xl pl-12 pr-4 py-3 text-white focus:border-blue-500/50 focus:ring-2 focus:ring-blue-500/20 transition-all" id="email" type="email" value="{{ auth()->user()->email }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-gradient-to-r from-blue-500/5 to-purple-500/5 rounded-xl p-4 text-sm text-gray-400">
                                            <p>Member since 2025</p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

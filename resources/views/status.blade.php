@extends('layouts.dashboard')

@section('content')
    <main class="max-w-7xl mx-auto px-4 py-8 mt-20 md:mt-0">
        <div class="relative">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-600/5 to-pink-600/5 rounded-2xl blur-3xl"></div>
            <div class="relative">
                <div class="relative min-h-screen text-white">
                    <div class="absolute inset-0 backdrop-blur-3xl"></div>
                    <div class="relative">
                        <div class="max-w-[1400px] mx-auto px-4 py-6 sm:py-12">
                            <div class="mb-6 sm:mb-12 space-y-2 sm:space-y-4" style="opacity: 1; transform: none;">
                                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-white via-white to-blue-400 bg-clip-text text-transparent">Status Tiers</h1>
                                <p class="text-base sm:text-lg text-gray-300 max-w-2xl leading-relaxed">Explore our exclusive membership tiers and unlock premium benefits.</p>
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8">
                                <div class="lg:col-span-7 space-y-4 sm:space-y-6">
                                    <div class="grid gap-3 sm:gap-4" style="opacity: 1; transform: none;">
                                        <div style="opacity: 1; transform: none;">
                                            <div class="
																group relative cursor-pointer
																bg-black/40 backdrop-blur-xl
																border border-white/5 rounded-2xl overflow-hidden
																transition-all duration-300
																hover:border-blue-500/50
																" tabindex="0">
                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                <div class="relative p-4 sm:p-6">
                                                    <div class="flex items-center gap-3 sm:gap-4">
                                                        <div class="relative">
                                                            <div class="w-10 h-10 sm:w-14 sm:h-14 rounded-xl bg-black/40 flex items-center justify-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-medal w-5 h-5 sm:w-7 sm:h-7 text-blue-400 group-hover:scale-110 transition-transform duration-300">
                                                                    <path d="M7.21 15 2.66 7.14a2 2 0 0 1 .13-2.2L4.4 2.8A2 2 0 0 1 6 2h12a2 2 0 0 1 1.6.8l1.6 2.14a2 2 0 0 1 .14 2.2L16.79 15"></path>
                                                                    <path d="M11 12 5.12 2.2"></path>
                                                                    <path d="m13 12 5.88-9.8"></path>
                                                                    <path d="M8 7h8"></path>
                                                                    <circle cx="12" cy="17" r="5"></circle>
                                                                    <path d="M12 18v-2h-.5"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <div class="flex flex-wrap items-center gap-2 sm:gap-3">
                                                                <h3 class="text-base sm:text-lg font-semibold text-white group-hover:text-blue-400 transition-colors">Bronze Status</h3>
                                                                <div class="
																					px-2 py-0.5 rounded-full text-xs font-medium
																					bg-white/5 text-gray-400
																					transition-colors duration-300
																					">TIER</div>
                                                            </div>
                                                            <p class="text-xs sm:text-sm text-gray-400 mt-0.5">100 - 250 tokens</p>
                                                        </div>
                                                    </div>
                                                    <div class="overflow-hidden" style="height: 0px; opacity: 0;">
                                                        <div class="mt-4 sm:mt-6 pt-4 sm:pt-6 border-t border-white/5">
                                                            <div class="grid gap-2 sm:gap-3">
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Priority support via Discord</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Bronze member badge on X</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Entry to monthly token holder giveaways</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="opacity: 1; transform: none;">
                                            <div class="
																group relative cursor-pointer
																bg-black/40 backdrop-blur-xl
																border border-white/5 rounded-2xl overflow-hidden
																transition-all duration-300
																hover:border-blue-500/50
																" tabindex="0" style="transform: none;">
                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                <div class="relative p-4 sm:p-6">
                                                    <div class="flex items-center gap-3 sm:gap-4">
                                                        <div class="relative">
                                                            <div class="w-10 h-10 sm:w-14 sm:h-14 rounded-xl bg-black/40 flex items-center justify-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-medal w-5 h-5 sm:w-7 sm:h-7 text-blue-400 group-hover:scale-110 transition-transform duration-300">
                                                                    <path d="M7.21 15 2.66 7.14a2 2 0 0 1 .13-2.2L4.4 2.8A2 2 0 0 1 6 2h12a2 2 0 0 1 1.6.8l1.6 2.14a2 2 0 0 1 .14 2.2L16.79 15"></path>
                                                                    <path d="M11 12 5.12 2.2"></path>
                                                                    <path d="m13 12 5.88-9.8"></path>
                                                                    <path d="M8 7h8"></path>
                                                                    <circle cx="12" cy="17" r="5"></circle>
                                                                    <path d="M12 18v-2h-.5"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <div class="flex flex-wrap items-center gap-2 sm:gap-3">
                                                                <h3 class="text-base sm:text-lg font-semibold text-white group-hover:text-blue-400 transition-colors">Silver Status</h3>
                                                                <div class="
																					px-2 py-0.5 rounded-full text-xs font-medium
																					bg-white/5 text-gray-400
																					transition-colors duration-300
																					">TIER</div>
                                                            </div>
                                                            <p class="text-xs sm:text-sm text-gray-400 mt-0.5">250 - 1,000 tokens</p>
                                                        </div>
                                                    </div>
                                                    <div class="overflow-hidden" style="height: 0px; opacity: 0;">
                                                        <div class="mt-4 sm:mt-6 pt-4 sm:pt-6 border-t border-white/5">
                                                            <div class="grid gap-2 sm:gap-3">
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">All Bronze benefits</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Exclusive Silver member badge on X</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Access to private Silver holders chat</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Early access to new X features</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Voting rights on community proposals</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="opacity: 1; transform: none;">
                                            <div class="
																group relative cursor-pointer
																bg-black/40 backdrop-blur-xl
																border border-white/5 rounded-2xl overflow-hidden
																transition-all duration-300
																hover:border-blue-500/50
																" tabindex="0">
                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                <div class="relative p-4 sm:p-6">
                                                    <div class="flex items-center gap-3 sm:gap-4">
                                                        <div class="relative">
                                                            <div class="w-10 h-10 sm:w-14 sm:h-14 rounded-xl bg-black/40 flex items-center justify-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-medal w-5 h-5 sm:w-7 sm:h-7 text-blue-400 group-hover:scale-110 transition-transform duration-300">
                                                                    <path d="M7.21 15 2.66 7.14a2 2 0 0 1 .13-2.2L4.4 2.8A2 2 0 0 1 6 2h12a2 2 0 0 1 1.6.8l1.6 2.14a2 2 0 0 1 .14 2.2L16.79 15"></path>
                                                                    <path d="M11 12 5.12 2.2"></path>
                                                                    <path d="m13 12 5.88-9.8"></path>
                                                                    <path d="M8 7h8"></path>
                                                                    <circle cx="12" cy="17" r="5"></circle>
                                                                    <path d="M12 18v-2h-.5"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <div class="flex flex-wrap items-center gap-2 sm:gap-3">
                                                                <h3 class="text-base sm:text-lg font-semibold text-white group-hover:text-blue-400 transition-colors">Gold Status</h3>
                                                                <div class="
																					px-2 py-0.5 rounded-full text-xs font-medium
																					bg-white/5 text-gray-400
																					transition-colors duration-300
																					">TIER</div>
                                                            </div>
                                                            <p class="text-xs sm:text-sm text-gray-400 mt-0.5">1,000 - 5,000 tokens</p>
                                                        </div>
                                                    </div>
                                                    <div class="overflow-hidden" style="height: 0px; opacity: 0;">
                                                        <div class="mt-4 sm:mt-6 pt-4 sm:pt-6 border-t border-white/5">
                                                            <div class="grid gap-2 sm:gap-3">
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">All Silver benefits</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Verified Gold member badge</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Exclusive Gold holders monthly calls</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Access to private investment group</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Early withdrawal options before listing</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="opacity: 1; transform: none;">
                                            <div class="
																group relative cursor-pointer
																bg-black/40 backdrop-blur-xl
																border border-white/5 rounded-2xl overflow-hidden
																transition-all duration-300
																hover:border-blue-500/50
																" tabindex="0" style="transform: none;">
                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                <div class="relative p-4 sm:p-6">
                                                    <div class="flex items-center gap-3 sm:gap-4">
                                                        <div class="relative">
                                                            <div class="w-10 h-10 sm:w-14 sm:h-14 rounded-xl bg-black/40 flex items-center justify-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-medal w-5 h-5 sm:w-7 sm:h-7 text-blue-400 group-hover:scale-110 transition-transform duration-300">
                                                                    <path d="M7.21 15 2.66 7.14a2 2 0 0 1 .13-2.2L4.4 2.8A2 2 0 0 1 6 2h12a2 2 0 0 1 1.6.8l1.6 2.14a2 2 0 0 1 .14 2.2L16.79 15"></path>
                                                                    <path d="M11 12 5.12 2.2"></path>
                                                                    <path d="m13 12 5.88-9.8"></path>
                                                                    <path d="M8 7h8"></path>
                                                                    <circle cx="12" cy="17" r="5"></circle>
                                                                    <path d="M12 18v-2h-.5"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <div class="flex flex-wrap items-center gap-2 sm:gap-3">
                                                                <h3 class="text-base sm:text-lg font-semibold text-white group-hover:text-blue-400 transition-colors">Platinum Status</h3>
                                                                <div class="
																					px-2 py-0.5 rounded-full text-xs font-medium
																					bg-white/5 text-gray-400
																					transition-colors duration-300
																					">TIER</div>
                                                            </div>
                                                            <p class="text-xs sm:text-sm text-gray-400 mt-0.5">5,000 - 25,000 tokens</p>
                                                        </div>
                                                    </div>
                                                    <div class="overflow-hidden" style="height: 0px; opacity: 0;">
                                                        <div class="mt-4 sm:mt-6 pt-4 sm:pt-6 border-t border-white/5">
                                                            <div class="grid gap-2 sm:gap-3">
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">All Gold benefits</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Elite Platinum badge with special features</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Direct line to project advisors</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Quarterly strategy meetings with team</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Exclusive pre-listing allocation rights</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Access to high-level networking events</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Priority for future X ecosystem airdrops</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="opacity: 1; transform: none;">
                                            <div class="
																group relative cursor-pointer
																bg-black/40 backdrop-blur-xl
																border border-white/5 rounded-2xl overflow-hidden
																transition-all duration-300
																hover:border-blue-500/50
																" tabindex="0">
                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                <div class="relative p-4 sm:p-6">
                                                    <div class="flex items-center gap-3 sm:gap-4">
                                                        <div class="relative">
                                                            <div class="w-10 h-10 sm:w-14 sm:h-14 rounded-xl bg-black/40 flex items-center justify-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-medal w-5 h-5 sm:w-7 sm:h-7 text-blue-400 group-hover:scale-110 transition-transform duration-300">
                                                                    <path d="M7.21 15 2.66 7.14a2 2 0 0 1 .13-2.2L4.4 2.8A2 2 0 0 1 6 2h12a2 2 0 0 1 1.6.8l1.6 2.14a2 2 0 0 1 .14 2.2L16.79 15"></path>
                                                                    <path d="M11 12 5.12 2.2"></path>
                                                                    <path d="m13 12 5.88-9.8"></path>
                                                                    <path d="M8 7h8"></path>
                                                                    <circle cx="12" cy="17" r="5"></circle>
                                                                    <path d="M12 18v-2h-.5"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <div class="flex flex-wrap items-center gap-2 sm:gap-3">
                                                                <h3 class="text-base sm:text-lg font-semibold text-white group-hover:text-blue-400 transition-colors">Diamond Status</h3>
                                                                <div class="
																					px-2 py-0.5 rounded-full text-xs font-medium
																					bg-white/5 text-gray-400
																					transition-colors duration-300
																					">TIER</div>
                                                            </div>
                                                            <p class="text-xs sm:text-sm text-gray-400 mt-0.5">25,000 - 50,000 tokens</p>
                                                        </div>
                                                    </div>
                                                    <div class="overflow-hidden" style="height: 0px; opacity: 0;">
                                                        <div class="mt-4 sm:mt-6 pt-4 sm:pt-6 border-t border-white/5">
                                                            <div class="grid gap-2 sm:gap-3">
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">All Platinum benefits</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Rare Diamond holder badge</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Private meetings with founding team</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">First access to all new X features</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Priority allocation in future X projects</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Exclusive Diamond holder events</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Personal account manager</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Access to institutional investor insights</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="opacity: 1; transform: none;">
                                            <div class="
																group relative cursor-pointer
																bg-black/40 backdrop-blur-xl
																border border-white/5 rounded-2xl overflow-hidden
																transition-all duration-300
																hover:border-blue-500/50
																" tabindex="0">
                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                <div class="relative p-4 sm:p-6">
                                                    <div class="flex items-center gap-3 sm:gap-4">
                                                        <div class="relative">
                                                            <div class="w-10 h-10 sm:w-14 sm:h-14 rounded-xl bg-black/40 flex items-center justify-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-medal w-5 h-5 sm:w-7 sm:h-7 text-blue-400 group-hover:scale-110 transition-transform duration-300">
                                                                    <path d="M7.21 15 2.66 7.14a2 2 0 0 1 .13-2.2L4.4 2.8A2 2 0 0 1 6 2h12a2 2 0 0 1 1.6.8l1.6 2.14a2 2 0 0 1 .14 2.2L16.79 15"></path>
                                                                    <path d="M11 12 5.12 2.2"></path>
                                                                    <path d="m13 12 5.88-9.8"></path>
                                                                    <path d="M8 7h8"></path>
                                                                    <circle cx="12" cy="17" r="5"></circle>
                                                                    <path d="M12 18v-2h-.5"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <div class="flex flex-wrap items-center gap-2 sm:gap-3">
                                                                <h3 class="text-base sm:text-lg font-semibold text-white group-hover:text-blue-400 transition-colors">Legendary Status</h3>
                                                                <div class="
																					px-2 py-0.5 rounded-full text-xs font-medium
																					bg-white/5 text-gray-400
																					transition-colors duration-300
																					">TIER</div>
                                                            </div>
                                                            <p class="text-xs sm:text-sm text-gray-400 mt-0.5">50,000+ tokens</p>
                                                        </div>
                                                    </div>
                                                    <div class="overflow-hidden" style="height: 0px; opacity: 0;">
                                                        <div class="mt-4 sm:mt-6 pt-4 sm:pt-6 border-t border-white/5">
                                                            <div class="grid gap-2 sm:gap-3">
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">All Diamond benefits</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Unique Legendary badge (only for 50k+ holders)</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Direct influence on X ecosystem development</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Founding member status in X community</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Maximum allocation in all future X projects</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Private strategy sessions with X team</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Lifetime VIP status across X ecosystem</p>
                                                                </div>
                                                                <div class="flex items-start gap-2 sm:gap-3 group/benefit" style="opacity: 1; transform: none;">
                                                                    <div class="w-5 h-5 sm:w-6 sm:h-6 rounded-lg bg-blue-500/10 flex items-center justify-center flex-shrink-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-3 h-3 sm:w-4 sm:h-4 text-blue-400 group-hover/benefit:scale-110 transition-transform duration-300">
                                                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                                            <path d="M20 3v4"></path>
                                                                            <path d="M22 5h-4"></path>
                                                                            <path d="M4 17v2"></path>
                                                                            <path d="M5 18H3"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">Early access to all future X innovations</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 sm:p-6 rounded-2xl bg-black/40 backdrop-blur-xl border border-white/5" style="opacity: 1; transform: none;">
                                        <div class="flex items-start gap-3 sm:gap-4">
                                            <div class="p-1.5 sm:p-2 rounded-lg bg-yellow-500/10">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert w-5 h-5 sm:w-6 sm:h-6 text-yellow-400">
                                                    <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                                                    <path d="M12 9v4"></path>
                                                    <path d="M12 17h.01"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-base sm:text-lg font-semibold text-white">Important Note</h3>
                                                <p class="mt-1 text-xs sm:text-sm text-gray-300">Token holding requirements must be maintained to keep tier status and benefits.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-span-5 space-y-4 sm:space-y-6">
                                    <div class="rounded-2xl bg-black/40 backdrop-blur-xl border border-blue-500/20 overflow-hidden" style="opacity: 1; transform: none;">
                                        <div class="relative">
                                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 via-transparent to-blue-500/5"></div>
                                            <div class="relative p-4 sm:p-6 space-y-4 sm:space-y-6">
                                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4">
                                                    <div class="sm:col-span-2 bg-black/40 rounded-xl p-3 sm:p-4 border border-white/5">
                                                        <div class="flex items-center gap-3 sm:gap-4">
                                                            <div class="p-2 sm:p-3 rounded-xl bg-blue-500/10">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-5 h-5 sm:w-6 sm:h-6 text-blue-400">
                                                                    <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h3 class="text-xs sm:text-sm text-gray-400">Current Balance</h3>
                                                                <div class="space-y-0.5 sm:space-y-1">
                                                                    <p class="text-xl sm:text-2xl font-bold text-white">{{ auth()->user()->balance }} $GROK</p>
                                                                    <p class="text-xs sm:text-sm text-green-400">${{ auth()->user()->balance * 4.78 }} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bg-black/40 rounded-xl p-3 sm:p-4 border border-white/5">
                                                        <div class="flex sm:flex-col sm:h-full sm:justify-between">
                                                            <p class="text-xs sm:text-sm text-gray-400">Current Tier</p>
                                                            <div class="flex items-center gap-2 ml-auto sm:ml-0 sm:mt-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-medal w-4 h-4 sm:w-5 sm:h-5 text-blue-400">
                                                                    <path d="M7.21 15 2.66 7.14a2 2 0 0 1 .13-2.2L4.4 2.8A2 2 0 0 1 6 2h12a2 2 0 0 1 1.6.8l1.6 2.14a2 2 0 0 1 .14 2.2L16.79 15"></path>
                                                                    <path d="M11 12 5.12 2.2"></path>
                                                                    <path d="m13 12 5.88-9.8"></path>
                                                                    <path d="M8 7h8"></path>
                                                                    <circle cx="12" cy="17" r="5"></circle>
                                                                    <path d="M12 18v-2h-.5"></path>
                                                                </svg>
                                                                <p class="text-base sm:text-lg font-semibold text-blue-400">{{ auth()->user()->status }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space-y-3 sm:space-y-4">
                                                    <div class="flex justify-between items-end">
                                                        <div>
                                                            <h3 class="text-xs sm:text-sm text-gray-400">Progress to {{ auth()->user()->next_status ?? 'Max Status' }}</h3>
                                                            <p class="text-xs text-gray-500 mt-0.5 sm:mt-1">
                                                                @php
                                                                    $nextThreshold = null;
                                                                    $statuses = [
                                                                        ['threshold' => 100, 'name' => 'Bronze Status'],
                                                                        ['threshold' => 250, 'name' => 'Silver Status'],
                                                                        ['threshold' => 1000, 'name' => 'Gold Status'],
                                                                        ['threshold' => 5000, 'name' => 'Platinum Status'],
                                                                        ['threshold' => 25000, 'name' => 'Diamond Status'],
                                                                        ['threshold' => 50000, 'name' => 'Legendary Status'],
                                                                    ];
                                                                    foreach ($statuses as $status) {
                                                                        if (auth()->user()->balance < $status['threshold']) {
                                                                            $nextThreshold = $status['threshold'];
                                                                            break;
                                                                        }
                                                                    }
                                                                @endphp
                                                                {{ $nextThreshold ? $nextThreshold . ' $GROK needed' : 'Maximum status reached' }}
                                                            </p>
                                                        </div>
                                                        <span class="text-base sm:text-lg font-semibold text-blue-400">{{ auth()->user()->status_progress }}%</span>
                                                    </div>
                                                    <div class="relative">
                                                        <div class="h-2 sm:h-3 bg-black/40 rounded-full overflow-hidden backdrop-blur-xl border border-white/5">
                                                            <div class="h-full relative bg-gradient-to-r from-blue-500 to-blue-400" style="width: {{ auth()->user()->status_progress }}%;">
                                                                <div class="absolute inset-0 bg-[linear-gradient(45deg,transparent_25%,rgba(255,255,255,0.2)_50%,transparent_75%,transparent_100%)] bg-[length:250%_250%] animate-shine"></div>
                                                            </div>
                                                        </div>
                                                        <div class="flex justify-between mt-2 text-xs text-gray-400">
                                                            <div class="flex flex-col items-start">
                                                                <span>{{ auth()->user()->balance }}</span>
                                                                <span class="text-gray-500 text-xs hidden sm:inline">${{ number_format(auth()->user()->balance * 4.78, 2) }}</span>
                                                            </div>
                                                            <div class="flex flex-col items-end">
                                                                <span>{{ $nextThreshold ?? auth()->user()->balance }}</span>
                                                                <span class="text-gray-500 text-xs hidden sm:inline">${{ number_format(($nextThreshold ?? auth()->user()->balance) * 4.78, 2) }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                                                    <div class="p-3 sm:p-4 rounded-xl bg-blue-500/5 border border-blue-500/10">
                                                        <div class="flex items-center gap-2 sm:gap-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-4 h-4 sm:w-5 sm:h-5 text-blue-400">
                                                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                                <polyline points="16 7 22 7 22 13"></polyline>
                                                            </svg>
                                                            <div>
                                                                @if($nextThreshold)
                                                                    <p class="text-xs sm:text-sm text-gray-300">
                                                                        <span class="text-white font-medium">{{ $nextThreshold - auth()->user()->balance }} $GROK</span> needed to reach {{ auth()->user()->next_status }}
                                                                    </p>
                                                                    <p class="text-xs text-gray-500 mt-0.5 sm:mt-1">${{ number_format(($nextThreshold - auth()->user()->balance) * 4.78, 2) }} needed</p>
                                                                @else
                                                                    <p class="text-xs sm:text-sm text-gray-300">
                                                                        <span class="text-white font-medium">Maximum status reached!</span>
                                                                    </p>
                                                                    <p class="text-xs text-gray-500 mt-0.5 sm:mt-1">Congratulations!</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="block" href="/dashboard/buy-coin">
                                                        <div class="h-full p-3 sm:p-4 rounded-xl bg-gradient-to-r from-blue-500/10 to-purple-500/10 border border-blue-500/10 hover:from-blue-500/20 hover:to-purple-500/20 transition-all cursor-pointer group">
                                                            <div class="h-full flex items-center justify-center sm:justify-start gap-2 sm:gap-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus w-4 h-4 sm:w-5 sm:h-5 text-blue-400 group-hover:scale-110 transition-transform">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="M12 5v14"></path>
                                                                </svg>
                                                                <p class="text-xs sm:text-sm text-gray-300 group-hover:text-white transition-colors">Buy more tokens</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 sm:p-6 rounded-2xl bg-black/40 backdrop-blur-xl border border-blue-500/20" style="opacity: 1; transform: none;">
                                        <div class="space-y-4 sm:space-y-6">
                                            <div class="grid grid-cols-2 gap-3 sm:gap-4">
                                                <div class="p-3 sm:p-4 rounded-xl bg-blue-500/5 border border-blue-500/10">
                                                    <h4 class="text-xs sm:text-sm text-gray-400">All-Time High</h4>
                                                    <p class="text-base sm:text-lg font-semibold text-white mt-1">0 $GROK</p>
                                                </div>
                                                <div class="p-3 sm:p-4 rounded-xl bg-blue-500/5 border border-blue-500/10">
                                                    <h4 class="text-xs sm:text-sm text-gray-400">Member Since</h4>
                                                    <p class="text-base sm:text-lg font-semibold text-white mt-1">April 2025</p>
                                                </div>
                                            </div>
                                            <div class="space-y-3">
                                                <a href="/dashboard/buy-coin">
                                                    <button class="whitespace-nowrap font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary shadow hover:bg-primary/90 h-9 w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white p-2.5 sm:p-3 rounded-xl hover:shadow-lg transform hover:scale-105 transition-all flex items-center justify-center gap-2 text-sm sm:text-base">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus w-3.5 h-3.5 sm:w-4 sm:h-4">
                                                            <path d="M5 12h14"></path>
                                                            <path d="M12 5v14"></path>
                                                        </svg>
                                                        Upgrade Status
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

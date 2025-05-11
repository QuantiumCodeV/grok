@extends('layouts.dashboard')

@section('content')
    <main class="max-w-7xl mx-auto px-4 py-8 mt-20 md:mt-0">
        <div class="relative">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-600/5 to-pink-600/5 rounded-2xl blur-3xl"></div>
            <div class="relative">
                <div class="space-y-2" style="opacity: 1;">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12 lg:col-span-7 space-y-6">
                            <div class="mb-6" style="opacity: 1; transform: none;">
                                <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-white via-blue-400 to-purple-400 bg-clip-text text-transparent">Dashboard</h1>
                            </div>
                            <div class="gap-6">
                                <div class="relative group h-full">
                                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-emerald-500/5 to-blue-500/10 opacity-20 pointer-events-none rounded-2xl group-hover:opacity-30 transition-opacity"></div>
                                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-600 opacity-10 group-hover:opacity-20 blur-xl transition-all duration-300"></div>
                                    <div class="text-card-foreground bg-black/40 backdrop-blur-xl border border-white/5 rounded-2xl shadow-[0_0_30px_rgba(0,0,255,0.15)] transition-all duration-300 transform hover:scale-105 h-full">
                                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5 opacity-20 pointer-events-none rounded-2xl"></div>
                                        <div class="p-6 flex flex-col sm:flex-row sm:items-center justify-between px-6 py-4 space-y-3 sm:space-y-0">
                                            <div class="p-2 bg-blue-900/30 rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet w-6 h-6 text-blue-400">
                                                    <path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path>
                                                    <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="p-6 pt-0 px-6 pb-6">
                                            <div class="relative group h-full">
                                                <div class="flex flex-col items-start space-y-4">
                                                    <div class="space-y-4 w-full">
                                                        <div class="space-y-2">
                                                            <div class="relative">
                                                                <h3 class="text-5xl font-bold bg-gradient-to-r from-blue-400 via-blue-300 to-blue-400 bg-clip-text text-transparent group-hover:scale-105 transition-transform">{{ auth()->user()->balance }} $GROK</h3>
                                                            </div>
                                                            <div class="flex items-center gap-2">
                                                                <div class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></div>
                                                                <p class="text-gray-400 text-sm">Available Balance</p>
                                                            </div>
                                                        </div>
                                                        <div class="space-y-2">
                                                            <div class="flex flex-col">
                                                                <h3 class="text-4xl font-bold text-transparent bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text group-hover:scale-105 transition-transform">${{ number_format(auth()->user()->balance * 4.78, 2) }}</h3>
                                                            </div>
                                                            <div class="flex items-center gap-2 text-gray-400 text-sm bg-white/5 rounded-lg px-3 py-2"><span class="text-green-400">1 $GROK</span><span>=</span><span class="text-white">$4.78</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-col sm:flex-row gap-3 w-full">
                                                        <a class="flex-1" href="/dashboard/buy-coin">
                                                            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary hover:bg-primary/90 h-9 w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-3 rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign w-4 h-4">
                                                                    <line x1="12" x2="12" y1="2" y2="22"></line>
                                                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                                                </svg>
                                                                Buy Now at $4.78
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div class="w-full flex flex-wrap gap-2 pt-2">
                                                        <div class="text-xs px-3 py-1.5 bg-white/5 rounded-lg text-gray-400 flex items-center gap-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-dollar-sign w-3.5 h-3.5">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path>
                                                                <path d="M12 18V6"></path>
                                                            </svg>
                                                            Stage 3 Active: $4.78
                                                        </div>
                                                        <div class="text-xs px-3 py-1.5 bg-red-500/10 rounded-lg text-red-400 flex items-center gap-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right w-3.5 h-3.5">
                                                                <path d="M7 7h10v10"></path>
                                                                <path d="M7 17 17 7"></path>
                                                            </svg>
                                                            Stage 4 Coming: $21.60
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="opacity: 1; transform: none;">
                                <div class="text-card-foreground shadow bg-black/40 backdrop-blur-xl border border-white/5 rounded-2xl overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 via-purple-500/5 to-pink-500/5 opacity-20"></div>
                                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-purple-500 opacity-10 blur-2xl"></div>
                                    <div class="flex-col space-y-1.5 p-6 flex items-center justify-between px-6 py-4">
                                        <div class="space-y-1">
                                            <div class="tracking-tight text-xl font-semibold text-white flex items-center gap-2">
                                                $GROK Sales Progress
                                                <div class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></div>
                                            </div>
                                            <p class="text-sm text-gray-400">Real-time token sale tracking</p>
                                        </div>
                                        <div class="bg-gradient-to-r from-blue-500/10 to-purple-500/10 p-2 rounded-xl">
                                            <div class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">82.5%</div>
                                        </div>
                                    </div>
                                    <div class="p-6 pt-0 px-6 pb-6 space-y-6">
                                        <div class="grid grid-cols-2 gap-4">
                                            <div class="bg-white/5 rounded-xl p-4 backdrop-blur-sm">
                                                <p class="text-gray-400 text-sm mb-1">Raised Amount</p>
                                                <div class="text-xl font-bold text-blue-400">5&nbsp;342&nbsp;338 $GROK</div>
                                            </div>
                                            <div class="bg-white/5 rounded-xl p-4 backdrop-blur-sm">
                                                <p class="text-gray-400 text-sm mb-1">Remaining</p>
                                                <div class="text-xl font-bold text-purple-400">1&nbsp;132&nbsp;662 $GROK</div>
                                            </div>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="relative">
                                                <div class="h-4 bg-gray-800/50 rounded-full overflow-hidden backdrop-blur-sm">
                                                    <div class="h-full bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 relative" style="width: 82.5071%;">
                                                        <div class="absolute inset-0 bg-[linear-gradient(45deg,transparent_25%,rgba(255,255,255,0.2)_50%,transparent_75%,transparent_100%)] bg-[length:250%_250%] animate-shine"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-between text-sm">
                                                <div class="flex items-center gap-2">
                                                    <div class="w-3 h-3 rounded-full bg-gradient-to-r from-blue-500 to-purple-500"></div>
                                                    <span class="text-gray-400">Sale Progress</span>
                                                </div>
                                                <span class="text-gray-400">Stage 3 Active</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap gap-2">
                                            <div class="text-xs px-3 py-1.5 bg-white/5 rounded-lg text-gray-400 flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-3.5 h-3.5">
                                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="9" cy="7" r="4"></circle>
                                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                </svg>
                                                1.4k+ Holders
                                            </div>
                                            <div class="text-xs px-3 py-1.5 bg-white/5 rounded-lg text-gray-400 flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-3.5 h-3.5">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <polyline points="12 6 12 12 16 14"></polyline>
                                                </svg>
                                                Stage 3 Price
                                            </div>
                                        </div>
                                        <div class="flex justify-center pt-2">
                                            <a class="w-full sm:w-auto" href="/dashboard/buy-coin">
                                                <button class="whitespace-nowrap text-sm font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary shadow hover:bg-primary/90 h-9 w-full sm:w-auto bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 text-white px-12 py-4 rounded-xl hover:shadow-lg hover:shadow-blue-500/20 transform hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign w-5 h-5">
                                                        <line x1="12" x2="12" y1="2" y2="22"></line>
                                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                                    </svg>
                                                    Buy GROK
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-5 h-5">
                                                        <path d="M5 12h14"></path>
                                                        <path d="m12 5 7 7-7 7"></path>
                                                    </svg>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-5 space-y-6">
                            <div style="opacity: 1; transform: none;">
                                <div class="relative h-full" tabindex="0" style="transform: none;">
                                    <div class="text-card-foreground bg-black/40 backdrop-blur-xl border border-white/5 rounded-2xl shadow-[0_0_30px_rgba(0,255,211,0.15)] h-full overflow-hidden">
                                        <div class="absolute inset-0 bg-gradient-to-br from-gray-500 to-gray-400 opacity-5 pointer-events-none rounded-2xl"></div>
                                        <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-purple-600 opacity-10 group-hover:opacity-20 blur-xl transition-all duration-300"></div>
                                        <div class="flex flex-col space-y-1.5 p-6 px-4 sm:px-6 py-4">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-2">
                                                    <div class="tracking-tight text-base sm:text-lg font-semibold text-white">Current Status</div>
                                                    <div class="w-2 h-2 rounded-full text-gray-400 animate-pulse"></div>
                                                </div>
                                                <div class="p-2 sm:p-3 bg-gradient-to-br from-blue-900/30 to-purple-900/30 rounded-full flex items-center justify-center transform hover:scale-110 transition-transform">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-5 h-5 sm:w-6 sm:h-6 text-gray-400">
                                                        <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
                                                        <circle cx="12" cy="8" r="6"></circle>
                                                    </svg>
                                                </div>
                                            </div>
                                            <p class="text-gray-400 text-xs sm:text-sm">Your membership tier</p>
                                        </div>
                                        <div class="p-6 pt-0 px-4 sm:px-6 pb-4 sm:pb-6">
                                            @php
                                                // Получаем прогресс до следующего статуса
                                                $progress = auth()->user()->status_progress ?? 0; // процент, например 45
                                                if ($progress < 0) $progress = 0;
                                                if ($progress > 100) $progress = 100;
                                            @endphp
                                            <div class="flex flex-col gap-4 sm:gap-6">
                                                <div class="flex items-center justify-between">
                                                    <div class="space-y-1">
                                                        <h3 class="text-3xl sm:text-4xl font-bold text-gray-400">{{ auth()->user()->status }}</h3>
                                                        <p class="text-xs sm:text-sm text-gray-400">Next: <span class="text-amber-500">{{ auth()->user()->next_status }}</span></p>
                                                    </div>
                                                    <div class="text-xl sm:text-2xl font-bold text-gray-400">{{ $progress }}%</div>
                                                </div>
                                                <div class="relative">
                                                    <div class="h-2.5 sm:h-3 bg-gray-800/50 rounded-full overflow-hidden backdrop-blur-sm relative">
                                                        <div class="absolute top-0 left-0 h-full bg-gradient-to-r from-gray-500 to-gray-400 transition-all duration-300 rounded-full" style="width: {{ $progress }}%;">
                                                            <div class="absolute inset-0 bg-[linear-gradient(45deg,transparent_25%,rgba(255,255,255,0.2)_50%,transparent_75%,transparent_100%)] bg-[length:250%_250%] animate-shine"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="mt-2" href="/dashboard/buy-coin">
                                                    <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-primary hover:bg-primary/90 h-9 w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-3 rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                                                        Upgrade to {{ auth()->user()->next_status }}
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                                            <path d="M5 12h14"></path>
                                                            <path d="m12 5 7 7-7 7"></path>
                                                        </svg>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="opacity: 1; transform: none;">
                                <div class="text-card-foreground shadow bg-black/40 backdrop-blur-xl border border-white/5 rounded-2xl">
                                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-emerald-500/5 to-blue-500/10 opacity-20 pointer-events-none rounded-2xl group-hover:opacity-30 transition-opacity"></div>
                                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-600 opacity-10 group-hover:opacity-20 blur-xl transition-all duration-300"></div>
                                    <div class="flex flex-col space-y-1.5 p-6 px-6 py-4">
                                        <div class="flex items-center justify-between">
                                            <div class="tracking-tight text-lg font-semibold text-white flex items-center gap-2">Live Purchases<span class="inline-block w-2 h-2 bg-green-500 rounded-full animate-pulse"></span></div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-5 h-5 text-blue-400">
                                                <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                                <path d="M20 3v4"></path>
                                                <path d="M22 5h-4"></path>
                                                <path d="M4 17v2"></path>
                                                <path d="M5 18H3"></path>
                                            </svg>
                                        </div>
                                        <p class="text-sm text-gray-400">Real-time token purchases</p>
                                    </div>
                                    <div class="p-6 pt-0 px-6 pb-6 max-h-[600px] overflow-y-auto scrollbar-thin scrollbar-thumb-gray-800 scrollbar-track-transparent">
                                        <div class="space-y-4">
                                            <div class="space-y-4" id="transactions"></div>
                  <script>
                    // Utility: random number in range, fixed decimals
                    function getRandomNumber(min, max, decimals = 4) {
                      return (Math.random() * (max - min) + min).toFixed(decimals);
                    }

                    // Utility: random hash string
                    function generateRandomHash(length = 6) {
                      const chars = "0123456789abcdefghijklmnopqrstuvwxyz";
                      let hash = "";
                      for (let i = 0; i < length; i++) {
                        hash += chars[Math.floor(Math.random() * chars.length)];
                      }
                      return hash;
                    }

                    // Transaction currency data
                    const currencies = [
                      {
                        name: "DOGE",
                        icon: "circle-dollar-sign",
                        bgColor: "yellow-900/30",
                        textColor: "yellow-400",
                        minAmount: 1000,
                        maxAmount: 15000,
                        decimals: 4,
                      },
                      {
                        name: "BTC",
                        icon: "bitcoin",
                        bgColor: "orange-900/30",
                        textColor: "orange-400",
                        minAmount: 0.01,
                        maxAmount: 0.1,
                        decimals: 4,
                      },
                      {
                        name: "ETH",
                        icon: "circle-dollar-sign",
                        bgColor: "blue-900/30",
                        textColor: "blue-400",
                        minAmount: 0.1,
                        maxAmount: 2,
                        decimals: 4,
                      },
                    ];

                    // Transaction state
                    let transactions = [
                      {
                        currency: "DOGE",
                        icon: "circle-dollar-sign",
                        bgColor: "yellow-900/30",
                        textColor: "yellow-400",
                        amount: "13812.0097",
                        grokAmount: "493",
                        hash: "47lf5r",
                        hash2: "nrnn",
                        time: 0,
                      },
                      {
                        currency: "BTC",
                        icon: "bitcoin",
                        bgColor: "orange-900/30",
                        textColor: "orange-400",
                        amount: "0.0900",
                        grokAmount: "1 582",
                        hash: "a7vx2p",
                        hash2: "wvvw",
                        time: 18,
                      },
                      {
                        currency: "DOGE",
                        icon: "circle-dollar-sign",
                        bgColor: "yellow-900/30",
                        textColor: "yellow-400",
                        amount: "3679.4214",
                        grokAmount: "131",
                        hash: "6ch5pt",
                        hash2: "k65r",
                        time: 36,
                      },
                    ];

                    // Render a single transaction
                    function renderTransaction(tx) {
                      return `
                        <div class="flex items-center justify-between p-4 bg-black/40 backdrop-blur-sm rounded-xl border border-white/5" style="opacity: 1; transform: none">
                          <div class="flex items-center gap-4">
                            <div class="p-2 bg-${tx.bgColor} rounded-full">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-${tx.icon} w-6 h-6 text-${tx.textColor}">
                                ${
                                  tx.icon === "bitcoin"
                                    ? `<path d="M11.767 19.089c4.924.868 6.14-6.025 1.216-6.894m-1.216 6.894L5.86 18.047m5.908 1.042-.347 1.97m1.563-8.864c4.924.869 6.14-6.025 1.215-6.893m-1.215 6.893-3.94-.694m5.155-6.2L8.29 4.26m5.908 1.042.348-1.97M7.48 20.364l3.126-17.727"></path>`
                                    : `<circle cx="12" cy="12" r="10"></circle><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path><path d="M12 18V6"></path>`
                                }
                              </svg>
                            </div>
                            <div>
                              <p class="text-white font-medium">
                                ${tx.amount} ${tx.currency}<span class="text-gray-400 text-sm ml-2">→</span><span class="text-green-400 ml-2">${tx.grokAmount} $GROK</span>
                              </p>
                              <p class="text-gray-400 text-sm">${tx.hash}...${tx.hash2}</p>
                            </div>
                          </div>
                          <div class="flex items-center gap-2">
                            <span class="text-gray-400 text-sm transaction-time">${tx.time}s ago</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right w-4 h-4 text-green-400">
                              <path d="M7 7h10v10"></path>
                              <path d="M7 17 17 7"></path>
                            </svg>
                          </div>
                        </div>
                      `;
                    }

                    // Render all transactions
                    function renderTransactions() {
                      const container = document.getElementById("transactions");
                      container.innerHTML = transactions.map(renderTransaction).join("");
                    }

                    // Add a new transaction at the top, remove last if >3
                    function addTransaction() {
                      const currency = currencies[Math.floor(Math.random() * currencies.length)];
                      const amount = getRandomNumber(currency.minAmount, currency.maxAmount, currency.decimals);
                      const grokAmount = (Math.floor(Math.random() * 2000) + 100).toLocaleString("en-US");
                      const hash = generateRandomHash();
                      const hash2 = generateRandomHash();
                      const tx = {
                        currency: currency.name,
                        icon: currency.icon,
                        bgColor: currency.bgColor,
                        textColor: currency.textColor,
                        amount: amount,
                        grokAmount: grokAmount,
                        hash: hash,
                        hash2: hash2,
                        time: 0,
                      };
                      transactions.unshift(tx);
                      if (transactions.length > 3) transactions.pop();
                      renderTransactions();
                    }

                    // Update time for each transaction
                    function updateTransactionTimes() {
                      transactions.forEach(tx => tx.time++);
                      // Update DOM
                      const times = document.querySelectorAll("#transactions .transaction-time");
                      times.forEach((el, i) => {
                        el.textContent = `${transactions[i].time}s ago`;
                      });
                    }

                    // Initial render
                    renderTransactions();

                    // Add new transaction every 5-15 seconds
                    function scheduleNextTransaction() {
                      const delay = Math.random() * 10000 + 5000;
                      setTimeout(() => {
                        addTransaction();
                        scheduleNextTransaction();
                      }, delay);
                    }
                    scheduleNextTransaction();

                    // Update times every second
                    setInterval(updateTransactionTimes, 1000);
                  </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 w-full" style="opacity: 1; transform: none;">
                        <div class="text-card-foreground shadow bg-black/40 backdrop-blur-xl border border-white/5 rounded-2xl relative group">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-emerald-500/5 to-blue-500/10 opacity-20 pointer-events-none rounded-2xl group-hover:opacity-30 transition-opacity"></div>
                            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-600 opacity-10 group-hover:opacity-20 blur-xl transition-all duration-300"></div>
                            <div class="p-6 px-8 py-6">
                                <div class="flex items-center gap-6 border-b border-gray-800/50 pb-6">
                                    <img alt="Elon Musk" class="w-16 h-16 rounded-full object-cover" src="Na5lOWi5_400x400.jpg">
                                    <div>
                                        <h3 class="text-lg font-bold text-white flex items-center gap-2">
                                            Elon Musk
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-5 h-5 text-blue-400">
                                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                <path d="m9 11 3 3L22 4"></path>
                                            </svg>
                                        </h3>
                                        <p class="text-sm text-gray-400">@elonmusk</p>
                                    </div>
                                </div>
                                <div class="mt-6 text-gray-300 leading-relaxed space-y-4">
                                    <p>X is embarking on an ambitious project to create a revolutionary payment system that leverages the benefits of blockchain technology to design a better and more inclusive financial ecosystem. Our team begins pursuing this vision with determination and perseverance, motivated by the desire to deliver substantial benefits to consumers and businesses, along with a payment solution for those who are currently underserved or excluded altogether from the traditional financial system.</p>
                                    <p>We are setting out to build and test a blockchain-based payment system with industry-leading controls to protect consumers and combat financial crime, intended to be safe for people making ordinary day-to-day payments.</p>
                                    <p>One of our highest priorities in designing the payment network is building in controls to protect it against misuse by illicit actors. We are approaching this concern in novel ways, implementing numerous controls including a prohibition on anonymous transactions, which pose both a sanctions and money laundering risk.</p>
                                    <p>As we undertake this effort, we are actively seeking feedback from governments and regulators around the world, and the project will evolve and improve as a result. Our system is being designed to address not only the risks related to the issuance of a stablecoin but also the risks associated with transferring stablecoins between parties.</p>
                                    <p>We are confident in the potential for a stablecoin operating on a blockchain to deliver significant benefits to users. Our team is excited to begin developing this technology that aims to set new standards in digital payments.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

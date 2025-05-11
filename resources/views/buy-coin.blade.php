@extends('layouts.dashboard')
@section('content')
    <main class="max-w-7xl mx-auto px-4 py-8 mt-20 md:mt-0">
        <div class="relative">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-600/5 to-pink-600/5 rounded-2xl blur-3xl"></div>
            <div class="relative">
                <div class="relative min-h-screen text-white">
                    <div class="relative">
                        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-2 py-12">
                            <div class="mb-12 space-y-4" style="opacity: 1; transform: none;">
                                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-white via-white to-blue-400 bg-clip-text text-transparent">Buy $GROK</h1>
                                <div class="flex flex-col md:flex-row md:items-center gap-3 justify-center">
                                    <p class="text-lg text-gray-300">Current price: <span class="text-blue-400 font-semibold">$4.78</span></p>
                                    <span class="hidden md:inline text-gray-500">•</span>
                                    <p class="text-lg text-gray-300">Stage 3 active</p>
                                </div>
                                <a class="inline-flex items-center mt-2 text-blue-400 hover:text-blue-300 text-sm transition-all duration-200 group" href="/dashboard/how-to-buy">
                                    New to crypto? Learn how to get started
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 ">
                                <div id="calculator-section" class="lg:col-span-5 lg:sticky lg:top-8 space-y-8 h-fit" style="opacity: 1; transform: none;">
                                    <div class="text-card-foreground shadow bg-black/40 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden">
                                        <div class="flex flex-col space-y-1.5 border-b border-white/5 p-6">
                                            <div class="tracking-tight text-xl font-semibold text-white flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calculator w-5 h-5 text-blue-400 text-white">
                                                    <rect width="16" height="20" x="4" y="2" rx="2"></rect>
                                                    <line x1="8" x2="16" y1="6" y2="6"></line>
                                                    <line x1="16" x2="16" y1="14" y2="18"></line>
                                                    <path d="M16 10h.01"></path>
                                                    <path d="M12 10h.01"></path>
                                                    <path d="M8 10h.01"></path>
                                                    <path d="M12 14h.01"></path>
                                                    <path d="M8 14h.01"></path>
                                                    <path d="M12 18h.01"></path>
                                                    <path d="M8 18h.01"></path>
                                                </svg>
                                                Calculator
                                            </div>
                                        </div>
                                        <div id="calculatorPlaceholder">
                                            <div class="p-4 text-white">
                                                <div class="text-center py-8 space-y-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign w-12 h-12 text-blue-500/30 mx-auto">
                                                        <line x1="12" x2="12" y1="2" y2="22"></line>
                                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                                    </svg>
                                                    <p class="text-gray-400">Select a payment method to calculate your Coins</p>
                                                    <div class="absolute left-1/2 -translate-x-1/2 sm:hidden">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down w-8 h-8 text-blue-400/50 animate-bounce">
                                                            <path d="M12 5v14"></path>
                                                            <path d="m19 12-7 7-7-7"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="absolute left-1/2 -translate-x-1/2 hidden sm:block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-8 h-8 text-blue-400/50 animate-pulse">
                                                            <path d="M5 12h14"></path>
                                                            <path d="m12 5 7 7-7 7"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="calculatorBlock" style="display: none;">
                                            <div class="p-4 text-white">
                                                <div class="space-y-6">
                                                    <div class="relative">
                                                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/5 to-transparent rounded-2xl"></div>
                                                        <div class="flex flex-col sm:flex-row items-start gap-4">
                                                            <div class="flex w-full items-center gap-4">
                                                                <div class="flex-grow relative">
                                                                    <div class="relative">
                                                                        <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500/20 via-purple-500/20 to-blue-500/20 rounded-2xl blur-sm bg-[length:200%_200%] animate-gradient-move"></div>
                                                                        <input id="tokenInput" class="flex py-1 shadow-sm file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 md:text-sm relative text-lg h-14 sm:h-16 px-4 sm:px-6 w-full bg-black/40 backdrop-blur-xl border border-white/5 rounded-2xl placeholder:text-gray-500 focus:border-blue-500/50 focus:ring-2 focus:ring-blue-500/20 transition-all duration-300 [appearance:textfield] [&amp;::-webkit-outer-spin-button]:appearance-none [&amp;::-webkit-inner-spin-button]:appearance-none" placeholder="Enter amount" type="number" value="" max="100000">
                                                                    </div>
                                                                    <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
                                                                        <div class="px-3 py-1.5 rounded-lg bg-white/5 text-sm font-medium text-gray-400">$GROK</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="statusProgress" class="space-y-6" style="display: none;">
                                                        <div class="relative space-y-2">
                                                            <div class="flex items-center justify-between text-sm">
                                                                <span class="text-gray-400">Progress to next tier</span>
                                                                <div class="flex items-center gap-2"><span id="statusAmount" class="text-2xl font-bold text-white">100 $GROK</span>
                                                                    <span id="statusName" class="text-blue-400">Bronze</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center justify-between text-sm text-gray-400 mb-2">
                                                                <div class="flex items-center gap-2"><span>Min:</span>
                                                                    <div class="px-2 py-0.5 rounded-lg bg-white/5 font-medium">80 $GROK</div>
                                                                </div>
                                                                <div class="flex items-center gap-2"><span>Max:</span>
                                                                    <div class="px-2 py-0.5 rounded-lg bg-white/5 font-medium">100,000 $GROK</div>
                                                                </div>
                                                            </div>
                                                            <div class="h-3 bg-black/40 rounded-full overflow-hidden backdrop-blur-xl border border-white/5">
                                                                <div class="relative h-full flex">
                                                                    <div class="h-full border-r border-white/10 flex-grow last:border-0" style="flex-basis: 16.6667%;"></div>
                                                                    <div class="h-full border-r border-white/10 flex-grow last:border-0" style="flex-basis: 16.6667%;"></div>
                                                                    <div class="h-full border-r border-white/10 flex-grow last:border-0" style="flex-basis: 16.6667%;"></div>
                                                                    <div class="h-full border-r border-white/10 flex-grow last:border-0" style="flex-basis: 16.6667%;"></div>
                                                                    <div class="h-full border-r border-white/10 flex-grow last:border-0" style="flex-basis: 16.6667%;"></div>
                                                                    <div class="h-full border-r border-white/10 flex-grow last:border-0" style="flex-basis: 16.6667%;"></div>
                                                                    <div id="progressBarFill" class="absolute top-0 left-0 h-full bg-gradient-to-r from-blue-500 to-blue-600" style="width: 16.6667%;"></div>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between text-xs text-gray-400 px-1">
                                                                <div class="text-center text-blue-400">100</div>
                                                                <div class="text-center ">250</div>
                                                                <div class="text-center ">1&nbsp;000</div>
                                                                <div class="text-center ">5&nbsp;000</div>
                                                                <div class="text-center ">25&nbsp;000</div>
                                                                <div class="text-center ">50&nbsp;000</div>
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                            <div class="   relative overflow-hidden   bg-black/40 backdrop-blur-xl   border border-white/5 rounded-2xl p-4 sm:p-5   hover:border-blue-500/20 transition-all duration-300   ">
                                                                <p class="text-sm text-gray-400">You Pay</p>
                                                                <div class="flex items-baseline mt-2">
                                                                    <span id="youPayValue" class="text-xl sm:text-2xl font-bold text-white">0</span>
                                                                    <span id="youPayCurrency" class="ml-2 text-blue-400 font-medium">BTC</span>
                                                                </div>
                                                            </div>
                                                            <div class="   relative overflow-hidden   bg-black/40 backdrop-blur-xl   border border-white/5 rounded-2xl p-4 sm:p-5   hover:border-blue-500/20 transition-all duration-300   "><p class="text-sm text-gray-400">You Receive</p><div class="flex items-baseline mt-2"><span id="receiveAmount" class="text-xl sm:text-2xl font-bold text-white">100</span><span class="ml-2 text-blue-400 font-medium">$GROK</span></div></div></div><div class="relative overflow-hidden rounded-2xl bg-black/40 backdrop-blur-xl border border-blue-500/20 p-4 sm:p-6"><div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 via-transparent to-blue-500/5"></div><div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 relative"><div><div class="flex items-center gap-2 flex-wrap"><h3 class="text-gray-400">Status Level</h3><div id="statusBonus" class="px-2 py-0.5 rounded-full bg-blue-500/20 text-xs font-medium text-blue-400">5% Bonus</div></div><p id="statusNameDisplay" class="text-2xl sm:text-3xl font-bold text-white mt-2">Bronze</p></div></div></div></div>
                                                </div>
                                            </div>
                                            <div class="p-6 border-t border-white/5 bg-gradient-to-r from-blue-500/5 to-purple-500/5">
                                                <div class="flex flex-col space-y-1.5 text-center sm:text-left">
                                                    <span style="position: absolute; border: 0px; width: 1px; height: 1px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; overflow-wrap: normal;">
                                                        <h2 id="radix-:r1:" class="text-lg font-semibold leading-none tracking-tight">Payment</h2>
                                                    </span>
                                                </div>
                                                <button id="purchaseButton" class="whitespace-nowrap focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-9 w-full bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-4 md:px-8 md:py-5 text-base md:text-lg font-semibold rounded-2xl shadow-indigo-900/20 shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center gap-3" disabled="" type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r0:" data-state="closed">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card w-4 h-4 md:w-5 md:h-5">
                                                        <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                                        <line x1="2" x2="22" y1="10" y2="10"></line>
                                                    </svg>
                                                    Minimum required: 80 $GROK
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-span-7">
                                    <div class="sticky top-8 space-y-6">
                                        <div class="relative">
                                            <div class="relative" id="crypto-selector">
                                                <div class="absolute inset-0 bg-gradient-to-r from-blue-500/5 via-transparent to-purple-500/5 rounded-2xl blur-3xl"></div>
                                                <div class="space-y-8">
                                                    <div class="grid gap-4 transition-all grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 2xl:grid-cols-3">
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 0ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="BTC" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/btc.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">BTC</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">BTC</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				17581.38<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 50ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="ETH" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/eth.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">ETH</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">ETH</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				380.36<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 100ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="XRP" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/xrp.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">XRP</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">XRP</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.45<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 150ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="USDT" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/usdt.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">USDT</h3>
                                                                        </div>
                                                                        <p class="text-xs text-gray-500 truncate block coin-network" data-coin="USDT_TRC">TRC-20</p>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">USDT</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.21<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 150ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="USDT" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/usdt.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">USDT</h3>
                                                                        </div>
                                                                        <p class="text-xs text-gray-500 truncate block coin-network" data-coin="USDT_ERC">ERC-20</p>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">USDT</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.21<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 150ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="USDT" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/usdt.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">USDT</h3>
                                                                        </div>
                                                                        <p class="text-xs text-gray-500 truncate block coin-network" data-coin="USDT_BEP">BEP-20</p>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">USDT</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.21<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 150ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="USDT" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/usdt.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">USDT</h3>
                                                                        </div>
                                                                        <p class="text-xs text-gray-500 truncate block coin-network" data-coin="USDT_POL">POL</p>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">USDT</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.21<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 150ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="USDT" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/usdt.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">USDT</h3>
                                                                        </div>
                                                                        <p class="text-xs text-gray-500 truncate block coin-network" data-coin="USDT_BASE">BASE</p>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">USDT</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.21<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 200ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0" style="transform: translateY(-0.0039335px);">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="TON" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="/source/img/ton.svg" style=""></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">TON</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">TON</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.71<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 250ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="XLM" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/xlm.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">XLM</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">XLM</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.05<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 300ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="BCH" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/bch.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">BCH</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">BCH</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				62.99<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 350ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="BNB" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/bnb.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">BNB</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">BNB</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				125.07<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 400ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="TRX" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/trx.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">TRX</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">TRX</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.05<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 450ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="USDC" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/usdc.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">USDC</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">USDC</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.21<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 500ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="DASH" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/dash.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">DASH</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">DASH</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				4.56<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 550ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="WAVES" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/waves.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">WAVES</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">WAVES</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.23<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 600ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0" style="transform: none;">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="BUSD" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="/source/img/busd.svg" style=""></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">BUSD</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">BUSD</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.21<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 650ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0" style="transform: none;">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="ADA" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/ada.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">ADA</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">ADA</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.14<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 700ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="DOGE" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/doge.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">DOGE</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">DOGE</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.04<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 750ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0" style="transform: none;">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="SOL" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/sol.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">SOL</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">SOL</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				25.76<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 800ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="UNI" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/uni.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">UNI</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">UNI</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				1.24<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 850ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0" style="transform: none;">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="CAKE" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="/source/img/cake.svg" style=""></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">CAKE</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">CAKE</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.38<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 900ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0" style="transform: none;">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="AVAX" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/avax.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">AVAX</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">AVAX</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				3.80<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 950ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0" style="transform: none;">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="DOT" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/dot.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">DOT</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">DOT</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.85<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 1000ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="SHIB" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="/source/img/shib.svg" style=""></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">SHIB</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">SHIB</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.00<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 1050ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0" style="transform: none;">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="CRO" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="{{ asset('cro.svg') }}" style=""></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">CRO</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">CRO</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				0.02<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="coin-block animate-fade-in" style="animation-delay: 1100ms;">
                                                            <div class="
															group relative bg-black/40 backdrop-blur-xl
															border border-white/5 rounded-2xl
															cursor-pointer overflow-hidden
															hover:border-blue-500/50 transition-all duration-300
															" tabindex="0" style="transform: none;">
                                                                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                                <div class="
																relative p-5 flex items-center gap-5
																p-5
																">
                                                                    <div class="relative">
                                                                        <div class="
																		rounded-xl bg-gradient-to-br from-black/80 to-black/40
																		flex items-center justify-center
																		border border-white/5 shadow-inner
																		w-16 h-16
																		group-hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300
																		"><img alt="LTC" loading="lazy" width="34" height="34" decoding="async" data-nimg="1" class="group-hover:scale-110 transition-transform duration-300" src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons/svg/color/ltc.svg" style="color: transparent;"></div>
                                                                    </div>
                                                                    <div class="flex-grow min-w-0">
                                                                        <div class="flex items-center gap-2">
                                                                            <h3 class="text-lg font-semibold text-white truncate group-hover:text-blue-400 transition-colors">LTC</h3>
                                                                        </div>
                                                                        <div class="flex flex-col mt-1.5 gap-1.5">
                                                                            <p class="text-sm text-gray-400 truncate flex items-center gap-1.5">
																			<span class="text-gray-300 font-medium inline-block
																				sm:animate-[marqueeBounce_6s_linear_infinite]">
																				1 <span class="text-[10px] text-gray-400">LTC</span>
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-3.5 h-3.5 text-gray-500 inline mx-1">
																					<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
																					<path d="M21 3v5h-5"></path>
																					<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
																					<path d="M8 16H3v5"></path>
																				</svg>
																				17.64<span class="text-[10px] text-gray-400"> $GROK</span>
																			</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-500 group-hover:text-blue-400 transition-colors">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                                                            <path d="M5 12h14"></path>
                                                                            <path d="m12 5 7 7-7 7"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center text-gray-500 text-sm">Need help? Contact our support team 24/7</div>
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
        </div>
    </main>

    <script>
        let selectedRate = 0;
        let selectedSymbol = '';


        function updateYouPay(grokAmount) {
            const youPayValue = document.getElementById("youPayValue");
            const youPayCurrency = document.getElementById("youPayCurrency");

            if (!selectedRate || !selectedSymbol || isNaN(grokAmount)) {
                youPayValue.textContent = "0.000000";
                youPayCurrency.textContent = "";
                return;
            }
            
            const pay = grokAmount / selectedRate;
            youPayValue.textContent = parseFloat(pay.toFixed(2)).toString();
            youPayCurrency.textContent = selectedSymbol.includes('USDT') ? selectedSymbol.replace("_", " ") : selectedSymbol;

        }

        document.addEventListener("DOMContentLoaded", function () {
            const coinBlocks = document.querySelectorAll(".coin-block .group");
            const placeholder = document.getElementById('calculatorPlaceholder');
            const calculator = document.getElementById('calculatorBlock');

            coinBlocks.forEach(block => {
                block.addEventListener("click", () => {
                    // Удалить активность у всех
                    coinBlocks.forEach(el => {
                        el.classList.remove("border-blue-500", "shadow-[0_0_30px_rgba(0,0,255,0.15)]");
                        const activeBg = el.querySelector('.bg-blue-500\\/5');
                        if (activeBg) activeBg.remove();
                        const indicator = el.querySelector('.-right-1.-top-1');
                        if (indicator) indicator.remove();
                    });

                    // Активировать текущий
                    block.classList.add("border-blue-500", "shadow-[0_0_30px_rgba(0,0,255,0.15)]");
                    const bg = document.createElement("div");
                    bg.className = "absolute inset-0 bg-blue-500/5";
                    block.appendChild(bg);
                    const iconBox = block.querySelector(".w-16.h-16");
                    if (iconBox) {
                        const dot = document.createElement("div");
                        dot.className = "absolute -right-1 -top-1 w-4 h-4 bg-blue-500 rounded-full border-2 border-black shadow-md";
                        iconBox.parentElement.appendChild(dot);
                    }

                    const rateSpan = block.querySelector("p span.text-gray-300")?.innerText.replace(/\s+/g, ' ').trim() || "";
                    const match = rateSpan.match(/1\s+([A-Z]+).*?([\d.]+)\s+\$GROK/i);

                    if (match) {
                        if(match[1] == 'USDT') {
                            selectedSymbol = block.querySelector('[data-coin]').getAttribute('data-coin')
                        } else selectedSymbol = match[1];
                        selectedRate = parseFloat(match[2]);
                    }

                    // Обновить валюту отображения
                    document.getElementById("youPayCurrency").textContent = selectedSymbol;

                    // Обновить сумму, если уже введено
                    const currentInput = parseFloat(document.getElementById("tokenInput").value);
                    if (!isNaN(currentInput)) {
                        updateYouPay(currentInput);
                    }

                    // Показать калькулятор, скрыть заглушку
                    if (placeholder) placeholder.style.display = 'none';
                    if (calculator) calculator.style.display = 'block';

                    // (опционально) лог выбранной монеты
                    const coinName = block.querySelector("h3")?.textContent?.trim();
                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const tiers = [
                { name: 'Bronze', min: 100, max: 250, bonus: '5%', progress: 1 },
                { name: 'Silver', min: 250, max: 1000, bonus: '10%', progress: 2 },
                { name: 'Gold', min: 1000, max: 5000, bonus: '15%', progress: 3 },
                { name: 'Platinum', min: 5000, max: 25000, bonus: '20%', progress: 4 },
                { name: 'Diamond', min: 25000, max: 50000, bonus: '25%', progress: 5 },
                { name: 'Legendary', min: 50000, max: Infinity, bonus: '30%', progress: 6 }
            ];

            const input = document.getElementById("tokenInput");
            const statusBlock = document.getElementById("statusProgress");
            const progressFill = document.getElementById("progressBarFill");
            const statusName = document.getElementById("statusName");
            const statusNameDisplay = document.getElementById("statusNameDisplay");
            const statusAmount = document.getElementById("statusAmount");
            const statusBonus = document.getElementById("statusBonus");
            const button = document.getElementById("purchaseButton");
            const receiveAmount = document.getElementById("receiveAmount");

            input.addEventListener("input", function () {

                let value = parseFloat(this.value);

                if (value > 100000) {
                    value = 100000;
                    this.value = value;
                }

                receiveAmount.textContent = value || 0;
                statusBlock.style.display = value > 0 ? 'block' : 'none';

                if (value >= 80) {
                    button.textContent = "Purchase Coins";
                    button.disabled = false;
                } else {
                    button.textContent = "Minimum required: 80 $GROK";
                    button.disabled = true;
                }

                let currentTier = tiers[0];
                for (let i = 0; i < tiers.length; i++) {
                    if (value >= tiers[i].min && value < tiers[i].max) {
                        currentTier = tiers[i];
                        break;
                    }
                }

                updateYouPay(value);

                statusAmount.textContent = `${value} $GROK`;
                statusName.textContent = currentTier.name;
                statusNameDisplay.textContent = currentTier.name;
                statusBonus.textContent = `${currentTier.bonus} Bonus`;
                receiveAmount.textContent = value || 0;

                const step = (currentTier.progress / tiers.length) * 100;
                progressFill.style.width = `${Math.min(step, 100)}%`;
            });

            button.addEventListener("click", function () {
                const amount = parseFloat(input.value);

                if (isNaN(amount) || amount < 80 || amount > 100000 || !selectedSymbol || !selectedRate) {
                    return;
                }

                const payload = {
                    amount: amount,
                    currency: selectedSymbol,
                    rate: selectedRate
                };

                fetch("/dashboard/order/create", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')?.content
                    },
                    body: JSON.stringify(payload)
                })
                    .then(response => {
                        if (!response.ok) throw new Error("Error order creating");
                        return response.json();
                    })
                    .then(data => {
                        window.location.href = '/dashboard/order/' + data.order_id;
                    })
                    .catch(error => {
                        console.error("Error:", error);
                        button.textContent = "Try Again";
                        button.disabled = false;
                    });
            });
        });
    </script>
@endsection

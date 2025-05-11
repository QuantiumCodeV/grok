@extends('layouts.dashboard')

@section('content')
    <main class="max-w-7xl mx-auto px-4 py-8 mt-20 md:mt-0">
        <div class="relative">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-600/5 to-pink-600/5 rounded-2xl blur-3xl"></div>
            <div class="relative">
                <div class="space-y-8" style="opacity: 1;">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12 lg:col-span-8 space-y-6">
                            <div class="flex flex-col gap-4" style="opacity: 1; transform: none;">
                                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                    <h1 class="text-3xl md:text-4xl font-extrabold text-transparent bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text">Token Management</h1>
                                    <div class="flex items-center gap-3">
                                        <a href="/dashboard/buy-coin">
                                            <button class="justify-center whitespace-nowrap text-sm font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary hover:bg-primary/90 h-9 bg-gradient-to-r from-blue-500 to-purple-600 text-white px-4 py-2.5 rounded-xl shadow-lg hover:shadow-xl transform transition hover:scale-105 flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus w-4 h-4">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5v14"></path>
                                                </svg>
                                                Buy $GROK
                                            </button>
                                        </a>
                                        <button id="openModalBtn" class="justify-center whitespace-nowrap text-sm font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary hover:bg-primary/90 h-9 bg-gradient-to-r from-amber-500 to-orange-600 text-white px-4 py-2.5 rounded-xl shadow-lg hover:shadow-xl transform transition hover:scale-105 flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right w-4 h-4">
                                                <path d="M7 7h10v10"></path>
                                                <path d="M7 17 17 7"></path>
                                            </svg>
                                            Withdraw
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div style="opacity: 1; transform: none;">
                                <div class="text-card-foreground shadow bg-black/40 backdrop-blur-xl border border-white/5 rounded-2xl overflow-hidden">
                                    <div class="p-6">
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                                            <div class="col-span-2 md:col-span-1 space-y-2">
                                                <p class="text-gray-400 text-sm">Total Balance</p>
                                                <h3 class="text-3xl font-bold text-transparent bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text">{{ auth()->user()->balance }} $GROK</h3>
                                                <p class="text-lg text-green-400">${{ number_format(auth()->user()->balance * 4.78, 2) }}</p>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="text-gray-400 text-sm">Purchased</p>
                                                <h3 class="text-2xl font-bold text-blue-400">{{ auth()->user()->balance }} $GROK</h3>
                                                <div class="flex items-center gap-2 text-gray-400 text-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card w-4 h-4">
                                                        <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                                        <line x1="2" x2="22" y1="10" y2="10"></line>
                                                    </svg>
                                                    Total Invested
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <p class="text-gray-400 text-sm">Bonus Earned</p>
                                                <h3 class="text-2xl font-bold text-purple-400">0 $GROK</h3>
                                                <div class="flex items-center gap-2 text-gray-400 text-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gift w-4 h-4">
                                                        <rect x="3" y="8" width="18" height="4" rx="1"></rect>
                                                        <path d="M12 8v13"></path>
                                                        <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path>
                                                        <path d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"></path>
                                                    </svg>
                                                    From Referrals
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="opacity: 1; transform: none;">
                                <div class="text-card-foreground shadow bg-black/40 backdrop-blur-xl border border-white/5 rounded-2xl">
                                    <div class="flex-col space-y-1.5 p-6 flex items-center justify-between px-6 py-4 border-b border-white/5">
                                        <div class="space-y-1">
                                            <div class="tracking-tight text-xl font-semibold text-white">Recent Activity</div>
                                            <p class="text-sm text-gray-400">Your latest transactions</p>
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        @foreach($orders as $order)
                                            <div class="space-y-4">
                                                <a href="{{ route('dashboard.view-order', ['id' => $order->order_id]) }}">
                                                    <div class="flex items-center justify-between p-4 rounded-xl bg-white/5 hover:bg-white/10 transition cursor-pointer">
                                                        <div class="flex items-center gap-4">
                                                            <div class="p-2.5 rounded-xl bg-red-500/20">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x w-5 h-5 text-red-400">
                                                                    <path d="M18 6 6 18"></path>
                                                                    <path d="m6 6 12 12"></path>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <p class="font-medium text-white">{{ $order->amount }} {{ $order->currency }}</p>
                                                                <p class="text-sm text-gray-400">{{ $order->tokens }} $GROK</p>
                                                            </div>
                                                        </div>
                                                        <div class="text-right">
                                                            <p class="text-sm text-gray-400">{{ \Carbon\Carbon::parse($order->created_at)->diffForHumans() }}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <br>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-4 space-y-6">
                            <div style="opacity: 1; transform: none;">
                                <div class="text-card-foreground shadow bg-black/40 backdrop-blur-xl border border-white/5 rounded-2xl">
                                    <div class="flex flex-col space-y-1.5 p-6 px-6 py-4 border-b border-white/5">
                                        <div class="tracking-tight text-xl font-semibold text-white">Quick Actions</div>
                                    </div>
                                    <div class="p-6 space-y-4">
                                        <button class="whitespace-nowrap text-sm font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary hover:bg-primary/90 h-9 w-full bg-gradient-to-r from-purple-500 to-pink-600 text-white p-3 rounded-xl shadow-md flex items-center justify-center gap-2 transition-all transform hover:scale-105 hover:shadow-lg disabled:opacity-50 disabled:cursor-not-allowed" disabled="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-share2 w-4 h-4">
                                                <circle cx="18" cy="5" r="3"></circle>
                                                <circle cx="6" cy="12" r="3"></circle>
                                                <circle cx="18" cy="19" r="3"></circle>
                                                <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                                                <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                                            </svg>
                                            Generate Referral Link
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div style="opacity: 1; transform: none;">
                                <div class="text-card-foreground shadow bg-black/40 backdrop-blur-xl border border-white/5 rounded-2xl">
                                    <div class="flex flex-col space-y-1.5 p-6 px-6 py-4 border-b border-white/5">
                                        <div class="tracking-tight text-xl font-semibold text-white">Price Information</div>
                                    </div>
                                    <div class="p-6">
                                        <div class="space-y-4">
                                            <div class="flex justify-between items-center">
                                                <p class="text-gray-400">Current Price</p>
                                                <p class="text-white font-medium">$4.78</p>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <p class="text-gray-400">Next Stage Price</p>
                                                <p class="text-white font-medium">$21.60</p>
                                            </div>
                                            <div class="p-3 bg-yellow-500/10 rounded-xl">
                                                <div class="flex items-center gap-2 text-yellow-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-4 h-4">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg>
                                                    <p class="text-sm">Price increase coming soon</p>
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

    <div id="withdrawalModal" style="display: none;">
        <div data-state="open" class="fixed inset-0 z-50 bg-black/80 data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0" style="pointer-events: auto;" data-aria-hidden="true" aria-hidden="true"></div>
        <div role="dialog" id="radix-:r9:" aria-describedby="radix-:rb:" aria-labelledby="radix-:ra:" data-state="open" class="fixed left-[50%] top-[50%] z-50 grid w-full max-w-lg translate-x-[-50%] translate-y-[-50%] gap-4 duration-200 data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[state=closed]:slide-out-to-left-1/2 data-[state=closed]:slide-out-to-top-[48%] data-[state=open]:slide-in-from-left-1/2 data-[state=open]:slide-in-from-top-[48%] sm:rounded-lg bg-black/40 backdrop-blur-xl border border-white/10 rounded-2xl shadow-lg p-6" tabindex="-1" style="pointer-events: auto;">
            <div class="flex flex-col space-y-1.5 text-center sm:text-left">
                <h2 id="radix-:ra:" class="tracking-tight text-lg font-bold text-white mb-4">Empty Balance</h2>
            </div>
            <div class="flex flex-col items-center text-center space-y-4">
                <div class="p-4 rounded-full bg-blue-500/20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet w-8 h-8 text-blue-400">
                        <path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path>
                        <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                    </svg>
                </div>
                <p class="text-gray-300">$GROK coins are on hold. You will be able to use them 48 hours after purchase.</p>
                <div class="bg-black/20 rounded-lg p-4 w-full mt-4">
                    <p class="text-sm text-gray-400">laundering activities. Thank you for your understanding!</p>
                </div>
                <a class="w-full" href="/dashboard/buy-coin"><button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary hover:bg-primary/90 h-9 w-full mt-4 bg-gradient-to-r from-green-500 to-teal-600 text-white px-6 py-4 rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-transform">OK</button></a>
            </div>
            <button type="button" data-close-modal class="absolute right-4 top-4 rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:pointer-events-none data-[state=open]:bg-accent data-[state=open]:text-muted-foreground" style="color: #fff;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x h-4 w-4">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
                <span class="sr-only">Close</span>
            </button>
        </div>
        <span data-radix-focus-guard="" tabindex="0" style="outline: none; opacity: 0; position: fixed; pointer-events: none;" data-aria-hidden="true" aria-hidden="true"></span>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const modal = document.getElementById('withdrawalModal');
            const openBtn = document.getElementById('openModalBtn');
            const dialog = modal.querySelector('[role="dialog"]');
            const closeButtons = modal.querySelectorAll('[data-close-modal]');

            function openModal() {
                modal.style.display = 'block';
            }

            function closeModal() {
                modal.style.display = 'none';
            }

            openBtn.addEventListener('click', openModal);

            modal.addEventListener('click', function (event) {
                if (!dialog.contains(event.target)) {
                    closeModal();
                }
            });

            closeButtons.forEach((btn) => {
                btn.addEventListener('click', closeModal);
            });

            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    closeModal();
                }
            });
        });
    </script>
@endsection

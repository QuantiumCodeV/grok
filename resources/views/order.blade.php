@extends('layouts.dashboard')

@section('content')
    <div class="min-h-screen bg-black">
        <main class="max-w-7xl mx-auto px-4 py-6">
            <div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-b from-black to-black text-white px-6 py-6" style="opacity: 1;">
                <div class="relative mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-loader-circle w-16 h-16 animate-spin text-blue-500">
                        <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                    </svg>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-500 to-purple-500 opacity-20 animate-pulse"></div>
                    </div>
                </div>
                <div class="flex items-center gap-2 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-5 h-5 text-yellow-500">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <span id="timer" class="text-yellow-500 font-mono">Time remaining: --:--</span>
                </div>
                <h3 class="text-2xl font-semibold mb-4">Waiting for Payment</h3>
                <p class="text-gray-400 text-center max-w-md mb-8" style="opacity: 1;">Order <span class="font-mono text-blue-400">#{{ $order->order_id }}</span> is being processed.<br><span>If payment has not been completed, please do so at your earliest convenience.</span><br>If you have already made the payment, please wait while we process your transaction.</p>
                <p class="text-gray-400 text-center max-w-md mb-8" style="opacity: 1;"><img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ config('wallets')[$order->currency] }}" width="150" height="150"></p>
                <div class="p-6 bg-black/50 rounded-2xl shadow-lg border border-blue-500/10 w-full max-w-md space-y-3">
                    <div class="flex justify-between" style="opacity: 1;">
                        <span class="text-gray-400">Amount:</span>
                        <span class="font-mono font-bold">
                            {{ $order->amount }}
                            @php
                                $map = [
                                    'USDT_TRC' => 'USDT (TRC-20)',
                                    'USDT_ERC' => 'USDT (ERC-20)',
                                    'USDT_BEP' => 'USDT (BEP-20)',
                                    'USDT_POL' => 'USDT (POL)',
                                    'USDT_BASE' => 'USDT (BASE)',
                                ];
                            @endphp
                            {{ $map[$order->currency] ?? $order->currency }}
                        </span>
                    </div>
                    <div class="flex flex-col" style="opacity: 1;">
                        <span class="text-gray-400 mb-2">Address:</span>
                        <div class="p-3 bg-black rounded-xl flex justify-between items-center"><span class="font-mono font-bold text-blue-400 break-all">{{ config('wallets')[$order->currency] }}</span></div>
                    </div>

                    <div class="flex justify-between" style="opacity: 1;"><span class="text-gray-400">Tokens:</span><span class="font-mono font-bold text-green-400">{{ $order->tokens }} $GROK</span></div>
                </div>
                <div class="text-center">
                    <p class="text-gray-400 m-6" style="opacity: 1;">If you're new to cryptocurrency, check out our<a class="text-blue-400 underline hover:text-blue-300" href="/dashboard/how-to-buy" data-discover="true"> How to Buy</a> guide to get started.</p>
                </div>
                <a class="mt-6 px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-transform" href="/dashboard" data-discover="true">Back to Dashboard</a>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const orderCreatedAt = "{{ $order->created_at }}";
            const createdTimestamp = new Date(orderCreatedAt + " UTC").getTime();
            const currentTimestamp = new Date().getTime();
            const expirationTime = 60 * 60 * 1000;
            const expiresAt = createdTimestamp + expirationTime;

            function updateTimer() {
                const now = new Date().getTime();
                let timeLeft = Math.floor((expiresAt - now) / 1000);

                if (timeLeft <= 0) {
                    document.getElementById("timer").textContent = "Order Expired!";
                    return;
                }

                let minutes = Math.floor(timeLeft / 60);
                let seconds = timeLeft % 60;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                document.getElementById("timer").textContent = `Time remaining: ${minutes}:${seconds}`;
                setTimeout(updateTimer, 1000);
            }

            updateTimer();
        });
    </script>

@endsection

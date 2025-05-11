<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('d498c84e4ab246b3.css') }}" data-precedence="next">
    <link rel="stylesheet" href="{{ asset('e696db37f65ea0ee.css') }}" data-precedence="next">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="next-size-adjust" content="">
    <title>$GROK COIN</title>
    <link rel="icon" type="image/png" href="{{ asset('grokicon.svg') }}">
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = 'f369b76c151e680bb9a8d0a862be3a1253c3d136';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</head>

<body class="__variable_4d318d __variable_ea5f4b antialiased">
    <div class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900">
        <div class="flex">
            <div class="hidden md:flex flex-col fixed h-screen w-64 bg-black/80 backdrop-blur-md border-r border-gray-800/50">
                <div class="p-6">
                    <a href="">
                        <div class="group relative">
                            <div class="absolute -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg blur opacity-25 group-hover:opacity-40 transition duration-200"></div>
                            <div class="relative flex items-center space-x-2"><img alt="Logo" loading="lazy" width="48" height="48" decoding="async" data-nimg="1" class="transform group-hover:scale-105 transition-all duration-200" src="{{ asset('grok.svg') }}" style="color: transparent;"><span class="text-5xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">COIN</span></div>
                        </div>
                    </a>
                </div>
                <div class="flex-1 px-4 py-4 space-y-2">
                    <a class="block" href="/dashboard">
                        <div class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-medium
                                {{ request()->routeIs('dashboard.overview') ? 'text-white bg-gradient-to-r from-purple-600/20 to-pink-600/20' : 'text-gray-400 hover:text-white hover:bg-white/5' }}
								transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-5 h-5 text-purple-400">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                <polyline points="16 7 22 7 22 13"></polyline>
                            </svg>
                            <span>Dashboard</span>
                            @if(request()->routeIs('dashboard.overview'))
                            <div class="absolute left-0 w-1 h-8 bg-gradient-to-b from-purple-600 to-pink-600 rounded-r" style="opacity: 1;"></div>
                            @endif
                        </div>
                    </a>
                    <a class="block" href="/dashboard/buy-coin">
                        <div class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-medium
								{{ request()->routeIs('dashboard.buy-coin') ? 'text-white bg-gradient-to-r from-purple-600/20 to-pink-600/20' : 'text-gray-400 hover:text-white hover:bg-white/5' }}
								transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus w-5 h-5">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                            <span>Buy Coins</span>
                            @if(request()->routeIs('dashboard.buy-coin'))
                            <div class="absolute left-0 w-1 h-8 bg-gradient-to-b from-purple-600 to-pink-600 rounded-r" style="opacity: 1;"></div>
                            @endif
                        </div>
                    </a>
                    @if(auth()->user()->role == 'admin')
                    <a class="block" href="/dashboard/admin">
                        <div class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-medium
								{{ request()->routeIs('dashboard.admin') ? 'text-white bg-gradient-to-r from-purple-600/20 to-pink-600/20' : 'text-gray-400 hover:text-white hover:bg-white/5' }}
								transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus w-5 h-5">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                            <span>Admin</span>
                            @if(request()->routeIs('dashboard.admin'))
                            <div class="absolute left-0 w-1 h-8 bg-gradient-to-b from-purple-600 to-pink-600 rounded-r" style="opacity: 1;"></div>
                            @endif
                        </div>
                    </a>
                    @endif
                    <a class="block" href="/dashboard/my-coins">
                        <div class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-medium
								{{ request()->routeIs('dashboard.my-coins') ? 'text-white bg-gradient-to-r from-purple-600/20 to-pink-600/20' : 'text-gray-400 hover:text-white hover:bg-white/5' }}
								transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet w-5 h-5">
                                <path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path>
                                <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                            </svg>
                            <span>My Coins</span>
                            @if(request()->routeIs('dashboard.my-coins'))
                            <div class="absolute left-0 w-1 h-8 bg-gradient-to-b from-purple-600 to-pink-600 rounded-r" style="opacity: 1;"></div>
                            @endif
                        </div>
                    </a>
                    <a class="block" href="/dashboard/status">
                        <div class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-medium
								{{ request()->routeIs('dashboard.status') ? 'text-white bg-gradient-to-r from-purple-600/20 to-pink-600/20' : 'text-gray-400 hover:text-white hover:bg-white/5' }}
								transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-crown w-5 h-5">
                                <path d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z"></path>
                                <path d="M5 21h14"></path>
                            </svg>
                            <span>Status</span>
                            @if(request()->routeIs('dashboard.status'))
                            <div class="absolute left-0 w-1 h-8 bg-gradient-to-b from-purple-600 to-pink-600 rounded-r" style="opacity: 1;"></div>
                            @endif
                        </div>
                    </a>
                    <a class="block" href="/dashboard/how-to-buy">
                        <div class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-medium
								{{ request()->routeIs('dashboard.how-to-buy') ? 'text-white bg-gradient-to-r from-purple-600/20 to-pink-600/20' : 'text-gray-400 hover:text-white hover:bg-white/5' }}
								transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-help w-5 h-5">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                <path d="M12 17h.01"></path>
                            </svg>
                            <span>How to Buy</span>
                            @if(request()->routeIs('dashboard.how-to-buy'))
                            <div class="absolute left-0 w-1 h-8 bg-gradient-to-b from-purple-600 to-pink-600 rounded-r" style="opacity: 1;"></div>
                            @endif
                        </div>
                    </a>
                    <a class="block" href="/dashboard/profile">
                        <div class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-medium
								{{ request()->routeIs('dashboard.profile') ? 'text-white bg-gradient-to-r from-purple-600/20 to-pink-600/20' : 'text-gray-400 hover:text-white hover:bg-white/5' }}
								transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-5 h-5">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <span>Settings</span>
                            @if(request()->routeIs('dashboard.profile'))
                            <div class="absolute left-0 w-1 h-8 bg-gradient-to-b from-purple-600 to-pink-600 rounded-r" style="opacity: 1;"></div>
                            @endif
                        </div>
                    </a>
                </div>
                <div class="px-6 py-4 border-t border-gray-800/50 text-gray-400 text-sm">
                    <div class="space-y-2"><a class="block hover:text-white transition-colors" href="/Whitepaper.pdf">Whitepaper</a><a class="block hover:text-white transition-colors" href="/terms-of-use">Terms of Use</a><a class="block hover:text-white transition-colors" href="/privacy-policy">Privacy Policy</a></div>
                </div>
            </div>
            <div class="md:hidden fixed inset-x-0 top-0 z-50">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-b from-black via-black/80 to-transparent"></div>
                    <div class="relative px-4 h-16 flex items-center justify-between">
                        <a class="relative z-10" href="">
                            <div class="group relative">
                                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600/50 to-purple-600/50 rounded-xl blur-md opacity-25 group-hover:opacity-40 transition duration-200"></div>
                                <img alt="Logo" loading="lazy" width="40" height="40" decoding="async" data-nimg="1" class="transform group-hover:scale-105 transition-all duration-200" src="/grok.svg" style="color: transparent;">
                            </div>
                        </a>
                        <button id="mobile-menu-button" class="relative p-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/5 text-gray-400 hover:text-white transition-colors z-[60]">
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu w-5 h-5">
                                    <line x1="4" x2="20" y1="12" y2="12"></line>
                                    <line x1="4" x2="20" y1="6" y2="6"></line>
                                    <line x1="4" x2="20" y1="18" y2="18"></line>
                                </svg>
                                <div class="absolute -top-1 -right-1 w-2 h-2 bg-blue-500 rounded-full"></div>
                            </div>
                        </button>
                        <div id="mobile-menu">
                            <div class="menu-content">
                                <a class="menu-link" href="/dashboard">Dashboard</a>
                                <a class="menu-link" href="/dashboard/buy-coin">Buy Coins</a>
                                @if(auth()->user()->role == 'admin')
                                <a class="menu-link" href="/dashboard/admin">Admin</a>
                                @endif
                                <a class="menu-link" href="/dashboard/my-coins">My Coins</a>
                                <a class="menu-link" href="/dashboard/status">Status</a>
                                <a class="menu-link" href="/dashboard/how-to-buy">How to Buy</a>
                                <a class="menu-link" href="/dashboard/profile">Settings</a>
                                <a class="menu-link gray" href="/Whitepaper.pdf">Whitepaper</a>
                                <a class="menu-link gray" href="/terms-of-use">Terms of Use</a>
                                <a class="menu-link gray" href="/privacy-policy">Privacy Policy</a>
                            </div>
                        </div>
                        <div id="mobile-menu-backdrop"></div>
                        <script>
                            // Открытие/закрытие мобильного меню
                            const menuBtn = document.getElementById('mobile-menu-button');
                            const menu = document.getElementById('mobile-menu');
                            const backdrop = document.getElementById('mobile-menu-backdrop');
                            let menuOpen = false;

                            menuBtn.addEventListener('click', (e) => {
                                e.stopPropagation();
                                menuOpen = !menuOpen;
                                if (menuOpen) {
                                    menu.classList.add('open');
                                    backdrop.style.display = 'block';
                                } else {
                                    menu.classList.remove('open');
                                    backdrop.style.display = 'none';
                                }
                            });

                            // Закрытие меню при клике вне его или по фону
                            document.addEventListener('click', (e) => {
                                if (
                                    menuOpen &&
                                    !menu.contains(e.target) &&
                                    !menuBtn.contains(e.target)
                                ) {
                                    menu.classList.remove('open');
                                    backdrop.style.display = 'none';
                                    menuOpen = false;
                                }
                            });
                            // Закрытие по клику на затемнение
                            backdrop.addEventListener('click', () => {
                                if (menuOpen) {
                                    menu.classList.remove('open');
                                    backdrop.style.display = 'none';
                                    menuOpen = false;
                                }
                            });
                        </script>
                        <style>
                            /* Стили для мобильного меню: выезд слева направо */
                            #mobile-menu {
                                position: fixed;
                                top: 64px;
                                /* высота шапки */
                                left: 0;
                                bottom: 0;
                                width: 80vw;
                                max-width: 320px;
                                background: rgba(0, 0, 0, 0.95);
                                backdrop-filter: blur(8px);
                                z-index: 50;
                                transform: translateX(-100%);
                                transition: transform 0.3s cubic-bezier(.4, 0, .2, 1);
                                box-shadow: 2px 0 16px rgba(0, 0, 0, 0.2);
                                /* Скрыто по умолчанию */
                            }

                            #mobile-menu.open {
                                transform: translateX(0);
                            }

                            #mobile-menu .menu-content {
                                display: flex;
                                flex-direction: column;
                                gap: 8px;
                                padding: 16px;
                            }

                            #mobile-menu .menu-link {
                                display: block;
                                color: #fff;
                                padding: 8px 16px;
                                border-radius: 8px;
                                text-decoration: none;
                                transition: background 0.2s;
                            }

                            #mobile-menu .menu-link:hover {
                                background: rgba(255, 255, 255, 0.08);
                            }

                            #mobile-menu .menu-link.gray {
                                color: #aaa;
                            }

                            /* Затемнение фона при открытом меню */
                            #mobile-menu-backdrop {
                                display: none;
                                position: fixed;
                                z-index: 49;
                                top: 0;
                                left: 0;
                                right: 0;
                                bottom: 0;
                                background: rgba(0, 0, 0, 0.4);
                                transition: opacity 0.3s;
                            }

                            #mobile-menu.open~#mobile-menu-backdrop {
                                display: block;
                            }

                            @media (max-width: 400px) {
                                body>div>div>div.md\:hidden.fixed.inset-x-0.top-0.z-50>div {
                                    width: 100vw;
                                }

                                body>div>div>div.flex-1.md\:ml-64 {
                                    width: 100vw;
                                }

                                .flex.space-x-6.items-start {
                                    flex-direction: column;
                                    align-items: center;
                                }

                                .flex.space-x-6.items-start>.flex-1 {
                                    margin: 0;
                                    padding: 5px;
                                }
                            }
                        </style>
                    </div>
                </div>
            </div>
            <div class="flex-1 md:ml-64">
                @yield('content')
            </div>
        </div>
    </div>

</body>

</html>
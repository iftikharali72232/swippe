<!DOCTYPE html>
<html lang="{{ session('lang', 'en') }}" dir="{{ session('lang') == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Swippe')</title>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Link FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <!-- Link Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="">
    <!-- Navbar -->
    <div class="navbar">
        <div class="bg-roti-50">
            <div class="container-box flex justify-between items-center">
                <div class="">
                    <div class="relative inline-block text-left">
                        <button type="button" id="dropdownButton" class="flex items-center cursor-pointer px-4 py-2 hover:bg-gray-100 focus:outline-none">
                            <img src="https://flagcdn.com/w40/{{ session('lang') == 'ar' ? 'sa' : 'us' }}.png" class="w-6 h-6 rounded-full me-2" alt="{{ session('lang') == 'ar' ? 'Saudi Arabia' : 'United States' }} Flag">
                            <span>{{ session('lang') == 'ar' ? 'Saudi Arabia (AR)' : 'United States (EN)' }} </span>
                            <svg class="w-4 h-4 ms-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="dropdownMenu" class="hidden absolute mt-1 min-w-[140px] bg-white rounded-md shadow-lg">
                            <button type="button" class="flex items-center px-4 py-2 hover:bg-gray-100 hover:rounded-md w-full text-left cursor-pointer lang-switch" data-lang="en">
                                <img src="https://flagcdn.com/w40/us.png" class="w-6 h-6 rounded-full me-2" alt="USA Flag">
                                <span>United States (EN)</span>
                            </button>
                            <button type="button" class="flex items-center px-4 py-2 hover:bg-gray-100 hover:rounded-md w-full text-left cursor-pointer lang-switch" data-lang="ar">
                                <img src="https://flagcdn.com/w40/sa.png" class="w-6 h-6 rounded-full me-2" alt="Saudi Arabia Flag">
                                <span>Saudi Arabia (AR)</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="md:block hidden">
                    <p class="text-emerald-800 font-semibold text-end">
                        {{ __('messages.topbar_first_col') }}
                    </p>
                </div>
            </div>
        </div>
        
        <div class="bg-emerald-600 py-2">
            <div class="container-box flex items-center">
                <div class="w-auto">
                    <a href="/">
                        <img src="{{ asset('images/logo.png') }}" class="w-[300px]" alt="Logo">
                    </a>
                </div>
                
                <div class="flex justify-end items-center w-full p-4 text-lg">
                    <!-- Mobile Menu Button -->
                    <button id="menuToggle" class="lg:hidden p-2 rounded-md border border-gray-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>

                    <!-- Navigation Menu -->
                    <div id="navMenu" class="hidden lg:flex flex-col lg:flex-row lg:items-center absolute lg:static top-30 left-0 w-full lg:w-auto bg-white lg:bg-transparent shadow-lg lg:shadow-none p-4 lg:p-0 space-y-4 lg:space-y-0 lg:space-x-6 z-50">
                        <div class="flex flex-col lg:flex-row lg:items-center space-y-4 lg:space-y-0 lg:space-x-6 lg:me-14">
                            <a href="#" class="font-bold hover:underline">{{ __('messages.home') }}</a>
                            <div class="relative">
                                <button type="button" id="hintDropdownBtn" class="flex items-center lg:justify-normal justify-between cursor-pointer space-x-1 font-bold text-emerald-800 hover:underline lg:w-auto w-full">
                                    <span>{{ __('messages.hint') }}</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <!-- Dropdown Menu -->
                                <div id="hintDropdown" class="hidden lg:absolute lg:mt-2 bg-white lg:min-w-[160px] w-full  lg:shadow-lg rounded-md">
                                    <a href="/reports" class="flex items-center space-x-3 px-4 py-2 text-black hover:bg-gray-100 hover:rounded-md lg:w-auto w-full">
                                        <img src="{{ asset('images/reports-icon.png') }}" class="w-[17px] h-[17px]" alt="Reports Icon">
                                        <span>{{ __('messages.reports') }}</span>
                                    </a>
                                    <a href="/settings" class="flex items-center space-x-3 px-4 py-2 text-black hover:bg-gray-100 hover:rounded-md lg:w-auto w-full">
                                        <img src="{{ asset('images/settings-icon.png') }}" class="w-[20px] h-[20px]" alt="Settings Icon">
                                        <span>{{ __('messages.settings') }}</span>
                                    </a>
                                    <a href="/settlement" class="flex items-center space-x-3 px-4 py-2 text-black hover:bg-gray-100 hover:rounded-md lg:w-auto w-full">
                                        <img src="{{ asset('images/settlement-icon.png') }}" class="w-[20px] h-[20px]" alt="Settlement Icon">
                                        <span>{{ __('messages.settlement') }}</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Dropdown Button -->
                            <div class="relative">
                                <button type="button" id="pagesDropdownBtn" class="flex lg:justify-normal justify-between items-center cursor-pointer space-x-1 hover:underline lg:w-auto w-full">
                                    <span>{{ __('messages.pages') }}</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <!-- Dropdown Menu -->
                                <div id="pagesDropdown" class="hidden lg:absolute lg:mt-2 bg-white lg:min-w-[180px] w-full lg:shadow-lg rounded-md">
                                    <a href="/about_us" class="block px-4 py-2 text-black hover:bg-gray-100 hover:rounded-md">
                                        {{ __('messages.about_title') }}
                                    </a>
                                    
                                    <a href="/cart" class="block px-4 py-2 text-black hover:bg-gray-100 hover:rounded-md">
                                        {{ __('messages.cart') }}
                                    </a>
                                    
                                    <a href="/checkout" class="block px-4 py-2 text-black hover:bg-gray-100 hover:rounded-md">
                                        {{ __('messages.checkout') }}
                                    </a>
                                    
                                    <a href="/current-offers" class="block px-4 py-2 text-black hover:bg-gray-100 hover:rounded-md">
                                        {{ __('messages.current_offers') }}
                                    </a>
                                    
                                    <a href="/email_confirmation" class="block px-4 py-2 text-black hover:bg-gray-100 hover:rounded-md">
                                        {{ __('messages.confirm_your_email') }}
                                    </a>
                                    
                                    <a href="/forgot_password" class="block px-4 py-2 text-black hover:bg-gray-100 hover:rounded-md">
                                        {{ __('messages.forgot_password') }}
                                    </a>
                                    
                                    <a href="/new_password" class="block px-4 py-2 text-black hover:bg-gray-100 hover:rounded-md">
                                        {{ __('messages.new_password') }}
                                    </a>
                                    
                                    <a href="/order-process" class="block px-4 py-2 text-black hover:bg-gray-100 hover:rounded-md">
                                        {{ __('messages.order_process') }}
                                    </a>
                                    
                                    <a href="/privacy_policy" class="block px-4 py-2 text-black hover:bg-gray-100 hover:rounded-md">
                                        {{ __('messages.privacy_policy') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Dropdown Button -->
                        <div class="relative">
                            <button type="button" id="loginDropdownBtn" class="flex lg:justify-normal justify-between items-center cursor-pointer space-x-1 hover:underline lg:w-auto w-full">
                                <span>{{ __('messages.login') }}</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <!-- Dropdown Menu -->
                            <div id="loginDropdown" class="hidden lg:absolute lg:mt-2 bg-white lg:min-w-[130px] w-full lg:shadow-lg rounded-md">
                                <a href="#" id="loginModalOpenBtn" class="block px-4 py-2 text-black hover:bg-gray-100 hover:rounded-md">{{ __('messages.signin') }}</a>
                                <a href="/register" class="block px-4 py-2 text-black hover:bg-gray-100 hover:rounded-md">{{ __('messages.register') }}</a>
                            </div>
                        </div>

                        <!-- Cart Icon -->
                        <button type="button" class="bg-black hover:bg-emerald-950 text-white cursor-pointer p-2 rounded-full">
                            <img src="{{ asset('images/cart.png') }}" class="w-6 h-6" alt="Cart Icon">
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="py-6">
        @yield('content')
    </div>

    <!-- Footer -->
    <div class="footer-contact-section py-6">
        <div class="container-box">
            <div class="grid lg:grid-cols-2 gap-6 items-center bg-black/20 backdrop-blur-md shadow-lg rounded-lg md:p-10 p-5">
                <!-- Left Section -->
                <div class="space-y-4">
                    <h2 class="text-emerald-800 md:text-[40px] text-[25px] md:text-start text-center font-bold">
                        {!! __('messages.everything_will_be_easy') !!}
                    </h2>
                    <h3 class="text-emerald-950 md:text-[45px] text-[25px] md:text-start text-center font-extrabold">{{ __('messages.with_us') }}</h3>
                    <div class="grid md:grid-cols-4 grid-cols-2 gap-4 mt-4">
                        <div class="flex md:justify-normal justify-end">
                            <img src="{{ asset('images/visa.jpg') }}" alt="Visa" class="h-[50px] rounded-lg">
                        </div>

                        <div class="">
                            <img src="{{ asset('images/mastercard.jpg') }}" alt="Mastercard" class="h-[50px] rounded-lg">
                        </div>

                        <div class="flex md:justify-normal justify-end">
                            <img src="{{ asset('images/applepay.jpg') }}" alt="Apple Pay" class="h-[50px] rounded-lg">
                        </div>

                        <div class="">
                            <img src="{{ asset('images/mada.jpg') }}" alt="Mada" class="h-[50px] rounded-lg">
                        </div>
                    </div>
                </div>
                
                <!-- Right Section -->
                <div class="bg-emerald-900 text-white p-6 rounded-lg relative">
                    <div class="flex justify-center">
                        <h2 class="bg-emerald-50 text-emerald-950 md:px-8 px-4 py-2 mb-4 rounded-full font-bold">
                            {{ __('messages.we_here_for_you') }}
                        </h2>
                    </div>
                    <form class="space-y-4">
                        <div class="flex md:flex-row flex-col gap-2">
                            <input type="text" placeholder="{{ __('messages.your_name') }}" class="md:w-1/2 w-full px-3 py-2 rounded-lg bg-white text-gray-900 outline-none">
                            <input type="text" placeholder="{{ __('messages.phone_number') }}" class="md:w-1/2 w-full px-3 py-2 rounded-lg bg-white text-gray-900 outline-none">
                        </div>
                        <div class="relative">
                            <textarea rows="4" placeholder="{{ __('messages.type_your_message_here') }}" class="w-full p-2 rounded-lg bg-white text-gray-900 outline-none"></textarea>
                            <button type="submit" class="absolute bottom-3 right-2 cursor-pointer bg-emerald-900 hover:bg-emerald-950 p-3 rounded-full w-[35px] h-[35px] flex items-center justify-center">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-box pt-20 pb-10">
        <div class="grid md:grid-cols-3 gap-4">
            <div class="flex flex-col md:items-start items-center">
                <img src="{{ asset('images/footer-logo1.png') }}" class="w-[200px] mb-4" alt="Logo">
                
                <div class="flex">
                    <div class="bg-roti-200 rounded-2xl pb-2">
                        <img src="{{ asset('images/footer-logo2.png') }}" class="w-[200px]" alt="Logo">
                        <p class="text-center font-semibold text-emerald-950 pt-1">{{ __('messages.commercial_register') }}</p>
                        <p class="text-center text-emerald-800">4652587423</p>
                    </div>
                </div>
            </div>

            <div class="">
                <h3 class="text-emerald-950 lg:text-2xl text-xl font-bold mb-2 md:text-start text-center">{{ __('messages.company') }}</h3>
                <ul class="space-y-2 mb-4 md:text-start text-center">
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">{{ __('messages.who_we_are') }}</a></li>
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">{{ __('messages.privacy_policy') }}</a></li>
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">{{ __('messages.terms_conditions') }}</a></li>
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">{{ __('messages.shipping_guidelines') }}</a></li>
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">{{ __('messages.prohibited_materials') }}</a></li>
                </ul>

                <h3 class="text-emerald-950 lg:text-2xl text-xl font-bold mb-2 md:text-start text-center">{{ __('messages.stay_tuned') }}</h3>
                <div class="flex space-x-6 mt-2 text-emerald-700 md:justify-normal justify-center">
                    <a href="#" class="text-3xl"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-3xl"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="text-3xl"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" class="text-3xl"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="text-3xl"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>

            <div class="">
                <h3 class="text-emerald-950 lg:text-2xl text-xl font-bold mb-2 md:text-start text-center">{{ __('messages.customer_services') }}</h3>
                <ul class="space-y-2 mb-4 md:text-start text-center">
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">{{ __('messages.coupons') }}</a></li>
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">{{ __('messages.faq') }}</a></li>
                </ul>

                <h3 class="text-emerald-950 lg:text-2xl text-xl font-bold mb-2 md:text-start text-center">{{ __('messages.personal_account') }}</h3>
                <ul class="space-y-2 md:text-start text-center">
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">{{ __('messages.contact_us') }}</a></li>
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">{{ __('messages.support_center') }}</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-emerald-900 mt-10 pt-3">
            <p class="text-lg text-emerald-900 text-center font-bold">
                {{ __('messages.powered_by') }}: Grgir person 2025
            </p>
        </div>
    </div>

    <!-- Login Modal Overlay -->
    <div id="loginModal" class="fixed inset-0 bg-black/60 flex items-center justify-center z-50 hidden md:px-0 px-6">
        
        <!-- Modal Box -->
        <div class="bg-white rounded-3xl shadow-lg lg:w-1/2 md:w-2/3 md:py-12 py-10 lg:px-30 md:px-14 px-5 relative">
            <!-- Close Button -->
            <button id="loginModalCloseBtn" class="absolute top-0 ltr:right-0 rtl:left-0 text-white bg-emerald-800 hover:bg-emerald-900 ltr:rounded-tr-2xl ltr:rounded-bl-2xl rtl:rounded-tl-2xl rtl:rounded-br-2xl px-6 py-3 text-sm cursor-pointer">
                <i class="fa-solid fa-x"></i>
            </button>

            <!-- Title -->
            <h2 class="text-4xl font-bold text-emerald-900 text-center mb-10">{{ __('messages.login') }}</h2>

            <!-- Email Field -->
            <div class="mb-4">
                <label class="block text-gray-500 mb-1">{{ __('messages.email') }}</label>
                <input type="email" placeholder="Example@gmail.com"
                    class="w-full px-4 py-3 bg-roti-50 border border-gray-300 rounded-xl focus:outline-none">
            </div>

            <!-- Password Field -->
            <div class="mb-2">
                <label class="block text-gray-500 mb-1">{{ __('messages.password') }}</label>
                <input type="password" placeholder="********" class="w-full px-4 py-3 bg-roti-50 border border-gray-300 rounded-xl focus:outline-none">
            </div>

            <!-- Remember me & Forgot Password -->
            <div class="flex justify-between items-center text-sm mt-2 mb-4 font-semibold">
                <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox text-emerald-800">
                <span class="ml-2 text-gray-700">{{ __('messages.remember_me') }}</span>
                </label>
                <a href="#" class="text-emerald-800 hover:underline">{{ __('messages.forgot_password') }}</a>
            </div>

            <!-- Login Button -->
             <div class="flex justify-center pt-4">
                <button type="button" class="bg-emerald-800 cursor-pointer text-white px-10 py-2.5 rounded-lg hover:bg-emerald-900 transition">{{ __('messages.login') }}</button>
             </div>

            <!-- Register Link -->
            <p class="text-center text-sm mt-4 text-gray-700">
                <span>{{ __('messages.if_you_donot_have_an_account') }}</span> 
                <a href="#" class="text-emerald-800 font-semibold hover:underline">{{ __('messages.register_now') }}</a>
            </p>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Login Modal
            $('#loginModalOpenBtn').on('click', function() {
                $('#loginModal').removeClass('hidden');
            });

            $('#loginModalCloseBtn').on('click', function() {
                $('#loginModal').addClass('hidden');
            });

            // Language Switching
            let savedLang = localStorage.getItem('lang') || "{{ session('lang', 'en') }}";

            if (savedLang === 'ar') {
                $('html').attr('dir', 'rtl');
            } else {
                $('html').attr('dir', 'ltr');
            }

            $(".lang-switch").click(function() {
                let selectedLang = $(this).data("lang");

                $.get("{{ url('/change-language') }}/" + selectedLang, function() {
                    localStorage.setItem('lang', selectedLang);
                    $('html').attr('dir', selectedLang === 'ar' ? 'rtl' : 'ltr');
                    location.reload(); // Reload to apply changes
                });
            });
        });

        document.getElementById("menuToggle").addEventListener("click", function () {
            document.getElementById("navMenu").classList.toggle("hidden");
        });
        
        document.getElementById("dropdownButton").addEventListener("click", function() {
            document.getElementById("dropdownMenu").classList.toggle("hidden");
        });

        // Toggle Hint Dropdown
        document.getElementById("hintDropdownBtn").addEventListener("click", function () {
            document.getElementById("hintDropdown").classList.toggle("hidden");
        });
        
        // Toggle Login Dropdown
        document.getElementById("loginDropdownBtn").addEventListener("click", function () {
            document.getElementById("loginDropdown").classList.toggle("hidden");
        });
        
        // Toggle Pages Dropdown
        document.getElementById("pagesDropdownBtn").addEventListener("click", function () {
            document.getElementById("pagesDropdown").classList.toggle("hidden");
        });

        // Close menu when clicking outside (for mobile)
        document.addEventListener("click", function (event) {
            let navMenu = document.getElementById("navMenu");
            let menuToggle = document.getElementById("menuToggle");
            let loginDropdown = document.getElementById("loginDropdown");

            if (!menuToggle.contains(event.target) && !navMenu.contains(event.target)) {
                navMenu.classList.add("hidden");
            }

            if (!document.getElementById("loginDropdownBtn").contains(event.target) && !loginDropdown.contains(event.target)) {
                loginDropdown.classList.add("hidden");
            }
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Link FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <!-- Link Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 text-gray-900">
    <!-- Navbar -->
    <div class="navbar">
        <div class="bg-roti-50">
            <div class="container-box flex justify-between items-center">
                <div class="">
                    <div class="relative inline-block text-left">
                        <button type="button" id="dropdownButton" class="flex items-center cursor-pointer px-4 py-2 hover:bg-gray-100 focus:outline-none">
                            <img src="https://flagcdn.com/w40/sa.png" class="w-6 h-6 rounded-full mr-2" alt="Saudi Arabia Flag">
                            <span>Saudi Arabia (AR)</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="dropdownMenu" class="hidden absolute mt-1 min-w-[140px] bg-white rounded-md shadow-lg">
                            <button class="flex items-center px-4 py-2 hover:bg-gray-100 hover:rounded-md w-full text-left">
                                <img src="https://flagcdn.com/w40/us.png" class="w-6 h-6 rounded-full mr-2" alt="USA Flag">
                                <span>United States (EN)</span>
                            </button>
                            <button class="flex items-center px-4 py-2 hover:bg-gray-100 hover:rounded-md w-full text-left">
                                <img src="https://flagcdn.com/w40/sa.png" class="w-6 h-6 rounded-full mr-2" alt="Saudi Arabia Flag">
                                <span>Saudi Arabia (AR)</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="text-emerald-800 font-semibold text-end">63% discount for subscribing with us for the first time</p>
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
                
                <div class="flex justify-end items-center space-x-6 w-full text-lg">
                    <div class="flex items-center space-x-6 me-14">
                        <a href="#" class="font-bold hover:underline">Home</a>
                        <a href="#" class="font-bold text-emerald-800 hover:underline">Hint</a>
                    </div>

                    <!-- Dropdown Button -->
                    <div class="relative">
                        <button type="button" id="loginDropdownBtn" class="flex items-center cursor-pointer space-x-1 hover:underline">
                            <span>Login</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="loginDropdown" class="hidden absolute mt-2 z-50 bg-white min-w-[130px] shadow-lg rounded-md">
                            <a href="#" class="block px-4 py-2 text-black hover:bg-gray-100 hover:rounded-md">Sign In</a>
                            <a href="#" class="block px-4 py-2 text-black hover:bg-gray-100 hover:rounded-md">Register</a>
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

    <!-- Page Content -->
    <div class="container mx-auto p-6">
        @yield('content')
    </div>

    <!-- Footer -->
    <div class="footer-contact-section py-6">
        <div class="container-box">
            <div class="grid md:grid-cols-2 gap-6 items-center bg-black/20 backdrop-blur-md shadow-lg rounded-lg p-10">
                <!-- Left Section -->
                <div class="space-y-4">
                    <h2 class="text-emerald-800 text-[40px] font-bold">Everything will be easy, <br> for your business</h2>
                    <h3 class="text-emerald-950 text-[45px] font-extrabold">WITH US!</h3>
                    <div class="flex gap-4 mt-4">
                        <img src="{{ asset('images/visa.jpg') }}" alt="Visa" class="h-[50px] rounded-lg">
                        <img src="{{ asset('images/mastercard.jpg') }}" alt="Mastercard" class="h-[50px] rounded-lg">
                        <img src="{{ asset('images/applepay.jpg') }}" alt="Apple Pay" class="h-[50px] rounded-lg">
                        <img src="{{ asset('images/mada.jpg') }}" alt="Mada" class="h-[50px] rounded-lg">
                    </div>
                </div>
                
                <!-- Right Section -->
                <div class="bg-emerald-900 text-white p-6 rounded-lg relative">
                    <div class="flex justify-center">
                        <h2 class="bg-emerald-50 text-emerald-950 px-8 py-2 mb-4 rounded-full font-bold">
                            We here for you, contact us
                        </h2>
                    </div>
                    <form class="space-y-4">
                        <div class="flex gap-2">
                            <input type="text" placeholder="Your Name" class="w-1/2 px-3 py-2 rounded-lg bg-white text-gray-900 outline-none">
                            <input type="text" placeholder="Phone Number" class="w-1/2 px-3 py-2 rounded-lg bg-white text-gray-900 outline-none">
                        </div>
                        <div class="relative">
                            <textarea rows="4" placeholder="Type your message here..." class="w-full p-2 rounded-lg bg-white text-gray-900 outline-none"></textarea>
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
        <div class="grid grid-cols-3 gap-4">
            <div class="">
                <img src="{{ asset('images/footer-logo1.png') }}" class="w-[200px] mb-4" alt="Logo">
                
                <div class="flex">
                    <div class="bg-roti-200 rounded-2xl pb-2">
                        <img src="{{ asset('images/footer-logo2.png') }}" class="w-[200px]" alt="Logo">
                        <p class="text-center font-semibold text-emerald-950 pt-1">Commercial Register</p>
                        <p class="text-center text-emerald-800">4652587423</p>
                    </div>
                </div>
            </div>

            <div class="">
                <h3 class="text-emerald-950 text-2xl font-bold mb-2">Company</h3>
                <ul class="space-y-2 mb-4">
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">Who we are</a></li>
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">Privacy Policy</a></li>
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">Terms and Conditions</a></li>
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">Shipping Guidelines</a></li>
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">Prohibited Materials</a></li>
                </ul>

                <h3 class="text-emerald-950 text-2xl font-bold mb-2">Stay Tuned:</h3>
                <div class="flex space-x-6 mt-2 text-emerald-700">
                    <a href="#" class="text-3xl"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-3xl"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="text-3xl"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" class="text-3xl"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="text-3xl"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>

            <div class="">
                <h3 class="text-emerald-950 text-2xl font-bold mb-2">Customer Services</h3>
                <ul class="space-y-2 mb-4">
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">Coupons</a></li>
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">FAQ</a></li>
                </ul>

                <h3 class="text-emerald-950 text-2xl font-bold mb-2">Personal Account</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">Contact us</a></li>
                    <li><a href="#" class="text-lg text-emerald-700 hover:underline">Support Center</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-emerald-900 mt-10 pt-3">
            <p class="text-lg text-emerald-900 text-center font-bold">
                Powered by: Grgir person 2025
            </p>
        </div>
    </div>

    <script>
        document.getElementById("dropdownButton").addEventListener("click", function() {
            document.getElementById("dropdownMenu").classList.toggle("hidden");
        });

        // Toggle Login Dropdown
        document.getElementById("loginDropdownBtn").addEventListener("click", function () {
            document.getElementById("loginDropdown").classList.toggle("hidden");
        });
    </script>
</body>
</html>

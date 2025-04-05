@extends('layouts.app')

@section('title', 'Settings')

@section('content')

<div class="container-box py-10">
    <!-- Header -->
    <div class="bg-green-800 text-white lg:px-14 px-6 py-7 rounded-3xl flex md:flex-row flex-col md:justify-between md:items-center md:space-y-none space-y-5">
        <div class="font-semibold flex items-center gap-4 m-0">
            <img src="{{ asset('images/profile1.png') }}" alt="Profile" class="lg:w-[40px] w-[25px]">
            <span class="lg:text-2xl text-lg">Ahmed Kamal</span>
        </div>
        <div class="flex items-center gap-4 m-0">
            <img src="{{ asset('images/phone.png') }}" alt="phone" class="lg:w-[40px] w-[25px]">
            <span class="lg:text-2xl text-lg">+9665874523623</span>
        </div>
        <div class="flex items-center gap-4 m-0">
            <img src="{{ asset('images/mail.png') }}" alt="email" class="lg:w-[40px] w-[25px]">
            <span class="lg:text-2xl text-lg">Example@gmail.com</span>
        </div>
    </div>

    <!-- Main Container -->
    <div class="mt-4 flex md:flex-row flex-col md:space-y-none space-y-4">

        <!-- Sidebar Tabs -->
        <div class="md:w-1/4 w-full">
            <div class="border-2 border-emerald-950 rounded-3xl px-4 py-8 bg-white">
                <button onclick="showTab('profile')" id="tab-profile" class="flex items-center w-full gap-4 text-lg font-semibold p-3 text-left rounded-2xl bg-emerald-50 cursor-pointer">
                    <img src="{{ asset('images/profile2.png') }}" alt="Profile" class="w-[20px]">
                    <span>{{ __('messages.profile') }}</span>
                </button>
                <button onclick="showTab('coupons')" id="tab-coupons" class="flex items-center w-full gap-4 text-lg font-semibold p-3 text-left rounded-2xl mt-2 cursor-pointer">
                    <img src="{{ asset('images/coupons.png') }}" alt="Coupons" class="w-[20px]">
                    <span>{{ __('messages.coupons') }}</span>
                </button>
            </div>
        </div>

        <!-- Content Area -->
        <div class="md:w-3/4 w-full">
            <!-- Profile Tab -->
            <div id="content-profile" class="ltr:md:ml-4 rtl:md:mr-4 bg-white">
                <div class="grid md:grid-cols-2 gap-4 border-2 border-emerald-950 rounded-3xl p-8">
                    <div>
                        <label class="block text-gray-700 font-medium">{{ __('messages.name') }}</label>
                        <input type="text" placeholder="Example@hotmail.com" class="w-full border border-gray-300 rounded-xl px-4 py-2 mt-1 focus:outline-none bg-[#FAF8EC80]">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">{{ __('messages.phone_number') }}</label>
                        <input type="text" placeholder="+966528741253" class="w-full border border-gray-300 rounded-xl px-4 py-2 mt-1 focus:outline-none bg-[#FAF8EC80]">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">{{ __('messages.email') }}</label>
                        <input type="email" placeholder="Example@gmail.com" class="w-full border border-gray-300 rounded-xl px-4 py-2 mt-1 focus:outline-none bg-[#FAF8EC80]">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">{{ __('messages.date_of_birth') }}</label>
                        <input type="date" class="w-full border border-gray-300 rounded-xl px-4 py-2 mt-1 focus:outline-none bg-[#FAF8EC80]">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">{{ __('messages.gender') }}</label>
                        <select class="w-full border border-gray-300 rounded-xl px-4 py-2 mt-1 focus:outline-none bg-[#FAF8EC80]">
                            <option>{{ __('messages.choose') }}</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">{{ __('messages.nationality_country') }}</label>
                        <select class="w-full border border-gray-300 rounded-xl px-4 py-2 mt-1 focus:outline-none bg-[#FAF8EC80]">
                            <option>{{ __('messages.choose') }}</option>
                        </select>
                    </div>
                </div>

                <div class="flex md:flex-row flex-col md:justify-between mt-6 md:px-8 py-2 md:space-y-0 space-y-4">
                    <button class="bg-emerald-800 text-white font-semibold px-6 py-3 rounded-xl md:w-auto w-full">
                        {{ __('messages.save_updates') }}
                    </button>
                    <button class="bg-red-600 text-white font-semibold px-6 py-3 rounded-xl md:w-auto w-full">
                        {{ __('messages.delete_account') }}
                    </button>
                </div>
            </div>

            <!-- Coupons Tab -->
            <div id="content-coupons" class="hidden md:ml-4 bg-white">
                <div class="border-2 border-emerald-950 rounded-3xl p-8">
                    <h2 class="text-2xl font-semibold text-emerald-950 mb-6">
                        {{ __('messages.coupon_discount_code') }}
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Coupon Card 1 -->
                        <div class="border rounded-xl p-5 bg-white shadow-md">
                            <p class="text-lg font-semibold">{{ __('messages.discount_code') }} <span class="text-yellow-600">/ {{ __('messages.valid') }}</span></p>
                            <p class="text-emerald-600">5.00 SAR {{ __('messages.discount') }}</p>
                            <div class="flex items-center bg-emerald-50 px-4 py-3 rounded-xl mt-2">
                                <span class="flex-1 text-gray-500 font-mono">ALI10</span>
                                <button class="text-gray-400 hover:text-emerald-600">
                                    <i class="fa-regular fa-copy"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Coupon Card 2 -->
                        <div class="border rounded-xl p-5 bg-white shadow-md">
                            <p class="text-lg font-semibold">{{ __('messages.disocunt_code') }} <span class="text-yellow-600">/ {{ __('messages.valid') }}</span></p>
                            <p class="text-emerald-600">5.00 SAR {{ __('messages.discount') }}</p>
                            <div class="flex items-center bg-emerald-50 px-4 py-3 rounded-xl mt-2">
                                <span class="flex-1 text-gray-500 font-mono">Rtyu5</span>
                                <button class="text-gray-400 hover:text-emerald-600">
                                    <i class="fa-regular fa-copy"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Coupon Card 3 -->
                        <div class="border rounded-xl p-5 bg-white shadow-md">
                            <p class="text-lg font-semibold">{{ __('messages.disocunt_code') }} <span class="text-yellow-600">/ {{ __('messages.valid') }}</span></p>
                            <p class="text-emerald-600">5.00 SAR {{ __('messages.discount') }}</p>
                            <div class="flex items-center bg-emerald-50 px-4 py-3 rounded-xl mt-2">
                                <span class="flex-1 text-gray-500 font-mono">ALI20</span>
                                <button class="text-gray-400 hover:text-emerald-600">
                                    <i class="fa-regular fa-copy"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Coupon Card 4 -->
                        <div class="border rounded-xl p-5 bg-white shadow-md">
                            <p class="text-lg font-semibold">{{ __('messages.disocunt_code') }} <span class="text-yellow-600">/ {{ __('messages.valid') }}</span></p>
                            <p class="text-emerald-600">5.00 SAR {{ __('messages.discount') }}</p>
                            <div class="flex items-center bg-emerald-50 px-4 py-3 rounded-xl mt-2">
                                <span class="flex-1 text-gray-500 font-mono">Rtyu5</span>
                                <button class="text-gray-400 hover:text-emerald-600">
                                    <i class="fa-regular fa-copy"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showTab(tab) {
        // Hide all content
        document.getElementById('content-profile').classList.add('hidden');
        document.getElementById('content-coupons').classList.add('hidden');
        
        // Remove active class from buttons
        document.getElementById('tab-profile').classList.remove('bg-emerald-50');
        document.getElementById('tab-coupons').classList.remove('bg-emerald-50');

        // Show selected content
        document.getElementById('content-' + tab).classList.remove('hidden');

        // Highlight active tab
        document.getElementById('tab-' + tab).classList.add('bg-emerald-50');
    }
</script>

@endsection
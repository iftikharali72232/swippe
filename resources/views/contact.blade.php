@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<div class="container-box py-10">
    <h1 class="text-2xl md:text-3xl font-bold text-emerald-800 mb-4">
      {{ __('messages.contact_us') }}
    </h1>
    <hr class="border-t-3 border-emerald-600 mb-6 w-[100px]" />

    <p class="mb-5 text-emerald-700 font-semibold">
      {{ __('messages.contact_us_desc') }}
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 md:gap-10 gap-4">

        <div>
            <input type="text" placeholder="{{ __('messages.name') }}" class="w-full px-4 py-3 bg-roti-50 border border-gray-300 rounded-xl focus:outline-none" />
        </div>

        <div>
            <input type="text" placeholder="{{ __('messages.phone_number') }}" class="w-full px-4 py-3 bg-roti-50 border border-gray-300 rounded-xl focus:outline-none" />
        </div>

        <div>
            <input type="email" placeholder="Example@hotmail.com" class="w-full px-4 py-3 bg-roti-50 border border-gray-300 rounded-xl focus:outline-none" />
        </div>

        <div class="md:col-span-3">
            <textarea placeholder="{{ __('messages.type_your_message_here') }}" rows="4" class="w-full px-4 py-3 bg-roti-50 border border-gray-300 rounded-xl focus:outline-none"></textarea>
        </div>

        <div class="md:col-span-3 flex justify-end">
            <button type="button" class="bg-emerald-800 cursor-pointer text-white font-semibold px-8 py-2.5 rounded-md hover:bg-emerald-900 transition md:w-auto w-full">
                {{ __('messages.send') }}
            </button>
        </div>

    </div>

    <div class="container-box px-30 mt-20 mb-10">
        <hr class="border-t-3 border-emerald-600 my-10 " />
        <div class="flex flex-wrap justify-center md:space-x-10 mt-2 text-emerald-700">
            <a href="#" class="w-1/2 sm:w-auto flex justify-center mb-3 sm:mb-0">
                <div class="bg-roti-50 rounded-lg px-6 py-4 border border-gray-300 text-3xl">
                    <i class="fab fa-instagram"></i>
                </div>
            </a>
            <a href="#" class="w-1/2 sm:w-auto flex justify-center mb-3 sm:mb-0">
                <div class="bg-roti-50 rounded-lg px-6 py-4 border border-gray-300 text-3xl">
                    <i class="fab fa-linkedin"></i>
                </div>
            </a>
            <a href="#" class="w-1/2 sm:w-auto flex justify-center mb-3 sm:mb-0">
                <div class="bg-roti-50 rounded-lg px-6 py-4 border border-gray-300 text-3xl">
                    <i class="fab fa-x-twitter"></i>
                </div>
            </a>
            <a href="#" class="w-1/2 sm:w-auto flex justify-center mb-3 sm:mb-0">
                <div class="bg-roti-50 rounded-lg px-6 py-4 border border-gray-300 text-3xl">
                    <i class="fab fa-whatsapp"></i>
                </div>
            </a>
            <a href="#" class="w-1/2 sm:w-auto flex justify-center">
                <div class="bg-roti-50 rounded-lg px-6 py-4 border border-gray-300 text-3xl">
                    <i class="fab fa-tiktok"></i>
                </div>
            </a>
        </div>

    </div>
</div>

@endsection
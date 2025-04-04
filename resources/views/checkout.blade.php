@extends('layouts.app')

@section('title', 'Checkout')

@section('content')

<div class="container-box py-10">
    <a href="#" class="text-2xl text-emerald-900 font-semibold">
        <i class="fa-solid fa-arrow-left rotate-[0deg] rtl:rotate-[180deg]"></i>
        <span>{{ __('messages.payment') }}</span>
    </a>

    <div class="flex lg:flex-row flex-col justify-between gap-6 mt-6">
        <div class="lg:w-4/6 border-2 border-emerald-950 rounded-lg p-5">
            <h3 class="text-2xl text-emerald-900 font-semibold mb-2">{{ __('messages.choose_payment_method') }}</h3>
            <div class="grid md:grid-cols-2 gap-4">
                <label class="flex justify-between items-center border-2 border-emerald-950 rounded-lg p-3 cursor-pointer peer-checked:border-emerald-950">
                    <div class="">
                        <input type="radio" name="radio" class="hidden peer">
                        <div class="w-6 h-6 border-2 border-emerald-950 rounded-full flex items-center justify-center transition-all duration-300 peer-checked:bg-green-900">
                            <div class="w-3 h-3 bg-transparent rounded-full peer-checked:bg-white">&nbsp;</div>
                        </div>
                    </div>
                    <img src="{{ asset('images/visa.jpg') }}" alt="Visa" class="w-[50px]">
                </label>

                <label class="flex justify-between items-center border-2 border-emerald-950 rounded-lg p-3 cursor-pointer peer-checked:border-emerald-950">
                    <div class="">
                        <input type="radio" name="radio" class="hidden peer">
                        <div class="w-6 h-6 border-2 border-emerald-950 rounded-full flex items-center justify-center transition-all duration-300 peer-checked:bg-green-900">
                            <div class="w-3 h-3 bg-transparent rounded-full peer-checked:bg-white"></div>
                        </div>
                    </div>
                    <img src="{{ asset('images/applepay.jpg') }}" alt="Apple Pay" class="w-[50px]">
                </label>

                <label class="flex justify-between items-center border-2 border-emerald-950 rounded-lg p-3 cursor-pointer peer-checked:border-emerald-950">
                    <div class="">
                        <input type="radio" name="radio" class="hidden peer">
                        <div class="w-6 h-6 border-2 border-emerald-950 rounded-full flex items-center justify-center transition-all duration-300 peer-checked:bg-green-900">
                            <div class="w-3 h-3 bg-transparent rounded-full peer-checked:bg-white"></div>
                        </div>
                    </div>
                    <img src="{{ asset('images/mastercard.jpg') }}" alt="Mastercard" class="w-[50px]">
                </label>

                <label class="flex justify-between items-center border-2 border-emerald-950 rounded-lg p-3 cursor-pointer peer-checked:border-emerald-950">
                    <div class="">
                        <input type="radio" name="radio" class="hidden peer">
                        <div class="w-6 h-6 border-2 border-emerald-950 rounded-full flex items-center justify-center transition-all duration-300 peer-checked:bg-green-900">
                            <div class="w-3 h-3 bg-transparent rounded-full peer-checked:bg-white"></div>
                        </div>
                    </div>
                    <img src="{{ asset('images/mada.jpg') }}" alt="Mada" class="w-[50px]">
                </label>
            </div>
        </div>

        <div class="lg:w-2/6">
            <div class="border-2 border-emerald-950 rounded-lg p-5">
                <h3 class="text-2xl text-emerald-900 font-semibold mb-2">{{ __('messages.order_details') }}</h3>
                <div class="flex justify-between py-2 text-emerald-700">
                    <span class="font-semibold">{{ __('messages.quantity') }}</span>
                    <span>10 {{ __('messages.policy') }}</span>
                </div>
                <div class="flex justify-between border-b py-2 text-emerald-700">
                    <span class="font-semibold">{{ __('messages.subtotal') }}</span>
                    <span>990.00 SR</span>
                </div>
                <div class="flex justify-between font-bold py-2 text-emerald-950">
                    <span class="font-semibold">{{ __('messages.total') }}</span>
                    <span>990.00 SR</span>
                </div>
            </div>

            <div class="mt-10">
                <button type="button" class="bg-emerald-700 cursor-pointer text-white px-10 py-3 rounded-lg hover:bg-emerald-800 w-full">
                    {{ __('messages.complete_payment') }}
                </button>
            </div>
        </div>
    </div>
    
</div>

@endsection
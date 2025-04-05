@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<!-- About Us Section -->
<div class="container-box py-10 md:px-0 px-10">
    <div class="flex lg:flex-row flex-col lg:justify-between gap-10">
        <div class="lg:w-1/2 flex flex-col justify-center lg:text-start text-center order-2 lg:order-1">
            <h2 class="text-3xl font-bold text-emerald-900 mb-2">{{ __('messages.about_title') }}</h2>
            <div class="flex lg:justify-start justify-center">
                <hr class="border-b-2 border-emerald-600 mb-4 w-[100px]">
            </div>

            <p class="text-lg text-emerald-700 leading-relaxed">
                {{ __('messages.about_desc1') }}
            </p>

            <p class="text-lg text-emerald-700 leading-relaxed">
                {{ __('messages.about_desc2') }}
            </p>
        </div>

        <div class="lg:w-1/2 flex items-center justify-center order-1 lg:order-2">
            <img src="{{ asset('images/about-img.png') }}" alt="about image" class="lg:w-[50%] md:w-[30%] w-[80%]">
        </div>
    </div>
</div>

<!-- We Offer You Section -->
<div class="bg-[#F5F6EF] px-6 py-12 mb-20">
    <div class="container-box">
        <h2 class="text-3xl font-bold text-emerald-900 mb-2 lg:text-start text-center">{{ __('messages.we_offer_you') }}</h2>
        <div class="flex lg:justify-start justify-center">
            <hr class="border-b-2 border-emerald-600 mb-4 w-[100px]">
        </div>
        
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-16 mt-6">
        
            <div class="bg-white px-4 pt-10 pb-8 rounded-t-full border border-gray-200 text-center flex flex-col justify-between">
                <div class="flex justify-center mt-4">
                    <img src="{{ asset('images/delivery_truck_speed.png') }}" alt="Diverse Shipping Options" class="w-[70px]">
                </div>
                <h3 class="font-semibold text-emerald-900 mt-8 text-2xl">
                    {!! __('messages.we_offer_card1') !!}
                </h3>
            </div>
            
            <div class="bg-white px-4 pt-10 pb-8 rounded-t-full border border-gray-200 text-center flex flex-col justify-between">
                <div class="flex justify-center mt-4">
                    <img src="{{ asset('images/finance_chip.png') }}" alt="Competitive Prices" class="w-[70px]">
                </div>
                <h3 class="font-semibold text-emerald-900 mt-8 text-2xl">
                    {!! __('messages.we_offer_card2') !!}
                </h3>
            </div>
            
            <div class="bg-white px-4 pt-10 pb-8 rounded-t-full border border-gray-200 text-center flex flex-col justify-between">
                <div class="flex justify-center mt-4">
                    <img src="{{ asset('images/acute.png') }}" alt="Simple & Fast Procedure" class="w-[60px]">
                </div>
                <h3 class="font-semibold text-emerald-900 mt-8 text-2xl">
                    {!! __('messages.we_offer_card3') !!}
                </h3>
            </div>
            
            <div class="bg-white px-4 pt-10 pb-8 rounded-t-full border border-gray-200 text-center flex flex-col justify-between">
                <div class="flex justify-center mt-4">
                    <img src="{{ asset('images/published_with_changes.png') }}" alt="Continous Technical Support" class="w-[50px]">
                </div>
                <h3 class="font-semibold text-emerald-900 mt-8 text-2xl">
                    {!! __('messages.we_offer_card4') !!}
                </h3>
            </div>
        </div>
    </div>
</div>

@endsection
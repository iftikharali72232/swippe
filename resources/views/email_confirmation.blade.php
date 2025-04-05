@extends('layouts.app')

@section('title', 'Email Confirmation')

@section('content')

<div class="container-box py-10">
    <!-- Heading -->
    <h2 class="text-3xl font-bold text-emerald-900 mb-2">{{ __('messages.confirm_your_email') }}</h2>

    <!-- Warning -->
    <p class="mb-4">
            {{ __('messages.please_enter_the_code') }}
    </p>

    <!-- Form Box -->
    <div class="border border-emerald-900 rounded-2xl p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-10 gap-6">

            <!-- Full Name -->
            <div>
                <label class="block text-emerald-900 font-semibold mb-1">{{ __('messages.code') }}</label>
                <input type="text" placeholder="VF6J9O" class="w-full px-4 py-3 bg-roti-50 border border-gray-300 rounded-xl focus:outline-none" />
            </div>

        </div>
    </div>

    <!-- Register Button -->
    <div class="flex justify-end mt-6">
        <button type="button" class="bg-emerald-800 cursor-pointer text-white font-semibold px-8 py-2.5 rounded-md hover:bg-emerald-900 transition">
            {{ __('messages.next') }}
        </button>
    </div>
</div>

@endsection
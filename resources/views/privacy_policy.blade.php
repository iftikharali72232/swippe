@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')

<div class="container-box py-10">
    <h1 class="text-3xl md:text-3xl font-bold text-emerald-900 mb-4">
        {{ __('messages.prv_privacy_policy') }}
    </h1>
    <hr class="border-t-3 border-emerald-600 mb-6 w-[150px]" />

    <p class="mb-8 text-emerald-700">
        {!! __('messages.prv_privacy_policy_description') !!}
    </p>

    <div class="space-y-6 text-sm md:text-base text-emerald-900">
        <div>
            <h2 class="font-semibold text-xl text-emerald-800">
                {{ __('messages.prv_collection_of_personal_information') }}
            </h2>
            <p class="ml-4 mt-2 text-emerald-700">
                {{ __('messages.prv_collection_info_description') }}
            </p>
            <ul class="list-disc list-inside ml-8 text-emerald-700">
                <li>{{ __('messages.prv_name') }}</li>
                <li>{{ __('messages.prv_email_address') }}</li>
                <li>{{ __('messages.prv_shipping_address') }}</li>
                <li>{{ __('messages.prv_phone_number') }}</li>
                <li>{{ __('prv_payment_details') }}</li>
            </ul>
        </div>

        <div>
            <h2 class="font-semibold text-xl text-emerald-800">
                {{ __('messages.prv_use_of_information') }}
            </h2>
            <p class="ml-4 mt-2 text-emerald-700">
                {{ __('messages.prv_use_info_description') }}
            </p>
            <ul class="list-disc list-inside ml-8 text-emerald-700">
                <li>{{ __('messages.prv_create_shipping_labels') }}</li>
                <li>{{ __('messages.prv_process_orders') }}</li>
                <li>{{ __('messages.prv_send_shipping_updates') }}</li>
                <li>{{ __('messages.prv_improve_user_experience') }}</li>
            </ul>
        </div>

        <div>
            <h2 class="font-semibold text-xl text-emerald-800">
                {{ __('messages.prv_protection_of_information') }}
            </h2>
            <p class="ml-4 mt-2 text-emerald-700">
                {{ __('messages.prv_protection_info_description') }}
            </p>
        </div>

        <div>
            <h2 class="font-semibold text-xl text-emerald-800">
                {{ __('messages.prv_sharing_of_information') }}
            </h2>
            <p class="ml-4 mt-2 text-emerald-700">
                {{ __('messages.prv_sharing_info_description') }}
            </p>
        </div>

        <div>
            <h2 class="font-semibold text-xl text-emerald-800">
                {{ __('messages.prv_cookies') }}
            </h2>
            <p class="ml-4 mt-2 text-emerald-700">
                {{ __('messages.prv_cookies_description') }}
            </p>
        </div>

        <div>
            <h2 class="font-semibold text-xl text-emerald-800">
                {{ __('messages.prv_right_to_access_and_modify') }}
            </h2>
            <p class="ml-4 mt-2 text-emerald-700">
                {{ __('messages.prv_right_info_description') }}
            </p>
        </div>
    </div>
</div>

@endsection
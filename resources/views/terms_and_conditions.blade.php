@extends('layouts.app')

@section('title', 'Terms & Conditions')

@section('content')

<div class="container-box py-10">
    <h1 class="text-2xl md:text-3xl font-bold text-emerald-800 mb-4">
      {{ __('messages.terms_and_conditions') }}
    </h1>
    <hr class="border-t-3 border-emerald-600 mb-6 w-[150px]" />

    <p class="mb-8 text-emerald-700">
      {!! __('messages.terms_and_conditions_desc') !!}
    </p>

    <div class="space-y-6 text-sm md:text-base">
      <div>
        <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.acceptance_of_terms') }}</h2>
        <p class="ml-4 mt-2 text-emerald-700">
          {{ __('messages.acceptance_of_terms_desc') }}
        </p>
      </div>

      <div>
        <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.tc_registration') }}</h2>
        <p class="ml-4 mt-2 text-emerald-700">
          {{ __('messages.tc_registration_desc') }}
        </p>
      </div>

      <div>
        <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.use_of_the_website') }}</h2>
        <ul class="list-disc ml-6 space-y-1">
          <li class="ml-4 mt-2 text-emerald-700">
            {!! __('messages.use_of_the_website_desc1') !!}
          </li>
          <li class="ml-4 mt-2 text-emerald-700">
            {!! __('messages.use_of_the_website_desc2') !!}
          </li>
        </ul>
      </div>

      <div>
        <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.service_provided') }}</h2>
        <p class="ml-4 mt-2 text-emerald-700">
          {{ __('messages.service_provided_desc') }}
        </p>
      </div>

      <div>
        <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.payments') }}</h2>
        <p class="ml-4 mt-2 text-emerald-700">
          {{ __('messages.payments_desc') }}
        </p>
      </div>

      <div>
        <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.intellectual_property') }}</h2>
        <ul class="list-disc ml-6 space-y-1">
          <li class="ml-4 mt-2 text-emerald-700">
            {{ __('messages.intellectual_property_desc1') }}
          </li>
          <li class="ml-4 mt-2 text-emerald-700">
            {{ __('messages.intellectual_property_desc2') }}
          </li>
        </ul>
      </div>
    </div>
</div>

@endsection
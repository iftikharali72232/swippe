@extends('layouts.app')

@section('title', 'Shipping Guidelines')

@section('content')

<div class="container-box py-10">
  <h1 class="text-2xl md:text-3xl font-bold text-emerald-800 mb-4">
    {{ __('messages.shipping_guidelines') }}
  </h1>
  <hr class="border-t-3 border-emerald-600 mb-6 w-[180px]" />

  <p class="mb-8 text-emerald-700">
    {!! __('messages.shipping_guidelines_desc') !!}
  </p>

  <div class="space-y-6 text-sm md:text-base">
    <div>
      <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.shipping_methods') }}</h2>
      <p class="ml-4 mt-2 text-emerald-700">
        {{ __('messages.shipping_methods_desc') }}
      </p>
    </div>

    <div>
      <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.shipping_charges') }}</h2>
      <p class="ml-4 mt-2 text-emerald-700">{{ __('messages.shipping_charges_desc1') }}</p>
      <ul class="list-disc ml-8 space-y-1 text-emerald-700">
        <li>{{ __('messages.shipping_charges_desc2') }}</li>
        <li>{{ __('messages.shipping_charges_desc3') }}</li>
        <li>{{ __('messages.shipping_charges_desc4') }}</li>
        <li>{{ __('messages.shipping_charges_desc5') }}</li>
      </ul>
      <p class="ml-4 mt-2 text-emerald-700">
        {{ __('messages.shipping_charges_desc6') }}
      </p>
    </div>

    <div>
      <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.processing_time') }}</h2>
      <ul class="list-disc ml-8 space-y-1 text-emerald-700">
        <li>{{ __('messages.processing_time_desc1') }}</li>
        <li>{{ __('messages.processing_time_desc2') }}</li>
      </ul>
      <p class="ml-4 mt-2 text-emerald-700">
        {{ __('messages.processing_time_desc3') }}
      </p>
    </div>

    <div>
      <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.shipping_destinations') }}</h2>
      <p class="ml-4 mt-2 text-emerald-700">
        {{ __('messages.shipping_destinations_desc1') }}
      </p>
      <ul class="list-disc ml-8 space-y-1 text-emerald-700">
        <li>{{ __('messages.shipping_destinations_desc2') }}</li>
        <li>{{ __('messages.shipping_destinations_desc3') }}</li>
      </ul>
    </div>

    <div>
      <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.tracking_shipments') }}</h2>
      <p class="ml-4 mt-2 text-emerald-700">
        {{ __('messages.tracking_shipments_desc') }}
      </p>
    </div>

    <div>
      <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.delivery_times') }}</h2>
      <ul class="list-disc ml-8 space-y-1 text-emerald-700">
        <li>{{ __('messages.delivery_times_desc1') }}</li>
        <li>{{ __('messages.delivery_times_desc2') }}</li>
      </ul>
      <p class="ml-4 mt-2 text-emerald-700">
        {{ __('messages.delivery_times_desc3') }}
      </p>
    </div>
  </div>
</div>

@endsection

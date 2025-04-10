@extends('layouts.app')

@section('title', 'Coupons')

@section('content')

<div class="container-box py-10">
    <h1 class="text-2xl md:text-3xl font-bold text-emerald-800 mb-4">
      {{ __('messages.coupons') }}
    </h1>
    <hr class="border-t-3 border-emerald-600 mb-6 w-[100px]" />

    <p class="mb-5 text-emerald-700 font-semibold">
      {{ __('messages.stay_tuned_for_exciting') }}
    </p>

    <p class="mb-8 text-emerald-700">
      {{ __('messages.no_active_coupons') }}
    </p>

</div>

@endsection
@extends('layouts.app')

@section('title', 'Prohibited Materials')

@section('content')

<div class="container-box py-10">
  <h1 class="text-2xl md:text-3xl font-bold text-emerald-800 mb-4">
    {{ __('messages.prohibited_materials') }}
  </h1>
  <hr class="border-t-3 border-emerald-600 mb-6 w-[200px]" />

  <p class="mb-8 text-emerald-700">
    {!! __('messages.prohibited_materials_desc') !!}
  </p>

  <div class="space-y-6 text-sm md:text-base">
    <div>
      <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.hazardous_materials') }}</h2>
      <p class="ml-4 mt-2 text-emerald-700">{{ __('messages.hazardous_materials_desc') }}</p>
      <ul class="list-disc ml-8 space-y-1 text-emerald-700">
        @foreach(__('messages.hazardous_materials_list') as $item)
          <li>{{ $item }}</li>
        @endforeach
      </ul>
    </div>

    <div>
      <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.perishable_items') }}</h2>
      <ul class="list-disc ml-8 space-y-1 text-emerald-700">
        @foreach(__('messages.perishable_items_list') as $item)
          <li>{{ $item }}</li>
        @endforeach
      </ul>
    </div>

    <div>
      <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.illegal_items') }}</h2>
      <ul class="list-disc ml-8 space-y-1 text-emerald-700">
        @foreach(__('messages.illegal_items_list') as $item)
          <li>{{ $item }}</li>
        @endforeach
      </ul>
    </div>

    <div>
      <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.live_animals') }}</h2>
      <p class="ml-4 mt-2 text-emerald-700">
        {{ __('messages.live_animals_desc') }}
      </p>
    </div>

    <div>
      <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.weapons_ammunition') }}</h2>
      <ul class="list-disc ml-8 space-y-1 text-emerald-700">
        @foreach(__('messages.weapons_ammunition_list') as $item)
          <li>{{ $item }}</li>
        @endforeach
      </ul>
    </div>

    <div>
      <h2 class="font-semibold text-xl text-emerald-800">{{ __('messages.money_valuables') }}</h2>
      <ul class="list-disc ml-8 space-y-1 text-emerald-700">
        @foreach(__('messages.money_valuables_list') as $item)
          <li>{{ $item }}</li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

@endsection